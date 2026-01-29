<?php 
/**
 * Quote Widget.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$size  = get_field_object('size');
$value = $size['value'];
$label = $size['choices'][ $value ];
?>

<div class="quote-widget mk-w-full mk-h-full mk-hidden <?php echo esc_attr($label); ?>" id="quote-widget">
  
  <!-- Tabs Row -->
  <div 
    class="mk-relative mk-z-[revert-layer] mk-flex mk-justify-start mk-w-1/2 sm-max:mk-w-full mk-bg-[#ffffff] mk-rounded-tl-lg"
    style="overflow: visible;"
  >
    <div 
      id="tablist" 
      role="tablist" 
      aria-label="Quote widget tabs"
      class="mk-flex mk-gap-6 mk-items-end mk-bg-white"
    >
      <?php 
        $i = 0;
        if ( have_rows('tabs') ) : 
          while ( have_rows('tabs') ) : the_row();
            $tab_label = get_sub_field('tab_label');
            $tab_icon  = get_sub_field('tab_icon');
      ?>
        <button 
          role="tab"
          aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
          aria-controls="panel-<?php echo $i; ?>"
          id="tab-<?php echo $i; ?>"
          tabindex="<?php echo $i === 0 ? '0' : '-1'; ?>"
          class="tablink mk-flex mk-items-center mk-justify-center mk-gap-2 mk-px-14 sm-max:mk-px-2 mk-py-3 mk-font-semibold mk-transition-colors mk-duration-200 sm-max:mk-bg-white
            <?php echo $i === 0 
              ? 'mk-bg-white mk-text-black mk-border-black' 
              : 'mk-bg-transparent mk-text-gray-400 hover:mk-text-black'; ?>"
        >
          <?php if ($tab_icon): ?>
            <img class="img-icons mk-w-[24px] mk-h-[24px]" src="<?php echo esc_url($tab_icon); ?>" alt="">
          <?php endif; ?>
          <span class="mk-text-center mk-text-[#949494] mk-font-normal mk-uppercase mk-text-[14px]"><?php echo esc_html($tab_label); ?></span>
        </button>
      <?php 
          $i++;
          endwhile;
        endif;
      ?>
    </div>
  </div>

  <!-- Panels -->
  <div class="mk-relative mk-z-0 mk-bg-white mk-rounded-t-none mk-rounded-b-lg mk-shadow-sm mk-pt-[32px] mk-pb-2 sm-max:mk-px-[10px] sm-max:mk-pt-[22px] sm-max:mk-pb-[10px] mk-px-[50px]">
    <?php 
      $i = 0;
      if ( have_rows('tabs') ) : 
        while ( have_rows('tabs') ) : the_row();
    ?>
      <section 
        id="panel-<?php echo $i; ?>" 
        role="tabpanel"
        data-loaded="false" 
        aria-labelledby="tab-<?php echo $i; ?>" 
        class="tab-panel <?php echo $i === 0 ? '' : 'mk-hidden'; ?>"
      >
        <div data-loaded="false" id="content-<?php echo $i; ?>" class="mk-text-slate-500">Loading…</div>
      </section>
    <?php 
        $i++;
        endwhile;
      endif;
    ?>
  </div>
</div>

