<?php
/**
 * Contact Form.
 *
 * @package make_twentytwentyfour
 * @since 1.0.0
 */

 $form_type = get_field('form_type');


// Block ID.
$block_id = 'account-form';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'account-form';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_html( $class_name ); ?> mk-bg-white mk-px-4 mk-py-28 <?php echo esc_html($form_type); ?>" id="<?php echo esc_html( $block_id ); ?>">
	<div class="mk-w-full mk-max-w-site-xs mk-mx-auto">

    <script>
      // Left from old elementor code.
      if (window.parent.location.href.includes("action=elementor")) {
        console.log("elementor component");
      } else if (!window.parent.location.href.includes("action=elementor")) {
        console.log("non elementor component");
        if (window.parent.location.href !== window.location.href) {
          console.log("window url is not matching");

          window.parent.location.href = window.location.href;

          let search = window.location.search;
        } else {
          console.log("window url is matching");
        }
      }

      let urlParams = new URLSearchParams(window.location.search);
      const utm_source = urlParams.get("utm_source") || null;
      const utm_campaign = urlParams.get("utm_campaign") || null;
      const utm_medium = urlParams.get("utm_medium") || null;
      if (utm_source) {
        console.log("utm_source :", utm_source);
        localStorage.setItem("utm_source", utm_source);
      }
      if (utm_campaign) {
        console.log("utm_campaign :", utm_campaign);
        localStorage.setItem("utm_campaign", utm_campaign);
      }
      if (utm_medium) {
        console.log("utm_medium :", utm_medium);
        localStorage.setItem("utm_medium", utm_medium);
      }

    </script>

