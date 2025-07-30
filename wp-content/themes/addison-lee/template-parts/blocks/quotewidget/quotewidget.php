<?php 
/**
 * Quote Widget.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

$dropoff = get_field('drop_off');
$pickup = get_field('pick_up');
$size = get_field_object('size');
$value = $size['value'];
$label = $size['choices'][ $value ];

?>

<div class="quote-widget mk-w-full mk-h-full mk-mx-auto mk-w-900 mk-h-500 pt-3 mk-mt-10 mk-mb-10" id="quote-widget">
	<div class="tabcontent mk-bg-white sm-max:mk-mx-2 <?php echo $label; ?>">
			<div id="tabs" class="mk-w-full mk-h-full mk-w-900 mk-h-500 mk-flex mk-bg-white sm-max-xs:mk-w-[100%]">
				<?php
					$y = 0;
					if( have_rows('tabs') ) : 
						while( have_rows('tabs') ) : the_row();
						/*$tabs = get_field_object('tabs');
						$tabvalue = $tabs['value']; 
						$tab_label = $tabs['choices'][ $tabvalue ];*/

					?>
					<div class="tab-content-link" > 
						<img class="img-icons mk-pr-2" src="<?php the_sub_field('tab_icon');  ?>" />
						<button 
						class="tablink" 
						id="<?php echo $y++; ?>" 
						onclick="openTab(id)"
						><?php $tab_label = the_sub_field('tab_label'); ?>
						</button>
					</div>
					<?php		
					endwhile;
					endif;
				?>
			</div>
		</div>
	<div class="quote-widget-container md:mk-hidden md:max-lg-200 mk-rounded-b-2xl mk-rounded-r-2xl mk-bg-white mx-auto mk-w-md mk-mt-2 mk-mb-2 sm-max:mk-rounded-r-[0px] <?php echo $label; ?>">
		
		<div class="main-content md:mk-pl-[50px] md:mk-pr-[50px] md:mk-pt-[32px] md:mk-pb-[32px] md:mk-h-[245px] sm-max:mk-h-100 mk-bg-white" id="main-cont">
			<div class="flight-number-checkbox">
				<input type="checkbox" id="flight-checkbox" class="flight-checkbox">
				<label>I don't know my flight number</label>
			</div>
		<div id="return-response-data">
			<div class="grid-container site-md:mk-pl-[0px] md:mk-pl-[50px] md:mk-grid">			
				<div class="item1 site-md:mk-float-left sm-max:mk-float-left" id="pin">
					<div class="pickup-pin sm-max:mk-w-[32px] sm-max:mk-h-[32px] sm-max:mk-mr-[20px]"></div>
				</div>
				<div class="item2 mk-border-b-2 mk-border-solid mk-border-black-500 sm-max:mk-pb-[20px] sm-max:mk-mb-[40px]" id="pickup-form">
					<div title="pickup" name="pick" id="pickup-point" value="PICK UP" class="address-search__combobox">
					<div class="form-control">
						<label class="sm-max:border-solid">
						<span class="sm-max:mk-ml-[0px]"><?php echo $pickup; ?></span><br>
							<input class="sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]" id="myInput"  onfocus="this.value=''" type="text" maxlength="100" name="pickup-form" placeholder="Enter Location">
							<span id="sendCodeSpinner" class="spinner"></span>
							<div id="display_errors" class="mk-color-red"></div>
						</label>
					</div>
					<ul id="address-search__results"></ul>
					</div>
				</div>
				<div class="item3 sm-max:mk-w-[68px] md:mk-w-[52px]" id="pin">
					<img class="dropoff md:mk-absolute md:mk-w-[52px] sm-max:mk-mr-[20px] sm-max:mk-w-[32px] sm-max:mk-h-[32px] sm-max:mk-float-left sm-max:mk-relative" src="/wp-content/uploads/2025/06/pin-B.svg">
				</div>
				<div class="item4 mk-border-b-2 mk-border-solid mk-border-black-500  md:mk-w-[390px] sm-max:mk-w-[100%] sm-max:mk-pb-[20px] ">
					<div title="pickup" name="pick" id="dropoff-point" value="PICK UP" class="address-search__combobox">
					<div class="form-control">
						<label>
						<span><?php echo $dropoff; ?></span><br>
							<input class="sm-max:mk-ml-[51px] sm-max:mk-w-[90%]" placeholder="Enter Location" id="myInputDropOff"  onfocus="this.value=''" type="text">
							<span id="sendSpinner" class="spinner-2"></span>
							<div id="display_error"></div>
						</label>
					</div>
				<ul id="address-search-dropoff__results"></ul>
					</div>
				</div>
		</div>
		</div>
		<div id="return-response-data">
			<div class="grid-container site-md:mk-pl-[0px] md:mk-block md:mk-grid md:mk-p-0">
				<div class="item4">
					<img src="/wp-content/uploads/2025/06/Date.svg" class="md:mk-w-[52px] sm-max:mk-mr-[20px] sm-max:mk-w-[32px] sm-max:mk-h-[32px]">
				</div>
				<div class="item5" id="date-of-journey">
					<label for="">
						<span>Date of journey</span><br>
						<input type="datetime-local" name="choosedate" id="choosedate" placeholder="Select a date" onfocus="this.value=''">	
					</label>			
				</div>
				<div class="item6">
					<a href="#" id="get-a-quote" class="get-a-quote btn md:mk-w-[530px] sm-max:mk-w-[100%] sm-max:mk-mt-[25px]">
						<span class="sm-max:mk-mx-auto mk-mx-auto md:mk-px-[158px] md:mk-py-[3px] ">GET QUOTE</span>
					</a>
					<div class="display-error"></div>
				</div>
			</div>
			</div>
		</div>	
	</div>


