<section>
<?php while(have_posts()) : the_post(); ?>
    <div class="content">
        <a href="<?php echo the_permalink(); ?>">
            <h2 style="color: #fff"><?php  echo the_title(); ?></h2>
        </a>
        </div>
    <?php
    endwhile;
?>
</section>