<div id="banner_head">

	<div class="stepper-container mk-text-center mk-hidden md:mk-flex mk-justify-between mk-px-4 mk-py-6 mk-mb-20 mk-rounded-sm" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
		<div class="step mk-group mk-w-1/5 mk-text-center active" onclick="changeTab(0)">
	  	<div class="mk-w-8 mk-h-8 mk-mx-auto mk-mb-1 mk-opacity-0 group-[.active]:mk-opacity-100">
			  <?php echo wp_kses( addisonlee_svgs( 'form-people' ), allowed_svg_tags() ); ?>
			</div>
			<!-- <div class="circle" id="first">1</div> -->
			<div class="">
        <div class="mk-h-0.5  mk-mb-4 mk-bg-white -mk-translate-x-1/2">
          <span class="mk-w-2 mk-h-2 mk-bg-black mk-rounded-full mk-absolute -mk-right-[3px] -mk-top-[3px] mk-hidden group-[.active]:mk-block"></span>
        </div>
        <p class="section-title">Account Type</p>
			</div>
		</div>
		<div class="step mk-group mk-w-1/5" onclick="changeTab(1)">
			<div class="mk-w-8 mk-h-8 mk-mx-auto mk-mb-1 mk-opacity-0 group-[.active]:mk-opacity-100">
				<?php echo wp_kses( addisonlee_svgs( 'form-contact' ), allowed_svg_tags() ); ?>
			</div>
			<!-- <div class="circle" id="second">2</div> -->
			<div class="">
	  		<div class="mk-h-0.5 mk-bg-black/20 mk-mb-4 -mk-translate-x-1/2 group-[.submitted-tab]:mk-bg-black group-[.active]:mk-bg-black">
					<span class="mk-w-2 mk-h-2 mk-bg-black mk-rounded-full mk-absolute -mk-right-[3px] -mk-top-[3px] mk-hidden group-[.active]:mk-block"></span>
				</div>
				<p class="section-title">Contact Details</p>
			</div>
		</div>
		<div class="step mk-group mk-w-1/5" onclick="changeTab(2)">
			<div class="mk-w-8 mk-h-8 mk-mx-auto mk-mb-1 mk-opacity-0 group-[.active]:mk-opacity-100">
				<?php echo wp_kses( addisonlee_svgs( 'form-user' ), allowed_svg_tags() ); ?>
			</div>
			<!-- <div class="circle" id="third">3</div> -->
			<div>
	  		<div class="mk-h-0.5 mk-bg-black/20 mk-mb-4 -mk-translate-x-1/2 group-[.submitted-tab]:mk-bg-black group-[.active]:mk-bg-black">
				  <span class="mk-w-2 mk-h-2 mk-bg-black mk-rounded-full mk-absolute -mk-right-[3px] -mk-top-[3px] mk-hidden group-[.active]:mk-block"></span>
				</div>
				<span id="account_details">Account Details</span>
			</div>
		</div>
		<div class="step mk-group mk-w-1/5" onclick="changeTab(3)">
			<div class="mk-w-8 mk-h-8 mk-mx-auto mk-mb-1 mk-opacity-0 group-[.active]:mk-opacity-100">
				<?php echo wp_kses( addisonlee_svgs( 'form-payment' ), allowed_svg_tags() ); ?>
			</div>
			<!-- <div class="circle" id="fourth">4</div> -->
			<div>
	  		<div class="mk-h-0.5 mk-bg-black/20 mk-mb-4 -mk-translate-x-1/2 group-[.submitted-tab]:mk-bg-black group-[.active]:mk-bg-black">
				  <span class="mk-w-2 mk-h-2 mk-bg-black mk-rounded-full mk-absolute -mk-right-[3px] -mk-top-[3px] mk-hidden group-[.active]:mk-block"></span>
				</div>
				<span id="payment_details">        
					<p class="section-title">Payment Details</p>
				</span>
			</div>
		</div>
		<div class="step mk-group mk-w-1/5" onclick="changeTab(4)">
			<div class="mk-w-8 mk-h-8 mk-mx-auto mk-mb-1 mk-opacity-0 group-[.active]:mk-opacity-100">
				<?php echo wp_kses( addisonlee_svgs( 'form-submit' ), allowed_svg_tags() ); ?>
			</div>
			<!-- <div class="circle" id="fifth">5</div> -->
			<div>
	  			<div class="mk-h-0.5 mk-bg-black/20 mk-mb-4 -mk-translate-x-1/2 group-[.submitted-tab]:mk-bg-black group-[.active]:mk-bg-black">
				  <span class="mk-w-2 mk-h-2 mk-bg-black mk-rounded-full mk-absolute -mk-right-[3px] -mk-top-[3px] mk-hidden group-[.active]:mk-block"></span>
				</div>
				<p class="section-title">Submit</p>
			</div>
		</div>
	</div>

  <div class="step-content active" id="content1" data-step-content="0">
    <div class="mk-mb-14">
      <h3 class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-6">Open your account</h3>
      <p class="mk-text-black/64">Start your journey today by using the form below or please call us on 020 3800 0365.</p>
    </div>

    <div class="field">
      <p class="mk-text-2xl mk-font-medium mk-mb-8">Select an account</p>
      <div class="account-details-container md:mk-flex mk-gap-4">       
        <div class="account-details-business-field md:mk-w-1/2 mk-mb-4 md:mk-mb-0">
          <div class="radio mk-relative">
            <input type="radio" name="account_type" value="Business Account" id="bussiness_type" class="account_type mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" onchange="enableNextButton();" />
            <label for="bussiness_type" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
              <p class="mk-mb-1">Business Account</p>
              <p class="mk-text-black/64">For businesses of all sizes. We can offer credit but will  need to run some checks so please have your company details in hand.</p>
            </label>
          </div>
        </div>
        <div class="account-details-personal-field md:mk-w-1/2">
          <div class="radio mk-relative">
            <input type="radio" checked="checked" name="account_type" value="Personal Account" id="personal_type" class="account_type mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" onchange="enableNextButton();" />
            <label for="personal_type" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
              <p class="mk-mb-1">Personal Account</p>
              <p class="mk-text-black/64">Pay-as-you go account for sole traders or personal accounts to share with friends and family</p>
            </label>
          </div>
        </div>
      </div>
      <div id="account_details_error" style="display:none">Please select an option</div>
        <div class="mk-mt-10">
          <button class="btn btn-black nextbtn_1" id="nextbtn_1">Next</button>
        </div>
      </div>
    </div>

    <div class="step-content" id="content2" data-step-content="1">
      <div class="mk-mb-14">
        <h3 class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-6">Contact Details</h3>
        <p class="mk-text-black/64">Start your journey today by using the form below or please call us on 020 3800 0365.</p>
      </div>
      	<div id="contactDetails_business">
        	<div class="field">
				<p class="mk-text-2xl mk-font-medium mk-mb-8">Your details</p>
          		<div>
            		<div id="inputfields" class="mk-mb-6">
						<label id="fname">First name *</label>
						<input type="text" id="first_name" name="first_name" class="name" />
              			<div id="b_firstName_error_msg"></div>
            		</div>
            		<div id="inputfields" class="mk-mb-6">
						<label id="lname"> Last name *</label>
						<input type="text" id="last_name" name="last_name" class="name" />
              			<div id="b_lastName_error_msg"></div>
            		</div>
					<div id="inputfields">
						<label id="mobilenum"> Mobile *</label>
						<input type="text" id="mobile" name="mobile" class="name" onkeypress="return isNumber(event)" maxlength="20" />
              			<div id="b_mobile_error_msg"></div>
            		</div>
          		</div>
          		<div class="heading-email-verify mk-mt-8">
		  			<p class="mk-text-2xl mk-font-medium mk-mb-4">Email Verification</p>
          		</div>
          		<div class="mk-mb-6">
					<p id="helptext" class="mk-text-black/64">Please enter your email address to receive a one time passcode and verify your account</p>
          		</div>
          		<div id="inputfields">
            		<label class="fieldname" id="bussinessemail">Business email address *</label>
					<input type="text" class="name" name="email" id="email" />
            		<div id="errors"></div>
          		</div>
				<p id="resendcode" class="mk-cursor-pointer"></p>
          		<div id="button_1" class="buttons mk-flex mk-gap-4 mk-mt-8">
					<button class="prebtn btn btn-black-border" onclick="previousTab()">PREVIOUS</button>
					<button class="nextbtn_2 btn btn-black" id="nextbtn_2">
						<span id="sendCodeText-business">SEND CODE</span>
						<span id="sendCodeSpinner" class="spinner"></span>
					</button>
					<button id="submitAndVerifyBtn" class="submitAndVerifyBtn btn btn-black">
						<span id="sumbitAndVerifyBtnText-Business">NEXT</span>
						<span id="sumbitAndVeridfBtnSpinner-Business" class="spinner4"></span>
					</button>
          		</div>
				<div class="mk-mt-6 mk-text-center">
					<div id="save_contactDetails_business" class="btn-clear">
						<span>Save and Continue later</span>
						<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
					</div>
				</div>
        	</div>
      	</div>
      	<div id="contactDetails_personal">
        	<div class="field">
				<p class="mk-text-2xl mk-font-medium mk-mb-4">Your details</p>
        		<p class="mk-text-black/64 mk-mb-8">This First Name and Last Name you enter will be the name of your Personal Account.</p>
            	<div id="inputfields">
              		<label class="fieldname" id="fname_personal">First name *</label>
              		<input type="text" id="first_name_personal" name="first_name" class="name" />
              		<div id="p_firstName_err_msg"></div>
            	</div>
            	<div id="inputfields">
              		<label class="fieldname" id="lname_personal">Last name *</label>
              		<input type="text" id="last_name_personal" name="last_name" class="name" />
              		<div id="p_lastName_err_msg"></div>
            	</div>
            	<div id="inputfields">
              		<label class="fieldname" id="mobilenum_personal">Mobile *</label>
              		<input type="text" id="mobile_personal" name="mobile" class="name" onkeypress="return isNumber(event)" maxlength="20" />
              		<div id="p_mobile_err_msg"></div>
            	</div>
          	</div>
          	<div>
		  		<div class="heading-email-verify mk-mt-8">
		  			<p class="mk-text-2xl mk-font-medium mk-mb-4">Email Verification</p>
          		</div>
				<div class="mk-mb-6">
					<p id="helptext_personal" class="mk-text-black/64">Please enter your email address to receive a one time passcode and verify your account</p>
				</div>
				<div id="inputfields">
					<label class="fieldname" id="bussinessemail_personal">EMAIL *</label>
					<input type="text" class="name" name="email" id="email_personal" />
					<div id="errors_personal"></div>
				</div>
				<p id="resendcode_personal" class="mk-cursor-pointer"></p>
          	</div>
          	<div id="button_1_personal" class="buttons mk-flex mk-gap-4 mk-mt-6">
            	<button class="prebtn btn btn-black-border" onclick="previousTab()">PREVIOUS</button>
				<button class="nextbtn_2_personal btn btn-black" id="nextbtn_2_personal">
					<span id="spinner" class="spinner"></span>
					<span id="sendCodeText">SEND CODE</span>
				</button>

				<button id="submitAndVerifyBtn_personal" class="submitAndVerifyBtn_personal btn btn-black">
					<span id="verify">NEXT</span>
					<span id="submitVerifySpinner" class="spinner"></span>
				</button>
          	</div>
			<div class="mk-mt-6 mk-text-center">
          		<div id="save_contactDetails_personal" class="btn-clear">
				  	<span>Save and Continue later</span>
				  	<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
          		</div>
			</div>
        </div>
    </div>

    <div class="step-content" id="content3" data-step-content="2">
      <div class="mk-mb-14">
        <h3 class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-6">Account details</h3>
        <p class="mk-text-black/64">Start your journey today by using the form below or please call us on 020 3800 0365.</p>
      </div>
      	<div id="bussiness_comapny_details">
        	<div class="field md:mk-flex mk-gap-4">
          		<div class="md:mk-w-1/2 mk-mb-4 md:mk-mb-0">
              		<div class="radio mk-relative">
                		<input type="radio" class="mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" name="company_type" value="U.K. Registered Company" id="companytype_1" checked />
                		<label for="companytype_1" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
							<span class="labelData">U.K. Registered Company</span>
						</label>
              		</div>
				</div>
            	<div class="md:mk-w-1/2">
					<div class="radio mk-relative">
						<input type="radio" class="mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" name="company_type" value="International Company" id="companytype_2" />
						<label for="companytype_2" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
							<span class="labelData">Other Company</span>
						</label>
              		</div>
            	</div>
          	</div>
          	<div id="ukcompany" class="mk-mt-6">
				<div id="inputfields">
					<label class="fieldname" id="company_name">Registered Company Name *</label>
					<div class="search-container mk-flex mk-gap-2 mk-mt-2 mk-relative">
						<input type="text" id="registered_company_name" class="name !mk-mt-0" list="companyList" />
						<button class="searchBtn btn btn-black">Find</button>
            <span id="inputSpinner2" class="spinner3"></span>
					</div>
					
					<div id="b_registered_companyName_err_msg"></div>
					<ul id="companyList" class="mk-mb-8"></ul>
				</div>
				<div id="inputfields_company_details" class="mk-my-6">
					<div id="registered_label" class="mk-font-medium mk-mb-1"></div>
					<div id="display_company_details"></div>
				</div>
				<div id="button_2_ukcompany" class="buttons mk-flex mk-gap-4">
					<button class="prebtn btn btn-black-border" id="prebtn2_1" onclick="previousTab()">
						PREVIOUS
					</button>
					<button class="nextbtn_3_ukcompany btn btn-black" id="nextbtn_3_ukcompany">
						NEXT
					</button>
				</div>
				<div class="mk-mt-6 mk-text-center">
					<div id="save_ukCompany_details" class="btn-clear">
						<span>Save and Continue later</span>
						<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
					</div>
				</div>
			</div>
          
			<div id="internationalCompany" class="mk-mt-6">
				<div>
              		<div>
                		<div id="inputfields" class="mk-mb-6">
                  			<label class="fieldname" id="companyName">Company name *</label>
                  			<input type="text" id="cname" class="name" />
                  			<div id="b_cname_err_msg"></div>
                		</div>
                		<div id="inputfields" class="mk-mb-6">
                 			<label class="fieldname" id="companyNum">Company number *</label>
                  			<input type="number" id="cnum" class="name" onkeypress="return isNumber(event)" />
                  			<div id="b_cnum_err_msg"></div>
                		</div>
                		<div id="inputfields" class="mk-mb-6">
                  			<label class="fieldname" id="country">Country *</label>
                  			<input type="text" id="countryname" class="name" />
                  			<div id="b_countryName_err_msg"></div>
                		</div>
                		<div id="inputfields" class="mk-mb-6">
                  			<label class="fieldname" id="country">Postcode/zip code *</label>
							<div style="display: flex">
								<input type="text" id="postcode" class="name" />
							</div>
							<div id="b_countryPostcode_err_msg"></div>
                		</div>
                		<div id="inputfields" class="mk-mb-6">
                  			<label class="fieldname" id="buildingNo">Building number or name *</label>
							<input type="text" id="buildingNoName" class="name" />
                  			<div id="b_buildingNoName_err_msg"></div>
                		</div>
                		<div id="inputfields" class="mk-mb-6">
                  			<label class="fieldname" id="address">Address *</label>
                  			<input type="text" id="addressValue" class="name" />
                  			<div id="b_address_err_msg"></div>
                		</div>
                		<div id="inputfields" class="mk-mb-6">
							<label class="fieldname"> Town or city *</label>
							<input type="text" id="townCity" class="name" />
                  			<div id="b_townCity_err_msg"></div>
                		</div>
                		<div id="inputfields" class="mk-mb-6">
                  			<label class="fieldname" id="mnum"> Mobile number *</label>
                  			<input type="text" id="mobilenum_company" class="name" onkeypress="return isNumber(event)" maxlength="15" />
                  			<div id="b_in_mobile_err_msg"></div>
                		</div>
              		</div>
              		<div id="button_2_internationalCompany" class="buttons mk-flex mk-gap-4">
						<button class="prebtn btn btn-black-border" id="prebtn2_1" onclick="previousTab()">
						PREVIOUS
						</button>
						<button class="nextbtn_3_internationalCompany btn btn-black" id="nextbtn_3_internationalCompany">NEXT</button>
              		</div>
					<div class="mk-mt-6 mk-text-center">
              			<div id="save_internationalCompany_details" class="btn-clear">
							<span>Save and Continue later</span>
							<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
						</div>
					</div>
            	</div>
          	</div>
        </div>
		<div id="account_details_personal">
			<div class="field">
				<!-- <div class="mk-mb-14">
					<h3 class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-6">Account details</h3>
					<p class="mk-text-black/64">Start your journey today by using the form below or please call us on 020 3800 0365.</p>
				</div> -->

				<div class="mk-w-1/2 mk-mb-6">
					<div class="radio mk-relative">
						<input type="radio" class="mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" name="soleTrader" value="Sole Trader" id="sole_trader" onclick="soloCheck(this)" />
						<label for="sole_trader" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
							<div class="labelData">Sole Trader</div>
						</label>
					</div>
				</div>
				<div id="sole_trader_companyDetails">
					<div>
						<div id="inputfields" class="mk-mb-6">
							<label class="fieldname" id="company_name_sole_trader">Registered Company Name *</label>
							<div class="search-container mk-flex mk-gap-4">
								<input type="text" id="registered_company_name_sole_trader" class="name !mk-mt-0" list="companyList_sole_trader" />
								<button class="searchBtn2 btn btn-black">Find</button>
							</div>
							<span class="spinner3" id="inputSpinner"></span>
							<div id="p_registered_company_err_msg"></div>
							<ul id="companyList_sole_trader" class="mk-mt-4"></ul>
						</div>
						<div id="inputfields_company_details_soleTrader" class="mk-mb-6">
							<div id="registered_label_soleTrader"></div>
							<div id="display_company_details_soleTrader"></div>
						</div>
					</div>
					<div id="button_2_personal_sole" class="buttons mk-flex mk-gap-4">
						<button class="prebtn btn btn-black-border" id="prebtn2_1" onclick="previousTab()">PREVIOUS</button>
						<button class="nextbtn_3_personal_soleTrader btn btn-black" id="nextbtn_3_personal_soleTrader">NEXT</button>
					</div>
				</div>
				<div id="sole_trader_accountDetals">
					<div id="inputfields" class="mk-mb-6">
						<label class="fieldname" id="post_zipcode_personal">Postcode/zip code *</label>
						<div class="mk-flex mk-gap-2 mk-mt-2">
							<div>
								<input type="text" class="!mk-mt-0" id="postcode_personal" class="name" list="postcode_list" />
							</div>
							<button id="find_address" class="find_address btn btn-black">
								<span id="findAddress">FIND</span>
								<span id="findBtnSpinner" class="spinner2"></span>
							</button>
						</div>
						<div id="p_postcode_err_msg"></div>
						<ul id="postcode_list"></ul>
					</div>
					<div id="inputfields" class="mk-mb-6">
						<label class="fieldname" id="buildingNo_personal">Building number or name </label>
						<input type="text" id="buildingNoName_personal" class="name" />
						<div id="p_buildingNoName_err_msg"></div>
					</div>
					<div id="inputfields" class="mk-mb-6">
						<label class="fieldname" id="address_personal"> Address *</label>
						<input type="text" id="addressValue_personal" class="name" />
						<div id="p_address_err_msg"></div>
					</div>
					<div id="inputfields" class="mk-mb-6">
						<label class="fieldname" id="towncity_personal">Town or city *</label>
						<input type="text" id="townCity_personal" class="name" />
						<div id="p_towncity_err_msg"></div>
					</div>
					<div id="button_2_personal" class="buttons mk-flex mk-gap-4">
						<button class="prebtn btn btn-black-border" id="prebtn2_1" onclick="previousTab()"> PREVIOUS </button>
						<button class="nextbtn_3_personal btn btn-black" id="nextbtn_3_personal"> NEXT </button>
					</div>
				</div>
				<div class="mk-mt-6 mk-text-center">
					<div id="save_accountDetails_personal" class="btn-clear">
						<span>Save and Continue later</span>
						<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <div class="step-content" id="content4" data-step-content="3">
      	<div class="field">
		  <div class="mk-mb-8">
				<h3 id="payment_method_label" class="mk-text-2sm-title mk-font-medium mk-uppercase">Payment Method</h3>
			</div>
			<div id="payment_details_bussiness" class="mk-mb-4">
				<div class="field md:mk-flex mk-gap-4">
					<div id="directDebitDiv" class="md:mk-w-1/2">
						<div class="radio mk-relative">
							<input type="radio" class="mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" name="payment_type" value="Direct Debit" id="paymentmethod_1" />
							<label for="paymentmethod_1" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
								<span class="labelData" id="directdebit">Direct Debit</span>
							</label>
						</div>
					</div>
					<div class="md:mk-w-1/2">
						<div class="radio mk-relative">
							<input type="radio" class="mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" name="payment_type" value="Credit Card" id="paymentmethod_2" />
							<label for="paymentmethod_2" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
								<span class="labelData">Credit Card</span>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div id="debitcard">
				<iframe src="" style="height: 2221px; width: 100%; margin-bottom: 30px" id="directDebitFormUrl" frameborder="0" scrolling="no" onload=""></iframe>
			</div>
			<div id="creditcard_details" class="mk-mb-4 mk-mt-8">
				<label class="mk-mb-2">Type of Credit Card</label>
				<div class="field md:mk-flex mk-gap-4">
					<div class="md:mk-w-1/2 mk-mb-4 md:mk-mb-4">
						<div class="radio mk-relative">
							<input type="radio" class="mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" name="credit_type" value="Individual credit" id="individual_credit_card" />
							<label for="individual_credit_card" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
								<span class="labelData">Individual Credit Cards</span>
							</label>
						</div>
					</div>
					<div class="md:mk-w-1/2">
						<div class="radio mk-relative">
							<input type="radio" class="mk-max-w-5 mk-min-w-5 mk-h-5 mk-absolute mk-top-6 mk-left-4" name="credit_type" value="single credit" id="single_credit_card" />
							<label for="single_credit_card" class="mk-block mk-pr-4 mk-pl-12 mk-py-6 mk-rounded-sm mk-cursor-pointer" style="box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.10);">
								<span class="labelData">Single Credit Card</span>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div id="creditcard_helptext_Individual" class="mk-mb-6">Payment for journeys will be billed to the individual users corporate card.</div>
			<div id="creditcard_helptext_single" class="mk-mb-6">One card to settle account invoices.</div>
			<div id="button_3_debit" class="buttons mk-flex mk-gap-4">
				<button class="prebtn btn btn-black-border" onclick="previousTab()">PREVIOUS</button>
				<button class="nextbtn_4_debit btn btn-black" id="nextbtn_4_debit">NEXT</button>
			</div>
			<div class="mk-mt-6 mk-text-center">
				<div id="save_debitCredit_details" class="btn-clear">
					<span>Save and Continue later</span>
					<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
				</div>
			</div>
			<div id="payment_details_personal">
				<div>
					<div id="payment_instruction_personal" class="mk-my-10">You will need to add a credit/debit card at the time you make your first booking on this account.</div>
					<div id="button_3_personal" class="buttons">
						<button class="prebtn btn btn-black-border" onclick="previousTab()">PREVIOUS</button>
						<button class="nextbtn_4_personal btn btn-black" onclick="nextTab()">NEXT</button>
					</div>
					<div class="mk-mt-6 mk-text-center">
						<div id="save_paymentMethod_personal" class="btn-clear">
							<span>Save and Continue later</span>
							<?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
						</div>
					</div>
				</div>
			</div>
      	</div>
    </div>

    <div class="step-content" id="content5" data-step-content="4">
        <?php
        $terms = get_field('terms_and_conditions_link');
        $privacy = get_field('privacy_policy_link');
        ?>
      	<div class="field mk-mt-8">
        	<label class="mk-text-2sm-title mk-font-medium mk-uppercase mk-mb-6 mk-block" id="heading_submit"> SUBMIT </label>
          <div id="submit_instructions" class="mk-flex mk-gap-2">
            <input type="checkbox" class="mk-h-4" id="SubmitCheckbox" name="checkbox" value="1" onchange="enablesubmit()" />
            <p class="mk-text-sm">
              By ticking this box you the customer: i) confirm that you have read
              and agree to Addison Lee
              <span><a href="<?php echo esc_html($terms['url']); ?>" target="_blank"><?php echo esc_html($terms['title']); ?></a></span>
              <span id="submit_text_content_business"></span>
              <span id="submit_text_content_personal"></span>
              <!-- of Trading being incorporated in and forming part of every contract
              for services, ii) agree to pay the charges and priority fee as
              invoiced by Addison Lee, and iii) confirm your permission to run a
              credit check. -->
            </p>
            
          </div>
        	<div id="privacy_button" class="mk-ml-5">
          		<a href="<?php echo esc_html($privacy['url']); ?>" target="_blank" id="privacybtn" class="mk-text-sm mk-underline"><?php echo esc_html($privacy['title']); ?></a>
        	</div>
          <div id="tcs_err_msg" class="mk-hidden">Please agree to the Terms and conditions</div>
       	 	<div id="afterSubmit" class="mk-prose"></div>
          <div id="button_5" class="buttons mk-flex mk-gap-4 mk-mt-8">
            <button class="prebtn btn btn-black-border" id="prebtn_5" onclick="previousTab()">PREVIOUS</button>
            <button id="submit" class="btn btn-black">
              <span id="submitText">SUBMIT</span>
              <span id="submitSpinner" class="spinner"></span>
            </button>
            <a href="/" id="home" class="btn btn-black">HOME</a>
          </div>
          <div class="mk-mt-6 mk-text-center">
            <div id="save_content_submit" class="btn-clear">
              <span>Save and Continue later</span>
              <?php echo wp_kses( addisonlee_svgs( 'chevron-right-sm' ), allowed_svg_tags() ); ?>
            </div>
          </div>
      	</div>
    </div>
	</div>
</div>
</div><?php // this block was breaking for me without this closing div. might need moving to another location ?>