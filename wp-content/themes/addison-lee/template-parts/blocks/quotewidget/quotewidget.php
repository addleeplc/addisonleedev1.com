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

<div class="section mk-w-full mk-h-full mk-mx-auto mk-w-900 mk-h-500 pt-3 mk-mt-10 mk-mb-10">
	<div class="tabcontent mk-bg-white mx-auto mk-w-mf mk-mt-2 mk-mb-2 mk-rounded-t-2xl <?php echo $label; ?>">
			<div id="tabs" class=" mk-w-full mk-h-full mk-w-900 mk-h-500">
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
				<div style="width: 551px; background: #000"></div>
			</div>
			
		</div>
	<div class="quote-widget-container mk-rounded-b-2xl mk-rounded-r-2xl mk-bg-white mx-auto mk-w-md mk-mt-2 mk-mb-2 <?php echo $label; ?>">
		
		<div class="main-content" id="main-cont">
			<div class="flight-number-checkbox">
				<input type="checkbox" id="flight-checkbox" class="flight-checkbox">
				<label>I don't know my flight number</label>
			</div>
		<div id="return-response-data">
			<div class="grid-container">
			
				<div class="item1 mk:w:48" id="pin">
					<div class="pickup-pin"></div>
				</div>
				<div class="item2" id="pickup-form">
					<div title="pickup" name="pick" id="pickup-point" value="PICK UP" class="address-search__combobox">
					<div class="form-control">
						<label>
						<span><?php echo $pickup; ?></span><br>
							<input id="myInput"  onfocus="this.value=''" type="text" maxlength="100" name="pickup-form" placeholder="Enter Location">
							<span id="sendCodeSpinner" class="spinner"></span>
						</label>
					</div>
					<ul id="address-search__results"></ul>
					</div>
				</div>
				<div class="item3" id="pin">
					<img class="dropoff" src="/wp-content/uploads/2025/06/pin-B.svg">
				</div>
				<div class="item4">
					<div title="pickup" name="pick" id="dropoff-point" value="PICK UP" class="address-search__combobox">
					<div class="form-control">
						<label>
						<span><?php echo $dropoff; ?></span><br>
							<input placeholder="Enter Location" id="myInputDropOff"  onfocus="this.value=''" type="text">
							<span id="sendSpinner" class="spinner-2"></span>
						</label>
					</div>
				<ul id="address-search-dropoff__results"></ul>
					</div>
				</div>
			
		</div>
		</div>
		<div id="return-response-data">
			<div class="grid-container">
				<div class="item4">
					<img src="/wp-content/uploads/2025/06/Date.svg">
				</div>
				<div class="item5" id="date-of-journey">
					<label for="">
						<span>Date of journey</span><br>
						<input type="datetime-local" name="choosedate" id="choosedate" placeholder="Select a date">	
					</label>			
				</div>
				<div class="item6">
					<a href="#" id="get-a-quote" class="get-a-quote btn">
						<span style="text-align: center">GET QUOTE</span>
					</a>
					<div class="display-error"></div>
				</div>
			</div>
			</div>
		</div>	
	</div>


