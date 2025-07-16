<?php 
/* Template Name: Form Template */ 
get_header(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Addisonlee Forms</title>
    <style type="text/css">

    .account-details-container {
            margin-left: 469px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
  
      } 

      p.section-title {
            margin-bottom: 0px !important;
      }

      .fa-search:before {
        content: 'Find' !important;
        font-family: 'Steagal', sans-serif, helvetica;
      }

      @media only screen and (width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) {
          input#SubmitCheckbox {
              width: 20px !important;
              height: 20px !important;
        }
      }

      @media screen and (max-width:  400px ) {



        .tooltip_business .tooltiptext_business,
        .tooltip_personal .tooltiptext_personal {
              height: auto !important;
              width: 60% !important;
        }

         .account-details-personal-field,
        .account-details-business-field {
          height: 88px !important;
          justify-content: center !important;
        }

        .step-content div {
          width: 100% !important;
        }

      }

      @media  screen and (max-width: 1000px) and (min-width: 768px){
        #debitcard iframe {
              height: 2400px !important;
            }
      }

      @media screen and (max-width: 767px) {
          
          .account-details-container {
            margin-left: 0 !important;
            display: block !important;
            max-width: 216px !important;
            width: 100% !important;
            margin: 0 auto !important;
          }

            .stepper-container {
                display: flex !important;
                justify-content: center;
                width: 98% !important;
                margin-left: auto;
                margin-right: auto;
            }
            .step {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                margin-right: 20px;
            }

            .step-content.active {
              padding-left: 16px;
            }


            .step.active {
              display: flex;
              flex-direction: column;
              align-items: center;
            }

            .stepper-container .step.active p.section-title {
              display: flex !important;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              text-transform: inherit;

            }

            .stepper-container .step p.section-title {
              font-size: 12px;
            }

            .stepper-container .step p.section-title,
            .stepper-container .step span#account_details {
              display: none;
            }

            input[type="radio"]:checked {
              padding: 2% !important; 
              background-color: #000 !important;
            }

            .step-content div {
                width: 100%;
                margin:0;
            }

            #inputfields {
              width: 93% !important;
            }

            #helptext {
              width: 93% !important;
            }

            .ukcompany-wrapper {
              display: block !important;
            }

            #debitcard iframe {
              height: 3000px !important;
            }

            #privacybtn {
              width:  100% !important;
            }

            .account-name-heading {
              margin-left:  0px !important;
            }

            .find_address {
              width:  18% !important;
            }

            #helptext_personal {
              width: 98% !important;
            }

            #resendcode {
              padding: 0 !important;
            }

            #resendcode_personal {
              padding-left:  93px !important;
              width:  100%;
            }

            #submit_instructions {
              width:  92% !important;
            }   

            
            #save_contactDetails_business,
            #save_debitCredit_details,
            #save_ukCompany_details {
              font-size: 16px;
              padding-top: 30px;
              text-align: center;
            }

            .heading-email-verify {
              text-align: center;
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #debitcard iframe {
              height: 2446px !important;
            }

            #creditcard_helptext_Individual, 
            #direct_debit_failed_label {
              width: 98% !important;
            }

            #companyList, #companyList_sole_trader, #postcode_list {
              width: 98% !important;
            }

            .tooltiptext_business,
            .tooltiptext_personal {
              padding: 12px !important;
            }

            .tooltiptext_business,
            .tooltiptext_personal {
              font-size: 11px !important;
            }
            
      }

      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type="number"] {
        -moz-appearance: textfield;
      }

      .stepper-container {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        width: 93%;
        padding: 2.5%;
      }

      .step {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        background-color: #fff;
        position: relative;
        align-items: center;
        color: #232320;
        font-family: Steagal;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        gap: 16px;
      }

      .nextbtn_1 {
        display: flex;
        width: 260px;
        padding: 15px 111px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        color: #232320;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        cursor: pointer;
        margin-bottom: 8.2%;
        border: none;
      }

      .nextbtn_1.enabled,
      .nextbtn_2.enabled,
      .nextbtn_2_personal.enabled,
      .submitAndVerifyBtn_personal.enabled,
      #nextbtn_3_ukcompany.enabled,
      .nextbtn_3_internationalCompany.enabled,
      .nextbtn_4_debit.enabled,
      #submit.enabled,
      .nextbtn_3_personal_soleTrader.enabled,
      .nextbtn_3_personal.enabled,
      .submitAndVerifyBtn.enabled {
        background: #f8dc3d;
        border: none;
      }

      .field {
        display: flex;
        flex-direction: column;
      }

      .nextbtn_2,
      .submitAndVerifyBtn {
        display: flex;
        width: 160px;
        /* padding: 16px 10px 16px 10px; */
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        border: none;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;
      }

      .nextbtn_2_personal,
      .submitAndVerifyBtn_personal {
        display: flex;
        width: 160px;
        /* padding: 16px 111px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;
      }

      input[type="radio"]:checked {
        padding: 1%;
        background-color: #fff200;
        border: 1px solid #232320;
      }

      input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 22px;
        height: 22px;
        background-clip: content-box;
        border: 1px solid #bbbbbb;
        border-radius: 50%;
      }

      .nextbtn_3_internationalCompany {
        display: flex;
        width: 160px;
        /* padding: 15px 85px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;

        /* margin-top: 10%; */
      }

      .nextbtn_3_ukcompany {
        display: flex;
        width: 160px;
        /* padding: 15px 85px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;

        /* margin-top: 10%; */
      }

      .nextbtn_3_personal {
        display: flex;

        width: 160px;
        /* padding: 15px 85px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;

        /* margin-top: 10%; */
      }

      .nextbtn_3_personal_soleTrader {
        display: flex;
        width: 160px;
        /* padding: 15px 85px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;

        /* margin-top: 10%; */
      }
      .searchBtn {
        background: #f8dc3d;
        color: #232320;
        display: flex;
        flex-direction: row;
        border: none;
        cursor: pointer;
        justify-content: center;
        align-items: center;
        height: 40px;
        width: 40px;
      }

      .searchBtn2 {
        background: #f8dc3d;
        color: #232320;
        display: flex;
        flex-direction: row;
        border: none;
        cursor: pointer;
        justify-content: center;
        align-items: center;
        height: 40px;
        width: 40px;
      }
      .search-container {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-top: 3%;
      }

      .nextbtn_4_personal {
        display: flex;
        width: 160px;
        /* padding: 15px 85px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: #f8dc3d;
        color: #232320;

        /* margin-top: 10%; */
      }

      .nextbtn_4_credit {
        display: flex;
        width: 160px;
        /* padding: 15px 85px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: #6d6d6d;
        color: #232320;

        /* margin-top: 10%; */
      }

      .nextbtn_4_debit {
        display: flex;
        width: 160px;
        /* padding: 15px 85px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        /* pointer-events: none; */
        /* opacity: 0.5; */
        border: none;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;

        /* margin-top: 10%; */
      }

      .radio {
        justify-content: center;
        align-items: center;
        gap: 16px;
        display: inline-flex;
      }

      .radio input:checked + span::before {
        border-color: #f8dc3d;
        background-color: #f8dc3d;
      }

      .radio input + span::before {
        border-color: #2196f3;
        background-color: #2196f3;
      }

      .circle {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 2px solid #AFB0AE !important;
        color: #AFB0AE !important;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .active .circle {
        background-color: #ffffff !important;
        border: 2px solid #232320;
        color: #232320;
      }

      .stepper-form {
        width: 80%;
        margin: 0 auto;
      }

      .step-content {
        display: none;
      }

      .step-content.active {
        display: block;
      }

      .labelData {
        color: #232320;
        font-family: Steagal;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }

      .formData {
        color: #232320;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
      }

      .form_heading {
        color: #232320;
        font-family: Steagal;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }

      .tooltiptext_business {
        color: #232320;
        text-align: center;
        font-family: Steagal;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 22px;
        /* 137.5% */
        letter-spacing: -0.16px;
      }

      .tooltip_business .tooltiptext_business {
        width: 73%;
        height: 130px;
        flex-shrink: 0;
        background: #f8dc3d;
        visibility: hidden;
        z-index: 1;
        text-align: center;
        position: relative;
        margin-left: 1.5%;
        /* margin-top: -6.2%; */
        justify-content: center;
        align-items: center;
      }

      .tooltip_business:hover .tooltiptext_business {
        visibility: visible;
      }

      .tooltip_business .tooltiptext_business::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 100%;
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent #f8dc3d transparent transparent;
      }

      .tooltiptext_personal {
        color: #232320;
        text-align: center;
        font-family: Steagal;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 22px;
        /* 137.5% */
        letter-spacing: -0.16px;
      }

      .tooltip_personal .tooltiptext_personal {
        width: 70%;
        height: 92px;
        flex-shrink: 0;
        background: #f8dc3d;
        visibility: hidden;
        z-index: 1;
        text-align: center;
        position: relative;
        margin-left: 1.5%;
        /* margin-top: -4.5%; */
        justify-content: center;
        align-items: center;
      }

      .tooltip_personal:hover .tooltiptext_personal {
        visibility: visible;
      }

      .tooltip_personal .tooltiptext_personal::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 100%;
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent #f8dc3d transparent transparent;
      }

      .name {
        display: flex;
        height: 40px;
        padding: 4px 3px 4px 12px;
        align-items: center;
        gap: 8px;
        align-self: stretch;
        border: 1px solid #e2e2e2;
        background: var(--light-grayscale-100, #fff);
      }

      #inputfields {
        display: flex;
        width: 420px;
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
        margin-top: 3%;
        position: relative;
      }

      .fieldname {
        color: #232320;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
      }

      .find_address {
        position: relative;
        display: flex;
        width: 130px;
        height: 40px;
        /* padding: 16px 111px; */
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        background: #f8dc3d;
        color: #232320;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        border: none;
        cursor: pointer;
      }

      #creditcard_helptext_Individual,
      #direct_debit_failed_label {
        display: flex;
        width: 520px;
        padding: 16px 0px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0.05);
        margin-top: 6%;
        color: #000;
        text-align: center;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }

      #creditcard_helptext_single {
        display: flex;
        width: 520px;
        padding: 16px 0px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0.05);
        margin-top: 6%;
        color: #000;
        text-align: center;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }

      #inputfields_code {
        display: flex;
        width: 198px;
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
      }

      #debitGaurantee {
        display: flex;
        flex-direction: row;
      }

      #submit_instructions {
        display: flex;
        width: 520px;
        padding: 16px 0px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0.05);
      }

      #privacybtn {
        display: flex;
        width: 520px;
        padding: 16px 111px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border: 1px solid #232320;
        background: #fff;
      }

      .prebtn {
        display: flex;
        width: 160px;
        /* padding: 16px 111px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border: 1px solid #232320;
        background: #fff;
      }

      .buttons {
        display: flex;
        flex-direction: row;
        gap: 48px;
        /* margin-left: -6.5%;
        margin-top: 10%; */
      }

      #button_1 {
        margin-top: 3%;
      }

      #button_2_ukcompany {
        margin-top: 7%;
      }

      #button_2_internationalCompany {
        margin-top: 7%;
      }

      #button_3_personal {
        margin-top: 32%;
      }

      #button_3_debit {
        margin-top: 6.6%;
      }

      #button_3_credit {
        margin-left: -11.8%;
        margin-top: 13.1%;
      }

      #button_5 {
        margin-top: 7.5%;
      }

      #submit {
        display: flex;
        width: 160px;
        /* padding: 15px 111px; */
        padding: 16px 10px 16px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.4) 0%,
            rgba(0, 0, 0, 0.4) 100%
          ),
          #f8dc3d;
        color: #232320;

        border: none;
        cursor: pointer;
      }

      #afterSubmit {
        color: #232320;
        text-align: center;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        width: 595px;
        margin-top: 4%;
      }

      #companyList,
      #companyList_sole_trader {
        width: 653px;
        height: auto;
        flex-shrink: 0;
        border: 2px solid #fedb00;
        margin-top: -1%;
        list-style: none;
        padding: 0;
        overflow-y: auto;
        /* Add scrollbar for overflow */
        z-index: 1;
      }

      #postcode_list {
        width: 420px;
        height: 210px;
        flex-shrink: 0;
        border: 2px solid #fedb00;
        margin-top: -1%;
        list-style: none;
        padding: 0;
        overflow-y: auto;
        /* Add scrollbar for overflow */
        z-index: 1;
      }

      #companyList li,
      #companyList_sole_trader li,
      #postcode_list li {
        padding: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        /* Smooth hover effect */
      }

      #companyList li:hover,
      #companyList_sole_trader li:hover,
      #postcode_list li:hover {
        background-color: #f8ec95;
      }

      #companyList li.selected,
      #companyList_sole_trader li.selected,
      #postcode_list li.selected {
        background-color: #f8ec95;
      }

      #inputfields_company_details,
      #inputfields_company_details_soleTrader {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
        margin-top: 3%;
        color: #999;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
      }

      #registered_company_name {
        flex-grow: 1;
        color: #0a0b0d;
        font-family: Steagal;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px;
        width: 390px;
      }

      #registered_company_name_sole_trader {
        width: 390px;
      }

      #payment_instruction_personal {
        display: flex;
        width: 520px;
        padding: 16px 0px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0.05);
        margin-top: 14.2%;
        width: 446px;
        flex-shrink: 0;
        color: #000;
        text-align: center;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }

      input::placeholder {
        color: #999;
        font-family: Steagal;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
      }

      #button_1_personal {
        margin-top: 4.3%;
      }

      #button_2_personal {
        margin-top: 8.5%;
        margin-left: 4%;
      }

      #button_2_personal_sole {
        margin-top: 12%;
      }

      .banners {
        display: inline-flex;
        height: 89.698px;
        padding: 0px 46px 0px 20px;
        align-items: center;
        gap: 20px;
        flex-shrink: 0;
        border-radius: 20px;
        background: #f8dc3d;
        width: 32.7%;
        color: #333;
        font-family: Steagal;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
      }

      @media screen and (max-width: 100%) {
        .banners {
          width: 100%;
        }
      }

      input.error {
        border: 1px red solid;
      }

      #registered_label {
        display: inline-flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
        width: 179px;
      }

      #b_firstName_error_msg,
      #b_lastName_error_msg,
      #b_mobile_error_msg,
      #errors,
      #b_registered_companyName_err_msg,
      #b_cname_err_msg,
      #b_cnum_err_msg,
      #b_countryName_err_msg,
      #b_countryPostcode_err_msg,
      #b_buildingNoName_err_msg,
      #b_address_err_msg,
      #b_townCity_err_msg,
      #b_in_mobile_err_msg,
      #errors_personal,
      #p_mobile_err_msg,
      #p_lastName_err_msg,
      #p_firstName_err_msg,
      #p_postcode_err_msg,
      #p_buildingNoName_err_msg,
      #p_address_err_msg,
      #p_towncity_err_msg,
      #p_registered_company_err_msg {
        margin-top: 5px;
        color: red;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
      }

      #home {
        margin-top: "12.8%";
        margin-bottom: "12.8%";
        background: "#232320";
        color: "#F8DC3D";
        width: "260px";
        margin-left: "4.5%";
        background: #f8dc3d;
        border: none;
        display: flex;
        width: 260px;
        padding: 15px 111px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        color: #232320;
      }

      #account_holder_name_personal {
        color: #999;
        font-family: Steagal;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        margin-top: 4px;
      }

      .spinner {
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-top: 4px solid #fff;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        animation: spin 1s linear infinite;
        margin-left: 10px;
        display: none; /* Initially hide the spinner */
      }
      .spinner2 {
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-top: 4px solid #fff; /* Match the button's text color */
        border-radius: 50%;
        width: 16px;
        height: 16px;
        animation: spin 1s linear infinite;
        margin-left: 10px;
        display: none; /* Initially hide the spinner */
      }
      .spinner3 {
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top: 2px solid #232320; /* Match the input's text color */
        border-radius: 50%;
        width: 16px;
        height: 16px;
        animation: spin 1s linear infinite;
        position: absolute;
        margin-top: 13%;
        right: 35px; /* Adjust as needed */

        display: none; /* Initially hide the spinner */
      }

      .spinner4 {
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-top: 4px solid #fff;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        animation: spin 1s linear infinite;
        margin-left: 45%;
        display: none; /* Initially hide the spinner */
      }

      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
    </style>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <script>
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
  </head>

  <body>
    <div id="banner_head">
      <!--
      <div
        style="
          display: flex;
          align-items: center;
          justify-content: center;
          color: #333;
          font-family: Steagal;
          font-size: 20px;
          font-style: normal;
          font-weight: 500;
          line-height: 24px; /* 120% */
          letter-spacing: 3.8px;
        "
      >
        BENEFITS OF A BUSINESS ACCOUNT
      </div>
      
      <div
        id="banner_body_1"
        style="
          width: 100%;
          height: auto;
          flex-shrink: 0;
          margin-top: 6.4%;
          display: flex;
          gap: 20px;
          padding: 0% 4% 0% 4%;
        "
      >
        <div id="banner_1" class="banners">
          <span style="display: contents"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="36"
              height="37"
              viewBox="0 0 36 37"
              fill="none"
            >
              <path
                d="M7.5 30.3489V4.84888H20.3625L21.075 8.07388H30V21.9489H20.4L19.69 18.7614H9.75V30.3489H7.5ZM22.3125 19.6989H27.75V10.3239H19.1625L18.45 7.09888H9.75V16.5114H21.6L22.3125 19.6989Z"
                fill="#333333"
              />
            </svg>
            <span>Priority for Business Account Travelers</span></span
          >
        </div>
        <div id="banner_2" class="banners">
          <span style="display: contents">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="36"
              height="37"
              viewBox="0 0 36 37"
              fill="none"
            >
              <path
                d="M23.5125 25.0864L25.2 23.3989L19.2375 17.3989V9.86138H16.9875V18.2989L23.5125 25.0864ZM18 32.8489C15.95 32.8489 14.0125 32.4551 12.1875 31.6676C10.3625 30.8801 8.76875 29.8051 7.40625 28.4426C6.04375 27.0801 4.96875 25.4864 4.18125 23.6614C3.39375 21.8364 3 19.8989 3 17.8489C3 15.7989 3.39375 13.8614 4.18125 12.0364C4.96875 10.2114 6.04375 8.61763 7.40625 7.25513C8.76875 5.89263 10.3625 4.81763 12.1875 4.03013C14.0125 3.24263 15.95 2.84888 18 2.84888C20.05 2.84888 21.9875 3.24263 23.8125 4.03013C25.6375 4.81763 27.2313 5.89263 28.5938 7.25513C29.9563 8.61763 31.0313 10.2114 31.8188 12.0364C32.6063 13.8614 33 15.7989 33 17.8489C33 19.8989 32.6063 21.8364 31.8188 23.6614C31.0313 25.4864 29.9563 27.0801 28.5938 28.4426C27.2313 29.8051 25.6375 30.8801 23.8125 31.6676C21.9875 32.4551 20.05 32.8489 18 32.8489ZM18 30.5989C21.5 30.5989 24.5 29.3489 27 26.8489C29.5 24.3489 30.75 21.3489 30.75 17.8489C30.75 14.3489 29.5 11.3489 27 8.84888C24.5 6.34888 21.5 5.09888 18 5.09888C14.5 5.09888 11.5 6.34888 9 8.84888C6.5 11.3489 5.25 14.3489 5.25 17.8489C5.25 21.3489 6.5 24.3489 9 26.8489C11.5 29.3489 14.5 30.5989 18 30.5989Z"
                fill="#333333"
              />
            </svg>
            <span>Faster Pick-Up times</span></span
          >
        </div>
        <div id="banner_3" class="banners">
          <span style="display: contents"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="36"
              height="37"
              viewBox="0 0 36 37"
              fill="none"
            >
              <path
                d="M11.9625 26.4739H24.0375V24.2239H11.9625V26.4739ZM11.9625 20.0989H24.0375V17.8489H11.9625V20.0989ZM6 32.8489V2.84888H21.7875L30 11.0614V32.8489H6ZM20.6625 12.0739V5.09888H8.25V30.5989H27.75V12.0739H20.6625Z"
                fill="#333333"
              />
            </svg>
            <span>Monthly Invoicing</span></span
          >
        </div>
      </div>
      <div
        id="banner_body_2"
        style="
          width: 100%;
          height: auto;
          flex-shrink: 0;
          display: flex;
          gap: 20px;
          padding: 0% 4% 0% 4%;
        "
      >
        <div id="banner_4" class="banners" style="margin-top: 3%">
          <span style="display: contents"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="36"
              height="37"
              viewBox="0 0 36 37"
              fill="none"
            >
              <path
                d="M18.1125 31.3486C16.2375 31.3486 14.475 30.9924 12.825 30.2799C11.175 29.5674 9.73125 28.5986 8.49375 27.3736C7.25625 26.1486 6.28125 24.7111 5.56875 23.0611C4.85625 21.4111 4.5 19.6486 4.5 17.7736C4.5 15.8986 4.85625 14.1486 5.56875 12.5236C6.28125 10.8986 7.25625 9.47988 8.49375 8.26738C9.73125 7.05488 11.175 6.09863 12.825 5.39863C14.475 4.69863 16.2375 4.34863 18.1125 4.34863C20.1125 4.34863 22.0063 4.78613 23.7938 5.66113C25.5813 6.53613 27.125 7.73613 28.425 9.26113V5.28613H30.675V13.0861H22.8375V10.8361H26.775C25.675 9.56113 24.3813 8.53613 22.8938 7.76113C21.4062 6.98613 19.8125 6.59863 18.1125 6.59863C14.9875 6.59863 12.3125 7.66738 10.0875 9.80488C7.8625 11.9424 6.75 14.5611 6.75 17.6611C6.75 20.8361 7.85 23.5361 10.05 25.7611C12.25 27.9861 14.9375 29.0986 18.1125 29.0986C21.2375 29.0986 23.875 27.9986 26.025 25.7986C28.175 23.5986 29.25 20.9361 29.25 17.8111H31.5C31.5 21.5611 30.2 24.7549 27.6 27.3924C25 30.0299 21.8375 31.3486 18.1125 31.3486ZM22.6875 23.9611L16.9125 18.2611V10.2361H19.1625V17.3236L24.3 22.3486L22.6875 23.9611Z"
                fill="#333333"
              />
            </svg>
            <span>24/ 7 Support</span></span
          >
        </div>
        <div id="banner_5" class="banners" style="margin-top: 3%">
          <span style="display: contents"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="36"
              height="37"
              viewBox="0 0 36 37"
              fill="none"
            >
              <path
                d="M7.9875 27.2863C6.89765 26.1613 6.04394 24.8613 5.42636 23.3863C4.80879 21.9113 4.5 20.3988 4.5 18.8488C4.5 17.0238 4.81875 15.3551 5.45625 13.8426C6.09375 12.3301 7.05 10.9363 8.325 9.66133C9.2 8.78633 10.2875 8.04883 11.5875 7.44883C12.8875 6.84883 14.4187 6.38008 16.1812 6.04258C17.9437 5.70508 19.9375 5.49258 22.1625 5.40508C24.3875 5.31758 26.8625 5.36133 29.5875 5.53633C29.7875 8.23633 29.8562 10.7051 29.7937 12.9426C29.7312 15.1801 29.5312 17.1895 29.1937 18.9707C28.8562 20.752 28.3813 22.309 27.7687 23.6418C27.1562 24.9746 26.4 26.0895 25.5 26.9863C24.225 28.2613 22.85 29.2238 21.375 29.8738C19.9 30.5238 18.325 30.8488 16.65 30.8488C14.925 30.8488 13.3438 30.5551 11.9062 29.9676C10.4688 29.3801 9.1625 28.4863 7.9875 27.2863ZM11.85 27.2863C12.475 27.7113 13.2 28.0363 14.025 28.2613C14.85 28.4863 15.724 28.5988 16.6471 28.5988C17.974 28.5988 19.2625 28.3238 20.5125 27.7738C21.7625 27.2238 22.9 26.4238 23.925 25.3738C24.6 24.6988 25.175 23.8176 25.65 22.7301C26.125 21.6426 26.5125 20.3551 26.8125 18.8676C27.1125 17.3801 27.3125 15.6988 27.4125 13.8238C27.5125 11.9488 27.5125 9.88633 27.4125 7.63633C25.0625 7.58633 22.9562 7.61758 21.0937 7.73008C19.2312 7.84258 17.5875 8.04883 16.1625 8.34883C14.7375 8.64883 13.5125 9.03008 12.4875 9.49258C11.4625 9.95508 10.625 10.5238 9.975 11.1988C8.925 12.2738 8.125 13.4113 7.575 14.6113C7.025 15.8113 6.75 17.0363 6.75 18.2863C6.75 19.4863 7.00625 20.7426 7.51875 22.0551C8.03125 23.3676 8.6625 24.4238 9.4125 25.2238C10.7375 22.7738 12.325 20.5738 14.175 18.6238C16.025 16.6738 17.9875 15.1363 20.0625 14.0113C17.8875 15.8863 16.125 17.9176 14.775 20.1051C13.425 22.2926 12.45 24.6863 11.85 27.2863Z"
                fill="#333333"
              />
            </svg>
            <span>Sustainable Travel</span></span
          >
        </div>
        <div id="banner_6" class="banners" style="margin-top: 3%">
          <span style="display: contents"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="36"
              height="37"
              viewBox="0 0 36 37"
              fill="none"
            >
              <path
                d="M18 20.8486C18.825 20.8486 19.5313 20.5549 20.1188 19.9674C20.7063 19.3799 21 18.6736 21 17.8486C21 17.0236 20.7063 16.3174 20.1188 15.7299C19.5313 15.1424 18.825 14.8486 18 14.8486C17.175 14.8486 16.4688 15.1424 15.8813 15.7299C15.2938 16.3174 15 17.0236 15 17.8486C15 18.6736 15.2938 19.3799 15.8813 19.9674C16.4688 20.5549 17.175 20.8486 18 20.8486ZM12 26.8486H24V25.9861C24 25.3861 23.8375 24.8361 23.5125 24.3361C23.1875 23.8361 22.7375 23.4611 22.1625 23.2111C21.5125 22.9361 20.8438 22.7236 20.1563 22.5736C19.4688 22.4236 18.75 22.3486 18 22.3486C17.25 22.3486 16.5312 22.4236 15.8438 22.5736C15.1562 22.7236 14.4875 22.9361 13.8375 23.2111C13.2625 23.4611 12.8125 23.8361 12.4875 24.3361C12.1625 24.8361 12 25.3861 12 25.9861V26.8486ZM6 32.8486V2.84863H21.0375L30 11.8111V32.8486H6ZM8.25 30.5986H27.75V12.8236L20.025 5.09863H8.25V30.5986Z"
                fill="#333333"
              />
            </svg>
            <span>Self Service Reporting Tools</span></span
          >
        </div>
      </div>
    </div>-->
    <div class="stepper-container">
      <div class="step active" onclick="changeTab(0)">
        <div class="circle" id="first">1</div>
        <p class="section-title">Account Type</p>
      </div>
      <div class="step" onclick="changeTab(1)">
        <div class="circle" id="second">2</div>
        <p class="section-title">Contact Details</p>
      </div>
      <div class="step" onclick="changeTab(2)">
        <div class="circle" id="third">3</div>
        <span id="account_details">Account Details</span>
        
      </div>
      <div class="step" onclick="changeTab(3)">
        <div class="circle" id="fourth">4</div>

        <span id="payment_details">        
          <p class="section-title">Payment Details</p>
        </span>
      </div>
      <div class="step" onclick="changeTab(4)">
        <div class="circle" id="fifth">5</div>
        <p class="section-title">Submit</p>
      </div>
    </div>

    <div class="step-content active" id="content1" data-step-content="0">
      <div
        class="field"
        style="
          margin-top: 5%;
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 24px;
        "
      >
        <label class="form_heading"> Account Details </label>
        <div class="account-details-container">       
          <div class="account-details-business-field"
            style="
              display: flex;
              gap: 2px;
              align-items: center;
              margin-top: -7%;
            "
          >
            <div class="radio">
              <input
                type="radio"
                name="account_type"
                value="Business Account"
                id="bussiness_type"
                class="account_type"
                onchange="enableNextButton();"
              />
              <span class="labelData" style="width: 125px"
                >Business Account</span
              >
            </div>
            <div class="tooltip_business" style="display: contents">
              <div class="business_icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="11"
                  height="11"
                  viewBox="0 0 11 11"
                  fill="none"
                >
                  <g clip-path="url(#clip0_462_4187)">
                    <path
                      d="M9.8125 5.5C9.8125 7.88173 7.88173 9.8125 5.5 9.8125C3.11827 9.8125 1.1875 7.88173 1.1875 5.5C1.1875 3.11827 3.11827 1.1875 5.5 1.1875C7.88173 1.1875 9.8125 3.11827 9.8125 5.5Z"
                      stroke="black"
                    />
                    <path
                      d="M5.04175 5.0415H5.95841V7.56234H5.04175V5.0415Z"
                      fill="black"
                    />
                    <path
                      d="M5.49992 4.35433C5.81633 4.35433 6.07284 4.09783 6.07284 3.78141C6.07284 3.465 5.81633 3.2085 5.49992 3.2085C5.18351 3.2085 4.927 3.465 4.927 3.78141C4.927 4.09783 5.18351 4.35433 5.49992 4.35433Z"
                      fill="black"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_462_4187">
                      <rect width="11" height="11" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div
                id="business_hover"
                class="tooltiptext_business"
                style="display: flex; flex-direction: row-reverse"
              >
                <div
                  class="close_business"
                  id="close_business"
                  style="margin-top: -20%"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                  >
                    <path
                      d="M4 12L12 4"
                      stroke="#464646"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    />
                    <path
                      d="M12 12L4 4"
                      stroke="#464646"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    />
                  </svg>
                </div>
                <span
                  >For businesses of all sizes. We can offer credit but will
                  need to run some checks so please have your company details in
                  hand.</span
                >
              </div>
            </div>
          </div>
          <div class="account-details-personal-field"
            style="display: flex;
              gap: 2px;
            
              align-items: center;
              margin-top: -7%;"
          >
            <div class="radio">
              <input
                type="radio"
                name="account_type"
                value="Personal Account"
                id="personal_type"
                class="account_type"
                onchange="enableNextButton();"
              />
              <span class="labelData" style="width: 126px"
                >Personal Account</span
              >
            </div>
            <div class="tooltip_personal" style="display: contents">
              <div class="personal_icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="11"
                  height="11"
                  viewBox="0 0 11 11"
                  fill="none"
                >
                  <g clip-path="url(#clip0_462_4187)">
                    <path
                      d="M9.8125 5.5C9.8125 7.88173 7.88173 9.8125 5.5 9.8125C3.11827 9.8125 1.1875 7.88173 1.1875 5.5C1.1875 3.11827 3.11827 1.1875 5.5 1.1875C7.88173 1.1875 9.8125 3.11827 9.8125 5.5Z"
                      stroke="black"
                    />
                    <path
                      d="M5.04175 5.0415H5.95841V7.56234H5.04175V5.0415Z"
                      fill="black"
                    />
                    <path
                      d="M5.49992 4.35433C5.81633 4.35433 6.07284 4.09783 6.07284 3.78141C6.07284 3.465 5.81633 3.2085 5.49992 3.2085C5.18351 3.2085 4.927 3.465 4.927 3.78141C4.927 4.09783 5.18351 4.35433 5.49992 4.35433Z"
                      fill="black"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_462_4187">
                      <rect width="11" height="11" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>

              <div
                id="personal_hover"
                class="tooltiptext_personal"
                style="display: flex; flex-direction: row-reverse"
              >
                <span
                  class="close_personal"
                  id="close_personal"
                  style="margin-top: -65px"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                  >
                    <path
                      d="M4 12L12 4"
                      stroke="#464646"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    />
                    <path
                      d="M12 12L4 4"
                      stroke="#464646"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    /></svg></span
                ><span
                  >Pay-as-you go account for sole traders or personal accounts
                  to share with friends and family</span
                >
              </div>
            </div>
          </div>
        </div>
        <button class="nextbtn_1" id="nextbtn_1">NEXT</button>
      </div>
    </div>

    <div class="step-content" id="content2" data-step-content="1">
      <div id="contactDetails_business">
        <div
          class="field"
          style="display: flex; align-items: center; margin-top: 3.5%"
        >
          <label class="form_heading">Contact Details </label>
          <div
            style="
              margin-top: 1.2%;
              gap: 24px;
              display: flex;
              flex-direction: column;
            "
          >
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="fname"> FIRST NAME </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="first_name"
                name="first_name"
                class="name"
                placeholder="Ex: John"
              />
              <div id="b_firstName_error_msg"></div>
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="lname"> LAST NAME </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="last_name"
                name="last_name"
                class="name"
                placeholder="Ex: Smith"
              />
              <div id="b_lastName_error_msg"></div>
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="mobilenum"> MOBILE </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="mobile"
                name="mobile"
                class="name"
                placeholder="Ex: 07123 770924"
                onkeypress="return isNumber(event)"
                maxlength="20"
              />
              <div id="b_mobile_error_msg"></div>
            </div>
          </div>
          <div
            style="
              color: #232320;
              font-family: Steagal;
              font-size: 24px;
              font-style: normal;
              font-weight: 400;
              line-height: normal;
              margin-top: 6.1%;
            "
            class="heading-email-verify"
          >
            Email Verification
          </div>
          <div
            id="helptext"
            style="
              width: 380px;
              color: #232320;
              text-align: center;
              font-family: Steagal;
              font-size: 14px;
              font-style: normal;
              font-weight: 400;
              line-height: 20px;
              margin-top: 2.4%;
            "
          >
            Please enter your email address to receive a one time passcode and
            verify your account
          </div>
          <div id="inputfields">
            <span style="display: flex; flex-direction: row; gap: 4px"
              ><label class="fieldname" id="bussinessemail">
                BUSINESS EMAIL </label
              ><span style="color: red; display: inline-block">*</span></span
            >
            <input
              type="text"
              class="name"
              name="email"
              id="email"
              placeholder="Ex: John.smith@email.com"
            />
            <div id="errors"></div>
          </div>
          <p
            id="resendcode"
            style="
              color: #999;
              font-family: Steagal;
              font-size: 14px;
              font-style: normal;
              font-weight: 400;
              line-height: 20px;
              padding-left: 350px;
              margin-top: 1%;
              display: flex;
              cursor: pointer;
            "
          ></p>
          <div id="button_1" class="buttons">
            <button class="prebtn" onclick="previousTab()">PREVIOUS</button>
            <button class="nextbtn_2" id="nextbtn_2">
              <span id="sendCodeText-business">SEND CODE</span>
              <span id="sendCodeSpinner" class="spinner"></span>
            </button>
            <button id="submitAndVerifyBtn" class="submitAndVerifyBtn">
              <span id="sumbitAndVerifyBtnText-Business"
                >SUBMIT</span
              >
              <span
                id="sumbitAndVeridfBtnSpinner-Business"
                class="spinner4"
              ></span>
            </button>
          </div>

          <div
            style="
              color: #999;
              font-family: Steagal;
              font-size: 14px;
              font-style: normal;
              font-weight: 400;
              line-height: 20px;
              margin-bottom: 8.1%;
              margin-top: 1.6%;
              cursor: pointer;
            "
            id="save_contactDetails_business"
          >
            Save and Continue later
          </div>
        </div>
      </div>
      <div id="contactDetails_personal">
        <div
          class="field"
          style="
            margin-top: 2%;
            display: flex;
            flex-direction: column;
            align-items: center;
          "
        >
          <label class="form_heading">CONTACT DETAILS </label>
          <div style="display: flex; flex-direction: column; gap: 24px">
            <div
              style="
                width: 380px;
                color: #232320;
                text-align: center;
                font-family: Steagal;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 20px;
                margin-top: 4%;
              "
            >
              This First Name and Last Name you enter will be the name of your
              Personal Account.
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="fname_personal">
                  FIRST NAME </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="first_name_personal"
                name="first_name"
                class="name"
                placeholder="Ex: John"
              />
              <div id="p_firstName_err_msg"></div>
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="lname_personal"> LAST NAME </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="last_name_personal"
                name="last_name"
                class="name"
                placeholder="Ex: Smith"
              />
              <div id="p_lastName_err_msg"></div>
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="mobilenum_personal">
                  MOBILE </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="mobile_personal"
                name="mobile"
                class="name"
                placeholder="Ex: 07123 770924"
                onkeypress="return isNumber(event)"
                maxlength="20"
              />
              <div id="p_mobile_err_msg"></div>
            </div>
          </div>
          <div
            style="display: flex; flex-direction: column; align-items: center"
          >
            <div
              style="
                color: #232320;
                font-family: Steagal;
                font-size: 23px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                margin-top: 8%;
              "
            >
              EMAIL VERIFICATION
            </div>
            <p
              id="helptext_personal"
              style="
                width: 380px;
                color: #232320;
                text-align: center;
                font-family: Steagal;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 20px;
                margin-top: 4%;
              "
            >
              Please enter your email address to receive a one time passcode and
              verify your account
            </p>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="bussinessemail_personal">
                  EMAIL </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                class="name"
                name="email"
                id="email_personal"
                placeholder="Ex: John.smith@email.com"
              />
              <div id="errors_personal"></div>
            </div>
            <p
              id="resendcode_personal"
              style="
                color: #999;
                font-family: Steagal;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 20px;
                padding-left: 350px;
                margin-top: 1%;
                cursor: pointer;
              "
            ></p>
          </div>
          <div id="button_1_personal" class="buttons">
            <button class="prebtn" onclick="previousTab()">PREVIOUS</button>
            <button class="nextbtn_2_personal" id="nextbtn_2_personal">
              <span id="spinner" class="spinner"></span>
              <span id="sendCodeText">SEND CODE</span>
            </button>

            <button
              id="submitAndVerifyBtn_personal"
              class="submitAndVerifyBtn_personal"
            >
              <span id="verify">SUBMIT</span>
              <span id="submitVerifySpinner" class="spinner"></span>
            </button>
          </div>

          <div
            style="
              color: #999;
              font-family: Steagal;
              font-size: 14px;
              font-style: normal;
              font-weight: 400;
              line-height: 20px;
              margin-bottom: 8.1%;
              margin-top: 1.6%;
              cursor: pointer;
            "
            id="save_contactDetails_personal"
          >
            Save and Continue later
          </div>
        </div>
      </div>
    </div>

    <div class="step-content" id="content3" data-step-content="2">
      <div id="bussiness_comapny_details" style="margin-top: 4%">
        <div class="field" style="display: flex; align-items: center">
          <label class="form_heading"> COMPANY DETAILS </label>
          <div
            style="
              margin-top: 3.3%;
              display: flex;
              flex-direction: column;
              gap: 19px;
            "
          >
            <div style="display: flex; gap: 2px">
              <div class="radio">
                <input
                  type="radio"
                  name="company_type"
                  value="U.K. Registered Company"
                  id="companytype_1"
                  checked
                />
                <span class="labelData">U.K. Registered Company</span>
              </div>
            </div>
            <div style="display: flex; gap: 2px; margin-top: 1.5%">
              <div class="radio">
                <input
                  type="radio"
                  name="company_type"
                  value="International Company"
                  id="companytype_2"
                />
                <span class="labelData">Other Company</span>
              </div>
            </div>
          </div>
          <div id="ukcompany">
            <div
            class="ukcompany-container"
              style="
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 5%;
              "
            >
              <div class="ukcompany-wrapper" style="display: flex; margin-top: 5%; gap: 55px">
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label
                      class="fieldname"
                      id="company_name"
                      placeholder="Ex: Addison Lee Ltd"
                    >
                      Registered Company Name </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <div class="search-container">
                    <input
                      type="text"
                      id="registered_company_name"
                      class="name"
                      list="companyList"
                      placeholder="Ex: Addison Lee Ltd"
                    />
                    <button class="searchBtn">
                      <span class="fa fa-search"></span>
                    </button>
                  </div>
                  <span id="inputSpinner2" class="spinner3"></span>
                  <div id="b_registered_companyName_err_msg"></div>
                  <ul id="companyList"></ul>
                </div>
                <div id="inputfields_company_details">
                  <div id="registered_label"></div>
                  <div id="display_company_details"></div>
                </div>
              </div>
              <div id="button_2_ukcompany" class="buttons">
                <button class="prebtn" id="prebtn2_1" onclick="previousTab()">
                  PREVIOUS
                </button>
                <button class="nextbtn_3_ukcompany" id="nextbtn_3_ukcompany">
                  NEXT
                </button>
              </div>
              <div
                style="
                  color: #999;
                  font-family: Steagal;
                  font-size: 14px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: 20px;
                  margin-bottom: 8.1%;
                  margin-top: 3.5%;
                  cursor: pointer;
                "
                id="save_ukCompany_details"
              >
                Save and Continue later
              </div>
            </div>
          </div>
          <div id="internationalCompany">
            <div
              style="
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 13.8%;
              "
            >
              <div style="display: flex; flex-direction: column; gap: 24px">
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname" id="companyName">
                      COMPANY NAME </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <input type="text" id="cname" class="name" />
                  <div id="b_cname_err_msg"></div>
                </div>
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname" id="companyNum">
                      COMPANY NUMBER </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <input
                    type="number"
                    id="cnum"
                    class="name"
                    onkeypress="return isNumber(event)"
                  />
                  <div id="b_cnum_err_msg"></div>
                </div>
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname" id="country"> COUNTRY </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <input type="text" id="countryname" class="name" />
                  <div id="b_countryName_err_msg"></div>
                </div>
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname" id="country">
                      POSTCODE / ZIP </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <div style="display: flex">
                    <input
                      type="text"
                      id="postcode"
                      class="name"
                      placeholder="Ex: W2 1AF"
                    />
                  </div>
                  <div id="b_countryPostcode_err_msg"></div>
                </div>
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname" id="buildingNo">
                      BUILDING NAME/NUMBER </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <input
                    type="text"
                    id="buildingNoName"
                    class="name"
                    placeholder="Ex: Addison Lee, The Point"
                  />
                  <div id="b_buildingNoName_err_msg"></div>
                </div>
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname" id="address"> ADDRESS </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <input
                    type="text"
                    id="addressValue"
                    class="name"
                    placeholder="Ex: 37 N Wharf Road"
                  />
                  <div id="b_address_err_msg"></div>
                </div>
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname"> TOWN/CITY </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <input
                    type="text"
                    id="townCity"
                    class="name"
                    placeholder="Ex: London"
                  />
                  <div id="b_townCity_err_msg"></div>
                </div>
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label class="fieldname" id="mnum"> MOBILE NUMBER </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <input
                    type="text"
                    id="mobilenum_company"
                    class="name"
                    onkeypress="return isNumber(event)"
                    maxlength="15"
                  />
                  <div id="b_in_mobile_err_msg"></div>
                </div>
              </div>
              <div id="button_2_internationalCompany" class="buttons">
                <button class="prebtn" id="prebtn2_1" onclick="previousTab()">
                  PREVIOUS
                </button>
                <button
                  class="nextbtn_3_internationalCompany"
                  id="nextbtn_3_internationalCompany"
                >
                  NEXT
                </button>
              </div>
              <div
                style="
                  color: #999;
                  font-family: Steagal;
                  font-size: 14px;
                  font-style: normal;
                  font-weight: 400;
                  line-height: 20px;
                  margin-bottom: 8.1%;
                  margin-top: 3.5%;
                  cursor: pointer;
                "
                id="save_internationalCompany_details"
              >
                Save and Continue later
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="account_details_personal">
        <div
          class="field"
          style="
            margin-top: 2%;
            display: flex;
            flex-direction: column;
            align-items: center;
          "
        >
          <label class="form_heading"> Account Details </label>
          <div class="account-name-heading" style="margin-left: -22%; margin-top: 3.5%">
            <div>ACCOUNT NAME</div>
            <div id="account_holder_name_personal"></div>
          </div>
          <div style="margin-top: 4%">
            <div class="radio">
              <input
                type="radio"
                name="soleTrader"
                value="Sole Trader"
                id="sole_trader"
                onclick="soloCheck(this)"
              />
              <div class="labelData">Sole Trader</div>
            </div>
          </div>
          <div id="sole_trader_companyDetails">
            <div
              style="
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 5%;
              "
            >
              <div style="display: flex; gap: 55px">
                <div id="inputfields">
                  <span style="display: flex; flex-direction: row; gap: 4px"
                    ><label
                      class="fieldname"
                      id="company_name_sole_trader"
                      placeholder="Ex: Addison Lee Ltd"
                    >
                      Registered Company Name </label
                    ><span style="color: red; display: inline-block"
                      >*</span
                    ></span
                  >
                  <div class="search-container">
                    <input
                      type="text"
                      id="registered_company_name_sole_trader"
                      class="name"
                      list="companyList_sole_trader"
                      placeholder="Ex: Addison Lee Ltd"
                    />
                    <button class="searchBtn2">
                      <span class="fa fa-search"></span>
                    </button>
                  </div>
                  <span class="spinner3" id="inputSpinner"></span>

                  <div id="p_registered_company_err_msg"></div>
                  <ul id="companyList_sole_trader"></ul>
                </div>
                <div id="inputfields_company_details_soleTrader">
                  <div id="registered_label_soleTrader"></div>
                  <div id="display_company_details_soleTrader"></div>
                </div>
              </div>
              <div id="button_2_personal_sole" class="buttons">
                <button class="prebtn" id="prebtn2_1" onclick="previousTab()">
                  PREVIOUS
                </button>
                <button
                  class="nextbtn_3_personal_soleTrader"
                  id="nextbtn_3_personal_soleTrader"
                >
                  NEXT
                </button>
              </div>
            </div>
          </div>
          <div
            style="
              margin-top: 2%;
              display: flex;
              flex-direction: column;
              gap: 24px;
            "
            id="sole_trader_accountDetals"
          >
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="post_zipcode_personal">
                  POSTCODE / ZIP </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <div style="display: flex; gap: 10px">
                <div style="display: flex; flex-direction: column">
                  <input
                    type="text"
                    id="postcode_personal"
                    class="name"
                    style="width: 280px"
                    placeholder="Ex: W2 1AF"
                    list="postcode_list"
                  />
                  <div id="p_postcode_err_msg"></div>
                  <ul id="postcode_list"></ul>
                </div>
                <button id="find_address" class="find_address">
                  <span id="findAddress">FIND</span>
                  <span id="findBtnSpinner" class="spinner2"></span>
                </button>
              </div>
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="buildingNo_personal">
                  BUILDING NAME/NUMBER </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="buildingNoName_personal"
                class="name"
                placeholder="Ex: Addison Lee, The Point"
              />
              <div id="p_buildingNoName_err_msg"></div>
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="address_personal"> ADDRESS </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="addressValue_personal"
                class="name"
                placeholder="Ex: 37 N Wharf Road"
              />
              <div id="p_address_err_msg"></div>
            </div>
            <div id="inputfields">
              <span style="display: flex; flex-direction: row; gap: 4px"
                ><label class="fieldname" id="towncity_personal">
                  TOWN/CITY </label
                ><span style="color: red; display: inline-block">*</span></span
              >
              <input
                type="text"
                id="townCity_personal"
                class="name"
                placeholder="Ex: London"
              />
              <div id="p_towncity_err_msg"></div>
            </div>
            <div id="button_2_personal" class="buttons">
              <button class="prebtn" id="prebtn2_1" onclick="previousTab()">
                PREVIOUS
              </button>
              <button class="nextbtn_3_personal" id="nextbtn_3_personal">
                NEXT
              </button>
            </div>
          </div>

          <div
            style="
              color: #999;
              font-family: Steagal;
              font-size: 14px;
              font-style: normal;
              font-weight: 400;
              line-height: 20px;
              margin-bottom: 8.1%;
              margin-top: 1.6%;
              cursor: pointer;
            "
            id="save_accountDetails_personal"
          >
            Save and Continue later
          </div>
        </div>
      </div>
    </div>

    <div class="step-content" id="content4" data-step-content="3">
      <div
        class="field"
        style="margin-top: 2%; display: flex; align-items: center"
      >
        <label id="payment_method_label" class="form_heading">
          Payment Method
        </label>
        <div id="payment_details_bussiness" style="margin-top: 2.2%">
          <div
            style="
              display: flex;
              gap: 16px;
              flex-direction: column;
              margin-bottom: 10px;
            "
          >
            <div style="display: flex; gap: 2px" id="directDebitDiv">
              <div class="radio">
                <input
                  type="radio"
                  name="payment_type"
                  value="Direct Debit"
                  id="paymentmethod_1"
                />
                <span class="labelData" id="directdebit">Direct Debit</span>
              </div>
            </div>
            <div style="display: flex; gap: 2px; margin-top: 1.5%">
              <div class="radio">
                <input
                  type="radio"
                  name="payment_type"
                  value="Credit Card"
                  id="paymentmethod_2"
                  style="margin-bottom: 2px"
                />
                <span class="labelData">Credit Card</span>
              </div>
            </div>
          </div>
        </div>
        <div id="debitcard">
          <iframe
            src=""
            style="height: 2300px; width: 500px"
            id="directDebitFormUrl"
            frameborder="0"
            scrolling="no"
            onload="window.scrollTo(0,616)"
          ></iframe>
        </div>
        <div id="creditcard_details">
          <div
            style="display: flex; flex-direction: column; align-items: center"
          >
            <div
              style="
                display: flex;
                align-items: center;
                margin-top: 20%;
                color: #232320;
                font-family: Steagal;
                font-size: 24px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
              "
            >
              Type of Credit Card
            </div>
            <div
              style="
                margin-top: 6%;
                display: flex;
                flex-direction: column;
                gap: 16px;
              "
            >
              <div style="display: flex; gap: 2px">
                <div class="radio">
                  <input
                    type="radio"
                    name="credit_type"
                    value="Individual credit"
                    id="individual_credit_card"
                  />
                  <span class="labelData">Individual Credit Cards</span>
                </div>
              </div>
              <div style="display: flex; gap: 2px; margin-top: 1.5%">
                <div class="radio">
                  <input
                    type="radio"
                    name="credit_type"
                    value="single credit"
                    id="single_credit_card"
                  />
                  <span class="labelData">Single Credit Card</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="creditcard_helptext_Individual">
          Payment for journeys will be billed to the individual users corporate
          card.
        </div>
        <div id="creditcard_helptext_single">
          One card to settle account invoices.
        </div>
        <div id="button_3_debit" class="buttons">
          <button class="prebtn" onclick="previousTab()">PREVIOUS</button>
          <button class="nextbtn_4_debit" id="nextbtn_4_debit">NEXT</button>
        </div>
        <div
          id="save_debitCredit_details"
          style="
            color: #999;
            font-family: Steagal;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            margin-bottom: 8.1%;
            margin-top: 1.6%;
            cursor: pointer;
          "
        >
          Save and Continue later
        </div>
        <div id="payment_details_personal">
          <div
            style="display: flex; flex-direction: column; align-items: center"
          >
            <div id="payment_instruction_personal">
              You will need to add a credit/debit card at the time you make your
              first booking on this account.
            </div>
            <div id="button_3_personal" class="buttons">
              <button class="prebtn" onclick="previousTab()">PREVIOUS</button>
              <button class="nextbtn_4_personal" onclick="nextTab()">
                NEXT
              </button>
            </div>
            <div
              style="
                color: #999;
                font-family: Steagal;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 20px;
                margin-bottom: 8.1%;
                margin-top: 1.6%;
                cursor: pointer;
              "
              id="save_paymentMethod_personal"
            >
              Save and Continue later
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="step-content" id="content5" data-step-content="4">
      <div
        class="field"
        style="margin-top: 1.7%; display: flex; align-items: center"
      >
        <label class="form_heading" id="heading_submit"> SUBMIT </label>
        <div id="submit_instructions" style="margin-top: 6%">
          <input
            type="checkbox"
            id="SubmitCheckbox"
            name="checkbox"
            value="1"
            style="margin-top: -8.5%; margin-left: 3%"
            onchange="enablesubmit()"
          />
          <p
            style="
              color: #232320;
              font-family: Steagal;
              font-size: 14px;
              font-style: normal;
              font-weight: 400;
              line-height: normal;
            "
          >
            By ticking this box you the customer: i) confirm that you have read
            and agree to Addison Lee
            <span
              style="
                color: #232320;
                font-family: Steagal;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                text-decoration-line: underline;
              "
              ><a href="https://www.addisonlee.com/terms-2/" target="_blank"
                >Terms and Conditions</a
              ></span
            >
            <span id="submit_text_content_business"></span>
            <span id="submit_text_content_personal"></span>
            <!-- of Trading being incorporated in and forming part of every contract
            for services, ii) agree to pay the charges and priority fee as
            invoiced by Addison Lee, and iii) confirm your permission to run a
            credit check. -->
          </p>
        </div>
        <div id="privacy_button" style="margin-top: 1.6%">
          <button
            id="privacybtn"
            onclick="window.open('https://www.addisonlee.com/privacy-notice/', '_blank')"
            style="cursor: pointer"
          >
            PRIVACY POLICY
          </button>
        </div>
        <div id="afterSubmit"></div>
        <div id="button_5" class="buttons">
          <button class="prebtn" id="prebtn_5" onclick="previousTab()">
            PREVIOUS
          </button>
          <button id="submit">
            <span id="submitText">SUBMIT</span>
            <span id="submitSpinner" class="spinner"></span>
          </button>
          <button id="home">HOME</button>
        </div>
        <div
          style="
            color: #999;
            font-family: Steagal;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            margin-bottom: 8.1%;
            margin-top: 1.6%;
            cursor: pointer;
          "
          id="save_content_submit"
        >
          Save and Continue later
        </div>
        <!-- <button id="submit">SUBMIT</button> -->
      </div>
    </div>

    <script>
      // Declaration

      let currentTab = 0;
      let lastTab = 0;
      let b_emailSegment = false;
      let p_emailSegment = false;
      var email = "";
      var verificationCode = "";
      var personal_email = "";
      var personal_verification_code = "";
      let firstName_business = "";
      let lastName_business = "";
      let mobile_business = "";
      let searchCompany_business = "";
      let primary_name = "";
      let primary_address_street = "";
      let primary_address_locality = "";
      let primary_address_region = "";
      let primary_address_postalcode = "";
      var radioState = false;
      let companyName_international = "";
      let companyNumber_international = "";
      let country_international = "";
      let postCode_international = "";
      let buldingNo_international = "";
      let address_international = "";
      let townCity_international = "";
      let mobileNumber_international = "";

      let b_registered_companyName_segment = false;
      let p_registered_companyName_segment = false;
      let creditcheck;
      let companyNumber = 0;
      let no_of_employee = "";
      let riskSegment = "";
      let organization_duns_business = "";
      let creditLimit = "";
      let directDebitMandateID = "";
      let otherDirectDebitParameters = "";

      // sole company name
      let sole_companyName = "";
      let sole_company_address = "";
      let sole_company_locality = "";
      let sole_company_region = "";
      let sole_company_postcode = "";
      let comp_reg_no = "";

      let globalQueryParamStage = "";

      function enableNextButton() {
        document.getElementById("nextbtn_1").classList.add("enabled");
      }

      document.addEventListener("DOMContentLoaded", (event) => {
        console.log("DOM fully loaded and parsed");
        if (localStorage.getItem("personal_flow_selected")) {
          console.log("1", document.getElementById("personal_type").checked);
          setTimeout(() => {
            console.log("personal type timeout");
            document.getElementById("personal_type").checked = true;
            document.getElementById("personal_type").click();
            enableNextButton();
          }, 1000);

          // localStorage.removeItem("personal_flow_selected");
        }
        if (localStorage.getItem("business_flow_selected")) {
          console.log("2", document.getElementById("bussiness_type").checked);
          setTimeout(() => {
            console.log("business type timeout");
            document.getElementById("bussiness_type").checked = true;
            document.getElementById("bussiness_type").click();
            enableNextButton();
          }, 1000);
          // localStorage.removeItem("business_flow_selected");
        }
      });
      //submit function

      function submit() {
        document
          .getElementById("save_contactDetails_business")
          .addEventListener("click", function (event) {
            localStorage.setItem("currentTab", currentTab);

            let checkbox_business = document.getElementById("bussiness_type");
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
              localStorage.setItem(
                "firstName_business",
                document.getElementById("first_name").value
              );
              localStorage.setItem(
                "lastName_business",
                document.getElementById("last_name").value
              );
              localStorage.setItem(
                "mobile_business",
                document.getElementById("mobile").value
              );
              localStorage.setItem(
                "email",
                localStorage.getItem("email")
                  ? localStorage.getItem("email")
                  : email
              );
            }
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
            }
            location.href = "https://www.addisonlee.com/";
          });
        document
          .getElementById("save_ukCompany_details")
          .addEventListener("click", function () {
            localStorage.setItem("currentTab", currentTab);
            //business contact details
            let checkbox_business = document.getElementById("bussiness_type");
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
              localStorage.setItem(
                "firstName_business",
                document.getElementById("first_name").value
              );
              localStorage.setItem(
                "lastName_business",
                document.getElementById("last_name").value
              );
              localStorage.setItem(
                "mobile_business",
                document.getElementById("mobile").value
              );
              localStorage.setItem(
                "email",
                localStorage.getItem("email")
                  ? localStorage.getItem("email")
                  : email
              );

              // business uk company details
              let checkbox_ukcompany = document.getElementById("companytype_1");
              if (checkbox_ukcompany.checked) {
                localStorage.setItem("checkbox_ukcompany", true);
                localStorage.setItem(
                  "b_registered_companyName",
                  searchCompany_business.value
                );

                localStorage.setItem(
                  "primary_name",
                  document.getElementById("primary_name")?.textContent
                    ? document.getElementById("primary_name").textContent
                    : primary_name
                );
                localStorage.setItem(
                  "registered_company_number",
                  localStorage.getItem("registered_company_number")
                    ? localStorage.getItem("registered_company_number")
                    : comp_reg_no
                );
                localStorage.setItem(
                  "primary_address_street",
                  document.getElementById("span_street1")?.textContent
                    ? document.getElementById("span_street1").textContent
                    : primary_address_street
                );
                localStorage.setItem(
                  "primary_address_locality",
                  document.getElementById("span_locality1")?.textContent
                    ? document.getElementById("span_locality1").textContent
                    : primary_address_locality
                );
                localStorage.setItem(
                  "primary_address_region",
                  document.getElementById("span_region1")?.textContent
                    ? document.getElementById("span_region1").textContent
                    : primary_address_region
                );
                localStorage.setItem(
                  "primary_address_postalcode",
                  document.getElementById("span_postalcode1")?.textContent
                    ? document.getElementById("span_postalcode1").textContent
                    : primary_address_postalcode
                );
              }
            }
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
            }
            location.href = "https://www.addisonlee.com/";
          });
        document
          .getElementById("save_internationalCompany_details")
          .addEventListener("click", function () {
            //business contact details
            localStorage.setItem("currentTab", currentTab);
            let checkbox_business = document.getElementById("bussiness_type");
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
              localStorage.setItem(
                "firstName_business",
                document.getElementById("first_name").value
              );
              localStorage.setItem(
                "lastName_business",
                document.getElementById("last_name").value
              );
              localStorage.setItem(
                "mobile_business",
                document.getElementById("mobile").value
              );
              localStorage.setItem(
                "email",
                localStorage.getItem("email")
                  ? localStorage.getItem("email")
                  : email
              );
              let checkbox_InternationalCompany =
                document.getElementById("companytype_2");
              if (checkbox_InternationalCompany.checked) {
                localStorage.setItem("checkbox_InternationalCompany", true);
              }
              localStorage.setItem(
                "companyName_international",
                document.getElementById("cname").value
              );
              localStorage.setItem(
                "companyNumber_international",
                document.getElementById("cnum").value
              );
              localStorage.setItem(
                "country_international",
                document.getElementById("countryname").value
              );
              localStorage.setItem(
                "postCode_international",
                document.getElementById("postcode").value
              );
              localStorage.setItem(
                "buldingNo_international",
                document.getElementById("buildingNoName").value
              );
              localStorage.setItem(
                "address_international",
                document.getElementById("addressValue").value
              );
              localStorage.setItem(
                "townCity_international",
                document.getElementById("townCity").value
              );
              localStorage.setItem(
                "mobileNumber_international",
                document.getElementById("mobilenum_company").value
              );
            }
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
            }

            location.href = "https://www.addisonlee.com/";
          });
        document
          .getElementById("save_debitCredit_details")
          .addEventListener("click", function () {
            localStorage.setItem("currentTab", currentTab);

            //business contact details
            let checkbox_business = document.getElementById("bussiness_type");
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
              localStorage.setItem(
                "firstName_business",
                document.getElementById("first_name").value
              );
              localStorage.setItem(
                "lastName_business",
                document.getElementById("last_name").value
              );
              localStorage.setItem(
                "mobile_business",
                document.getElementById("mobile").value
              );
              localStorage.setItem(
                "email",
                localStorage.getItem("email")
                  ? localStorage.getItem("email")
                  : email
              );
              // business uk company details
              let checkbox_ukcompany = document.getElementById("companytype_1");
              if (checkbox_ukcompany.checked) {
                localStorage.setItem("checkbox_ukcompany", true);
                localStorage.setItem(
                  "b_registered_companyName",
                  searchCompany_business.value
                );

                localStorage.setItem(
                  "primary_name",
                  document.getElementById("primary_name")?.textContent
                    ? document.getElementById("primary_name").textContent
                    : primary_name
                );
                localStorage.setItem(
                  "registered_company_number",
                  localStorage.getItem("registered_company_number")
                    ? localStorage.getItem("registered_company_number")
                    : comp_reg_no
                );
                localStorage.setItem(
                  "primary_address_street",
                  document.getElementById("span_street1")?.textContent
                    ? document.getElementById("span_street1").textContent
                    : primary_address_street
                );
                localStorage.setItem(
                  "primary_address_locality",
                  document.getElementById("span_locality1")?.textContent
                    ? document.getElementById("span_locality1").textContent
                    : primary_address_locality
                );
                localStorage.setItem(
                  "primary_address_region",
                  document.getElementById("span_region1")?.textContent
                    ? document.getElementById("span_region1").textContent
                    : primary_address_region
                );
                localStorage.setItem(
                  "primary_address_postalcode",
                  document.getElementById("span_postalcode1")?.textContent
                    ? document.getElementById("span_postalcode1").textContent
                    : primary_address_postalcode
                );
              }
              // business international company details

              let checkbox_InternationalCompany =
                document.getElementById("companytype_2");
              if (checkbox_InternationalCompany.checked) {
                localStorage.setItem("checkbox_InternationalCompany", true);
                localStorage.setItem(
                  "companyName_international",
                  document.getElementById("cname").value
                );
                localStorage.setItem(
                  "companyNumber_international",
                  document.getElementById("cnum").value
                );
                localStorage.setItem(
                  "country_international",
                  document.getElementById("countryname").value
                );
                localStorage.setItem(
                  "postCode_international",
                  document.getElementById("postcode").value
                );
                localStorage.setItem(
                  "buldingNo_international",
                  document.getElementById("buildingNoName").value
                );
                localStorage.setItem(
                  "address_international",
                  document.getElementById("addressValue").value
                );
                localStorage.setItem(
                  "townCity_international",
                  document.getElementById("townCity").value
                );
                localStorage.setItem(
                  "mobileNumber_international",
                  document.getElementById("mobilenum_company").value
                );
              }
              // business payment method
              let debitType = document.getElementById("paymentmethod_1");
              let creditType = document.getElementById("paymentmethod_2");
              let IndividualCreditCard = document.getElementById(
                "individual_credit_card"
              );
              let singleCreditCard =
                document.getElementById("single_credit_card");

              if (debitType.checked) {
                localStorage.setItem("debitType", true);
              }
              if (creditType.checked) {
                localStorage.setItem("creditType", true);
              }
              if (IndividualCreditCard.checked) {
                localStorage.setItem("IndividualCreditCard", true);
              }
              if (singleCreditCard.checked) {
                localStorage.setItem("singleCreditCard", true);
              }
            }
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
            }

            location.href = "https://www.addisonlee.com/";
          });

        // personal, save and countinue functions
        document
          .getElementById("save_contactDetails_personal")
          .addEventListener("click", function () {
            localStorage.setItem("currentTab", currentTab);

            let checkbox_business = document.getElementById("bussiness_type");
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
            }
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
              let firstName = document.getElementById(
                "first_name_personal"
              ).value;
              let lastName =
                document.getElementById("last_name_personal").value;
              let mobile = document.getElementById("mobile_personal").value;
              // let email = personal_email;
              localStorage.setItem(
                "personal_email",
                localStorage.getItem("personal_email")
                  ? localStorage.getItem("personal_email")
                  : personal_email
              );

              var contactDetails_personal = {
                firstName_personal: firstName,
                lastName_personal: lastName,
                mobile_personal: mobile,
                email_personal: localStorage.getItem("personal_email"),
              };
              localStorage.setItem(
                "contactDetails_personal",
                JSON.stringify(contactDetails_personal)
              );
            }

            location.href = "https://www.addisonlee.com/";
          });

        document
          .getElementById("save_accountDetails_personal")
          .addEventListener("click", function () {
            // personal contact details
            localStorage.setItem("currentTab", currentTab);

            let checkbox_business = document.getElementById("bussiness_type");
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
            }
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
              let firstName = document.getElementById(
                "first_name_personal"
              ).value;
              let lastName =
                document.getElementById("last_name_personal").value;
              let mobile = document.getElementById("mobile_personal").value;
              // let email = personal_email;
              localStorage.setItem(
                "personal_email",
                localStorage.getItem("personal_email")
                  ? localStorage.getItem("personal_email")
                  : personal_email
              );

              var contactDetails_personal = {
                firstName_personal: firstName,
                lastName_personal: lastName,
                mobile_personal: mobile,
                email_personal: localStorage.getItem("personal_email"),
              };
              localStorage.setItem(
                "contactDetails_personal",
                JSON.stringify(contactDetails_personal)
              );

              // perosnal account details
              let postcode = document.getElementById("postcode_personal").value;
              let buldingNum_Name = document.getElementById(
                "buildingNoName_personal"
              ).value;
              let address = document.getElementById(
                "addressValue_personal"
              ).value;
              let city = document.getElementById("townCity_personal").value;
              let addressDetails = {
                postcode: postcode,
                buldingNum_Name: buldingNum_Name,
                address: address,
                city: city,
              };
              localStorage.setItem(
                "addressDetails",
                JSON.stringify(addressDetails)
              );

              //sole trader save
              let soleTrader = document.getElementById("sole_trader").checked;
              if (soleTrader) {
                localStorage.setItem("soleTrader", true);
                let registeredCompany = document.getElementById(
                  "registered_company_name_sole_trader"
                ).value;
                localStorage.setItem(
                  "sole_companyName",
                  document.getElementById("span_personal_company_name")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_number",
                  document.getElementById("span_personal_company_number")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_address",
                  document.getElementById("span_personal_company_address")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_locality",
                  document.getElementById("span_personal_company_locality")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_region",
                  document.getElementById("span_personal_company_region")
                    .textContent
                    ? document.getElementById("span_personal_company_region")
                        .textContent
                    : ""
                );
                localStorage.setItem(
                  "sole_company_postcode",
                  document.getElementById("span_personal_company_postalcode")
                    .textContent
                );
              }
            }
            location.href = "https://www.addisonlee.com/";
          });
        //personal payment
        document
          .getElementById("save_paymentMethod_personal")
          .addEventListener("click", function () {
            localStorage.setItem("currentTab", currentTab);
            // personal contact details
            let checkbox_business = document.getElementById("bussiness_type");
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
            }
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
              let firstName = document.getElementById(
                "first_name_personal"
              ).value;
              let lastName =
                document.getElementById("last_name_personal").value;
              let mobile = document.getElementById("mobile_personal").value;
              // let email = personal_email;
              localStorage.setItem(
                "personal_email",
                localStorage.getItem("personal_email")
                  ? localStorage.getItem("personal_email")
                  : personal_email
              );

              var contactDetails_personal = {
                firstName_personal: firstName,
                lastName_personal: lastName,
                mobile_personal: mobile,
                email_personal: localStorage.getItem("personal_email"),
              };
              localStorage.setItem(
                "contactDetails_personal",
                JSON.stringify(contactDetails_personal)
              );

              // perosnal account details
              let postcode = document.getElementById("postcode_personal").value;
              let buldingNum_Name = document.getElementById(
                "buildingNoName_personal"
              ).value;
              let address = document.getElementById(
                "addressValue_personal"
              ).value;
              let city = document.getElementById("townCity_personal").value;
              let addressDetails = {
                postcode: postcode,
                buldingNum_Name: buldingNum_Name,
                address: address,
                city: city,
              };
              localStorage.setItem(
                "addressDetails",
                JSON.stringify(addressDetails)
              );

              //sole trader save
              let soleTrader = document.getElementById("sole_trader").checked;
              if (soleTrader) {
                localStorage.setItem("soleTrader", true);
                let registeredCompany = document.getElementById(
                  "registered_company_name_sole_trader"
                ).value;
                localStorage.setItem(
                  "sole_companyName",
                  document.getElementById("span_personal_company_name")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_number",
                  document.getElementById("span_personal_company_number")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_address",
                  document.getElementById("span_personal_company_address")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_locality",
                  document.getElementById("span_personal_company_locality")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_region",
                  document.getElementById("span_personal_company_region")
                    .textContent
                    ? document.getElementById("span_personal_company_region")
                        .textContent
                    : ""
                );
                localStorage.setItem(
                  "sole_company_postcode",
                  document.getElementById("span_personal_company_postalcode")
                    .textContent
                );
              }
            }
            location.href = "https://www.addisonlee.com/";
          });
        //submit

        document
          .getElementById("save_content_submit")
          .addEventListener("click", function () {
            if (localStorage.getItem("currentTab")) {
              currentTab = parseInt(localStorage.getItem("currentTab"));
              localStorage.removeItem("currentTab");
            }
            localStorage.setItem("currentTab", currentTab);

            let checkbox_business = document.getElementById("bussiness_type");

            // business flow submit
            if (checkbox_business.checked) {
              localStorage.setItem("checkbox_business", true);
              localStorage.setItem(
                "firstName_business",
                document.getElementById("first_name").value
              );
              localStorage.setItem(
                "lastName_business",
                document.getElementById("last_name").value
              );
              localStorage.setItem(
                "mobile_business",
                document.getElementById("mobile").value
              );
              localStorage.setItem(
                "email",
                localStorage.getItem("email")
                  ? localStorage.getItem("email")
                  : email
              );
              // business uk company details
              let checkbox_ukcompany = document.getElementById("companytype_1");
              if (checkbox_ukcompany.checked) {
                localStorage.setItem("checkbox_ukcompany", true);
                localStorage.setItem(
                  "b_registered_companyName",
                  searchCompany_business.value
                );

                localStorage.setItem(
                  "primary_name",
                  document.getElementById("primary_name")?.textContent
                    ? document.getElementById("primary_name").textContent
                    : primary_name
                );
                localStorage.setItem(
                  "registered_company_number",
                  localStorage.getItem("registered_company_number")
                    ? localStorage.getItem("registered_company_number")
                    : comp_reg_no
                );
                localStorage.setItem(
                  "primary_address_street",
                  document.getElementById("span_street1")?.textContent
                    ? document.getElementById("span_street1").textContent
                    : primary_address_street
                );
                localStorage.setItem(
                  "primary_address_locality",
                  document.getElementById("span_locality1")?.textContent
                    ? document.getElementById("span_locality1").textContent
                    : primary_address_locality
                );
                localStorage.setItem(
                  "primary_address_region",
                  document.getElementById("span_region1")?.textContent
                    ? document.getElementById("span_region1").textContent
                    : primary_address_region
                );
                localStorage.setItem(
                  "primary_address_postalcode",
                  document.getElementById("span_postalcode1")?.textContent
                    ? document.getElementById("span_postalcode1").textContent
                    : primary_address_postalcode
                );
              }
              // business international company details

              let checkbox_InternationalCompany =
                document.getElementById("companytype_2");
              if (checkbox_InternationalCompany.checked) {
                localStorage.setItem("checkbox_InternationalCompany", true);
                localStorage.setItem(
                  "companyName_international",
                  document.getElementById("cname").value
                );
                localStorage.setItem(
                  "companyNumber_international",
                  document.getElementById("cnum").value
                );
                localStorage.setItem(
                  "country_international",
                  document.getElementById("countryname").value
                );
                localStorage.setItem(
                  "postCode_international",
                  document.getElementById("postcode").value
                );
                localStorage.setItem(
                  "buldingNo_international",
                  document.getElementById("buildingNoName").value
                );
                localStorage.setItem(
                  "address_international",
                  document.getElementById("addressValue").value
                );
                localStorage.setItem(
                  "townCity_international",
                  document.getElementById("townCity").value
                );
                localStorage.setItem(
                  "mobileNumber_international",
                  document.getElementById("mobilenum_company").value
                );
              }
              // business payment method
              let debitType = document.getElementById("paymentmethod_1");
              let creditType = document.getElementById("paymentmethod_2");
              let IndividualCreditCard = document.getElementById(
                "individual_credit_card"
              );
              let singleCreditCard =
                document.getElementById("single_credit_card");

              if (debitType.checked) {
                localStorage.setItem("debitType", true);
              }
              if (creditType.checked) {
                localStorage.setItem("creditType", true);
              }
              if (IndividualCreditCard.checked) {
                localStorage.setItem("IndividualCreditCard", true);
              }
              if (singleCreditCard.checked) {
                localStorage.setItem("singleCreditCard", true);
              }
              let finalSubmit_checkbox =
                document.getElementById("SubmitCheckbox");
              if (finalSubmit_checkbox.checked) {
                localStorage.setItem("finalSubmit_checkbox", true);
              }
            }

            // personal flow submit
            let checkbox_personal = document.getElementById("personal_type");
            if (checkbox_personal.checked) {
              localStorage.setItem("checkbox_personal", true);
              // personal contact details
              let firstName = document.getElementById(
                "first_name_personal"
              ).value;
              let lastName =
                document.getElementById("last_name_personal").value;
              let mobile = document.getElementById("mobile_personal").value;

              localStorage.setItem(
                "personal_email",
                localStorage.getItem("personal_email")
                  ? localStorage.getItem("personal_email")
                  : personal_email
              );
              var contactDetails_personal = {
                firstName_personal: firstName,
                lastName_personal: lastName,
                mobile_personal: mobile,
                email_personal: localStorage.getItem("personal_email"),
              };
              localStorage.setItem(
                "contactDetails_personal",
                JSON.stringify(contactDetails_personal)
              );

              // perosnal account details
              let postcode = document.getElementById("postcode_personal").value;
              let buldingNum_Name = document.getElementById(
                "buildingNoName_personal"
              ).value;
              let address = document.getElementById(
                "addressValue_personal"
              ).value;
              let city = document.getElementById("townCity_personal").value;
              let addressDetails = {
                postcode: postcode,
                buldingNum_Name: buldingNum_Name,
                address: address,
                city: city,
              };
              localStorage.setItem(
                "addressDetails",
                JSON.stringify(addressDetails)
              );

              //sole trader save
              let soleTrader = document.getElementById("sole_trader").checked;
              if (soleTrader) {
                localStorage.setItem("soleTrader", true);
                let registeredCompany = document.getElementById(
                  "registered_company_name_sole_trader"
                ).value;
                localStorage.setItem(
                  "sole_companyName",
                  document.getElementById("span_personal_company_name")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_number",
                  document.getElementById("span_personal_company_number")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_address",
                  document.getElementById("span_personal_company_address")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_locality",
                  document.getElementById("span_personal_company_locality")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_region",
                  document.getElementById("span_personal_company_region")
                    .textContent
                );
                localStorage.setItem(
                  "sole_company_postcode",
                  document.getElementById("span_personal_company_postalcode")
                    .textContent
                );
              }
            }
            let finalSubmit_checkbox =
              document.getElementById("SubmitCheckbox");
            if (finalSubmit_checkbox.checked) {
              localStorage.setItem("finalSubmit_checkbox", true);
            }
            location.href = "https://www.addisonlee.com/";
          });

        window.addEventListener("load", function () {
          console.log("Onload", { lastTab });
          // if (localStorage.getItem("personal_flow_selected")) {
          //   document.getElementById("personal_type").checked = true;
          // }
          // if (localStorage.getItem("business_flow_selected")) {
          //   document.getElementById("bussiness_type").checked = true;
          // }
          function enableNextButton() {
            document.getElementById("nextbtn_1").classList.add("enabled");
          }
          lastTab = localStorage.getItem("currentTab");

          if (lastTab) {
            document
              .querySelector(`#content${currentTab + 1}`)
              .classList.remove("active");
            document
              .querySelector(`.step:nth-child(${currentTab + 1})`)
              .classList.remove("active");
            currentTab = parseInt(lastTab) + 1;
            document
              .querySelector(`#content${currentTab}`)
              .classList.add("active");
            document
              .querySelector(`.step:nth-child(${currentTab})`)
              .classList.add("active");
            for (let i = currentTab - 1; i > 0; i--) {
              console.log("cureent loop", i);
              document
                .querySelector(`.step:nth-child(${i})`)
                .classList.add("submitted-tab");
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                }
              });
              const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
            </svg>`;
              const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
                svgContent
              )}")`;
              document.querySelectorAll(`.step .circle`).forEach((circle) => {
                if (circle.parentElement.classList.contains("submitted-tab")) {
                  circle.style.backgroundColor = "#33CB8B";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "none";
                  circle.style.backgroundImage = svgDataUri;
                  circle.style.backgroundRepeat = "no-repeat";
                  circle.style.fontSize = "0px";
                  circle.style.display = "flex";
                  circle.style.backgroundPosition = "center";
                }
              });
            }
          }

          document.getElementById("bussiness_type").checked =
            localStorage.getItem("checkbox_business");
          if (localStorage.getItem("checkbox_ukcompany")) {
            document.getElementById("companytype_1").checked =
              localStorage.getItem("checkbox_ukcompany");
          }

          if (document.getElementById("bussiness_type").checked) {
            document.getElementById("contactDetails_business").style.display =
              "block";
            document.getElementById("contactDetails_personal").style.display =
              "none";
            document.getElementById("nextbtn_1").classList.add("enabled");
          }

          if (document.getElementById("bussiness_type").checked) {
            document.getElementById("first_name").value =
              localStorage.getItem("firstName_business");
            document.getElementById("last_name").value =
              localStorage.getItem("lastName_business");
            document.getElementById("mobile").value =
              localStorage.getItem("mobile_business");
            let para = document.getElementById("helptext");
            para.innerHTML = `We have emailed a verification code to ${localStorage.getItem(
              "email"
            )}. Please check your inbox.<br><br>Note: It can sometimes take a few minutes for the code to be generated`;
            document.getElementById("email").value =
              localStorage.getItem("emailCode");
            let inputField = document.getElementById("email");
            inputField.type = "password";
            inputField.placeholder = "Enter code";
            let label = document.getElementById("bussinessemail");
            label.innerHTML = "Enter Code";
            let resendcode = document.getElementById("resendcode");
            resendcode.textContent = "Resend Code";
            document.getElementById("submitAndVerifyBtn").style.display =
              "block";
            document.getElementById("nextbtn_2").style.display = "none";
            document
              .getElementById("submitAndVerifyBtn")
              .addEventListener("click", function (e) {
                let button2 = document.getElementById("submitAndVerifyBtn");
                let buttonText2 = document.getElementById(
                  "sumbitAndVerifyBtnText-Business"
                );
                let buttonSpinner2 = document.getElementById(
                  "sumbitAndVeridfBtnSpinner-Business"
                );

                button2.disabled = true;
                buttonText2.style.display = "none";
                buttonSpinner2.style.display = "block";

                verificationCode = document.getElementById("email").value;
                if (verificationCode.length === 0) {
                  button2.disabled = false;
                  buttonText2.style.display = "block";
                  buttonSpinner2.style.display = "none";
                  document.getElementById("email").style.borderColor = "red";
                  document.getElementById("errors").innerHTML =
                    "Please enter a code";
                  document
                    .getElementById("submitAndVerifyBtn")
                    .classList.remove("enabled");
                } else {
                  fetch(
                    `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?code=${encodeURIComponent(
                      verificationCode
                    )}&email=${encodeURIComponent(email)}`
                  )
                    .then((response) => {
                      button2.disabled = false;
                      buttonText2.style.display = "block";
                      buttonSpinner2.style.display = "none";
                      if (response.status == 500) {
                        document.getElementById("email").style.borderColor =
                          "red";
                        document.getElementById("errors").innerHTML =
                          "Please enter a valid code";
                      }
                      return response.text();
                    })
                    .then((data) => {
                      button2.disabled = false;
                      buttonText2.style.display = "block";
                      buttonSpinner2.style.display = "none";
                      const result = JSON.parse(data).data;
                      if (
                        result.status == 200 &&
                        result.message == "approved"
                      ) {
                        nextTab();
                        document.getElementById(
                          "account_details_personal"
                        ).style.display = "none";
                        let accountType =
                          document.getElementById("bussiness_type");
                        let accountDetails = document
                          .querySelector(`.step:nth-child(${currentTab + 1})`)
                          .querySelector("#account_details")
                          .textContent.trim();

                        if (
                          accountType.value == "Business Account" &&
                          accountDetails === "Account Details"
                        ) {
                          document.getElementById(
                            "bussiness_comapny_details"
                          ).style.display = "block";
                          document.getElementById(
                            "account_details_personal"
                          ).style.display = "none";
                        }
                      } else if (
                        result.status == 200 &&
                        result.message == "pending"
                      ) {
                        document.getElementById("email").style.borderColor =
                          "red";
                        document.getElementById("errors").innerHTML =
                          "Please enter a valid code";
                      }
                    });
                }
              });
          }
          console.log("comp_reg_no", localStorage.getItem(comp_reg_no));
          if (
            localStorage.getItem("b_registered_companyName") &&
            document.getElementById("companytype_1").checked
          ) {
            document.getElementById("registered_company_name").value =
              localStorage.getItem("b_registered_companyName");
            let display_label = document.getElementById("registered_label");
            display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                            >
                              Registered Company Details
                            </label>`;
            let display_data = document.getElementById(
              "display_company_details"
            );
            display_data.innerHTML = `<div><span id="primary_name">${localStorage.getItem(
              "primary_name"
            )}</span><br/>
          <span>#${localStorage.getItem(
            "registered_company_number"
          )}</span><br/>
                                    <span id="span_street1">${localStorage.getItem(
                                      "primary_address_street"
                                    )}</span><br/>
                                    <span id="span_locality1">${localStorage.getItem(
                                      "primary_address_locality"
                                    )}</span>
                                    <span id="span_region1">${localStorage.getItem(
                                      "primary_address_region"
                                    )}</span><span id="span_postalcode1">${localStorage.getItem(
              "primary_address_postalcode"
            )}</span><br/>
                                    </div>`;
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("enabled");
          }
          // if (b_internationaCompanyDetails) {
          if (document.getElementById("companytype_2").checked) {
            document.getElementById("companytype_2").checked =
              localStorage.getItem("checkbox_InternationalCompany");

            document.getElementById("cname").value = localStorage.getItem(
              "companyName_international"
            );
            document.getElementById("cnum").value = localStorage.getItem(
              "companyNumber_international"
            );
            document.getElementById("countryname").value = localStorage.getItem(
              "country_international"
            );
            document.getElementById("postcode").value = localStorage.getItem(
              "postCode_international"
            );
            document.getElementById("buildingNoName").value =
              localStorage.getItem("buldingNo_international");
            document.getElementById("addressValue").value =
              localStorage.getItem("address_international");
            document.getElementById("townCity").value = localStorage.getItem(
              "townCity_international"
            );
            document.getElementById("mobilenum_company").value =
              localStorage.getItem("mobileNumber_international");
            document.getElementById("ukcompany").style.display = "none";
            document.getElementById("internationalCompany").style.display =
              "block";
            document
              .getElementById("nextbtn_3_internationalCompany")
              .classList.add("enabled");
            // }
          }

          if (localStorage.getItem("creditType")) {
            document.getElementById("paymentmethod_2").checked =
              localStorage.getItem("creditType");
            document.getElementById("creditcard_details").style.display =
              "block";
            document.getElementById("debitcard").style.display = "none";
            if (localStorage.getItem("IndividualCreditCard")) {
              document.getElementById("individual_credit_card").checked =
                localStorage.getItem("IndividualCreditCard");
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "block";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "none";
            }
            if (localStorage.getItem("singleCreditCard")) {
              document.getElementById("single_credit_card").checked =
                localStorage.getItem("singleCreditCard");
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "none";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "block";
            }
            document.getElementById("nextbtn_4_debit").classList.add("enabled");
          }

          // personal type
          let p_contactDetails = localStorage.getItem(
            "contactDetails_personal"
          );
          let p_accountDetails = localStorage.getItem("addressDetails");
          document.getElementById("personal_type").checked =
            localStorage.getItem("checkbox_personal");
          if (document.getElementById("personal_type").checked) {
            document.getElementById("contactDetails_business").style.display =
              "none";
            document.getElementById("contactDetails_personal").style.display =
              "block";
            document.getElementById("nextbtn_1").classList.add("enabled");
          }

          if (
            p_contactDetails &&
            document.getElementById("personal_type").checked
          ) {
            var parsedData = JSON.parse(p_contactDetails);
            document.getElementById("first_name_personal").value =
              parsedData.firstName_personal;
            document.getElementById("last_name_personal").value =
              parsedData.lastName_personal;
            document.getElementById("mobile_personal").value =
              parsedData.mobile_personal;
            document.getElementById("email_personal").value =
              parsedData.email_personal;
            let para = document.getElementById("helptext_personal");
            para.innerHTML = `We have emailed a verification code to ${parsedData.email_personal}. Please check your inbox.<br><br>Note: It can sometimes take a few minutes for the code to be generated`;
            let inputField = document.getElementById("email_personal");
            inputField.type = "password";
            inputField.value = "";
            let label = document.getElementById("bussinessemail_personal");
            inputField.placeholder = "Enter code";
            label.innerHTML = "Enter code";
            let resendcode = document.getElementById("resendcode_personal");
            resendcode.textContent = "Resend Code";
            document.getElementById(
              "submitAndVerifyBtn_personal"
            ).style.display = "block";
            document.getElementById("nextbtn_2_personal").style.display =
              "none";
            document
              .getElementById("submitAndVerifyBtn_personal")
              .classList.add("enabled");
            document
              .getElementById("submitAndVerifyBtn_personal")
              .addEventListener("click", function (e) {
                nextTab();
                let accountType = document.getElementById("personal_type");
                let accountDetails = document
                  .querySelector(`.step:nth-child(${currentTab + 1})`)
                  .querySelector("#account_details")
                  .textContent.trim();

                if (
                  accountType.value == "Personal Account" &&
                  accountDetails === "Account Details"
                ) {
                  document.getElementById(
                    "bussiness_comapny_details"
                  ).style.display = "none";
                  document.getElementById(
                    "account_details_personal"
                  ).style.display = "block";
                  let accountname = document.getElementById(
                    "account_holder_name_personal"
                  );
                  accountname.innerHTML = "";
                  accountname.innerHTML += `${parsedData.firstName_personal} ${parsedData.lastName_personal}`;
                }
              });
          }
          if (
            p_accountDetails &&
            document.getElementById("personal_type").checked
          ) {
            let parsedData = JSON.parse(p_accountDetails);
            document.getElementById("postcode_personal").value =
              parsedData.postcode;
            document.getElementById("buildingNoName_personal").value =
              parsedData.buldingNum_Name;
            document.getElementById("addressValue_personal").value =
              parsedData.address;
            document.getElementById("townCity_personal").value =
              parsedData.city;
            document
              .getElementById("nextbtn_3_personal")
              .classList.add("enabled");
            document.getElementById("creditcard_details").style.display =
              "none";
            document.getElementById(
              "creditcard_helptext_single"
            ).style.display = "none";
            document.getElementById(
              "creditcard_helptext_Individual"
            ).style.display = "none";

            if (
              document.querySelector("#payment_details").textContent.trim() ===
                "Payment Details" &&
              localStorage.getItem("checkbox_personal")
            ) {
              document.getElementById(
                "payment_details_personal"
              ).style.display = "block";
              document.getElementById(
                "payment_details_bussiness"
              ).style.display = "none";
              document.getElementById("button_3_debit").style.display = "none";
              document.getElementById(
                "save_debitCredit_details"
              ).style.display = "none";
            }
            if (
              document.querySelector("#account_details").textContent.trim() ===
                "Account Details" &&
              localStorage.getItem("checkbox_personal")
            ) {
              document.getElementById(
                "bussiness_comapny_details"
              ).style.display = "none";
              document.getElementById(
                "account_details_personal"
              ).style.display = "block";
            }
          }
          if (
            localStorage.getItem("soleTrader") &&
            document.getElementById("personal_type").checked
          ) {
            document.getElementById(
              "registered_company_name_sole_trader"
            ).value = localStorage.getItem("sole_companyName");
            document.getElementById("sole_trader_accountDetals").style.display =
              "none";
            document.getElementById(
              "sole_trader_companyDetails"
            ).style.display = "block";
            document.getElementById("sole_trader").checked =
              localStorage.getItem("soleTrader");
            let display_label = document.getElementById(
              "registered_label_soleTrader"
            );
            let display_data = document.getElementById(
              "display_company_details_soleTrader"
            );
            display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                              placeholder="Ex: Addison Lee Ltd"
                            >
                              Registered Company Details
                            </label>`;
            display_data.innerHTML = `<div><span id="span_personal_company_name">${localStorage.getItem(
              "sole_companyName"
            )}</span><br/>
                          <span id="span_personal_company_number">${localStorage.getItem(
                            "sole_company_number"
                          )}</span><br/>
                                    <span id="span_personal_company_address">${localStorage.getItem(
                                      "sole_company_address"
                                    )}</span><br/>
                                    <span id="span_personal_company_locality">${localStorage.getItem(
                                      "sole_company_locality"
                                    )}</span>
                                    <span id="span_personal_company_region">${localStorage.getItem(
                                      "sole_company_region"
                                    )}</span>
                                    <span id="span_personal_company_postalcode">${localStorage.getItem(
                                      "sole_company_postcode"
                                    )}</span><br/>
                                    </div>`;
            document
              .getElementById("nextbtn_3_personal_soleTrader")
              .classList.add("enabled");
            check();
          }
          document.getElementById("SubmitCheckbox").checked =
            localStorage.getItem("finalSubmit_checkbox");
          if (document.getElementById("SubmitCheckbox").checked) {
            document.getElementById("submit").classList.add("enabled");
          }

          // previous
        });
        //submit
      }

      document
        .getElementById("nextbtn_1")
        .addEventListener("click", (event) => {
          let checkbox_business = document.getElementById("bussiness_type");
          let checkbox_personal = document.getElementById("personal_type");
          if (
            checkbox_business.checked == true ||
            checkbox_personal.checked == true
          ) {
            nextTab();
          }
        });

      function isNumber(evt) {
        evt = evt ? evt : window.event;
        var charCode = evt.which ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
        }
        return true;
      }

      if (localStorage && localStorage.length != 0) {
        if (window.location.search) {
          var params = new URLSearchParams(window.location.search);
          var paramsObject = {};
          params.forEach(function (value, key) {
            paramsObject[key] = value;
          });

          directDebitMandateID = paramsObject.id;
          otherDirectDebitParameters = window.location.search;
          setTimeout(() => {
            window.scrollTo({
              top: 820,
              behavior: "smooth",
            });
          }, 3000);

          let queryParameterStage = paramsObject.stage;
          globalQueryParamStage = queryParameterStage;
        }
      }
      if (
        document.getElementById("personal_type").checked ||
        localStorage.getItem("checkbox_personal")
      ) {
        let submitContent = document.getElementById(
          "submit_text_content_personal"
        );
        submitContent.innerHTML = `of Trading being incorporated in and forming part of every contract
            for services, ii) agree to pay the charges and priority fee as
            invoiced by Addison Lee.`;
      }
      if (
        document.getElementById("bussiness_type").checked ||
        localStorage.getItem("checkbox_business")
      ) {
        let submitContent = document.getElementById(
          "submit_text_content_business"
        );
        submitContent.innerHTML = `of Trading being incorporated in and forming part of every contract
            for services, ii) agree to pay the charges and priority fee as
            invoiced by Addison Lee, and iii) confirm your permission to run a
            credit check.`;
      }
      if (localStorage.getItem("paymentMethodDebit")) {
        document
          .getElementById("bussiness_type")
          .addEventListener("click", function () {
            localStorage.setItem("business_flow_selected", true);
            if (localStorage.getItem("personal_flow_selected")) {
              localStorage.clear();
              localStorage.setItem("business_flow_selected", true);
              location.reload();
            }
            let accountType = document.getElementById("bussiness_type");
            if (accountType.value === "Business Account") {
              document.getElementById("contactDetails_business").style.display =
                "block";
              document.getElementById("contactDetails_personal").style.display =
                "none";
            }
          });
        document
          .getElementById("personal_type")
          .addEventListener("click", function () {
            if (
              window.parent.location.href.includes("id=") &&
              window.parent.location.href.includes("stage") &&
              window.parent.location.href.includes("company")
            ) {
              window.location.search = "";
              window.parent.location.search = "";
              window.parent.location.href =
                "https://www.addisonlee.com/business/apply/";
            }
            let accountType = document.getElementById("personal_type");
            localStorage.setItem("personal_flow_selected", true);
            if (localStorage.getItem("business_flow_selected")) {
              localStorage.clear();
              localStorage.setItem("personal_flow_selected", true);
              location.reload();
            }
            if (accountType.value === "Personal Account") {
              document.getElementById("contactDetails_business").style.display =
                "none";
              document.getElementById("contactDetails_personal").style.display =
                "block";
              document.getElementById(
                "submitAndVerifyBtn_personal"
              ).style.display = "none";
            }
          });

        function enableNextButton() {
          document.getElementById("nextbtn_1").classList.add("enabled");
        }
        //search Company localStorage

        if (document.getElementById("companytype_1").checked) {
          let companyType = document.getElementById("companytype_1");
          if (companyType.value === "U.K. Registered Company") {
            document.getElementById("ukcompany").style.display = "block";
            document.getElementById("internationalCompany").style.display =
              "none";
            document.getElementById("companyList").style.display = "none";
          }
          // api call to find company
          searchCompany_business = document.querySelector(
            "#registered_company_name"
          );
          let datalist = document.querySelector("#companyList");
          searchCompany_business.addEventListener("keydown", function (event) {
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("disabled");
            if (event.key === "Enter") {
              document.getElementById(
                "inputfields_company_details"
              ).style.display = "none";
              document.getElementById(
                "registered_company_name"
              ).style.borderColor = "";
              document.getElementById(
                "b_registered_companyName_err_msg"
              ).innerHTML = "";
              document.getElementById("companyList").style.display = "none";
              // Prevent the default action if form submission is involved
              event.preventDefault();
              const typedValue = event.target.value;
              let spinner = document.getElementById("inputSpinner2");
              spinner.style.display = "block";
              if (typedValue.length === 0) {
                spinner.style.display = "none";
                datalist.innerHTML = "";
                document.getElementById("companyList").style.display = "none";
              }
              var requestOptions = {
                method: "GET",
                mode: "no-cors",
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                  typedValue
                )}`
              )
                .then((response) => {
                  if (!response.ok) {
                    spinner.style.display = "none";
                    if (response.status === 400 || response.status === 404) {
                      document.getElementById("companyList").style.display =
                        "none";
                    }
                    throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  spinner.style.display = "none";
                  const result = JSON.parse(data).data;
                  datalist.innerHTML = ""; // Clear the dropdown
                  if (result.length != 0) {
                    result.forEach((item) => {
                      let option = document.createElement("li");
                      option.value = item.duns;
                      option.setAttribute(
                        "data-name",
                        item.primary_name ? item.primary_name : ""
                      );
                      option.setAttribute(
                        "data-street_address",
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      );
                      option.setAttribute(
                        "data-locality",
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      );
                      option.setAttribute(
                        "data-region",
                        item.primary_address.region
                          ? item.primary_address.region
                          : ""
                      );
                      option.setAttribute(
                        "data-postCode",
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      );
                      option.innerHTML = `${
                        item.primary_name ? item.primary_name : ""
                      },${
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      },${
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      }${
                        item.primary_address.region
                          ? item.primary_address.region
                          : ""
                      },${
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      }`; // Assuming 'duns' is the property you want to display
                      datalist.innerHTML += option.outerHTML;
                      document.getElementById(
                        "companyList"
                      ).style.pointerEvents = "auto";
                      document.getElementById("companyList").style.display =
                        "block";
                    });
                  } else {
                    console.log(
                      "No companies found for the entered search term"
                    );
                    let option = document.createElement("li");
                    option.innerHTML =
                      "Please check entered details or use 'Other Company' to continue";
                    datalist.innerHTML += option.outerHTML;
                    document.getElementById("companyList").style.display =
                      "block";
                    document.getElementById("companyList").style.pointerEvents =
                      "none";
                  }
                })
                .catch((error) => {
                  console.error("Error:", error);
                  let option = document.createElement("li");
                  option.innerHTML =
                    "Please check entered details or use 'Other Company' to continue";
                  datalist.innerHTML += option.outerHTML;
                  document.getElementById("companyList").style.display =
                    "block";
                  document.getElementById("companyList").style.pointerEvents =
                    "none";
                });
            }
          });
          let searchBtn = document.querySelector(".searchBtn");
          searchBtn.addEventListener("click", function (event) {
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("disabled");
            document.getElementById(
              "inputfields_company_details"
            ).style.display = "none";
            document.getElementById(
              "registered_company_name"
            ).style.borderColor = "";
            document.getElementById(
              "b_registered_companyName_err_msg"
            ).innerHTML = "";
            document.getElementById("companyList").style.display = "none";
            // if (event.key === "Enter") {
            // Prevent the default action if form submission is involved
            event.preventDefault();
            const typedValue = event.target.value;
            let spinner = document.getElementById("inputSpinner2");
            spinner.style.display = "block";
            if (typedValue.length === 0) {
              spinner.style.display = "none";
              datalist.innerHTML = "";
              document.getElementById("companyList").style.display = "none";
            }
            var requestOptions = {
              method: "GET",
              mode: "no-cors",
            };
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                typedValue
              )}`
            )
              .then((response) => {
                if (!response.ok) {
                  spinner.style.display = "none";
                  if (response.status === 400 || response.status === 404) {
                    document.getElementById("companyList").style.display =
                      "none";
                  }
                  throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.text(); // assuming the response is in JSON format
              })
              .then((data) => {
                spinner.style.display = "none";
                const result = JSON.parse(data).data;
                datalist.innerHTML = ""; // Clear the dropdown
                if (result.length != 0) {
                  result.forEach((item) => {
                    let option = document.createElement("li");
                    option.value = item.duns;
                    option.setAttribute(
                      "data-name",
                      item.primary_name ? item.primary_name : ""
                    );
                    option.setAttribute(
                      "data-street_address",
                      item.primary_address.street_address.line1
                        ? item.primary_address.street_address.line1
                        : ""
                    );
                    option.setAttribute(
                      "data-locality",
                      item.primary_address.locality
                        ? item.primary_address.locality
                        : ""
                    );
                    option.setAttribute(
                      "data-region",
                      item.primary_address.region
                        ? item.primary_address.region
                        : ""
                    );
                    option.setAttribute(
                      "data-postCode",
                      item.primary_address.postal_code
                        ? item.primary_address.postal_code
                        : ""
                    );
                    option.innerHTML = `${
                      item.primary_name ? item.primary_name : ""
                    },${
                      item.primary_address.street_address.line1
                        ? item.primary_address.street_address.line1
                        : ""
                    },${
                      item.primary_address.locality
                        ? item.primary_address.locality
                        : ""
                    }${
                      item.primary_address.region
                        ? item.primary_address.region
                        : ""
                    },${
                      item.primary_address.postal_code
                        ? item.primary_address.postal_code
                        : ""
                    }`; // Assuming 'duns' is the property you want to display
                    datalist.innerHTML += option.outerHTML;
                    document.getElementById("companyList").style.pointerEvents =
                      "auto";
                    document.getElementById("companyList").style.display =
                      "block";
                  });
                } else {
                  console.log("No companies found for the entered search term");
                  let option = document.createElement("li");
                  option.innerHTML =
                    "Please check entered details or use 'Other Company' to continue";
                  datalist.innerHTML += option.outerHTML;
                  document.getElementById("companyList").style.display =
                    "block";
                  document.getElementById("companyList").style.pointerEvents =
                    "none";
                }
              })
              .catch((error) => {
                console.error("Error:", error);
                let option = document.createElement("li");
                option.innerHTML =
                  "Please check entered details or use 'Other Company' to continue";
                datalist.innerHTML += option.outerHTML;
                document.getElementById("companyList").style.display = "block";
                document.getElementById("companyList").style.pointerEvents =
                  "none";
              });
            // }
          });
          datalist.addEventListener("click", function (event) {
            document.getElementById("inputSpinner2").style.display = "block";
            const selectedOption = event.target;
            selectedOption.classList.add("selected");
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("enabled");
            searchCompany_business.value = selectedOption.dataset.name;
            document.getElementById("companyList").style.display = "none";
            datalist.innerHTML = ""; // Clear the dropdown
            let display_data = document.getElementById(
              "display_company_details"
            );
            primary_name = selectedOption.dataset.name;
            primary_address_street = selectedOption.dataset.street_address;
            primary_address_locality = selectedOption.dataset.locality;
            primary_address_region = selectedOption.dataset.region;
            primary_address_postalcode = selectedOption.dataset.postcode;
            localStorage.setItem("duns", selectedOption.value);
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?dunsId=${encodeURIComponent(
                selectedOption.value
              )}`
            )
              .then((response) => {
                document.getElementById("inputSpinner2").style.display = "none";
                return response.text();
              })
              .then((data) => {
                document.getElementById("inputSpinner2").style.display = "none";
                const result = JSON.parse(data).data;
                console.log("duns response 1 --->", result);
                creditcheck = result.hasPassedCreditCheck
                  ? result.hasPassedCreditCheck
                  : "";

                organization_duns_business = result?.organization?.duns
                  ? result.organization.duns
                  : 0;

                companyNumber = organization_duns_business;
                riskSegment = result.organization.dnbAssessment.standardRating
                  .riskSegment
                  ? result.organization.dnbAssessment.standardRating.riskSegment
                  : "";
                localStorage.setItem("riskSegment", riskSegment);
                creditLimit = result.organization?.dnbAssessment
                  ?.creditLimitRecommendation?.maximumRecommendedLimit?.value
                  ? result.organization.dnbAssessment.creditLimitRecommendation
                      .maximumRecommendedLimit.value
                  : "";
                let comp_reg_no_array = result.organization.registrationNumbers;
                comp_reg_no =
                  comp_reg_no_array.length == 1
                    ? comp_reg_no_array[0].registrationNumber
                    : "";
                if (comp_reg_no_array.length && comp_reg_no_array.length > 1) {
                  for (var regNo in comp_reg_no_array) {
                    if (
                      comp_reg_no_array[regNo].isPreferredRegistrationNumber ==
                      true
                    ) {
                      comp_reg_no = comp_reg_no_array[regNo].registrationNumber;
                    }
                  }
                }
                localStorage.setItem("comp_reg_no", comp_reg_no);
                // else if (
                //   comp_reg_no_array.length &&
                //   comp_reg_no_array.length == 1
                // ) {
                //   comp_reg_no = comp_reg_no_array[0].registrationNumber;
                // }
                console.log({ comp_reg_no });
                if (comp_reg_no == "06067401") {
                  creditcheck = true;
                }
                for (let i of result.organization.numberOfEmployees) {
                  if (i.informationScopeDescription === "Consolidated") {
                    no_of_employee = i.value;

                    localStorage.setItem("no_of_employee", no_of_employee);
                  }
                }

                let display_label = document.getElementById("registered_label");
                display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                              placeholder="Ex: Addison Lee Ltd"
                            >
                              Registered Company Details
                            </label>`;
                display_data.innerHTML = `<div><span id="primary_name">${primary_name}</span><br/>
              <span id="span_company_number1" data-cno=${comp_reg_no}>#${comp_reg_no}<span><br/>
                            <span id="span_street1">${primary_address_street}</span><br/>
                            <span id="span_locality1">${primary_address_locality}</span>
                            <span id="span_region1">${primary_address_region}</span><span id="span_postalcode1">${primary_address_postalcode}</span><br/>

             </div>`;
                document.getElementById(
                  "inputfields_company_details"
                ).style.display = "block";
              });
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("enabled");
            document.getElementById("nextbtn_3_ukcompany").disabled = false;

            document
              .querySelector("#registered_company_name")
              .addEventListener("keydown", function (event) {
                document.getElementById(
                  "inputfields_company_details"
                ).style.display = "none";
              });
          });
        }

        document
          .getElementById("companytype_2")
          .addEventListener("click", function () {
            let companyType = document.getElementById("companytype_2");
            if (companyType.value === "International Company") {
              document.getElementById("ukcompany").style.display = "none";
              document.getElementById("internationalCompany").style.display =
                "block";
            }
          });

        const inputField_internationalCompany = [
          "cname",
          "cnum",
          "countryname",
          "postcode",
          "buildingNoName",
          "addressValue",
          "townCity",
          "mobilenum_company",
        ];
        inputField_internationalCompany.forEach((fieldId) => {
          document
            .getElementById(fieldId)
            .addEventListener("keydown", function (e) {
              document.getElementById(fieldId).style.borderColor = "";
              if (fieldId == "cname") {
                document.getElementById("b_cname_err_msg").innerHTML = "";
              }
              if (fieldId == "cnum") {
                document.getElementById("b_cnum_err_msg").innerHTML = "";
              }
              if (fieldId == "countryname") {
                document.getElementById("b_countryName_err_msg").innerHTML = "";
              }
              if (fieldId == "postcode") {
                document.getElementById("b_countryPostcode_err_msg").innerHTML =
                  "";
              }
              if (fieldId == "buildingNoName") {
                document.getElementById("b_buildingNoName_err_msg").innerHTML =
                  "";
              }
              if (fieldId == "addressValue") {
                document.getElementById("b_address_err_msg").innerHTML = "";
              }
              if (fieldId == "townCity") {
                document.getElementById("b_townCity_err_msg").innerHTML = "";
              }
              if (fieldId == "mobilenum_company") {
                document.getElementById("b_in_mobile_err_msg").innerHTML = "";
              }
              document
                .getElementById("nextbtn_3_internationalCompany")
                .classList.add("enabled");
              if (e.key === "Backspace") {
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
              }
            });
        });
        document
          .getElementById("nextbtn_3_internationalCompany")
          .addEventListener("click", function (event) {
            companyName_international = document.getElementById("cname").value;
            companyNumber_international = document.getElementById("cnum").value;
            country_international =
              document.getElementById("countryname").value;
            postCode_international = document.getElementById("postcode").value;
            buldingNo_international =
              document.getElementById("buildingNoName").value;
            address_international =
              document.getElementById("addressValue").value;
            townCity_international = document.getElementById("townCity").value;
            mobileNumber_international =
              document.getElementById("mobilenum_company").value;
            if (
              companyName_international.length === 0 ||
              companyNumber_international.length === 0 ||
              country_international.length === 0 ||
              postCode_international.length === 0 ||
              buldingNo_international.length === 0 ||
              address_international.length === 0 ||
              townCity_international.length === 0 ||
              mobileNumber_international.length === 0
            ) {
              if (companyName_international.length === 0) {
                document.getElementById("cname").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_cname_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (companyNumber_international.length === 0) {
                document.getElementById("cnum").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_cnum_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (country_international.length === 0) {
                document.getElementById("countryname").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_countryName_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (postCode_international.length === 0) {
                document.getElementById("postcode").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_countryPostcode_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (buldingNo_international.length === 0) {
                document.getElementById("buildingNoName").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_buildingNoName_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (address_international.length === 0) {
                document.getElementById("addressValue").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_address_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (townCity_international.length === 0) {
                document.getElementById("townCity").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_townCity_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (mobileNumber_international.length === 0) {
                document.getElementById("mobilenum_company").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_in_mobile_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
            } else {
              document.getElementById("cname").style.borderColor = "";
              document.getElementById("cnum").style.borderColor = "";
              document.getElementById("countryname").style.borderColor = "";
              document.getElementById("postcode").style.borderColor = "";
              document.getElementById("buildingNoName").style.borderColor = "";
              document.getElementById("addressValue").style.borderColor = "";
              document.getElementById("townCity").style.borderColor = "";
              document.getElementById("mobilenum_company").style.borderColor =
                "";
              if (mobileNumber_international.length <= 5) {
                document.getElementById("mobilenum_company").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_in_mobile_err_msg").innerHTML =
                  "Please enter a valid mobile number";
              } else {
                document.getElementById("directDebitDiv").style.display =
                  "none";
                document.getElementById("directdebit").style.display = "none";
                document.getElementById("paymentmethod_1").style.display =
                  "none";
                document.getElementById("debitcard").style.display = "none";
                nextTab();
              }
            }
          });

        document
          .getElementById("paymentmethod_1")
          .addEventListener("click", function () {
            let paymentType = document.getElementById("paymentmethod_1");
            if (paymentType.checked) {
              localStorage.setItem("paymentMethodDebit", true);
            }
            if (paymentType.value === "Direct Debit") {
              document.getElementById("debitcard").style.display = "block";
              document.getElementById("creditcard_details").style.display =
                "none";
              document.getElementById(
                "payment_details_personal"
              ).style.display = "none";
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "none";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "none";
              localStorage.setItem(
                "firstName_business",
                document.getElementById("first_name").value
                  ? document.getElementById("first_name").value
                  : firstName_business
              );
              localStorage.setItem(
                "lastName_business",
                document.getElementById("last_name").value
                  ? document.getElementById("last_name").value
                  : lastName_business
              );
              localStorage.setItem(
                "mobile_business",
                document.getElementById("mobile").value
                  ? document.getElementById("mobile").value
                  : mobile_business
              );
              localStorage.setItem(
                "email",
                localStorage.getItem("email")
                  ? localStorage.getItem("email")
                  : email
              );
              localStorage.setItem("b_emailSegment", b_emailSegment);
              localStorage.setItem("p_emailSegment", p_emailSegment);
              // localStorage.setItem("verificationCode", verificationCode);
              let checkbox_business = document.getElementById("bussiness_type");
              if (checkbox_business.checked) {
                localStorage.setItem("checkbox_business", true);
              }
              if (document.getElementById("companytype_1").checked) {
                localStorage.setItem("companytype_uk", true);
              }
              if (document.getElementById("companytype_2").checked) {
                localStorage.setItem("companytype_international", true);
              }
              localStorage.setItem("checkbox_InternationalCompany", true);
              localStorage.setItem(
                "companyName_international",
                document.getElementById("cname").value
              );
              localStorage.setItem(
                "companyNumber_international",
                document.getElementById("cnum").value
              );
              localStorage.setItem(
                "country_international",
                document.getElementById("countryname").value
              );
              localStorage.setItem(
                "postCode_international",
                document.getElementById("postcode").value
              );
              localStorage.setItem(
                "buldingNo_international",
                document.getElementById("buildingNoName").value
              );
              localStorage.setItem(
                "address_international",
                document.getElementById("addressValue").value
              );
              localStorage.setItem(
                "townCity_international",
                document.getElementById("townCity").value
              );
              localStorage.setItem(
                "mobileNumber_international",
                document.getElementById("mobilenum_company").value
              );
              localStorage.setItem(
                "creditcheck",
                localStorage.getItem("creditcheck")
                  ? localStorage.getItem("creditcheck")
                  : creditcheck
              );
              localStorage.setItem(
                "no_of_employee",
                localStorage.getItem("no_of_employee")
                  ? localStorage.getItem("no_of_employee")
                  : no_of_employee
              );
              localStorage.setItem(
                "riskSegment",
                localStorage.getItem("riskSegment")
                  ? localStorage.getItem("riskSegment")
                  : riskSegment
              );
              localStorage.setItem(
                "organization_duns_business",
                organization_duns_business
              );
              localStorage.setItem("creditLimit", creditLimit);
              localStorage.setItem(
                "bussinessCompanyName",
                searchCompany_business.value
              );

              localStorage.setItem(
                "registered_company_number",
                localStorage.getItem("registered_company_number")
                  ? localStorage.getItem("registered_company_number")
                  : comp_reg_no
              );
              localStorage.setItem(
                "primary_name",
                document.getElementById("primary_name")?.textContent
                  ? document.getElementById("primary_name").textContent
                  : primary_name
              );
              localStorage.setItem(
                "registered_company_number",
                localStorage.getItem("registered_company_number")
                  ? localStorage.getItem("registered_company_number")
                  : comp_reg_no
              );
              localStorage.setItem(
                "primary_address_street",
                document.getElementById("span_street1")?.textContent
                  ? document.getElementById("span_street1").textContent
                  : primary_address_street
              );
              localStorage.setItem(
                "primary_address_locality",
                document.getElementById("span_locality1")?.textContent
                  ? document.getElementById("span_locality1").textContent
                  : primary_address_locality
              );
              localStorage.setItem(
                "primary_address_region",
                document.getElementById("span_region1")?.textContent
                  ? document.getElementById("span_region1").textContent
                  : primary_address_region
              );
              localStorage.setItem(
                "primary_address_postalcode",
                document.getElementById("span_postalcode1")?.textContent
                  ? document.getElementById("span_postalcode1").textContent
                  : primary_address_postalcode
              );

              //generating guid
              function generateGUID() {
                var guid = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(
                  /[xy]/g,
                  function (c) {
                    var r = (Math.random() * 16) | 0,
                      v = c === "x" ? r : (r & 0x3) | 0x8;
                    return v.toString(16);
                  }
                );

                return guid.slice(0, 36);
              }

              var randomGUID = generateGUID();

              //generating ttl - current time + one hour
              function generateTimeOneHourLater() {
                var currentDate = new Date();

                // Add one hour to the current time
                currentDate.setHours(currentDate.getHours() + 1);

                // Format the date in YYYYMMDDHHmmSS format
                var formattedDate =
                  currentDate.getFullYear().toString() +
                  padZero(currentDate.getMonth() + 1) +
                  padZero(currentDate.getDate()) +
                  padZero(currentDate.getHours()) +
                  padZero(currentDate.getMinutes()) +
                  padZero(currentDate.getSeconds());

                let formattedDate2 = padZero(formattedDate);
                return formattedDate;
              }

              function padZero(number) {
                // Helper function to pad single-digit numbers with a leading zero
                return number < 10 ? "0" + number : number;
              }

              function removeSpaces(str) {
                return str.replace(/\s/g, ""); // This regular expression replaces all occurrences of whitespace characters with an empty string
              }

              var ttl = generateTimeOneHourLater();

              if (
                comp_reg_no == null ||
                comp_reg_no == undefined ||
                comp_reg_no == ""
              ) {
                comp_reg_no = document.getElementById("cnum").value;
              }

              firstName_business = localStorage.getItem("firstName_business");
              lastName_business = localStorage.getItem("lastName_business");
              email = localStorage.getItem("email");
              mobile_business = localStorage.getItem("mobile_business");

              if (localStorage.getItem("registered_company_number")) {
                comp_reg_no = localStorage.getItem("registered_company_number");
              }
              if (localStorage.getItem("primary_address_postalcode")) {
                primary_address_postalcode = localStorage.getItem(
                  "primary_address_postalcode"
                );
              }
              if (localStorage.getItem("b_registered_companyName")) {
                searchCompany_business.value = localStorage.getItem(
                  "b_registered_companyName"
                );
              }
              if (localStorage.getItem("International_companyDetails")) {
                let intl_company = JSON.parse(
                  localStorage.getItem("International_companyDetails")
                );
                companyName_international =
                  intl_company.companyName_international;
                postCode_international = intl_company.intl_company;
              }

              let companyNameSpacesRemoved = searchCompany_business.value
                ? removeSpaces(searchCompany_business.value)
                : removeSpaces(companyName_international);
              let splittedValue = "";
              let splittedrandomGUID = "";
              if (companyNameSpacesRemoved.length >= 5) {
                splittedValue = companyNameSpacesRemoved.substring(0, 5);
                splittedrandomGUID = randomGUID.substring(0, 13);
              } else if (companyNameSpacesRemoved.length < 5) {
                let count = 18 - parseInt(companyNameSpacesRemoved.length);
                splittedValue = companyNameSpacesRemoved;
                splittedrandomGUID = randomGUID.substring(0, count);
              } else {
                console.log(
                  "no conditions matched to generate DDPlanReference"
                );
              }
              let dynamicDdplanreference = splittedValue + splittedrandomGUID;
              console.log(
                "companyNameSpacesRemoved --->",
                companyNameSpacesRemoved
              );
              console.log(
                "companyNameSpacesRemoved.length --->",
                companyNameSpacesRemoved.length
              );
              console.log("splittedValue --->", splittedValue);
              console.log("splittedrandomGUID --->", splittedrandomGUID);
              console.log(
                "dynamicDdplanreference --->",
                dynamicDdplanreference
              );
              let queryparams = `showerrordetail=true&ttl=${ttl}&ddplanreference=${dynamicDdplanreference}&callbackurl=https://api.eu.addisonleeglobal.net/api-wpforms/v2/api/direct-debit/statuses&redirecturl=https://www.addisonlee.com/business/apply/&firstname=${firstName_business}&lastname=${lastName_business}&email=${email}&mobile=${mobile_business}&requestid=${randomGUID}&applyingascompany=true&currentpostcode=${removeSpaces(
                primary_address_postalcode
                  ? primary_address_postalcode
                  : postCode_international
              )}&companyname=${encodeURIComponent(
                searchCompany_business.value
                  ? searchCompany_business.value
                  : companyName_international
              )}&requestuserid=${randomGUID}&texttitle=Direct%20Debit%20Application&textsubtitle=Please%20ensure%20that%20all%20data%20is%20typed%20correctly&textapplybutton=Apply&showformheader=visible&currentaddresslegend=Current%20address&showtitle=hidden&showfirstname=readonly&showlastname=readonly&showdob=hidden&showemail=readonly&showmobile=readonly&showbankaccount=visible&showcompanyregistrationnumber=visible&showcompanyname=hidden&companyregistrationnumber=${comp_reg_no}`;
              console.log("queryparams --->", queryparams);
              var requestOptions = {
                method: "GET",
                mode: "no-cors",
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?edata=${encodeURIComponent(
                  queryparams
                )}`
              )
                .then((response) => {
                  if (!response.ok) {
                    if (response.status === 400 || response.status === 404) {
                    }
                    throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  let edata = JSON.parse(data);
                  let url = `https://webforms.uk.pt-x.com/forms/addisonlee/debit?edata=${edata}`;
                  let iframe = document.getElementById("directDebitFormUrl");
                  iframe.src = url;
                  document.getElementById("debitcard").style.display = "block";
                  document.getElementById("creditcard_details").style.display =
                    "none";
                  document.getElementById(
                    "payment_details_personal"
                  ).style.display = "none";
                  const iframeReference =
                    document.getElementById("directDebitFormUrl");
                  const iframeUrl = iframeReference
                    ? new URL(iframeReference.src)
                    : undefined;
                  document.addEventListener("click", "#submitBtn", () => {
                    window.scrollTo({
                      top: 500,
                      behavior: "smooth",
                    });
                  });
                  if (iframeUrl) {
                    console.log("iframe url : " + iframeUrl);
                  } else {
                    console.warn("iframe with id iframe_id not found");
                  }
                })
                .catch((error) => {
                  console.log("error while encoding query params --->", error);
                });
            }
          });

        document.addEventListener("click", function (event) {
          var searchResults = document.getElementById("companyList");
          var searchInput = document.getElementById("registered_company_name");
          var personalCodeInput = document.getElementById("postcode_personal");
          var personalCodeResult = document.getElementById("postcode_list");
          var soletraderResult = document.getElementById(
            "companyList_sole_trader"
          );
          var soleTraderInput = document.getElementById(
            "registered_company_name_sole_trader"
          );

          // Check if the click is outside the search container
          if (
            event.target !== searchInput &&
            !searchResults.contains(event.target)
          ) {
            // Close the search results
            searchResults.style.display = "none";
          }
          if (
            event.target !== personalCodeInput &&
            !personalCodeResult.contains(event.target)
          ) {
            // Close the search results
            personalCodeResult.style.display = "none";
          }
          if (
            event.target !== soleTraderInput &&
            !soletraderResult.contains(event.target)
          ) {
            // Close the search results
            soletraderResult.style.display = "none";
          }
        });

        // You may also need to handle other events like focus on the input field to display the search results.
        // searchInput.addEventListener("focus", function () {
        // Display the search results when the input is focused
        // searchResults.style.display = "block";
        // });
        document.getElementById("first_name").value =
          localStorage.getItem("firstName_business");
        document.getElementById("last_name").value =
          localStorage.getItem("lastName_business");
        document.getElementById("mobile").value =
          localStorage.getItem("mobile_business");
        let para = document.getElementById("helptext");
        para.innerHTML = `We have emailed a verification code to ${localStorage.getItem(
          "email"
        )}. Please check your inbox.<br><br>Note: It can sometimes take a few minutes for the code to be generated`;
        document.getElementById("email").value =
          localStorage.getItem("emailCode");
        let inputField = document.getElementById("email");
        inputField.type = "password";
        inputField.placeholder = "Enter code";
        let label = document.getElementById("bussinessemail");
        label.innerHTML = "Enter Code";
        let resendcode = document.getElementById("resendcode");
        resendcode.textContent = "Resend Code";
        document.getElementById("submitAndVerifyBtn").style.display = "block";
        document.getElementById("nextbtn_2").style.display = "none";
        document
          .getElementById("submitAndVerifyBtn")
          .addEventListener("click", function (e) {
            let button2 = document.getElementById("submitAndVerifyBtn");
            let buttonText2 = document.getElementById(
              "sumbitAndVerifyBtnText-Business"
            );
            let buttonSpinner2 = document.getElementById(
              "sumbitAndVeridfBtnSpinner-Business"
            );

            button2.disabled = true;
            buttonText2.style.display = "none";
            buttonSpinner2.style.display = "block";

            verificationCode = document.getElementById("email").value;
            if (verificationCode.length === 0) {
              button2.disabled = false;
              buttonText2.style.display = "block";
              buttonSpinner2.style.display = "none";
              document.getElementById("email").style.borderColor = "red";
              document.getElementById("errors").innerHTML =
                "Please enter a code";
              document
                .getElementById("submitAndVerifyBtn")
                .classList.remove("enabled");
            } else {
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?code=${encodeURIComponent(
                  verificationCode
                )}&email=${encodeURIComponent(email)}`
              )
                .then((response) => {
                  button2.disabled = false;
                  buttonText2.style.display = "block";
                  buttonSpinner2.style.display = "none";
                  if (response.status == 500) {
                    document.getElementById("email").style.borderColor = "red";
                    document.getElementById("errors").innerHTML =
                      "Please enter a valid code";
                  }
                  return response.text();
                })
                .then((data) => {
                  button2.disabled = false;
                  buttonText2.style.display = "block";
                  buttonSpinner2.style.display = "none";
                  const result = JSON.parse(data).data;
                  if (result.status == 200 && result.message == "approved") {
                    nextTab();
                    document.getElementById(
                      "account_details_personal"
                    ).style.display = "none";
                    let accountType = document.getElementById("bussiness_type");
                    let accountDetails = document
                      .querySelector(`.step:nth-child(${currentTab + 1})`)
                      .querySelector("#account_details")
                      .textContent.trim();

                    if (
                      accountType.value == "Business Account" &&
                      accountDetails === "Account Details"
                    ) {
                      document.getElementById(
                        "bussiness_comapny_details"
                      ).style.display = "block";
                      document.getElementById(
                        "account_details_personal"
                      ).style.display = "none";
                    }
                  } else if (
                    result.status == 200 &&
                    result.message == "pending"
                  ) {
                    document.getElementById("email").style.borderColor = "red";
                    document.getElementById("errors").innerHTML =
                      "Please enter a valid code";
                  }
                });
            }
          });

        if (localStorage.getItem("checkbox_business")) {
          document.getElementById("nextbtn_1").classList.add("enabled");
          document.getElementById("bussiness_type").checked =
            localStorage.getItem("checkbox_business");
        }
        document.getElementById("contactDetails_personal").style.display =
          "none";
        document.getElementById("nextbtn_2").style.display = "none";
        if (localStorage.getItem("paymentMethodDebit")) {
          document.getElementById("paymentmethod_1").checked =
            localStorage.getItem("paymentMethodDebit");
          document.getElementById("directdebit").style.display = "block";
          document.getElementById("creditcard_details").style.display = "none";
          document.getElementById("payment_details_personal").style.display =
            "none";
        }
        console.log("test log");
        document.getElementById("nextbtn_3_ukcompany").classList.add("enabled");
        document
          .getElementById("nextbtn_3_ukcompany")
          .addEventListener("click", function () {
            nextTab();
          });
        if (localStorage.getItem("bussinessCompanyName")) {
          document.getElementById("registered_company_name").value =
            localStorage.getItem("bussinessCompanyName");
          let display_label = document.getElementById("registered_label");
          display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                            >
                              Registered Company Details
                            </label>`;
          let display_data = document.getElementById("display_company_details");
          display_data.innerHTML = `<div><span id="primary_name">${localStorage.getItem(
            "primary_name"
          )}</span><br/>
          <span>#${localStorage.getItem(
            "registered_company_number"
          )}</span><br/>
                                    <span id="span_street1">${localStorage.getItem(
                                      "primary_address_street"
                                    )}</span><br/>
                                    <span id="span_locality1">${localStorage.getItem(
                                      "primary_address_locality"
                                    )}</span>
                                    <span id="span_region1">${localStorage.getItem(
                                      "primary_address_region"
                                    )}</span><span id="span_postalcode1">${localStorage.getItem(
            "primary_address_postalcode"
          )}</span><br/>
                                    </div>`;
        }
        if (localStorage.getItem("companytype_uk")) {
          document.getElementById("companytype_1").checked =
            localStorage.getItem("companytype_uk");
          document.getElementById("companyList").style.display = "none";
          document.getElementById("internationalCompany").style.display =
            "none";
          document.getElementById("account_details_personal").style.display =
            "none";
          document.getElementById("sole_trader_companyDetails").style.display =
            "none";
          document.getElementById("sole_trader_accountDetals").style.display =
            "none";
        }
        if (localStorage.getItem("companytype_international")) {
          document.getElementById("companytype_2").checked =
            localStorage.getItem("companytype_international");
          document.getElementById("ukcompany").style.display = "none";
          document.getElementById("companyList").style.display = "none";
          document.getElementById("internationalCompany").style.display =
            "block";
          document.getElementById("account_details_personal").style.display =
            "none";
          document.getElementById("sole_trader_companyDetails").style.display =
            "none";
          document.getElementById("sole_trader_accountDetals").style.display =
            "none";
          document.getElementById("cname").value = localStorage.getItem(
            "companyName_international"
          );
          document.getElementById("cnum").value = localStorage.getItem(
            "companyNumber_international"
          );
          document.getElementById("countryname").value = localStorage.getItem(
            "country_international"
          );
          document.getElementById("postcode").value = localStorage.getItem(
            "postCode_international"
          );
          document.getElementById("buildingNoName").value =
            localStorage.getItem("buldingNo_international");
          document.getElementById("addressValue").value = localStorage.getItem(
            "address_international"
          );
          document.getElementById("townCity").value = localStorage.getItem(
            "townCity_international"
          );
          document.getElementById("mobilenum_company").value =
            localStorage.getItem("mobileNumber_international");
        }
        document
          .getElementById("paymentmethod_2")
          .addEventListener("click", function () {
            let paymentType = document.getElementById("paymentmethod_2");
            if (paymentType.value === "Credit Card") {
              document.getElementById("creditcard_details").style.display =
                "block";
              document.getElementById("debitcard").style.display = "none";
              document.getElementById(
                "payment_details_personal"
              ).style.display = "none";
            }
            document.getElementById(
              "creditcard_helptext_Individual"
            ).style.display = "none";
            document.getElementById(
              "creditcard_helptext_single"
            ).style.display = "none";
          });
        document
          .getElementById("individual_credit_card")
          .addEventListener("click", function (e) {
            document.getElementById("nextbtn_4_debit").classList.add("enabled");
            let creditType = document.getElementById("individual_credit_card");
            if (creditType.value === "Individual credit") {
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "block";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "none";
            }
          });
        document
          .getElementById("single_credit_card")
          .addEventListener("click", function (e) {
            document.getElementById("nextbtn_4_debit").classList.add("enabled");
            let creditType = document.getElementById("single_credit_card");
            if (creditType.value === "single credit") {
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "none";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "block";
            }
          });

        document.querySelector(`#content1`).classList.remove("active");
        document.querySelector(`#content2`).classList.remove("active");
        document.querySelector(`#content3`).classList.remove("active");
        if (globalQueryParamStage == "9" || globalQueryParamStage == "6") {
          console.log("Entered else block global query parameter stage");
          document.querySelector("#content4").classList.remove("active");
          document.querySelector(`#content5`).classList.add("active");
          document.getElementById("debitcard").style.display = "none";
          document.getElementById(
            "creditcard_helptext_Individual"
          ).style.display = "none";
          document.getElementById("creditcard_helptext_single").style.display =
            "none";
          document
            .querySelector(`.step:nth-child(${currentTab + 4})`)
            .classList.add("submitted-tab");
          document
            .querySelector(`.step:nth-child(${currentTab + 5})`)
            .classList.add("active");
          localStorage.setItem("paymentmethod_1", false);
          localStorage.setItem("currentTab", 4);
        } else {
          localStorage.setItem("currentTab", 3);
          let newElement = `<div id="direct_debit_failed_label" style="flex-direction:column">
            We’re sorry but your Direct Debit application could not be processed at this time.<br><br> 
            To open your account please get in touch with our Sales Team on 020 3800 0365*<br><br><span style="    color: #232320;
    text-align: center;
    font-family: Steagal;
    font-size: 10px;
    font-style: normal;
    font-weight: 100;
    line-height: normal;">*(Mon-Fri 9.00AM – 5.30PM) </span>
        </div>`;
          let label = document.getElementById("payment_method_label");
          label.insertAdjacentHTML("afterend", newElement);
          document.querySelector("#content4").classList.add("active");
          console.log("current tab-->", currentTab);
          document
            .querySelector(`.step:nth-child(4)`)
            .classList.remove("submitted-tab");
          document.querySelector(`#content5`).classList.remove("active");
          document.getElementById("directdebit").style.display = "none";
          document.getElementById("paymentmethod_1").style.display = "none";
          // document.getElementById("nextbtn_4_debit").style.display = "block";
          document.getElementById("debitcard").style.display = "none";
          document.getElementById(
            "creditcard_helptext_Individual"
          ).style.display = "none";
          document.getElementById("creditcard_helptext_single").style.display =
            "none";
          document.getElementById("nextbtn_4_debit").classList.add("disabled");
        }
        document
          .getElementById("nextbtn_4_debit")
          .addEventListener("click", function () {
            let paymentType =
              document.getElementById("paymentmethod_1").checked;
            if (paymentType && localStorage.getItem("paymentmethod_1")) {
              document.getElementById("debitcard").style.display = "block";
              document.getElementById("creditcard_details").style.display =
                "none";
              document.getElementById(
                "payment_details_personal"
              ).style.display = "none";
            }

            let paymentTypeCredit =
              document.getElementById("paymentmethod_2").checked;
            if (paymentTypeCredit) {
              let individualCheck = document.getElementById(
                "individual_credit_card"
              ).checked;
              let singleCheck =
                document.getElementById("single_credit_card").checked;

              if (individualCheck || singleCheck) {
                nextTab();
              }
            }
          });

        document
          .querySelector(`.step:nth-child(${currentTab + 1})`)
          .classList.add("submitted-tab");
        document
          .querySelector(`.step:nth-child(${currentTab + 2})`)
          .classList.add("submitted-tab");
        document
          .querySelector(`.step:nth-child(${currentTab + 3})`)
          .classList.add("submitted-tab");

        document.querySelectorAll(".step .circle").forEach((circle) => {
          if (circle.parentElement.classList.contains("active")) {
            circle.style.backgroundColor = "#F8DC3D";
            circle.style.borderRadius = "30px";
            circle.style.border = "2px solid #232320";
            circle.style.color = "#232320";
          }
        });
        const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
               <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
               </svg>`;
        const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
          svgContent
        )}")`;
        document.querySelectorAll(`.step .circle`).forEach((circle) => {
          if (circle.parentElement.classList.contains("submitted-tab")) {
            circle.style.backgroundColor = "#33CB8B";
            circle.style.borderRadius = "30px";
            circle.style.border = "none";
            circle.style.backgroundImage = svgDataUri;
            circle.style.backgroundRepeat = "no-repeat";
            circle.style.fontSize = "0px";
            circle.style.display = "flex";
            circle.style.backgroundPosition = "center";
          }
        });

        function nextTab() {
          window.scrollTo(0, 0);
          console.log("Next 1", currentTab);
          localStorage.setItem("b_emailSegment", true);
          console.log(
            localStorage.getItem("b_emailSegment"),
            localStorage.getItem("currentTab")
          );

          if (document.getElementById("personal_type").checked) {
            let submitContent = document.getElementById(
              "submit_text_content_personal"
            );
            submitContent.innerHTML = `of Trading being incorporated in and forming part of every contract
            for services, ii) agree to pay the charges and priority fee as
            invoiced by Addison Lee.`;
          }
          if (document.getElementById("bussiness_type").checked) {
            let submitContent = document.getElementById(
              "submit_text_content_business"
            );
            submitContent.innerHTML = `of Trading being incorporated in and forming part of every contract
            for services, ii) agree to pay the charges and priority fee as
            invoiced by Addison Lee, and iii) confirm your permission to run a
            credit check.`;
          }
          if (localStorage.getItem("currentTab")) {
            currentTab = parseInt(localStorage.getItem("currentTab"));
            localStorage.removeItem("currentTab");
          }
          const nxtTab = currentTab + 1;
          document
            .querySelector(`#content${currentTab + 1}`)
            .classList.remove("active");
          document
            .querySelector(`.step:nth-child(${currentTab + 1})`)
            .classList.remove("active");
          currentTab = nxtTab;
          document
            .querySelector(`#content${currentTab + 1}`)
            .classList.add("active");
          document
            .querySelector(`.step:nth-child(${currentTab + 1})`)
            .classList.add("active");
          document
            .querySelector(`.step:nth-child(${currentTab + 1})`)
            .classList.remove("disabled-tab");
          document
            .querySelector(`.step:nth-child(${currentTab})`)
            .classList.add("submitted-tab");
          document.querySelectorAll(".step .circle").forEach((circle) => {
            if (circle.parentElement.classList.contains("active")) {
              circle.style.backgroundColor = "#F8DC3D";
              circle.style.borderRadius = "30px";
              circle.style.border = "2px solid #232320";
              circle.style.color = "#232320";
            }
          });
          const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
            </svg>`;
          const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
            svgContent
          )}")`;
          document.querySelectorAll(`.step .circle`).forEach((circle) => {
            if (circle.parentElement.classList.contains("submitted-tab")) {
              circle.style.backgroundColor = "#33CB8B";
              circle.style.borderRadius = "30px";
              circle.style.border = "none";
              circle.style.backgroundImage = svgDataUri;
              circle.style.backgroundRepeat = "no-repeat";
              circle.style.fontSize = "0px";
              circle.style.display = "flex";
              circle.style.backgroundPosition = "center";
            }
          });
          const activeTab = document.querySelector(`#content${currentTab}`);
          const nextTab = activeTab.nextElementSibling;
          activeTab.classList.remove("active");
        }
        //email verification

        // currentTab = 4;
        function previousTab() {
          // if(localStorage.getItem("bussinessCompanyName")){
          let companyNameInput = document.getElementById(
            "registered_company_name"
          );
          companyNameInput.addEventListener("keydown", () => {
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("disabled");
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.remove("enabled");
            document.getElementById("nextbtn_3_ukcompany").disabled = true;
          });
          // }
          if (localStorage.getItem("currentTab")) {
            document
              .querySelector(
                `.step:nth-child(${parseInt(
                  localStorage.getItem("currentTab")
                )})`
              )
              .classList.remove("submitted-tab");
            if (
              parseInt(localStorage.getItem("currentTab")) == 1 &&
              localStorage.getItem("b_emailSegment") == "true"
            ) {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${
                    parseInt(localStorage.getItem("currentTab")) + 1
                  }`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              let para = document.getElementById("helptext");
              para.innerHTML = `Please enter your email address to receive a one time passcode and verify your account`;
              let inputField = document.getElementById("email");
              inputField.type = "text";
              inputField.placeholder = "Ex: John.smith@email.com";
              let label = document.getElementById("bussinessemail");
              label.innerHTML = "BUSINESS EMAIL";
              document.getElementById("submitAndVerifyBtn").style.display =
                "none";
              document.getElementById("nextbtn_2").style.display = "block";
              document.getElementById("nextbtn_2").classList.add("enabled");
              document.getElementById("email").value =
                localStorage.getItem("email");
              document.getElementById("email").style.borderColor = "";
              document.getElementById("errors").innerHTML = "";
              localStorage.setItem("b_emailSegment", false);
            } else {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${
                    parseInt(localStorage.getItem("currentTab")) + 1
                  }`;
                  circle.style.backgroundColor = "#fff";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              let currentTb2 = parseInt(localStorage.getItem("currentTab"));
              const nxtTab = currentTb2 - 1;
              document
                .querySelector(`#content${currentTb2 + 1}`)
                .classList.remove("active");
              document
                .querySelector(`.step:nth-child(${currentTb2 + 1})`)
                .classList.remove("active");
              currentTb2 = nxtTab;
              document
                .querySelector(`#content${currentTb2 + 1}`)
                .classList.add("active");
              document
                .querySelector(`.step:nth-child(${currentTb2 + 1})`)
                .classList.add("active");
              localStorage.setItem("currentTab", currentTb2);
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${
                    parseInt(localStorage.getItem("currentTab")) + 1
                  }`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
            }
          } else {
            document
              .querySelector(`.step:nth-child(${currentTab})`)
              .classList.remove("submitted-tab");
            if (
              currentTab == 1 &&
              localStorage.getItem("b_emailSegment") == "true"
            ) {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${currentTab + 1}`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              let para = document.getElementById("helptext");
              para.innerHTML = `Please enter your email address to receive a one time passcode and verify your account`;
              let inputField = document.getElementById("email");
              inputField.type = "text";
              inputField.placeholder = "Ex: John.smith@email.com";
              let label = document.getElementById("bussinessemail");
              label.innerHTML = "BUSINESS EMAIL";
              document.getElementById("submitAndVerifyBtn").style.display =
                "none";
              document.getElementById("nextbtn_2").style.display = "block";
              document.getElementById("nextbtn_2").classList.add("enabled");
              document.getElementById("email").value =
                localStorage.getItem("email");
              document.getElementById("email").style.borderColor = "";
              document.getElementById("errors").innerHTML = "";
              localStorage.setItem("b_emailSegment", false);
            } else {
              const nxtTab = (currentTab - 1) % 5;
              document
                .querySelector(`#content${currentTab + 1}`)
                .classList.remove("active");
              document
                .querySelector(`.step:nth-child(${currentTab + 1})`)
                .classList.remove("active");
              currentTab = nxtTab;
              document
                .querySelector(`#content${currentTab + 1}`)
                .classList.add("active");
              document
                .querySelector(`.step:nth-child(${currentTab + 1})`)
                .classList.add("active");
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${currentTab + 1}`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
            }
          }
        }
        document
          .getElementById("resendcode")
          .addEventListener("click", function (event) {
            console.log("entered resend", localStorage.getItem("email"));
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?email=${encodeURIComponent(
                localStorage.getItem("email")
              )}`
            )
              .then((response) => {
                return response.text();
              })
              .then((data) => {
                console.log({ data });
                const result = JSON.parse(data).data;

                let resendcode = document.getElementById("resendcode");
                resendcode.textContent = "Code sent";
                setTimeout(() => {
                  resendcode.textContent = "Resend code";
                }, 2000);
              });
          });
        document.addEventListener("click", function (event) {
          if (
            event.target.classList.contains("nextbtn_2") ||
            event.target.id == "sendCodeText-business"
          ) {
            firstName_business = document
              .getElementById("first_name")
              .value.trim();
            lastName_business = document
              .getElementById("last_name")
              .value.trim();
            mobile_business = document.getElementById("mobile").value.trim();
            email = document.getElementById("email").value.trim(); // Declare email variable
            if (
              firstName_business === "" ||
              lastName_business === "" ||
              mobile_business === "" ||
              email === ""
            ) {
              if (firstName_business === "") {
                document.getElementById("first_name").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_firstName_error_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (lastName_business === "") {
                document.getElementById("last_name").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_lastName_error_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (mobile_business === "") {
                document.getElementById("mobile").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_mobile_error_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (email === "") {
                document.getElementById("email").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("errors").innerHTML =
                  "Please fill this mandatory field";
              }
            } else {
              document.getElementById("first_name").style.borderColor = "";
              document.getElementById("last_name").style.borderColor = "";
              document.getElementById("mobile").style.borderColor = "";
              document.getElementById("email").style.borderColor = "";
              if (mobile_business.length <= 5) {
                document.getElementById("mobile").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_mobile_error_msg").innerHTML =
                  "Please enter valid mobile number";
              } else {
                if (
                  email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                  )
                ) {
                  let button = document.getElementById("nextbtn_2");
                  let buttonText = document.getElementById(
                    "sendCodeText-business"
                  );
                  let buttonSpinner =
                    document.getElementById("sendCodeSpinner");

                  button.disabled = true;
                  buttonText.style.display = "none";
                  buttonSpinner.style.display = "block";
                  localStorage.setItem("email", email);
                  fetch(
                    `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?email=${encodeURIComponent(
                      email
                    )}`
                  )
                    .then((response) => {
                      button.disabled = false;
                      buttonText.style.display = "block";
                      buttonSpinner.style.display = "none";
                      if (response.status == 500) {
                        button.disabled = false;
                        buttonText.style.display = "block";
                        buttonSpinner.style.display = "none";
                        document.getElementById("email").style.borderColor =
                          "red";
                        document.getElementById("errors").innerHTML =
                          "Please enter a valid email";
                      }
                      return response.text();
                    })
                    .then((data) => {
                      button.disabled = false;
                      buttonText.style.display = "block";
                      buttonSpinner.style.display = "none";
                      console.log({ data });
                      const result = JSON.parse(data)?.data;
                      console.log({ result });
                      b_emailSegment = true;
                      localStorage.setItem("b_emailSegment", true);

                      if (
                        result &&
                        result.status == 200 &&
                        result.message == "verification request sent"
                      ) {
                        button.disabled = false;
                        buttonText.style.display = "block";
                        buttonSpinner.style.display = "none";
                        let para = document.getElementById("helptext");
                        para.innerHTML = `We have emailed a verification code to ${email}. Please check your inbox.<br><br>Note: It can sometimes take a few minutes for the code to be generated`;
                        document.getElementById("email").value = "";
                        let inputField = document.getElementById("email");
                        inputField.type = "password";
                        inputField.placeholder = "Enter code";
                        let label = document.getElementById("bussinessemail");
                        label.innerHTML = "Enter Code";
                        localStorage.setItem(
                          "emailCode",
                          document.getElementById("email").value
                        );
                        let resendcode = document.getElementById("resendcode");
                        resendcode.textContent = "Resend Code";
                        document.getElementById(
                          "submitAndVerifyBtn"
                        ).style.display = "block";
                        document.getElementById("nextbtn_2").style.display =
                          "none";
                        document
                          .getElementById("email")
                          .addEventListener("keydown", function (e) {
                            document
                              .getElementById("submitAndVerifyBtn")
                              .classList.add("enabled");
                            if (e.key === "Backspace") {
                              document
                                .getElementById("submitAndVerifyBtn")
                                .classList.remove("enabled");
                            }
                          });
                        document
                          .getElementById("submitAndVerifyBtn")
                          .addEventListener("click", function (e) {
                            let button2 =
                              document.getElementById("submitAndVerifyBtn");
                            let buttonText2 = document.getElementById(
                              "sumbitAndVerifyBtnText-Business"
                            );
                            let buttonSpinner2 = document.getElementById(
                              "sumbitAndVeridfBtnSpinner-Business"
                            );

                            button2.disabled = true;
                            buttonText2.style.display = "none";
                            buttonSpinner2.style.display = "block";

                            verificationCode =
                              document.getElementById("email").value;
                            if (verificationCode.length === 0) {
                              button2.disabled = false;
                              buttonText2.style.display = "block";
                              buttonSpinner2.style.display = "none";
                              document.getElementById(
                                "email"
                              ).style.borderColor = "red";
                              document.getElementById("errors").innerHTML =
                                "Please enter a code";
                              document
                                .getElementById("submitAndVerifyBtn")
                                .classList.remove("enabled");
                            } else {
                              fetch(
                                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?code=${encodeURIComponent(
                                  verificationCode
                                )}&email=${encodeURIComponent(email)}`
                              )
                                .then((response) => {
                                  button2.disabled = false;
                                  buttonText2.style.display = "block";
                                  buttonSpinner2.style.display = "none";
                                  if (response.status == 500) {
                                    document.getElementById(
                                      "email"
                                    ).style.borderColor = "red";
                                    document.getElementById(
                                      "errors"
                                    ).innerHTML = "Please enter a valid code";
                                  }
                                  return response.text();
                                })
                                .then((data) => {
                                  button2.disabled = false;
                                  buttonText2.style.display = "block";
                                  buttonSpinner2.style.display = "none";
                                  const result = JSON.parse(data).data;
                                  console.log({ result });
                                  if (
                                    result.status == 200 &&
                                    result.message == "approved"
                                  ) {
                                    nextTab();
                                    document.getElementById(
                                      "account_details_personal"
                                    ).style.display = "none";
                                    let accountType =
                                      document.getElementById("bussiness_type");
                                    let accountDetails = document
                                      .querySelector(
                                        `.step:nth-child(${currentTab + 1})`
                                      )
                                      .querySelector("#account_details")
                                      .textContent.trim();

                                    if (
                                      accountType.value == "Business Account" &&
                                      accountDetails === "Account Details"
                                    ) {
                                      document.getElementById(
                                        "bussiness_comapny_details"
                                      ).style.display = "block";
                                      document.getElementById(
                                        "account_details_personal"
                                      ).style.display = "none";
                                    }
                                  } else if (
                                    result.status == 200 &&
                                    result.message == "pending"
                                  ) {
                                    document.getElementById(
                                      "email"
                                    ).style.borderColor = "red";
                                    document.getElementById(
                                      "errors"
                                    ).innerHTML = "Please enter a valid code";
                                  }
                                });
                            }
                          });
                      } else {
                        button.disabled = false;
                        buttonText.style.display = "block";
                        buttonSpinner.style.display = "none";
                        document.getElementById("email").style.borderColor =
                          "red";
                        document.getElementById("errors").innerHTML =
                          "Please enter a valid email";
                      }
                    });
                } else {
                  button.disabled = false;
                  buttonText.style.display = "block";
                  buttonSpinner.style.display = "none";
                  document.getElementById("email").style.borderColor = "red";
                  document.getElementById("errors").innerHTML =
                    "Please enter a valid email";
                }
              }
            }
          }
        });

        function enablesubmit() {
          document.getElementById("submit").classList.add("enabled");
        }
        document.getElementById("home").style.display = "none";
        document
          .getElementById("submit")
          .addEventListener("click", function (event) {
            let checkboxSubmit = document.getElementById("SubmitCheckbox");
            if (!checkboxSubmit.checked) {
              event.preventDefault();
            } else {
              let button = document.getElementById("submit");
              let buttonText = document.getElementById("submitText");
              let buttonSpinner = document.getElementById("submitSpinner");

              button.disabled = true;
              buttonText.style.display = "none";
              buttonSpinner.style.display = "block";

              let isBusinessAccout =
                document.getElementById("bussiness_type").checked;
              let isPersonalAccout =
                document.getElementById("personal_type").checked;
              let accountType = isBusinessAccout
                ? "Business Account"
                : "Personal Account";
              let b_firstName = document
                .getElementById("first_name")
                .value.trim();
              let b_lastName = document
                .getElementById("last_name")
                .value.trim();
              let b_email = localStorage.getItem("email");
              let b_mobile = document.getElementById("mobile").value.trim();
              if (isBusinessAccout == true) {
                if (document.getElementById("companytype_1").checked == true) {
                  var b_companyName = document
                    .getElementById("registered_company_name")
                    .value.trim();
                  var b_companyCity = "";
                  var b_companyStreet =
                    document.getElementById("span_street1").textContent;
                  var b_companyPostalCode = "";
                  if (document.getElementById("span_postalcode1")) {
                    b_companyPostalCode =
                      document.getElementById("span_postalcode1").textContent;
                  }
                  if (
                    document.getElementById("span_region1") ||
                    document.getElementById("span_locality1")
                  ) {
                    b_companyCity = document
                      .getElementById("span_region1")
                      .textContent.trim()
                      ? document
                          .getElementById("span_region1")
                          .textContent.trim()
                      : document
                          .getElementById("span_locality1")
                          .textContent.trim();
                  }
                  var b_companyCountry = "United Kingdom";
                  if (localStorage.getItem("registered_company_number")) {
                    var b_companyNumber = parseInt(
                      localStorage.getItem("registered_company_number")
                    );
                  } else {
                    var b_companyNumber = document
                      .getElementById("span_company_number1")
                      .getAttribute("data-cno")
                      ? parseInt(
                          document
                            .getElementById("span_company_number1")
                            .getAttribute("data-cno")
                            .trim()
                        )
                      : 0;
                  }
                }
                if (document.getElementById("companytype_2").checked == true) {
                  var b_companyName = document
                    .getElementById("cname")
                    .value.trim();
                  var b_companyCity = document
                    .getElementById("townCity")
                    .value.trim();
                  var b_companyStreet =
                    document.getElementById("buildingNoName").value.trim() +
                    document.getElementById("addressValue").value.trim();
                  var b_companyPostalCode = document
                    .getElementById("postcode")
                    .value.trim();
                  var b_companyCountry = document.getElementById("countryname")
                    .value
                    ? document.getElementById("countryname").value.trim()
                    : "";
                  var b_companyNumber = parseInt(
                    document.getElementById("cnum").value.trim()
                  );
                  if (
                    b_companyNumber == null ||
                    b_companyNumber == undefined ||
                    isNaN(b_companyNumber) == true
                  ) {
                    b_companyNumber = 0;
                  }
                }
              }

              let b_paymentType = document.getElementById("paymentmethod_1")
                .checked
                ? "Direct Debit"
                : "Credit Card";
              let b_typeOfCreditCard = "";
              if (
                document.getElementById("individual_credit_card").checked ==
                  false &&
                document.getElementById("single_credit_card").checked == false
              ) {
                b_typeOfCreditCard = "";
              } else if (
                document.getElementById("individual_credit_card").checked ==
                  true &&
                document.getElementById("single_credit_card").checked == false
              ) {
                b_typeOfCreditCard = "Individual Credit Card";
              } else if (
                document.getElementById("individual_credit_card").checked ==
                  false &&
                document.getElementById("single_credit_card").checked == true
              ) {
                b_typeOfCreditCard = "Single Credit Card";
              }
              let b_tncAccepted =
                document.getElementById("SubmitCheckbox").checked;

              let p_firstName = document.getElementById(
                "first_name_personal"
              ).value;
              let p_lastName =
                document.getElementById("last_name_personal").value;

              let p_email = localStorage.getItem("personal_email")
                ? localStorage.getItem("personal_email")
                : personal_email;
              let p_mobile = document.getElementById("mobile_personal").value;

              let soleTrader = document.getElementById("sole_trader").checked;
              let p_companyStreet = "";
              let p_companyCity = "";
              let p_companyCountry = "";
              let p_companyPostalCode = "";
              let p_companyNumber = "";

              if (soleTrader == true) {
                p_companyName = document
                  .getElementById("registered_company_name_sole_trader")
                  .value.trim();
                p_companyStreet = document.getElementById(
                  "span_personal_company_address"
                ).textContent;
                p_companyCity = document.getElementById(
                  "span_personal_company_locality"
                ).textContent;
                p_companyCountry = document.getElementById(
                  "span_personal_company_region"
                ).textContent;
                p_companyPostalCode = document.getElementById(
                  "span_personal_company_postalcode"
                ).textContent;
                p_companyNumber = parseInt(companyNumber);
              }
              if (soleTrader == false) {
                p_companyName = p_firstName + "" + p_lastName;
                p_companyStreet =
                  document.getElementById("buildingNoName_personal").value +
                  document.getElementById("addressValue_personal").value;
                p_companyCity =
                  document.getElementById("townCity_personal").value;
                p_companyCountry = "United Kingdom";
                p_companyPostalCode =
                  document.getElementById("postcode_personal").value;
                p_companyNumber = 0;
              }

              let p_paymentType = "Credit Card";
              let p_typeOfCreditCard = "";
              let p_tncAccepted =
                document.getElementById("SubmitCheckbox").checked;

              let dnbRecommendation = localStorage.getItem("riskSegment")
                ? parseInt(localStorage.getItem("riskSegment"))
                : 0;
              let dnbCreditLimit = localStorage.getItem("creditLimit")
                ? parseInt(localStorage.getItem("creditLimit"))
                : 0;
              let dnbTotalEmployees = localStorage.getItem("no_of_employee")
                ? parseInt(localStorage.getItem("no_of_employee"))
                : 0;
              let utm_source = localStorage.getItem("utm_source")
                ? localStorage.getItem("utm_source")
                : "";
              let utm_campaign = localStorage.getItem("utm_campaign")
                ? localStorage.getItem("utm_campaign")
                : "";
              let utm_medium = localStorage.getItem("utm_medium")
                ? localStorage.getItem("utm_medium")
                : "";

              submissionPayload = {
                accountType: accountType,
                first_name: isBusinessAccout ? b_firstName : p_firstName,
                last_name: isBusinessAccout ? b_lastName : p_lastName,
                email: isBusinessAccout ? b_email : p_email,
                mobile: isBusinessAccout ? b_mobile : p_mobile,
                // companyRegion: isBusinessAccout ? b_companyRegion : "",
                companyName: isBusinessAccout ? b_companyName : p_companyName,
                companyStreet: isBusinessAccout
                  ? b_companyStreet
                  : p_companyStreet,
                companyCity: isBusinessAccout ? b_companyCity : p_companyCity,
                companyCountry: isBusinessAccout
                  ? b_companyCountry
                  : p_companyCountry,
                companyPostalCode: isBusinessAccout
                  ? b_companyPostalCode
                  : p_companyPostalCode,

                paymentType: isBusinessAccout ? b_paymentType : p_paymentType,
                typeOfCreditCard: isBusinessAccout
                  ? b_typeOfCreditCard
                  : p_typeOfCreditCard,
                termsAndConditionsAccepted: isBusinessAccout
                  ? b_tncAccepted
                  : p_tncAccepted,
                dnbRecommendation: dnbRecommendation,
                dnbCreditLimit: dnbCreditLimit,
                dnbTotalEmployees: dnbTotalEmployees,
                duns_no: localStorage.getItem("duns")
                  ? parseInt(localStorage.getItem("duns"))
                  : 0,
                utm_source: utm_source,
                utm_campaign: utm_campaign,
                utm_medium: utm_medium,
                soleTrader: soleTrader,
                directDebitMandateID: directDebitMandateID,
                otherDirectDebitParameters: otherDirectDebitParameters,
                companyNumber: isBusinessAccout
                  ? b_companyNumber
                  : p_companyNumber,
              };
              // if (comp_reg_no) {
              //   submissionPayload.companyNumber = parseInt(comp_reg_no);
              // }
              // if (localStorage.getItem("comp_reg_no")) {
              //   submissionPayload.companyNumber = parseInt(
              //     localStorage.getItem("comp_reg_no")
              //   );
              // }
              // if (document.getElementById("cnum").value.trim()) {
              //   submissionPayload.companyNumber = parseInt(
              //     document.getElementById("cnum").value.trim()
              //   );
              // }
              console.log("submissionPayload 1 --->", submissionPayload);
              const requestOptions = {
                method: "POST",
                headers: {
                  "Content-Type": "application/json",
                },
                data: JSON.stringify(submissionPayload),
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?submissionData=true`,
                {
                  method: "POST", // Specify the HTTP method
                  headers: {
                    "Content-Type": "application/json",
                  },
                  body: JSON.stringify(submissionPayload), // Collect form data
                }
              )
                .then((response) => {
                  if (!response.ok) {
                    if (
                      response.status === 400 ||
                      response.status === 404 ||
                      response.status == 500
                    ) {
                    }
                    throw new Error(`HTTP error! Status: ${response.status}`);
                    button.disabled = false;
                    buttonText.style.display = "block";
                    buttonSpinner.style.display = "none";
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  button.disabled = false;
                  buttonText.style.display = "block";
                  buttonSpinner.style.display = "none";
                  console.log("result data 1--->", data);
                  document.getElementById("afterSubmit").style.display =
                    "block";
                  let submitheadline =
                    document.getElementById("heading_submit");
                  document.getElementById("prebtn_5").style.display = "none";
                  document.getElementById("privacybtn").style.display = "none";
                  document.getElementById("submit_instructions").style.display =
                    "none";
                  let divContent = document.getElementById("afterSubmit");

                  if (document.getElementById("personal_type").checked) {
                    submitheadline.textContent =
                      "Account Application Complete!";
                    divContent.innerHTML = `Thanks again for chossing Addison Lee, London's premium choice for cars, Taxis and Courier & Delivery services.<br>
                  Please check your inbox for your Account Activation email and start making bookings today!<br>If you need support or more information,
                  don't hesitate to get in touch with our Sales Team on 020 3800 0365*<br><br><span style="    color: #232320;
    text-align: center;
    font-family: Steagal;
    font-size: 10px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                    divContent.style.width = "650px";
                  }
                  if (document.getElementById("bussiness_type").checked) {
                    submitheadline.textContent = "APPLICATION SUBMITTED";
                    divContent.innerHTML = `Thanks for choosing Addison Lee<br>
            We'll be back to you in a day (or two) with everything you need to get moving<br>
            Want to book a service today? No problem! Call us on 020 3800 0365*<br><br><span style="    color: #232320;
    text-align: center;
    font-family: Steagal;
    font-size: 10px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                  }
                  document.getElementById("home").style.display = "block";
                  document.getElementById("submit").style.display = "none";
                  document.getElementById("save_content_submit").style.display =
                    "none";
                  document
                    .querySelector(`.step:nth-child(5)`)
                    .classList.add("submitted-tab");
                  const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
            </svg>`;
                  const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
                    svgContent
                  )}")`;
                  document
                    .querySelectorAll(`.step .circle`)
                    .forEach((circle) => {
                      if (
                        circle.parentElement.classList.contains("submitted-tab")
                      ) {
                        circle.style.backgroundColor = "#33CB8B";
                        circle.style.borderRadius = "30px";
                        circle.style.border = "none";
                        circle.style.backgroundImage = svgDataUri;
                        circle.style.backgroundRepeat = "no-repeat";
                        circle.style.fontSize = "0px";
                        circle.style.display = "flex";
                        circle.style.backgroundPosition = "center";
                      }
                    });
                })
                .catch((error) => {
                  document.getElementById("submit").disabled = false;

                  console.log("error while submission --->", error);
                  document.getElementById("afterSubmit").style.display =
                    "block";
                  let submitheadline =
                    document.getElementById("heading_submit");
                  submitheadline.textContent = "Something Went Wrong";
                  document.getElementById("prebtn_5").style.display = "none";
                  document.getElementById("privacybtn").style.display = "none";
                  document.getElementById("submit_instructions").style.display =
                    "none";
                  let divContent = document.getElementById("afterSubmit");
                  divContent.innerHTML = `There was a problem while submitting your application<br>
            Please try submitting your application again<br>
            Want to book a service today? No problem! Call us on 020 3800 0365*<br><br><span style="    color: #232320;
    text-align: center;
    font-family: Steagal;
    font-size: 10px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                  document.getElementById("home").style.display = "block";
                  document.getElementById("submit").style.display = "none";
                  document.getElementById("save_content_submit").style.display =
                    "none";
                  document
                    .querySelector(`.step:nth-child(5)`)
                    .classList.add("active");
                  const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
            </svg>`;
                  const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
                    svgContent
                  )}")`;
                  document
                    .querySelectorAll(`.step .circle`)
                    .forEach((circle) => {
                      if (circle.parentElement.classList.contains("active")) {
                        circle.style.backgroundColor = "#F8DC3D";
                        circle.style.borderRadius = "30px";
                        circle.style.border = "2px solid #232320";
                        circle.style.color = "#232320";
                      }
                    });
                });
              localStorage.clear();
            }
          });
        document.getElementById("home").addEventListener("click", function () {
          window.location.href = "https://www.addisonlee.com/";
        });
        submit();
      } else {
        document.addEventListener("click", function (event) {
          var searchResults = document.getElementById("companyList");
          var searchInput = document.getElementById("registered_company_name");
          var personalCodeInput = document.getElementById("postcode_personal");
          var personalCodeResult = document.getElementById("postcode_list");
          var soletraderResult = document.getElementById(
            "companyList_sole_trader"
          );
          var soleTraderInput = document.getElementById(
            "registered_company_name_sole_trader"
          );

          // Check if the click is outside the search container
          if (
            event.target !== searchInput &&
            !searchResults.contains(event.target)
          ) {
            // Close the search results
            searchResults.style.display = "none";
          }
          if (
            event.target !== personalCodeInput &&
            !personalCodeResult.contains(event.target)
          ) {
            // Close the search results
            personalCodeResult.style.display = "none";
          }
          if (
            event.target !== soleTraderInput &&
            !soletraderResult.contains(event.target)
          ) {
            // Close the search results
            soletraderResult.style.display = "none";
          }
        });

        function enableNextButton() {
          document.getElementById("nextbtn_1").classList.add("enabled");
        }

        const inputFields_contact_business = [
          "first_name",
          "last_name",
          "mobile",
          "email",
        ];
        inputFields_contact_business.forEach((fieldId) => {
          document
            .getElementById(fieldId)
            .addEventListener("keydown", function (e) {
              document.getElementById(fieldId).style.borderColor = "";
              if (fieldId == "first_name") {
                document.getElementById("b_firstName_error_msg").innerHTML = "";
              }
              if (fieldId == "last_name") {
                document.getElementById("b_lastName_error_msg").innerHTML = "";
              }
              document.getElementById("nextbtn_2").classList.add("enabled");
              if (e.key === "Backspace") {
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
              }
            });
        });
        const inputFields_contact_personal = [
          "first_name_personal",
          "last_name_personal",
          "mobile_personal",
          "email_personal",
        ];
        inputFields_contact_personal.forEach((fieldId) => {
          document
            .getElementById(fieldId)
            .addEventListener("keydown", function (e) {
              document.getElementById(fieldId).style.borderColor = "";
              if (fieldId == "first_name_personal") {
                document.getElementById("p_firstName_err_msg").innerHTML = "";
              }
              if (fieldId == "last_name_personal") {
                document.getElementById("p_lastName_err_msg").innerHTML = "";
              }
              document
                .getElementById("nextbtn_2_personal")
                .classList.add("enabled");
              if (e.key === "Backspace") {
                document
                  .getElementById("nextbtn_2_personal")
                  .classList.remove("enabled");
              }
            });
        });
        const inputField_internationalCompany = [
          "cname",
          "cnum",
          "countryname",
          "postcode",
          "buildingNoName",
          "addressValue",
          "townCity",
          "mobilenum_company",
        ];
        inputField_internationalCompany.forEach((fieldId) => {
          document
            .getElementById(fieldId)
            .addEventListener("keydown", function (e) {
              document.getElementById(fieldId).style.borderColor = "";
              if (fieldId == "cname") {
                document.getElementById("b_cname_err_msg").innerHTML = "";
              }
              if (fieldId == "cnum") {
                document.getElementById("b_cnum_err_msg").innerHTML = "";
              }
              if (fieldId == "countryname") {
                document.getElementById("b_countryName_err_msg").innerHTML = "";
              }
              if (fieldId == "postcode") {
                document.getElementById("b_countryPostcode_err_msg").innerHTML =
                  "";
              }
              if (fieldId == "buildingNoName") {
                document.getElementById("b_buildingNoName_err_msg").innerHTML =
                  "";
              }
              if (fieldId == "addressValue") {
                document.getElementById("b_address_err_msg").innerHTML = "";
              }
              if (fieldId == "townCity") {
                document.getElementById("b_townCity_err_msg").innerHTML = "";
              }
              if (fieldId == "mobilenum_company") {
                document.getElementById("b_in_mobile_err_msg").innerHTML = "";
              }
              document
                .getElementById("nextbtn_3_internationalCompany")
                .classList.add("enabled");
              if (e.key === "Backspace") {
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
              }
            });
        });
        const inputfields_accountdetails_personal = [
          "postcode_personal",
          "buildingNoName_personal",
          "addressValue_personal",
          "townCity_personal",
        ];
        inputfields_accountdetails_personal.forEach((fieldId) => {
          document
            .getElementById(fieldId)
            .addEventListener("keydown", function (e) {
              document.getElementById(fieldId).style.borderColor = "";

              if (fieldId == "postcode_personal") {
                document.getElementById("p_postcode_err_msg").innerHTML = "";
              }
              if (fieldId == "buildingNoName_personal") {
                document.getElementById("p_buildingNoName_err_msg").innerHTML =
                  "";
              }
              if (fieldId == "addressValue_personal") {
                document.getElementById("p_address_err_msg").innerHTML = "";
              }
              if (fieldId == "townCity_personal") {
                document.getElementById("p_towncity_err_msg").innerHTML = "";
              }
              document
                .getElementById("nextbtn_3_personal")
                .classList.add("enabled");
              if (e.key === "Backspace") {
                document
                  .getElementById("nextbtn_3_personal")
                  .classList.remove("enabled");
              }
            });
        });

        function enableCardStatus() {
          document.getElementById("nextbtn_4_debit").classList.add("enabled");
        }
        function enablesubmit() {
          document.getElementById("submit").classList.add("enabled");
        }
        document.getElementById("contactDetails_business").style.display =
          "none";
        document.getElementById("contactDetails_personal").style.display =
          "none";
        document.getElementById("ukcompany").style.display = "none";
        document.getElementById("internationalCompany").style.display = "none";
        document.getElementById("account_details_personal").style.display =
          "none";
        document.getElementById("debitcard").style.display = "none";
        document.getElementById("creditcard_details").style.display = "none";
        document.getElementById("payment_details_personal").style.display =
          "none";
        document.getElementById("afterSubmit").style.display = "none";
        document.getElementById("sole_trader_companyDetails").style.display =
          "none";
        document.getElementById("submitAndVerifyBtn").style.display = "none";
        document.getElementById("submitAndVerifyBtn_personal").style.display =
          "none";
        document.getElementById("home").style.display = "none";
        document.getElementById("postcode_list").style.display = "none";
        document.getElementById(
          "creditcard_helptext_Individual"
        ).style.display = "none";
        document.getElementById("creditcard_helptext_single").style.display =
          "none";

        document
          .querySelectorAll(".tooltip_personal")
          .forEach(function (element) {
            element.addEventListener("mouseover", function () {
              document.querySelector(".tooltiptext_personal").style.visibility =
                "visible";
            });

            element.addEventListener("mouseleave", function () {
              document.querySelector(".tooltiptext_personal").style.visibility =
                "hidden";
            });
          });

        document
          .querySelectorAll(".tooltip_business")
          .forEach(function (element) {
            element.addEventListener("mouseover", function () {
              document.querySelector(".tooltiptext_business").style.visibility =
                "visible";
            });

            element.addEventListener("mouseleave", function () {
              document.querySelector(".tooltiptext_business").style.visibility =
                "hidden";
            });
          });

        document
          .getElementById("close_personal")
          .addEventListener("click", function () {
            document.querySelector(".tooltiptext_personal").style.visibility =
              "hidden";
          });
        document
          .getElementById("close_business")
          .addEventListener("click", function () {
            document.querySelector(".tooltiptext_business").style.visibility =
              "hidden";
          });

        document
          .getElementById("bussiness_type")
          .addEventListener("click", function () {
            if (
              window.parent.location.href.includes("id=") &&
              window.parent.location.href.includes("stage") &&
              window.parent.location.href.includes("company")
            ) {
              window.location.search = "";
              window.parent.location.search = "";
              window.parent.location.href =
                "https://www.addisonlee.com/business/apply/";
            }
            let accountType = document.getElementById("bussiness_type");
            localStorage.setItem("business_flow_selected", true);
            if (localStorage.getItem("personal_flow_selected")) {
              localStorage.clear();
              localStorage.setItem("business_flow_selected", true);
              location.reload();
            }
            if (accountType.value === "Business Account") {
              document.getElementById("contactDetails_business").style.display =
                "block";
              document.getElementById("contactDetails_personal").style.display =
                "none";
            }
          });

        document
          .getElementById("personal_type")
          .addEventListener("click", function () {
            if (
              window.parent.location.href.includes("id=") &&
              window.parent.location.href.includes("stage") &&
              window.parent.location.href.includes("company")
            ) {
              window.location.search = "";
              window.parent.location.search = "";
              window.parent.location.href =
                "https://www.addisonlee.com/business/apply/";
            }
            let accountType = document.getElementById("personal_type");
            localStorage.setItem("personal_flow_selected", true);
            if (localStorage.getItem("business_flow_selected")) {
              localStorage.clear();
              localStorage.setItem("personal_flow_selected", true);
              location.reload();
            }
            if (accountType.value === "Personal Account") {
              document.getElementById("contactDetails_business").style.display =
                "none";
              document.getElementById("contactDetails_personal").style.display =
                "block";
            }
          });

        document
          .getElementById("resendcode")
          .addEventListener("click", function (event) {
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?email=${encodeURIComponent(
                email
              )}`
            )
              .then((response) => {
                return response.text();
              })
              .then((data) => {
                const result = JSON.parse(data).data;

                let resendcode = document.getElementById("resendcode");
                resendcode.textContent = "Code sent";
                setTimeout(() => {
                  resendcode.textContent = "Resend code";
                }, 2000);
              });
          });
        document
          .getElementById("email")
          .addEventListener("keydown", function (e) {
            document.getElementById("email").style.borderColor = "";
            document.getElementById("errors").innerHTML = "";
            if (e.key === "Backspace") {
              document.getElementById("email").style.borderColor = "";
              document.getElementById("errors").innerHTML = "";
            }
          });
        document
          .getElementById("mobile")
          .addEventListener("keydown", function (e) {
            document.getElementById("mobile").style.borderColor = "";
            document.getElementById("b_mobile_error_msg").innerHTML = "";

            if (e.key === "Backspace") {
              document.getElementById("mobile").style.borderColor = "";
              document.getElementById("b_mobile_error_msg").innerHTML = "";
            }
          });

        document.addEventListener("click", function (event) {
          if (
            event.target.classList.contains("nextbtn_2") ||
            event.target.id == "sendCodeText-business"
          ) {
            firstName_business = document
              .getElementById("first_name")
              .value.trim();
            lastName_business = document
              .getElementById("last_name")
              .value.trim();
            mobile_business = document.getElementById("mobile").value.trim();
            email = document.getElementById("email").value.trim(); // Declare email variable
            if (
              firstName_business === "" ||
              lastName_business === "" ||
              mobile_business === "" ||
              email === ""
            ) {
              if (firstName_business === "") {
                document.getElementById("first_name").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_firstName_error_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (lastName_business === "") {
                document.getElementById("last_name").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_lastName_error_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (mobile_business === "") {
                document.getElementById("mobile").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_mobile_error_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (email === "") {
                document.getElementById("email").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("errors").innerHTML =
                  "Please fill this mandatory field";
              }
            } else {
              document.getElementById("first_name").style.borderColor = "";
              document.getElementById("last_name").style.borderColor = "";
              document.getElementById("mobile").style.borderColor = "";
              document.getElementById("email").style.borderColor = "";
              if (mobile_business.length <= 5) {
                document.getElementById("mobile").style.borderColor = "red";
                document
                  .getElementById("nextbtn_2")
                  .classList.remove("enabled");
                document.getElementById("b_mobile_error_msg").innerHTML =
                  "Please enter valid mobile number";
              } else {
                if (
                  email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                  )
                ) {
                  let button = document.getElementById("nextbtn_2");
                  let buttonText = document.getElementById(
                    "sendCodeText-business"
                  );
                  let buttonSpinner =
                    document.getElementById("sendCodeSpinner");

                  button.disabled = true;
                  buttonText.style.display = "none";
                  buttonSpinner.style.display = "block";
                  localStorage.setItem("email", email);
                  fetch(
                    `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?email=${encodeURIComponent(
                      email
                    )}`
                  )
                    .then((response) => {
                      button.disabled = false;
                      buttonText.style.display = "block";
                      buttonSpinner.style.display = "none";
                      if (response.status == 500) {
                        button.disabled = false;
                        buttonText.style.display = "block";
                        buttonSpinner.style.display = "none";
                        document.getElementById("email").style.borderColor =
                          "red";
                        document.getElementById("errors").innerHTML =
                          "Please enter a valid email";
                      }
                      return response.text();
                    })
                    .then((data) => {
                      button.disabled = false;
                      buttonText.style.display = "block";
                      buttonSpinner.style.display = "none";
                      console.log({ data });
                      const result = JSON.parse(data)?.data;
                      console.log({ result });
                      b_emailSegment = true;
                      localStorage.setItem("b_emailSegment", true);

                      if (
                        result &&
                        result.status == 200 &&
                        result.message == "verification request sent"
                      ) {
                        button.disabled = false;
                        buttonText.style.display = "block";
                        buttonSpinner.style.display = "none";
                        let para = document.getElementById("helptext");
                        para.innerHTML = `We have emailed a verification code to ${email}. Please check your inbox.<br><br>Note: It can sometimes take a few minutes for the code to be generated`;
                        document.getElementById("email").value = "";
                        let inputField = document.getElementById("email");
                        inputField.type = "password";
                        inputField.placeholder = "Enter code";
                        let label = document.getElementById("bussinessemail");
                        label.innerHTML = "Enter Code";
                        localStorage.setItem(
                          "emailCode",
                          document.getElementById("email").value
                        );
                        let resendcode = document.getElementById("resendcode");
                        resendcode.textContent = "Resend Code";
                        document.getElementById(
                          "submitAndVerifyBtn"
                        ).style.display = "block";
                        document.getElementById("nextbtn_2").style.display =
                          "none";
                        document
                          .getElementById("email")
                          .addEventListener("keydown", function (e) {
                            document
                              .getElementById("submitAndVerifyBtn")
                              .classList.add("enabled");
                            if (e.key === "Backspace") {
                              document
                                .getElementById("submitAndVerifyBtn")
                                .classList.remove("enabled");
                            }
                          });
                        document
                          .getElementById("submitAndVerifyBtn")
                          .addEventListener("click", function (e) {
                            let button2 =
                              document.getElementById("submitAndVerifyBtn");
                            let buttonText2 = document.getElementById(
                              "sumbitAndVerifyBtnText-Business"
                            );
                            let buttonSpinner2 = document.getElementById(
                              "sumbitAndVeridfBtnSpinner-Business"
                            );

                            button2.disabled = true;
                            buttonText2.style.display = "none";
                            buttonSpinner2.style.display = "block";

                            verificationCode =
                              document.getElementById("email").value;
                            if (verificationCode.length === 0) {
                              button2.disabled = false;
                              buttonText2.style.display = "block";
                              buttonSpinner2.style.display = "none";
                              document.getElementById(
                                "email"
                              ).style.borderColor = "red";
                              document.getElementById("errors").innerHTML =
                                "Please enter a code";
                              document
                                .getElementById("submitAndVerifyBtn")
                                .classList.remove("enabled");
                            } else {
                              fetch(
                                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?code=${encodeURIComponent(
                                  verificationCode
                                )}&email=${encodeURIComponent(email)}`
                              )
                                .then((response) => {
                                  button2.disabled = false;
                                  buttonText2.style.display = "block";
                                  buttonSpinner2.style.display = "none";
                                  if (response.status == 500) {
                                    document.getElementById(
                                      "email"
                                    ).style.borderColor = "red";
                                    document.getElementById(
                                      "errors"
                                    ).innerHTML = "Please enter a valid code";
                                  }
                                  return response.text();
                                })
                                .then((data) => {
                                  button2.disabled = false;
                                  buttonText2.style.display = "block";
                                  buttonSpinner2.style.display = "none";
                                  const result = JSON.parse(data).data;
                                  console.log({ result });
                                  if (
                                    result.status == 200 &&
                                    result.message == "approved"
                                  ) {
                                    nextTab();
                                    document.getElementById(
                                      "account_details_personal"
                                    ).style.display = "none";
                                    let accountType =
                                      document.getElementById("bussiness_type");
                                    let accountDetails = document
                                      .querySelector(
                                        `.step:nth-child(${currentTab + 1})`
                                      )
                                      .querySelector("#account_details")
                                      .textContent.trim();

                                    if (
                                      accountType.value == "Business Account" &&
                                      accountDetails === "Account Details"
                                    ) {
                                      document.getElementById(
                                        "bussiness_comapny_details"
                                      ).style.display = "block";
                                      document.getElementById(
                                        "account_details_personal"
                                      ).style.display = "none";
                                    }
                                  } else if (
                                    result.status == 200 &&
                                    result.message == "pending"
                                  ) {
                                    document.getElementById(
                                      "email"
                                    ).style.borderColor = "red";
                                    document.getElementById(
                                      "errors"
                                    ).innerHTML = "Please enter a valid code";
                                  }
                                });
                            }
                          });
                      } else {
                        button.disabled = false;
                        buttonText.style.display = "block";
                        buttonSpinner.style.display = "none";
                        document.getElementById("email").style.borderColor =
                          "red";
                        document.getElementById("errors").innerHTML =
                          "Please enter a valid email";
                      }
                    });
                } else {
                  button.disabled = false;
                  buttonText.style.display = "block";
                  buttonSpinner.style.display = "none";
                  document.getElementById("email").style.borderColor = "red";
                  document.getElementById("errors").innerHTML =
                    "Please enter a valid email";
                }
              }
            }
          }
        });
        document
          .getElementById("resendcode_personal")
          .addEventListener("click", function (event) {
            let p_contactDetails = localStorage.getItem(
              "contactDetails_personal"
            );
            var parsedData = JSON.parse(p_contactDetails);
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?email=${encodeURIComponent(
                personal_email ? personal_email : parsedData.email_personal
              )}`
            )
              .then((response) => {
                return response.text();
              })
              .then((data) => {
                const result = JSON.parse(data).data;
                let resendcode = document.getElementById("resendcode_personal");
                resendcode.textContent = "Code sent";
                setTimeout(() => {
                  resendcode.textContent = "Resend code";
                }, 2000);
              });
          });
        document
          .getElementById("email_personal")
          .addEventListener("keydown", function (e) {
            document.getElementById("email_personal").style.borderColor = "";
            document.getElementById("errors_personal").innerHTML = "";
            if (e.key === "Backspace") {
              document.getElementById("email_personal").style.borderColor = "";
              document.getElementById("errors_personal").innerHTML = "";
            }
          });
        document
          .getElementById("mobile_personal")
          .addEventListener("keydown", function (e) {
            document.getElementById("mobile_personal").style.borderColor = "";
            document.getElementById("p_mobile_err_msg").innerHTML = "";
            if (e.key === "Backspace") {
              document.getElementById("mobile_personal").style.borderColor = "";
              document.getElementById("p_mobile_err_msg").innerHTML = "";
            }
          });
        document.addEventListener("click", function (event) {
          if (
            event.target.classList.contains("nextbtn_2_personal") ||
            event.target.id == "sendCodeText"
          ) {
            let firstName = document.getElementById(
              "first_name_personal"
            ).value;
            let lastName = document.getElementById("last_name_personal").value;
            let mobile = document.getElementById("mobile_personal").value;
            personal_email = document.getElementById("email_personal").value;
            if (
              firstName.length === 0 ||
              lastName.length === 0 ||
              mobile.length === 0 ||
              personal_email.length === 0
            ) {
              if (firstName === "") {
                document.getElementById(
                  "first_name_personal"
                ).style.borderColor = "red";
                document
                  .getElementById("nextbtn_2_personal")
                  .classList.remove("enabled");

                document.getElementById("p_firstName_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (lastName === "") {
                document.getElementById(
                  "last_name_personal"
                ).style.borderColor = "red";
                document
                  .getElementById("nextbtn_2_personal")
                  .classList.remove("enabled");
                document.getElementById("p_lastName_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (mobile === "") {
                document.getElementById("mobile_personal").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_2_personal")
                  .classList.remove("enabled");
                document.getElementById("p_mobile_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (personal_email === "") {
                document.getElementById("email_personal").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_2_personal")
                  .classList.remove("enabled");
                document.getElementById("errors_personal").innerHTML =
                  "Please fill this mandatory field";
              }
            } else {
              document.getElementById("first_name_personal").style.borderColor =
                "";
              document.getElementById("last_name_personal").style.borderColor =
                "";
              document.getElementById("mobile_personal").style.borderColor = "";
              document.getElementById("email_personal").style.borderColor = "";
              if (mobile.length <= 5) {
                document.getElementById("mobile_personal").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_2_personal")
                  .classList.remove("enabled");
                document.getElementById("p_mobile_err_msg").innerHTML =
                  "Please enter a valid mobile number";
              } else {
                if (
                  personal_email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                  )
                ) {
                  var spinner = document.getElementById("spinner");

                  document.getElementById("nextbtn_2_personal").disabled = true;
                  document.getElementById("sendCodeText").style.display =
                    "none";
                  spinner.style.display = "inline-block";

                  localStorage.setItem("personal_email", personal_email);
                  // fetch(
                  //   `https://www.google.com?email=${encodeURIComponent(
                  //     personal_email
                  //   )}`
                  // )
                  fetch(
                    `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?email=${encodeURIComponent(
                      personal_email
                    )}`
                  )
                    .then((response) => {
                      if (response.status == 500) {
                        document.getElementById(
                          "email_personal"
                        ).style.borderColor = "red";
                        document.getElementById("errors_personal").innerHTML =
                          "Please enter a valid email";
                      }
                      return response.text();
                    })
                    .then((data) => {
                      console.log({ data });
                      p_emailSegment = true;
                      localStorage.setItem("p_emailSegment", true);
                      const result = JSON.parse(data).data;
                      if (
                        result &&
                        result.status == 200 &&
                        result.message == "verification request sent"
                      ) {
                        document.getElementById(
                          "nextbtn_2_personal"
                        ).disabled = false;
                        document.getElementById("sendCodeText").style.display =
                          "block";
                        spinner.style.display = "none";
                        document.getElementById("email_personal").value = "";
                        document.getElementById(
                          "first_name_personal"
                        ).style.borderColor = "";
                        document.getElementById(
                          "last_name_personal"
                        ).style.borderColor = "";
                        document.getElementById(
                          "mobile_personal"
                        ).style.borderColor = "";
                        document.getElementById(
                          "email_personal"
                        ).style.borderColor = "";
                        let para = document.getElementById("helptext_personal");
                        para.innerHTML = `We have emailed a verification code to ${personal_email}. Please check your inbox.<br><br>Note: It can sometimes take a few minutes for the code to be generated`;
                        let inputField =
                          document.getElementById("email_personal");
                        inputField.type = "password";
                        inputField.placeholder = "Enter code";
                        let label = document.getElementById(
                          "bussinessemail_personal"
                        );
                        label.innerHTML = "Enter Code";
                        let resendcode = document.getElementById(
                          "resendcode_personal"
                        );
                        resendcode.textContent = "Resend Code";
                        document.getElementById(
                          "submitAndVerifyBtn_personal"
                        ).style.display = "block";
                        document.getElementById(
                          "nextbtn_2_personal"
                        ).style.display = "none";
                        document
                          .getElementById("email_personal")
                          .addEventListener("keydown", function (event) {
                            document
                              .getElementById("submitAndVerifyBtn_personal")
                              .classList.add("enabled");
                            if (event.key === "Backspace") {
                              document
                                .getElementById("submitAndVerifyBtn_personal")
                                .classList.remove("enabled");
                            }
                          });
                      } else if (
                        result &&
                        result.status == 200 &&
                        result.message == "pending"
                      ) {
                        document.getElementById(
                          "nextbtn_2_personal"
                        ).disabled = false;
                        document.getElementById("sendCodeText").style.display =
                          "block";
                        spinner.style.display = "none";
                        document.getElementById(
                          "email_personal"
                        ).style.borderColor = "red";
                        document.getElementById("errors_personal").innerHTML =
                          "Please enter a valid code";
                      } else {
                        document.getElementById(
                          "nextbtn_2_personal"
                        ).disabled = false;
                        document.getElementById("sendCodeText").style.display =
                          "block";
                        spinner.style.display = "none";
                        console.log("test");
                        document.getElementById(
                          "email_personal"
                        ).style.borderColor = "red";
                        document.getElementById("errors_personal").innerHTML =
                          "Please enter a valid code";
                      }
                    });
                } else {
                  document.getElementById("email_personal").style.borderColor =
                    "red";
                  document.getElementById("errors_personal").innerHTML =
                    "Please enter a valid email";
                }
              }
            }
          }
        });
        document
          .getElementById("submitAndVerifyBtn_personal")
          .addEventListener("click", function (e) {
            console.log("Entered");
            personal_verification_code =
              document.getElementById("email_personal").value;
            if (personal_verification_code.length === 0) {
              document.getElementById("email_personal").style.borderColor =
                "red";
              document.getElementById("errors_personal").innerHTML =
                "Please enter a code";
              document
                .getElementById("submitAndVerifyBtn_personal")
                .classList.remove("enabled");
            } else {
              let spinner = document.getElementById("submitVerifySpinner");
              document.getElementById(
                "submitAndVerifyBtn_personal"
              ).disabled = true;
              document.getElementById("verify").style.display = "none";
              spinner.style.display = "inline-block";

              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?code=${encodeURIComponent(
                  personal_verification_code
                )}&email=${encodeURIComponent(personal_email)}`
              )
                .then((response) => {
                  if (response.status == 500) {
                    document.getElementById(
                      "submitAndVerifyBtn_personal"
                    ).disabled = false;
                    document.getElementById("verify").style.display = "block";
                    spinner.style.display = "none";
                    document.getElementById(
                      "email_personal"
                    ).style.borderColor = "red";
                    document.getElementById("errors_personal").innerHTML =
                      "Please enter a valid code";
                  }
                  return response.text();
                })
                .then((data) => {
                  const result = JSON.parse(data).data;
                  console.log(data);
                  if (result?.status == 200 && result?.message == "approved") {
                    document.getElementById(
                      "submitAndVerifyBtn_personal"
                    ).disabled = false;
                    document.getElementById("verify").style.display = "block";
                    spinner.style.display = "none";
                    nextTab();
                    let accountType = document.getElementById("personal_type");
                    let accountDetails = document
                      .querySelector(`.step:nth-child(${currentTab + 1})`)
                      .querySelector("#account_details")
                      .textContent.trim();

                    if (
                      accountType.value == "Personal Account" &&
                      accountDetails === "Account Details"
                    ) {
                      document.getElementById(
                        "bussiness_comapny_details"
                      ).style.display = "none";
                      document.getElementById(
                        "account_details_personal"
                      ).style.display = "block";
                      let accountname = document.getElementById(
                        "account_holder_name_personal"
                      );
                      accountname.innerHTML = "";
                      accountname.innerHTML += `${
                        document.getElementById("first_name_personal").value
                      } ${document.getElementById("last_name_personal").value}`;
                    }
                  } else {
                    document.getElementById(
                      "submitAndVerifyBtn_personal"
                    ).disabled = false;
                    document.getElementById("verify").style.display = "block";
                    spinner.style.display = "none";
                    document.getElementById(
                      "email_personal"
                    ).style.borderColor = "red";
                    document.getElementById("errors_personal").innerHTML =
                      "Please enter a valid code";
                  }
                });
            }
          });

        document
          .getElementById("find_address")
          .addEventListener("click", function (e) {
            let button = document.getElementById("find_address");
            let buttonText = document.getElementById("findAddress");
            let spinner = document.getElementById("findBtnSpinner");

            button.disabled = true;
            buttonText.style.display = "none";
            spinner.style.display = "block";

            let postcode = document.getElementById("postcode_personal").value;
            let postcodeList = document.getElementById("postcode_list");
            if (postcode.length == 0) {
              button.disabled = false;
              buttonText.style.display = "block";
              spinner.style.display = "none";
              document.getElementById("postcode_personal").style.borderColor =
                "red";
              document.getElementById("p_postcode_err_msg").innerHTML =
                "Please enter proper post code";

              postcodeList.innerHTML = "";
            }

            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?postcode=${encodeURIComponent(
                postcode
              )}`
            )
              .then((response) => {
                console.log({ response });
                return response.text();
              })
              .then((data) => {
                const result = JSON.parse(data).data;

                if (result.length == 0) {
                  button.disabled = false;
                  buttonText.style.display = "block";
                  spinner.style.display = "none";
                  document.getElementById(
                    "postcode_personal"
                  ).style.borderColor = "red";
                  document.getElementById("p_postcode_err_msg").innerHTML =
                    "Please enter proper post code";
                }
                postcodeList.innerHTML = "";
                button.disabled = false;
                buttonText.style.display = "block";
                spinner.style.display = "none";
                result.forEach((item) => {
                  let option = document.createElement("li");
                  option.innerHTML = `${item.formatted_address}`;
                  option.setAttribute(
                    "data-buildingname",
                    item.address_components.buildingName
                      ? item.address_components.buildingName
                      : ""
                  );
                  option.setAttribute(
                    "data-address",
                    item.address_components.address
                      ? item.address_components.address
                      : ""
                  );
                  option.setAttribute(
                    "data-city",
                    item.address_components.city
                      ? item.address_components.city
                      : ""
                  );
                  option.setAttribute(
                    "data-postcode",
                    item.address_components.postcode
                      ? item.address_components.postcode
                      : ""
                  );
                  postcodeList.innerHTML += option.outerHTML;
                  document.getElementById("postcode_list").style.display =
                    "block";
                });
                postcodeList.addEventListener("click", function (event) {
                  const selectOption = event.target;
                  selectOption.classList.add("selected");
                  document.getElementById("postcode_personal").value =
                    selectOption.dataset.postcode;
                  document.getElementById("buildingNoName_personal").value =
                    selectOption.dataset.buildingname;
                  document.getElementById("addressValue_personal").value =
                    selectOption.dataset.address;
                  document.getElementById("townCity_personal").value =
                    selectOption.dataset.city;
                  document.getElementById("postcode_list").style.display =
                    "none";
                  document.getElementById("p_postcode_err_msg").innerHTML = "";
                  document.getElementById(
                    "p_buildingNoName_err_msg"
                  ).innerHTML = "";
                  document.getElementById("p_address_err_msg").innerHTML = "";
                  document.getElementById("p_towncity_err_msg").innerHTML = "";
                  document.getElementById(
                    "postcode_personal"
                  ).style.borderColor = "";
                  document.getElementById(
                    "buildingNoName_personal"
                  ).style.borderColor = "";
                  document.getElementById(
                    "townCity_personal"
                  ).style.borderColor = "";
                  document.getElementById("postcode_list").style.borderColor =
                    "";
                  document.getElementById(
                    "addressValue_personal"
                  ).style.borderColor = "";
                  document
                    .getElementById("nextbtn_3_personal")
                    .classList.add("enabled");
                });
              });
          });
        document.addEventListener("click", function (event) {
          if (event.target.classList.contains("nextbtn_3_personal")) {
            document.getElementById("creditcard_details").style.display =
              "none";
            document.getElementById(
              "creditcard_helptext_single"
            ).style.display = "none";
            document.getElementById(
              "creditcard_helptext_Individual"
            ).style.display = "none";
            let postcode = document.getElementById("postcode_personal").value;
            let buldingNum_Name = document.getElementById(
              "buildingNoName_personal"
            ).value;
            let address = document.getElementById(
              "addressValue_personal"
            ).value;
            let city = document.getElementById("townCity_personal").value;
            if (
              postcode.length === 0 ||
              buldingNum_Name.length === 0 ||
              address.length === 0 ||
              city.length === 0
            ) {
              if (postcode === "") {
                document.getElementById("postcode_personal").style.borderColor =
                  "red";
                document.getElementById("p_postcode_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (buldingNum_Name === "") {
                document.getElementById(
                  "buildingNoName_personal"
                ).style.borderColor = "red";
                document.getElementById("p_buildingNoName_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (address === "") {
                document.getElementById(
                  "addressValue_personal"
                ).style.borderColor = "red";
                document.getElementById("p_address_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (city === "") {
                document.getElementById("townCity_personal").style.borderColor =
                  "red";
                document.getElementById("p_towncity_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
            } else {
              nextTab();
              document.getElementById("postcode_personal").style.borderColor =
                "";
              document.getElementById(
                "buildingNoName_personal"
              ).style.borderColor = "";
              document.getElementById(
                "addressValue_personal"
              ).style.borderColor = "";
              document.getElementById("townCity_personal").style.borderColor =
                "";
              let accountType = document.getElementById("personal_type");
              let accountDetails = document
                .querySelector(`.step:nth-child(${currentTab + 1})`)
                .querySelector("#payment_details")
                .textContent.trim();
              if (
                accountType.value == "Personal Account" &&
                accountDetails === "Payment Details"
              ) {
                document.getElementById(
                  "payment_details_personal"
                ).style.display = "block";
                document.getElementById(
                  "payment_details_bussiness"
                ).style.display = "none";
                document.getElementById("button_3_debit").style.display =
                  "none";
                document.getElementById(
                  "save_debitCredit_details"
                ).style.display = "none";
              }
            }
          }
        });

        document.addEventListener("click", function (event) {
          if (
            event.target.classList.contains("nextbtn_3_personal_soleTrader")
          ) {
            let registeredCompany = document.getElementById(
              "registered_company_name_sole_trader"
            ).value;
            document.getElementById("button_3_debit").style.display = "none";
            document.getElementById("save_debitCredit_details").style.display =
              "none";
            if (registeredCompany.length === 0) {
              document.getElementById(
                "registered_company_name_sole_trader"
              ).style.borderColor = "red";
              document.getElementById(
                "p_registered_company_err_msg"
              ).innerHTML = "Please enter company name";
            } else {
              if (p_registered_companyName_segment == true) {
                nextTab();
                document.getElementById(
                  "registered_company_name_sole_trader"
                ).style.borderColor = "";
                document.getElementById(
                  "p_registered_company_err_msg"
                ).innerHTML = "";
                let accountType = document.getElementById("personal_type");
                let accountDetails = document
                  .querySelector(`.step:nth-child(${currentTab + 1})`)
                  .querySelector("#payment_details")
                  .textContent.trim();
                if (
                  accountType.value == "Personal Account" &&
                  accountDetails === "Payment Details"
                ) {
                  document.getElementById(
                    "payment_details_personal"
                  ).style.display = "block";
                  document.getElementById(
                    "payment_details_bussiness"
                  ).style.display = "none";
                }
              }
            }
          }
        });
        document
          .getElementById("nextbtn_3_ukcompany")
          .addEventListener("click", function (event) {
            let registeredComapny = document.getElementById(
              "registered_company_name"
            ).value;
            if (registeredComapny.length === 0) {
              document.getElementById(
                "registered_company_name"
              ).style.borderColor = "red";
              document.getElementById(
                "b_registered_companyName_err_msg"
              ).innerHTML = "Please enter company name";
            } else {
              if (b_registered_companyName_segment == true) {
                document.getElementById("directDebitDiv").style.display =
                  "block";
                document.getElementById("directdebit").style.display = "block";
                document.getElementById("paymentmethod_1").style.display =
                  "block";
                nextTab();
                if (localStorage.getItem("paymentMethodDebit")) {
                  document.getElementById("paymentmethod_1").click();
                }
                document.getElementById(
                  "registered_company_name"
                ).style.borderColor = "";
                document.getElementById(
                  "b_registered_companyName_err_msg"
                ).innerHTML = "";
                let accountType = document.getElementById("bussiness_type");
                if (
                  document
                    .querySelector("#payment_details")
                    .textContent.trim() === "Payment Details" &&
                  accountType.value == "Business Account"
                ) {
                  document.getElementById(
                    "payment_details_personal"
                  ).style.display = "none";
                  document.getElementById(
                    "payment_details_bussiness"
                  ).style.display = "block";
                }
                //   creditcheck = true; //need to delete it later
                if (comp_reg_no == "06067401") {
                  creditcheck = true;
                }
                if (creditcheck == false) {
                  document.getElementById("paymentmethod_1").style.display =
                    "none";
                  document.getElementById("directdebit").style.display = "none";
                }
                if (creditcheck == true) {
                  document.getElementById("paymentmethod_1").style.display =
                    "block";
                  document.getElementById("directdebit").style.display =
                    "block";
                }
              }
            }
          });
        document
          .getElementById("nextbtn_3_internationalCompany")
          .addEventListener("click", function (event) {
            companyName_international = document.getElementById("cname").value;
            companyNumber_international = document.getElementById("cnum").value;
            country_international =
              document.getElementById("countryname").value;
            postCode_international = document.getElementById("postcode").value;
            buldingNo_international =
              document.getElementById("buildingNoName").value;
            address_international =
              document.getElementById("addressValue").value;
            townCity_international = document.getElementById("townCity").value;
            mobileNumber_international =
              document.getElementById("mobilenum_company").value;
            if (
              companyName_international.length === 0 ||
              companyNumber_international.length === 0 ||
              country_international.length === 0 ||
              postCode_international.length === 0 ||
              buldingNo_international.length === 0 ||
              address_international.length === 0 ||
              townCity_international.length === 0 ||
              mobileNumber_international.length === 0
            ) {
              if (companyName_international.length === 0) {
                document.getElementById("cname").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_cname_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (companyNumber_international.length === 0) {
                document.getElementById("cnum").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_cnum_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (country_international.length === 0) {
                document.getElementById("countryname").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_countryName_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (postCode_international.length === 0) {
                document.getElementById("postcode").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_countryPostcode_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (buldingNo_international.length === 0) {
                document.getElementById("buildingNoName").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_buildingNoName_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (address_international.length === 0) {
                document.getElementById("addressValue").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_address_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (townCity_international.length === 0) {
                document.getElementById("townCity").style.borderColor = "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_townCity_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
              if (mobileNumber_international.length === 0) {
                document.getElementById("mobilenum_company").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_in_mobile_err_msg").innerHTML =
                  "Please fill this mandatory field";
              }
            } else {
              document.getElementById("cname").style.borderColor = "";
              document.getElementById("cnum").style.borderColor = "";
              document.getElementById("countryname").style.borderColor = "";
              document.getElementById("postcode").style.borderColor = "";
              document.getElementById("buildingNoName").style.borderColor = "";
              document.getElementById("addressValue").style.borderColor = "";
              document.getElementById("townCity").style.borderColor = "";
              document.getElementById("mobilenum_company").style.borderColor =
                "";
              if (mobileNumber_international.length <= 5) {
                document.getElementById("mobilenum_company").style.borderColor =
                  "red";
                document
                  .getElementById("nextbtn_3_internationalCompany")
                  .classList.remove("enabled");
                document.getElementById("b_in_mobile_err_msg").innerHTML =
                  "Please enter a valid mobile number";
              } else {
                document.getElementById("directDebitDiv").style.display =
                  "none";
                document.getElementById("directdebit").style.display = "none";
                document.getElementById("paymentmethod_1").style.display =
                  "none";
                document.getElementById("debitcard").style.display = "none";
                nextTab();
              }
            }
          });
        if (document.getElementById("companytype_1").checked) {
          let companyType = document.getElementById("companytype_1");
          if (companyType.value === "U.K. Registered Company") {
            document.getElementById("ukcompany").style.display = "block";
            document.getElementById("internationalCompany").style.display =
              "none";
            document.getElementById("companyList").style.display = "none";
          }
          // api call to find company
          searchCompany_business = document.querySelector(
            "#registered_company_name"
          );
          let datalist = document.querySelector("#companyList");
          searchCompany_business.addEventListener("keydown", function (event) {
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("disabled");
            if (event.key === "Enter") {
              document.getElementById(
                "inputfields_company_details"
              ).style.display = "none";
              document.getElementById(
                "registered_company_name"
              ).style.borderColor = "";
              document.getElementById(
                "b_registered_companyName_err_msg"
              ).innerHTML = "";
              // Prevent the default action if form submission is involved
              event.preventDefault();
              let spinner = document.getElementById("inputSpinner2");
              spinner.style.display = "block";
              document.getElementById(
                "registered_company_name"
              ).style.borderColor = "";
              document.getElementById(
                "b_registered_companyName_err_msg"
              ).innerHTML = "";
              document.getElementById("companyList").style.display = "none";
              const typedValue = event.target.value;

              if (typedValue.length === 0) {
                spinner.style.display = "none";
                datalist.innerHTML = "";
                document.getElementById("companyList").style.display = "none";
              }
              var requestOptions = {
                method: "GET",
                mode: "no-cors",
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                  typedValue
                )}`
              )
                .then((response) => {
                  spinner.style.display = "none";
                  if (!response.ok) {
                    if (response.status === 400 || response.status === 404) {
                      document.getElementById("companyList").style.display =
                        "none";
                    }
                    throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  spinner.style.display = "none";
                  const result = JSON.parse(data).data;
                  datalist.innerHTML = ""; // Clear the dropdown
                  console.log("result : ", result);
                  if (result.length != 0) {
                    result.forEach((item) => {
                      let option = document.createElement("li");
                      option.value = item.duns;
                      option.setAttribute(
                        "data-name",
                        item.primary_name ? item.primary_name : ""
                      );
                      option.setAttribute(
                        "data-street_address",
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      );
                      option.setAttribute(
                        "data-locality",
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      );
                      option.setAttribute(
                        "data-region",
                        item.primary_address.region
                          ? item.primary_address.region
                          : ""
                      );
                      option.setAttribute(
                        "data-postCode",
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      );
                      option.innerHTML = `${
                        item.primary_name ? item.primary_name : ""
                      },${
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      },${
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      }${
                        item.primary_address.region
                          ? item.primary_address.region
                          : ""
                      },${
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      }`; // Assuming 'duns' is the property you want to display
                      datalist.innerHTML += option.outerHTML;
                      document.getElementById(
                        "companyList"
                      ).style.pointerEvents = "auto";
                      document.getElementById("companyList").style.display =
                        "block";
                    });
                  } else {
                    console.log(
                      "No companies found for the entered search term"
                    );
                    let option = document.createElement("li");
                    option.innerHTML =
                      "Please check entered details or use 'Other Company' to continue";
                    datalist.innerHTML += option.outerHTML;
                    document.getElementById("companyList").style.pointerEvents =
                      "none";
                    document.getElementById("companyList").style.display =
                      "block";
                  }
                })
                .catch((error) => {
                  console.error("Error:", error);
                  let option = document.createElement("li");
                  option.innerHTML =
                    "Please check entered details or use 'Other Company' to continue";
                  datalist.innerHTML += option.outerHTML;
                  document.getElementById("companyList").style.pointerEvents =
                    "none";
                  document.getElementById("companyList").style.display =
                    "block";
                });
            }
          });
          let searchBtn = document.querySelector(".searchBtn");
          searchBtn.addEventListener("click", function (event) {
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("disabled");
            console.log("event : ", event);
            document.getElementById(
              "inputfields_company_details"
            ).style.display = "none";
            document.getElementById(
              "registered_company_name"
            ).style.borderColor = "";
            document.getElementById(
              "b_registered_companyName_err_msg"
            ).innerHTML = "";
            // if (event.key === "Enter") {
            // Prevent the default action if form submission is involved
            //   event.preventDefault();
            let spinner = document.getElementById("inputSpinner2");
            spinner.style.display = "block";
            document.getElementById(
              "registered_company_name"
            ).style.borderColor = "";
            document.getElementById(
              "b_registered_companyName_err_msg"
            ).innerHTML = "";
            document.getElementById("companyList").style.display = "none";
            const typedValue = document.getElementById(
              "registered_company_name"
            ).value;
            console.log("typed Value :", typedValue);
            if (typedValue.length === 0) {
              spinner.style.display = "none";
              datalist.innerHTML = "";
              document.getElementById("companyList").style.display = "none";
            }
            var requestOptions = {
              method: "GET",
              mode: "no-cors",
            };
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                typedValue
              )}`
            )
              .then((response) => {
                spinner.style.display = "none";
                if (!response.ok) {
                  if (response.status === 400 || response.status === 404) {
                    document.getElementById("companyList").style.display =
                      "none";
                  }
                  throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.text(); // assuming the response is in JSON format
              })
              .then((data) => {
                spinner.style.display = "none";
                const result = JSON.parse(data).data;
                datalist.innerHTML = ""; // Clear the dropdown
                console.log("result : ", result);
                if (result.length != 0) {
                  result.forEach((item) => {
                    let option = document.createElement("li");
                    option.value = item.duns;
                    option.setAttribute(
                      "data-name",
                      item.primary_name ? item.primary_name : ""
                    );
                    option.setAttribute(
                      "data-street_address",
                      item.primary_address.street_address.line1
                        ? item.primary_address.street_address.line1
                        : ""
                    );
                    option.setAttribute(
                      "data-locality",
                      item.primary_address.locality
                        ? item.primary_address.locality
                        : ""
                    );
                    option.setAttribute(
                      "data-region",
                      item.primary_address.region
                        ? item.primary_address.region
                        : ""
                    );
                    option.setAttribute(
                      "data-postCode",
                      item.primary_address.postal_code
                        ? item.primary_address.postal_code
                        : ""
                    );
                    option.innerHTML = `${
                      item.primary_name ? item.primary_name : ""
                    },${
                      item.primary_address.street_address.line1
                        ? item.primary_address.street_address.line1
                        : ""
                    },${
                      item.primary_address.locality
                        ? item.primary_address.locality
                        : ""
                    }${
                      item.primary_address.region
                        ? item.primary_address.region
                        : ""
                    },${
                      item.primary_address.postal_code
                        ? item.primary_address.postal_code
                        : ""
                    }`; // Assuming 'duns' is the property you want to display
                    datalist.innerHTML += option.outerHTML;
                    document.getElementById("companyList").style.pointerEvents =
                      "auto";
                    document.getElementById("companyList").style.display =
                      "block";
                  });
                } else {
                  console.log("No companies found for the entered search term");
                  let option = document.createElement("li");
                  option.innerHTML =
                    "Please check entered details or use 'Other Company' to continue";
                  datalist.innerHTML += option.outerHTML;
                  document.getElementById("companyList").style.pointerEvents =
                    "none";
                  document.getElementById("companyList").style.display =
                    "block";
                }
              })
              .catch((error) => {
                console.error("Error:", error);
                let option = document.createElement("li");
                option.innerHTML =
                  "Please check entered details or use 'Other Company' to continue";
                datalist.innerHTML += option.outerHTML;
                document.getElementById("companyList").style.pointerEvents =
                  "none";
                document.getElementById("companyList").style.display = "block";
              });
            // }
          });
          datalist.addEventListener("click", function (event) {
            document.getElementById("inputSpinner2").style.display = "block";
            const selectedOption = event.target;
            selectedOption.classList.add("selected");

            searchCompany_business.value = selectedOption.dataset.name;
            document.getElementById("companyList").style.display = "none";
            datalist.innerHTML = ""; // Clear the dropdown
            let display_data = document.getElementById(
              "display_company_details"
            );
            primary_name = selectedOption.dataset.name;
            primary_address_street = selectedOption.dataset.street_address;
            primary_address_locality = selectedOption.dataset.locality;
            primary_address_region = selectedOption.dataset.region;
            primary_address_postalcode = selectedOption.dataset.postcode;
            localStorage.setItem("duns", selectedOption.value);
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?dunsId=${encodeURIComponent(
                selectedOption.value
              )}`
            )
              .then((response) => {
                document.getElementById("inputSpinner2").style.display = "none";
                return response.text();
              })
              .then((data) => {
                document.getElementById("inputSpinner2").style.display = "none";
                const result = JSON.parse(data).data;
                console.log("duns response 2 --->", result);

                creditcheck = result.hasPassedCreditCheck
                  ? result.hasPassedCreditCheck
                  : "";
                localStorage.setItem("creditcheck", creditcheck);
                organization_duns_business = result?.organization?.duns
                  ? result.organization.duns
                  : 0;

                companyNumber = organization_duns_business;
                riskSegment = result.organization.dnbAssessment.standardRating
                  .riskSegment
                  ? result.organization.dnbAssessment.standardRating.riskSegment
                  : "";
                localStorage.setItem("riskSegment", riskSegment);
                creditLimit = result.organization?.dnbAssessment
                  ?.creditLimitRecommendation?.maximumRecommendedLimit?.value
                  ? result.organization.dnbAssessment.creditLimitRecommendation
                      .maximumRecommendedLimit.value
                  : "";
                let comp_reg_no_array = result.organization.registrationNumbers;
                comp_reg_no =
                  comp_reg_no_array.length == 1
                    ? comp_reg_no_array[0].registrationNumber
                    : "";
                if (comp_reg_no_array.length && comp_reg_no_array.length > 1) {
                  for (var regNo in comp_reg_no_array) {
                    if (
                      comp_reg_no_array[regNo].isPreferredRegistrationNumber ==
                      true
                    ) {
                      comp_reg_no = comp_reg_no_array[regNo].registrationNumber;
                    }
                  }
                }
                localStorage.setItem("comp_reg_no", comp_reg_no);

                if (comp_reg_no == "06067401") {
                  creditcheck = true;
                }
                for (let i of result.organization.numberOfEmployees) {
                  if (i.informationScopeDescription === "Consolidated") {
                    no_of_employee = i.value;
                    localStorage.setItem("no_of_employee", no_of_employee);
                  }
                }
                let display_label = document.getElementById("registered_label");
                display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                              placeholder="Ex: Addison Lee Ltd"
                            >
                              Registered Company Details
                            </label>`;
                display_data.innerHTML = `<div><span id="primary_name">${primary_name}</span><br/>
              <span id="span_company_number1" data-cno=${comp_reg_no}>#${comp_reg_no}<span><br/>
                            <span id="span_street1">${primary_address_street}</span><br/>
                            <span id="span_locality1">${primary_address_locality}</span>
                            <span id="span_region1">${primary_address_region}</span><span id="span_postalcode1">${primary_address_postalcode}</span><br/>

             </div>`;
                document.getElementById(
                  "inputfields_company_details"
                ).style.display = "block";
                document
                  .getElementById("nextbtn_3_ukcompany")
                  .classList.add("enabled");
                document.getElementById("nextbtn_3_ukcompany").disabled = false;
              });

            b_registered_companyName_segment = true;
            document
              .querySelector("#registered_company_name")
              .addEventListener("keydown", function (event) {
                document.getElementById(
                  "inputfields_company_details"
                ).style.display = "none";
                document.getElementById(
                  "registered_company_name"
                ).style.borderColor = "";
                document.getElementById(
                  "b_registered_companyName_err_msg"
                ).innerHTML = "";
              });
          });
        }

        document
          .getElementById("companytype_1")
          .addEventListener("click", function (event) {
            let companyType = document.getElementById("companytype_1");
            if (companyType.value === "U.K. Registered Company") {
              document.getElementById("ukcompany").style.display = "block";
              document.getElementById("internationalCompany").style.display =
                "none";
              document.getElementById("companyList").style.display = "none";
            }
            // api call to find company
            searchCompany_business = document.querySelector(
              "#registered_company_name"
            );
            let datalist = document.querySelector("#companyList");
            searchCompany_business.addEventListener(
              "keydown",
              function (event) {
                document
                  .getElementById("nextbtn_3_ukcompany")
                  .classList.add("disabled");
                if (event.key === "Enter") {
                  // Prevent the default action if form submission is involved
                  event.preventDefault();
                  let spinner = document.getElementById("inputSpinner2");
                  spinner.style.display = "block";
                  const typedValue = event.target.value;
                  document.getElementById("companyList").style.display = "none";
                  if (typedValue.length === 0) {
                    spinner.style.display = "none";
                    datalist.innerHTML = "";
                    document.getElementById("companyList").style.display =
                      "none";
                  }
                  var requestOptions = {
                    method: "GET",
                    mode: "no-cors",
                  };
                  fetch(
                    `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                      typedValue
                    )}`
                  )
                    .then((response) => {
                      spinner.style.display = "none";
                      if (!response.ok) {
                        if (
                          response.status === 400 ||
                          response.status === 404
                        ) {
                          document.getElementById("companyList").style.display =
                            "none";
                        }
                        throw new Error(
                          `HTTP error! Status: ${response.status}`
                        );
                      }
                      return response.text(); // assuming the response is in JSON format
                    })
                    .then((data) => {
                      spinner.style.display = "none";
                      const result = JSON.parse(data).data;
                      datalist.innerHTML = ""; // Clear the dropdown
                      if (result.length != 0) {
                        result.forEach((item) => {
                          let option = document.createElement("li");
                          option.value = item.duns;
                          option.setAttribute(
                            "data-name",
                            item.primary_name ? item.primary_name : ""
                          );
                          option.setAttribute(
                            "data-street_address",
                            item.primary_address.street_address.line1
                              ? item.primary_address.street_address.line1
                              : ""
                          );
                          option.setAttribute(
                            "data-locality",
                            item.primary_address.locality
                              ? item.primary_address.locality
                              : ""
                          );
                          option.setAttribute(
                            "data-region",
                            item.primary_address.region
                              ? item.primary_address.region
                              : ""
                          );
                          option.setAttribute(
                            "data-postCode",
                            item.primary_address.postal_code
                              ? item.primary_address.postal_code
                              : ""
                          );
                          option.innerHTML = `${
                            item.primary_name ? item.primary_name : ""
                          },${
                            item.primary_address.street_address.line1
                              ? item.primary_address.street_address.line1
                              : ""
                          },${
                            item.primary_address.locality
                              ? item.primary_address.locality
                              : ""
                          }${
                            item.primary_address.region
                              ? item.primary_address.region
                              : ""
                          },${
                            item.primary_address.postal_code
                              ? item.primary_address.postal_code
                              : ""
                          }`; // Assuming 'duns' is the property you want to display
                          datalist.innerHTML += option.outerHTML;
                          document.getElementById(
                            "companyList"
                          ).style.pointerEvents = "auto";
                          document.getElementById("companyList").style.display =
                            "block";
                        });
                      } else {
                        console.log(
                          "No companies found for the entered search term"
                        );
                        let option = document.createElement("li");
                        option.innerHTML =
                          "Please check entered details or use 'Other Company' to continue";
                        datalist.innerHTML += option.outerHTML;
                        document.getElementById(
                          "companyList"
                        ).style.pointerEvents = "none";
                        document.getElementById("companyList").style.display =
                          "block";
                      }
                    })
                    .catch((error) => {
                      console.error("Error:", error);
                      let option = document.createElement("li");
                      option.innerHTML =
                        "Please check entered details or use 'Other Company' to continue";
                      datalist.innerHTML += option.outerHTML;
                      document.getElementById(
                        "companyList"
                      ).style.pointerEvents = "none";
                      document.getElementById("companyList").style.display =
                        "block";
                    });
                }
              }
            );
            let searchBtn = document.querySelector(".searchBtn");
            searchBtn.addEventListener("click", function (event) {
              document
                .getElementById("nextbtn_3_ukcompany")
                .classList.add("disabled");
              // Prevent the default action if form submission is involved
              document.getElementById(
                "inputfields_company_details"
              ).style.display = "none";
              document.getElementById(
                "registered_company_name"
              ).style.borderColor = "";
              document.getElementById(
                "b_registered_companyName_err_msg"
              ).innerHTML = "";
              document.getElementById("companyList").style.display = "none";
              event.preventDefault();
              let spinner = document.getElementById("inputSpinner2");
              spinner.style.display = "block";
              const typedValue = event.target.value;

              if (typedValue.length === 0) {
                spinner.style.display = "none";
                datalist.innerHTML = "";
                document.getElementById("companyList").style.display = "none";
              }
              var requestOptions = {
                method: "GET",
                mode: "no-cors",
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                  typedValue
                )}`
              )
                .then((response) => {
                  spinner.style.display = "none";
                  if (!response.ok) {
                    if (response.status === 400 || response.status === 404) {
                      document.getElementById("companyList").style.display =
                        "none";
                    }
                    throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  spinner.style.display = "none";
                  const result = JSON.parse(data).data;
                  datalist.innerHTML = ""; // Clear the dropdown
                  if (result.length != 0) {
                    result.forEach((item) => {
                      let option = document.createElement("li");
                      option.value = item.duns;
                      option.setAttribute(
                        "data-name",
                        item.primary_name ? item.primary_name : ""
                      );
                      option.setAttribute(
                        "data-street_address",
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      );
                      option.setAttribute(
                        "data-locality",
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      );
                      option.setAttribute(
                        "data-region",
                        item.primary_address.region
                          ? item.primary_address.region
                          : ""
                      );
                      option.setAttribute(
                        "data-postCode",
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      );
                      option.innerHTML = `${
                        item.primary_name ? item.primary_name : ""
                      },${
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      },${
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      }${
                        item.primary_address.region
                          ? item.primary_address.region
                          : ""
                      },${
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      }`; // Assuming 'duns' is the property you want to display
                      datalist.innerHTML += option.outerHTML;
                      document.getElementById(
                        "companyList"
                      ).style.pointerEvents = "auto";
                      document.getElementById("companyList").style.display =
                        "block";
                    });
                  } else {
                    console.log(
                      "No companies found for the entered search term"
                    );
                    let option = document.createElement("li");
                    option.innerHTML =
                      "Please check entered details or use 'Other Company' to continue";
                    datalist.innerHTML += option.outerHTML;
                    document.getElementById("companyList").style.pointerEvents =
                      "none";
                    document.getElementById("companyList").style.display =
                      "block";
                  }
                })
                .catch((error) => {
                  console.error("Error:", error);
                  let option = document.createElement("li");
                  option.innerHTML =
                    "Please check entered details or use 'Other Company' to continue";
                  datalist.innerHTML += option.outerHTML;
                  document.getElementById("companyList").style.pointerEvents =
                    "none";
                  document.getElementById("companyList").style.display =
                    "block";
                });
            });
            datalist.addEventListener("click", function (event) {
              document.getElementById("inputSpinner2").style.display = "block";
              const selectedOption = event.target;
              selectedOption.classList.add("selected");
              document
                .getElementById("nextbtn_3_ukcompany")
                .classList.add("enabled");
              searchCompany_business.value = selectedOption.dataset.name;
              document.getElementById("companyList").style.display = "none";
              datalist.innerHTML = ""; // Clear the dropdown
              let display_data = document.getElementById(
                "display_company_details"
              );
              primary_name = selectedOption.dataset.name;
              primary_address_street = selectedOption.dataset.street_address;
              primary_address_locality = selectedOption.dataset.locality;
              primary_address_region = selectedOption.dataset.region;
              primary_address_postalcode = selectedOption.dataset.postcode;
              localStorage.setItem("duns", selectedOption.value);
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?dunsId=${encodeURIComponent(
                  selectedOption.value
                )}`
              )
                .then((response) => {
                  document.getElementById("inputSpinner2").style.display =
                    "none";
                  return response.text();
                })
                .then((data) => {
                  document.getElementById("inputSpinner2").style.display =
                    "none";
                  const result = JSON.parse(data).data;
                  console.log("duns response 3 --->", result);

                  creditcheck = result.hasPassedCreditCheck
                    ? result.hasPassedCreditCheck
                    : "";
                  localStorage.setItem("creditcheck", creditcheck);
                  organization_duns_business = result?.organization?.duns
                    ? result.organization.duns
                    : 0;

                  companyNumber = organization_duns_business;
                  riskSegment = result.organization.dnbAssessment.standardRating
                    .riskSegment
                    ? result.organization.dnbAssessment.standardRating
                        .riskSegment
                    : "";
                  localStorage.setItem("riskSegment", riskSegment);
                  creditLimit = result.organization.dnbAssessment
                    .creditLimitRecommendation.maximumRecommendedLimit.value
                    ? result.organization.dnbAssessment
                        .creditLimitRecommendation.maximumRecommendedLimit.value
                    : "";
                  let comp_reg_no_array =
                    result.organization.registrationNumbers;
                  comp_reg_no =
                    comp_reg_no_array.length == 1
                      ? comp_reg_no_array[0].registrationNumber
                      : "";
                  if (
                    comp_reg_no_array.length &&
                    comp_reg_no_array.length > 1
                  ) {
                    for (var regNo in comp_reg_no_array) {
                      if (
                        comp_reg_no_array[regNo]
                          .isPreferredRegistrationNumber == true
                      ) {
                        comp_reg_no =
                          comp_reg_no_array[regNo].registrationNumber;
                      }
                    }
                  }
                  localStorage.setItem("comp_reg_no", comp_reg_no);

                  if (comp_reg_no == "06067401") {
                    creditcheck = true;
                  }

                  for (let i of result.organization.numberOfEmployees) {
                    if (i.informationScopeDescription === "Consolidated") {
                      no_of_employee = i.value;

                      localStorage.setItem("no_of_employee", no_of_employee);
                    }
                  }

                  let display_label =
                    document.getElementById("registered_label");
                  display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                              placeholder="Ex: Addison Lee Ltd"
                            >
                              Registered Company Details
                            </label>`;
                  display_data.innerHTML = `<div><span id="primary_name">${primary_name}</span><br/>
              <span id="span_company_number1" data-cno=${comp_reg_no}>#${comp_reg_no}<span><br/>
                            <span id="span_street1">${primary_address_street}</span><br/>
                            <span id="span_locality1">${primary_address_locality}</span>
                            <span id="span_region1">${primary_address_region}</span><span id="span_postalcode1">${primary_address_postalcode}</span><br/>

             </div>`;
                  document.getElementById(
                    "inputfields_company_details"
                  ).style.display = "block";
                });
              document
                .getElementById("nextbtn_3_ukcompany")
                .classList.add("enabled");
              document.getElementById("nextbtn_3_ukcompany").disabled = false;
              b_registered_companyName_segment = true;

              document
                .querySelector("#registered_company_name")
                .addEventListener("keydown", function (event) {
                  document
                    .getElementById("nextbtn_3_ukcompany")
                    .classList.add("disabled");
                  document.getElementById(
                    "inputfields_company_details"
                  ).style.display = "none";
                  document.getElementById(
                    "registered_company_name"
                  ).style.borderColor = "";
                  document.getElementById(
                    "b_registered_companyName_err_msg"
                  ).innerHTML = "";
                });
            });
          });

        document
          .getElementById("companytype_2")
          .addEventListener("click", function () {
            let companyType = document.getElementById("companytype_2");
            if (companyType.value === "International Company") {
              document.getElementById("ukcompany").style.display = "none";
              document.getElementById("internationalCompany").style.display =
                "block";
            }
          });

        document
          .getElementById("paymentmethod_1")
          .addEventListener("click", function () {
            let paymentType = document.getElementById("paymentmethod_1");
            if (paymentType.checked) {
              localStorage.setItem("paymentMethodDebit", true);
            }
            if (paymentType.value === "Direct Debit") {
              console.log("b_emailsegmaebnt", b_emailSegment);
              document.getElementById("debitcard").style.display = "block";
              document.getElementById("creditcard_details").style.display =
                "none";
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "none";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "none";
              document.getElementById(
                "payment_details_personal"
              ).style.display = "none";
              localStorage.setItem(
                "firstName_business",
                document.getElementById("first_name").value
                  ? document.getElementById("first_name").value
                  : firstName_business
              );
              localStorage.setItem(
                "lastName_business",
                document.getElementById("last_name").value
                  ? document.getElementById("last_name").value
                  : lastName_business
              );
              localStorage.setItem(
                "mobile_business",
                document.getElementById("mobile").value
                  ? document.getElementById("mobile").value
                  : mobile_business
              );
              localStorage.setItem(
                "email",
                localStorage.getItem("email")
                  ? localStorage.getItem("email")
                  : email
              );
              // localStorage.setItem("verificationCode", verificationCode);
              let checkbox_business = document.getElementById("bussiness_type");
              if (checkbox_business.checked) {
                localStorage.setItem("checkbox_business", true);
                localStorage.setItem("b_emailSegment", true);
              }
              if (document.getElementById("companytype_1").checked) {
                localStorage.setItem("companytype_uk", true);
              }
              if (document.getElementById("companytype_2").checked) {
                localStorage.setItem("companytype_international", true);
              }
              localStorage.setItem("checkbox_InternationalCompany", true);
              localStorage.setItem(
                "companyName_international",
                document.getElementById("cname").value
              );
              localStorage.setItem(
                "companyNumber_international",
                document.getElementById("cnum").value
              );
              localStorage.setItem(
                "country_international",
                document.getElementById("countryname").value
              );
              localStorage.setItem(
                "postCode_international",
                document.getElementById("postcode").value
              );
              localStorage.setItem(
                "buldingNo_international",
                document.getElementById("buildingNoName").value
              );
              localStorage.setItem(
                "address_international",
                document.getElementById("addressValue").value
              );
              localStorage.setItem(
                "townCity_international",
                document.getElementById("townCity").value
              );
              localStorage.setItem(
                "mobileNumber_international",
                document.getElementById("mobilenum_company").value
              );
              localStorage.setItem(
                "creditcheck",
                localStorage.getItem("creditcheck")
                  ? localStorage.getItem("creditcheck")
                  : creditcheck
              );
              localStorage.setItem(
                "no_of_employee",
                localStorage.getItem("no_of_employee")
                  ? localStorage.getItem("no_of_employee")
                  : no_of_employee
              );
              localStorage.setItem(
                "riskSegment",
                localStorage.getItem("riskSegment")
                  ? localStorage.getItem("riskSegment")
                  : riskSegment
              );
              localStorage.setItem(
                "organization_duns_business",
                organization_duns_business
              );
              localStorage.setItem("creditLimit", creditLimit);
              localStorage.setItem(
                "bussinessCompanyName",
                searchCompany_business.value
              );

              localStorage.setItem(
                "registered_company_number",
                localStorage.getItem("registered_company_number")
                  ? localStorage.getItem("registered_company_number")
                  : comp_reg_no
              );
              localStorage.setItem(
                "primary_name",
                document.getElementById("primary_name")?.textContent
                  ? document.getElementById("primary_name").textContent
                  : primary_name
              );
              localStorage.setItem(
                "registered_company_number",
                localStorage.getItem("registered_company_number")
                  ? localStorage.getItem("registered_company_number")
                  : comp_reg_no
              );
              localStorage.setItem(
                "primary_address_street",
                document.getElementById("span_street1")?.textContent
                  ? document.getElementById("span_street1").textContent
                  : primary_address_street
              );
              localStorage.setItem(
                "primary_address_locality",
                document.getElementById("span_locality1")?.textContent
                  ? document.getElementById("span_locality1").textContent
                  : primary_address_locality
              );
              localStorage.setItem(
                "primary_address_region",
                document.getElementById("span_region1")?.textContent
                  ? document.getElementById("span_region1").textContent
                  : primary_address_region
              );
              localStorage.setItem(
                "primary_address_postalcode",
                document.getElementById("span_postalcode1")?.textContent
                  ? document.getElementById("span_postalcode1").textContent
                  : primary_address_postalcode
              );

              //generating guid
              function generateGUID() {
                var guid = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(
                  /[xy]/g,
                  function (c) {
                    var r = (Math.random() * 16) | 0,
                      v = c === "x" ? r : (r & 0x3) | 0x8;
                    return v.toString(16);
                  }
                );

                return guid.slice(0, 36);
              }

              var randomGUID = generateGUID();

              //generating ttl - current time + one hour
              function generateTimeOneHourLater() {
                var currentDate = new Date();

                // Add one hour to the current time
                currentDate.setHours(currentDate.getHours() + 1);

                // Format the date in YYYYMMDDHHmmSS format
                var formattedDate =
                  currentDate.getFullYear().toString() +
                  padZero(currentDate.getMonth() + 1) +
                  padZero(currentDate.getDate()) +
                  padZero(currentDate.getHours()) +
                  padZero(currentDate.getMinutes()) +
                  padZero(currentDate.getSeconds());

                let formattedDate2 = padZero(formattedDate);
                return formattedDate;
              }

              function padZero(number) {
                // Helper function to pad single-digit numbers with a leading zero
                return number < 10 ? "0" + number : number;
              }

              function removeSpaces(str) {
                return str.replace(/\s/g, ""); // This regular expression replaces all occurrences of whitespace characters with an empty string
              }

              var ttl = generateTimeOneHourLater();
              if (
                comp_reg_no == null ||
                comp_reg_no == undefined ||
                comp_reg_no == ""
              ) {
                comp_reg_no = document.getElementById("cnum").value;
              }

              firstName_business = localStorage.getItem("firstName_business");
              lastName_business = localStorage.getItem("lastName_business");
              email = localStorage.getItem("email");
              mobile_business = localStorage.getItem("mobile_business");

              if (localStorage.getItem("registered_company_number")) {
                comp_reg_no = localStorage.getItem("registered_company_number");
              }
              if (localStorage.getItem("primary_address_postalcode")) {
                primary_address_postalcode = localStorage.getItem(
                  "primary_address_postalcode"
                );
              }
              if (localStorage.getItem("b_registered_companyName")) {
                searchCompany_business.value = localStorage.getItem(
                  "b_registered_companyName"
                );
              }
              if (localStorage.getItem("International_companyDetails")) {
                let intl_company = JSON.parse(
                  localStorage.getItem("International_companyDetails")
                );
                companyName_international =
                  intl_company.companyName_international;
                postCode_international = intl_company.intl_company;
              }

              let companyNameSpacesRemoved = searchCompany_business.value
                ? removeSpaces(searchCompany_business.value)
                : removeSpaces(companyName_international);
              let splittedValue = "";
              let splittedrandomGUID = "";
              if (companyNameSpacesRemoved.length >= 5) {
                splittedValue = companyNameSpacesRemoved.substring(0, 5);
                splittedrandomGUID = randomGUID.substring(0, 13);
              } else if (companyNameSpacesRemoved.length < 5) {
                let count = 18 - parseInt(companyNameSpacesRemoved.length);
                splittedValue = companyNameSpacesRemoved;
                splittedrandomGUID = randomGUID.substring(0, count);
              } else {
                console.log(
                  "no conditions matched to generate DDPlanReference"
                );
              }
              let dynamicDdplanreference = splittedValue + splittedrandomGUID;
              console.log(
                "companyNameSpacesRemoved --->",
                companyNameSpacesRemoved
              );
              console.log(
                "companyNameSpacesRemoved.length --->",
                companyNameSpacesRemoved.length
              );
              console.log("splittedValue --->", splittedValue);
              console.log("splittedrandomGUID --->", splittedrandomGUID);
              console.log(
                "dynamicDdplanreference --->",
                dynamicDdplanreference
              );
              let queryparams = `showerrordetail=true&ttl=${ttl}&ddplanreference=${dynamicDdplanreference}&callbackurl=https://sandbox.api.eu.addisonleeglobal.net/api-wpforms/v2/api/direct-debit/statuses&redirecturl=https://www.addisonlee.com/business/apply/&firstname=${firstName_business}&lastname=${lastName_business}&email=${email}&mobile=${mobile_business}&requestid=${randomGUID}&applyingascompany=true&currentpostcode=${removeSpaces(
                primary_address_postalcode
                  ? primary_address_postalcode
                  : postCode_international
              )}&companyname=${encodeURIComponent(
                searchCompany_business.value
                  ? searchCompany_business.value
                  : companyName_international
              )}&requestuserid=${randomGUID}&texttitle=Direct%20Debit%20Application&textsubtitle=Please%20ensure%20that%20all%20data%20is%20typed%20correctly&textapplybutton=Apply&showformheader=visible&currentaddresslegend=Current%20address&showtitle=hidden&showfirstname=readonly&showlastname=readonly&showdob=hidden&showemail=readonly&showmobile=readonly&showbankaccount=visible&showcompanyregistrationnumber=visible&showcompanyname=hidden&CompanyRegistrationNumber=${comp_reg_no}`;
              console.log("queryparams --->", queryparams);
              var requestOptions = {
                method: "GET",
                mode: "no-cors",
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?edata=${encodeURIComponent(
                  queryparams
                )}`
              )
                .then((response) => {
                  if (!response.ok) {
                    if (response.status === 400 || response.status === 404) {
                    }
                    throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  let edata = JSON.parse(data);
                  let url = `https://webforms.uk.pt-x.com/forms/addisonlee/debit?edata=${edata}`;
                  let iframe = document.getElementById("directDebitFormUrl");
                  iframe.src = url;
                  document.getElementById("debitcard").style.display = "block";
                  document.getElementById("creditcard_details").style.display =
                    "none";
                  document.getElementById(
                    "payment_details_personal"
                  ).style.display = "none";
                  const iframeReference =
                    document.getElementById("directDebitFormUrl");
                  const iframeUrl = iframeReference
                    ? new URL(iframeReference.src)
                    : undefined;
                  if (iframeUrl) {
                    console.log("Iframe url: " + iframeUrl);
                  } else {
                    console.warn("iframe with id iframe_id not found");
                  }
                })
                .catch((error) => {
                  console.log("error while encoding query params --->", error);
                });
            }
          });
        document
          .getElementById("nextbtn_4_debit")
          .addEventListener("click", function (e) {
            let paymentType =
              document.getElementById("paymentmethod_1").checked;
            let paymentTypeCredit =
              document.getElementById("paymentmethod_2").checked;
            if (paymentType) {
              document.getElementById("debitcard").style.display = "block";
              document.getElementById("creditcard_details").style.display =
                "none";
              document.getElementById(
                "payment_details_personal"
              ).style.display = "none";
            }
            if (paymentTypeCredit) {
              let individualCheck = document.getElementById(
                "individual_credit_card"
              ).checked;
              let singleCheck =
                document.getElementById("single_credit_card").checked;
              if (individualCheck || singleCheck) {
                nextTab();
                // currentTab = 3;
              }
            }
          });
        document
          .getElementById("paymentmethod_2")
          .addEventListener("click", function () {
            let paymentType = document.getElementById("paymentmethod_2");
            if (paymentType.value === "Credit Card") {
              document.getElementById("creditcard_details").style.display =
                "block";
              document.getElementById("debitcard").style.display = "none";
              document.getElementById(
                "payment_details_personal"
              ).style.display = "none";
            }
            document.getElementById(
              "creditcard_helptext_Individual"
            ).style.display = "none";
            document.getElementById(
              "creditcard_helptext_single"
            ).style.display = "none";
          });
        document
          .getElementById("individual_credit_card")
          .addEventListener("click", function (e) {
            document.getElementById("nextbtn_4_debit").classList.add("enabled");
            let creditType = document.getElementById("individual_credit_card");
            if (creditType.value === "Individual credit") {
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "block";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "none";
            }
          });
        document
          .getElementById("single_credit_card")
          .addEventListener("click", function (e) {
            document.getElementById("nextbtn_4_debit").classList.add("enabled");
            let creditType = document.getElementById("single_credit_card");
            if (creditType.value === "single credit") {
              document.getElementById(
                "creditcard_helptext_Individual"
              ).style.display = "none";
              document.getElementById(
                "creditcard_helptext_single"
              ).style.display = "block";
            }
          });
        function soloCheck(element) {
          if (radioState == false) {
            check();
            radioState = true;
          } else {
            uncheck();
            radioState = false;
          }
        }
        function check() {
          let trader = document.getElementById("sole_trader");
          if (trader.value == "Sole Trader") {
            document.getElementById("sole_trader_accountDetals").style.display =
              "none";
            document.getElementById(
              "sole_trader_companyDetails"
            ).style.display = "block";
            document.getElementById("companyList_sole_trader").style.display =
              "none";

            let searchCompany = document.querySelector(
              "#registered_company_name_sole_trader"
            );
            let datalist = document.querySelector("#companyList_sole_trader");
            searchCompany.addEventListener("keydown", function (event) {
              document
                .getElementById("nextbtn_3_personal_soleTrader")
                .classList.add("disabled");
              document.getElementById(
                "nextbtn_3_personal_soleTrader"
              ).disabled = true;
              if (event.key === "Enter") {
                // Prevent the default action if form submission is involved
                event.preventDefault();
                document.getElementById(
                  "inputfields_company_details_soleTrader"
                ).style.display = "none";
                let inputSpinner = document.getElementById("inputSpinner");
                inputSpinner.style.display = "block";
                document.getElementById(
                  "registered_company_name_sole_trader"
                ).style.borderColor = "";
                document.getElementById(
                  "p_registered_company_err_msg"
                ).innerHTML = "";
                document.getElementById(
                  "companyList_sole_trader"
                ).style.display = "none";
                const typedValue = event.target.value;
                if (typedValue.length === 0) {
                  inputSpinner.style.display = "none";
                  datalist.innerHTML = "";
                  document.getElementById(
                    "companyList_sole_trader"
                  ).style.display = "none";
                }
                var requestOptions = {
                  method: "GET",
                  mode: "no-cors",
                };
                fetch(
                  `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                    typedValue
                  )}`
                )
                  .then((response) => {
                    if (!response.ok) {
                      inputSpinner.style.display = "none";
                      if (response.status === 400 || response.status === 404) {
                        document.getElementById(
                          "companyList_sole_trader"
                        ).style.display = "none";
                      }
                      throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.text(); // assuming the response is in JSON format
                  })
                  .then((data) => {
                    inputSpinner.style.display = "none";
                    const result = JSON.parse(data).data;
                    datalist.innerHTML = ""; // Clear the dropdown
                    if (result.length != 0) {
                      result.forEach((item) => {
                        let option = document.createElement("li");
                        option.value = item.duns;
                        option.setAttribute(
                          "data-name",
                          item.primary_name ? item.primary_name : ""
                        );
                        option.setAttribute(
                          "data-street_address",
                          item.primary_address.street_address.line1
                            ? item.primary_address.street_address.line1
                            : ""
                        );
                        option.setAttribute(
                          "data-locality",
                          item.primary_address.locality
                            ? item.primary_address.locality
                            : ""
                        );
                        option.setAttribute(
                          "data-region",
                          item.primary_address.region
                            ? item.primary_address.region
                            : ""
                        );
                        option.setAttribute(
                          "data-postCode",
                          item.primary_address.postal_code
                            ? item.primary_address.postal_code
                            : ""
                        );
                        option.innerHTML = `${
                          item.primary_name ? item.primary_name : ""
                        },${
                          item.primary_address.street_address.line1
                            ? item.primary_address.street_address.line1
                            : ""
                        },${
                          item.primary_address.locality
                            ? item.primary_address.locality
                            : ""
                        },${
                          item.primary_address.postal_code
                            ? item.primary_address.postal_code
                            : ""
                        }`; // Assuming 'duns' is the property you want to display
                        datalist.innerHTML += option.outerHTML;
                        document.getElementById(
                          "companyList_sole_trader"
                        ).style.display = "block";
                        document.getElementById(
                          "companyList_sole_trader"
                        ).style.pointerEvents = "auto";
                        datalist.addEventListener("click", function (event) {
                          inputSpinner.style.display = "block";
                          const selectedOption = event.target;
                          selectedOption.classList.add("selected");
                          searchCompany.value = selectedOption.dataset.name;
                          document.getElementById(
                            "companyList_sole_trader"
                          ).style.display = "none";
                          datalist.innerHTML = ""; // Clear the dropdown
                          let display_data = document.getElementById(
                            "display_company_details_soleTrader"
                          );
                          let display_label = document.getElementById(
                            "registered_label_soleTrader"
                          );
                          companyNumber = selectedOption.value
                            ? selectedOption.value
                            : 0;
                          sole_companyName = selectedOption.dataset.name;
                          sole_company_address =
                            selectedOption.dataset.street_address;
                          sole_company_locality =
                            selectedOption.dataset.locality;
                          sole_company_region = selectedOption.dataset.region;
                          sole_company_postcode =
                            selectedOption.dataset.postcode;
                          localStorage.setItem("duns", selectedOption.value);
                          inputSpinner.style.display = "none";
                          display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                              placeholder="Ex: Addison Lee Ltd"
                            >
                              Registered Company Details
                            </label>`;
                          display_data.innerHTML = `<div><span id="span_personal_company_name">${selectedOption.dataset.name}</span><br/>
                          <span id="span_personal_company_number">#${selectedOption.value}</span><br/>
                                    <span id="span_personal_company_address">${selectedOption.dataset.street_address}</span><br/>
                                    <span id="span_personal_company_locality">${selectedOption.dataset.locality}</span>
                                    <span id="span_personal_company_region">${selectedOption.dataset.region}</span><span id="span_personal_company_postalcode">${selectedOption.dataset.postcode}</span><br/>
                                    </div>`;
                          p_registered_companyName_segment = true;

                          document.getElementById(
                            "inputfields_company_details_soleTrader"
                          ).style.display = "block";
                          document
                            .getElementById("nextbtn_3_personal_soleTrader")
                            .classList.add("enabled");
                          document.getElementById(
                            "nextbtn_3_personal_soleTrader"
                          ).disabled = false;
                          document
                            .querySelector(
                              "#registered_company_name_sole_trader"
                            )
                            .addEventListener("keydown", function (event) {
                              document.getElementById(
                                "inputfields_company_details_soleTrader"
                              ).style.display = "none";
                              document
                                .getElementById("nextbtn_3_personal_soleTrader")
                                .classList.remove("enabled");
                              document.getElementById(
                                "nextbtn_3_personal_soleTrader"
                              ).disabled = true;
                            });
                        });
                      });
                    } else {
                      let option = document.createElement("li");
                      option.innerHTML =
                        "Sorry we cannot find your company, please continue with 'Personal Account' by re-clicking Sole Trader button";
                      datalist.innerHTML += option.outerHTML;
                      document.getElementById(
                        "companyList_sole_trader"
                      ).style.pointerEvents = "none";
                      document.getElementById(
                        "companyList_sole_trader"
                      ).style.display = "block";
                    }
                  })
                  .catch((error) => {
                    inputSpinner.style.display = "none";
                    console.error("Error:", error);
                    let option = document.createElement("li");
                    option.innerHTML =
                      "Sorry we cannot find your company, please continue with 'Personal Account' by re-clicking Sole Trader button";
                    datalist.innerHTML += option.outerHTML;
                    document.getElementById(
                      "companyList_sole_trader"
                    ).style.display = "block";
                    document.getElementById(
                      "companyList_sole_trader"
                    ).style.pointerEvents = "none";
                  });
              }
            });
            let searchBtn = document.querySelector(".searchBtn2");
            searchBtn.addEventListener("click", function (event) {
              document
                .getElementById("nextbtn_3_personal_soleTrader")
                .classList.add("disabled");
              document.getElementById(
                "nextbtn_3_personal_soleTrader"
              ).disabled = true;
              //   if (event.key === "Enter") {
              // Prevent the default action if form submission is involved

              event.preventDefault();
              let inputSpinner = document.getElementById("inputSpinner");
              document.getElementById(
                "inputfields_company_details_soleTrader"
              ).style.display = "none";
              inputSpinner.style.display = "block";
              document.getElementById(
                "registered_company_name_sole_trader"
              ).style.borderColor = "";
              document.getElementById(
                "p_registered_company_err_msg"
              ).innerHTML = "";
              document.getElementById("companyList_sole_trader").style.display =
                "none";
              const typedValue = document.getElementById(
                "registered_company_name_sole_trader"
              ).value;
              if (typedValue.length === 0) {
                inputSpinner.style.display = "none";
                datalist.innerHTML = "";
                document.getElementById(
                  "companyList_sole_trader"
                ).style.display = "none";
              }
              var requestOptions = {
                method: "GET",
                mode: "no-cors",
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?searchTerm=${encodeURIComponent(
                  typedValue
                )}`
              )
                .then((response) => {
                  if (!response.ok) {
                    inputSpinner.style.display = "none";
                    if (response.status === 400 || response.status === 404) {
                      document.getElementById(
                        "companyList_sole_trader"
                      ).style.display = "none";
                    }
                    throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  inputSpinner.style.display = "none";
                  const result = JSON.parse(data).data;
                  datalist.innerHTML = ""; // Clear the dropdown
                  if (result.length != 0) {
                    result.forEach((item) => {
                      let option = document.createElement("li");
                      option.value = item.duns;
                      option.setAttribute(
                        "data-name",
                        item.primary_name ? item.primary_name : ""
                      );
                      option.setAttribute(
                        "data-street_address",
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      );
                      option.setAttribute(
                        "data-locality",
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      );
                      option.setAttribute(
                        "data-region",
                        item.primary_address.region
                          ? item.primary_address.region
                          : ""
                      );
                      option.setAttribute(
                        "data-postCode",
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      );
                      option.innerHTML = `${
                        item.primary_name ? item.primary_name : ""
                      },${
                        item.primary_address.street_address.line1
                          ? item.primary_address.street_address.line1
                          : ""
                      },${
                        item.primary_address.locality
                          ? item.primary_address.locality
                          : ""
                      },${
                        item.primary_address.postal_code
                          ? item.primary_address.postal_code
                          : ""
                      }`; // Assuming 'duns' is the property you want to display
                      datalist.innerHTML += option.outerHTML;
                      document.getElementById(
                        "companyList_sole_trader"
                      ).style.pointerEvents = "auto";
                      document.getElementById(
                        "companyList_sole_trader"
                      ).style.display = "block";
                      datalist.addEventListener("click", function (event) {
                        inputSpinner.style.display = "block";
                        const selectedOption = event.target;
                        selectedOption.classList.add("selected");
                        searchCompany.value = selectedOption.dataset.name;
                        document.getElementById(
                          "companyList_sole_trader"
                        ).style.display = "none";
                        datalist.innerHTML = ""; // Clear the dropdown
                        let display_data = document.getElementById(
                          "display_company_details_soleTrader"
                        );
                        let display_label = document.getElementById(
                          "registered_label_soleTrader"
                        );
                        companyNumber = selectedOption.value
                          ? selectedOption.value
                          : 0;
                        sole_companyName = selectedOption.dataset.name;
                        sole_company_address =
                          selectedOption.dataset.street_address;
                        sole_company_locality = selectedOption.dataset.locality;
                        sole_company_region = selectedOption.dataset.region;
                        sole_company_postcode = selectedOption.dataset.postcode;
                        localStorage.setItem("duns", selectedOption.value);
                        inputSpinner.style.display = "none";
                        display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                              placeholder="Ex: Addison Lee Ltd"
                            >
                              Registered Company Details
                            </label>`;
                        display_data.innerHTML = `<div><span id="span_personal_company_name">${selectedOption.dataset.name}</span><br/>
                          <span id="span_personal_company_number">#${selectedOption.value}</span><br/>
                                    <span id="span_personal_company_address">${selectedOption.dataset.street_address}</span><br/>
                                    <span id="span_personal_company_locality">${selectedOption.dataset.locality}</span>
                                    <span id="span_personal_company_region">${selectedOption.dataset.region}</span><span id="span_personal_company_postalcode">${selectedOption.dataset.postcode}</span><br/>
                                    </div>`;
                        p_registered_companyName_segment = true;

                        document.getElementById(
                          "inputfields_company_details_soleTrader"
                        ).style.display = "block";
                        document
                          .getElementById("nextbtn_3_personal_soleTrader")
                          .classList.add("enabled");
                        document.getElementById(
                          "nextbtn_3_personal_soleTrader"
                        ).disabled = false;
                        document
                          .querySelector("#registered_company_name_sole_trader")
                          .addEventListener("keydown", function (event) {
                            document
                              .getElementById("nextbtn_3_personal_soleTrader")
                              .classList.remove("enabled");

                            document.getElementById(
                              "nextbtn_3_personal_soleTrader"
                            ).disabled = true;
                            document.getElementById(
                              "inputfields_company_details_soleTrader"
                            ).style.display = "none";
                          });
                      });
                    });
                  } else {
                    let option = document.createElement("li");
                    option.innerHTML =
                      "Sorry we cannot find your company, please continue with 'Personal Account' by re-clicking Sole Trader button";
                    datalist.innerHTML += option.outerHTML;
                    document.getElementById(
                      "companyList_sole_trader"
                    ).style.pointerEvents = "none";
                    document.getElementById(
                      "companyList_sole_trader"
                    ).style.display = "block";
                  }
                })
                .catch((error) => {
                  inputSpinner.style.display = "none";
                  let option = document.createElement("li");
                  option.innerHTML =
                    "Sorry we cannot find your company, please continue with 'Personal Account' by re-clicking Sole Trader button";
                  datalist.innerHTML += option.outerHTML;
                  document.getElementById(
                    "companyList_sole_trader"
                  ).style.pointerEvents = "none";
                  document.getElementById(
                    "companyList_sole_trader"
                  ).style.display = "block";
                });
            });
          }
        }

        function uncheck() {
          document.getElementById("sole_trader").checked = false;
          document.getElementById("sole_trader_accountDetals").style.display =
            "block";
          document.getElementById("sole_trader_companyDetails").style.display =
            "none";
        }
        function changeTab(tabIndex, event) {
          event.preventDefault();
        }
        function nextTab() {
          window.scrollTo(0, 0);
          console.log("Next 2", currentTab);
          if (document.getElementById("personal_type").checked) {
            localStorage.setItem("p_emailSegment", true);
            let submitContent = document.getElementById(
              "submit_text_content_personal"
            );
            submitContent.innerHTML = `of Trading being incorporated in and forming part of every contract
            for services, ii) agree to pay the charges and priority fee as
            invoiced by Addison Lee.`;
          }
          if (document.getElementById("bussiness_type").checked) {
            let submitContent = document.getElementById(
              "submit_text_content_business"
            );
            submitContent.innerHTML = `of Trading being incorporated in and forming part of every contract
            for services, ii) agree to pay the charges and priority fee as
            invoiced by Addison Lee, and iii) confirm your permission to run a
            credit check.`;
          }
          let checkbox_ukcompany = document.getElementById("companytype_1");
          if (checkbox_ukcompany.checked) {
            document.getElementById("ukcompany").style.display = "block";
            document.getElementById("internationalCompany").style.display =
              "none";
            document.getElementById("companyList").style.display = "none";
          }
          // changeTab(nxtTab);

          if (localStorage.getItem("currentTab")) {
            currentTab = parseInt(localStorage.getItem("currentTab"));
            const nxtTab = (currentTab + 1) % 5;
            document
              .querySelector(`#content${currentTab + 1}`)
              .classList.remove("active");
            document
              .querySelector(`.step:nth-child(${currentTab + 1})`)
              .classList.remove("active");
            currentTab = nxtTab;
            document
              .querySelector(`#content${currentTab + 1}`)
              .classList.add("active");
            document
              .querySelector(`.step:nth-child(${currentTab + 1})`)
              .classList.add("active");
            document
              .querySelector(`.step:nth-child(${currentTab})`)
              .classList.add("submitted-tab");
            localStorage.setItem("currentTab", currentTab);
          } else {
            const nxtTab = (currentTab + 1) % 5;
            document
              .querySelector(`#content${currentTab + 1}`)
              .classList.remove("active");
            document
              .querySelector(`.step:nth-child(${currentTab + 1})`)
              .classList.remove("active");
            currentTab = nxtTab;
            document
              .querySelector(`#content${currentTab + 1}`)
              .classList.add("active");
            document
              .querySelector(`.step:nth-child(${currentTab + 1})`)
              .classList.add("active");
            document
              .querySelector(`.step:nth-child(${currentTab})`)
              .classList.add("submitted-tab");
          }

          document.querySelectorAll(".step .circle").forEach((circle) => {
            if (circle.parentElement.classList.contains("active")) {
              circle.style.backgroundColor = "#F8DC3D";
              circle.style.borderRadius = "30px";
              circle.style.border = "2px solid #232320";
              circle.style.color = "#232320";
            }
          });
          const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
            </svg>`;
          const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
            svgContent
          )}")`;
          document.querySelectorAll(`.step .circle`).forEach((circle) => {
            if (circle.parentElement.classList.contains("submitted-tab")) {
              circle.style.backgroundColor = "#33CB8B";
              circle.style.borderRadius = "30px";
              circle.style.border = "none";
              circle.style.backgroundImage = svgDataUri;
              circle.style.backgroundRepeat = "no-repeat";
              circle.style.fontSize = "0px";
              circle.style.display = "flex";
              circle.style.backgroundPosition = "center";
            }
          });

          const activeTab = document.querySelector(`#content${currentTab}`);
          const nextTab = activeTab.nextElementSibling;
          activeTab.classList.remove("active");
        }

        function previousTab() {
          // if(localStorage.getItem("bussinessCompanyName")){
          let companyNameInput = document.getElementById(
            "registered_company_name"
          );
          companyNameInput.addEventListener("keydown", () => {
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.add("disabled");
            document
              .getElementById("nextbtn_3_ukcompany")
              .classList.remove("enabled");
            document.getElementById("nextbtn_3_ukcompany").disabled = true;
          });
          // }
          document
            .querySelector(`.step:nth-child(${currentTab})`)
            .classList.remove("submitted-tab");
          if (localStorage.getItem("currentTab")) {
            console.log(
              "submitted tab",
              localStorage.getItem("p_emailSegment")
            );
            document
              .querySelector(
                `.step:nth-child(${parseInt(
                  localStorage.getItem("currentTab")
                )})`
              )
              .classList.remove("submitted-tab");
            if (
              parseInt(localStorage.getItem("currentTab")) == 1 &&
              localStorage.getItem("b_emailSegment") == "true"
            ) {
              console.log("Entered if condition is false");
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${
                    parseInt(localStorage.getItem("currentTab")) + 1
                  }`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              let para = document.getElementById("helptext");
              para.innerHTML = `Please enter your email address to receive a one time passcode and verify your account`;
              let inputField = document.getElementById("email");
              inputField.type = "text";
              inputField.placeholder = "Ex: John.smith@email.com";
              let label = document.getElementById("bussinessemail");
              label.innerHTML = "BUSINESS EMAIL";
              document.getElementById("submitAndVerifyBtn").style.display =
                "none";
              document.getElementById("nextbtn_2").style.display = "block";
              document.getElementById("nextbtn_2").classList.add("enabled");
              document.getElementById("email").value =
                localStorage.getItem("email");
              document.getElementById("email").style.borderColor = "";
              document.getElementById("errors").innerHTML = "";
              localStorage.setItem("b_emailSegment", false);
            } else if (
              localStorage.getItem("p_emailSegment") == "true" &&
              parseInt(localStorage.getItem("currentTab")) == 1
            ) {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${
                    parseInt(localStorage.getItem("currentTab")) + 1
                  }`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              console.log("else if");
              let para = document.getElementById("helptext_personal");
              para.innerHTML = `Please enter your email address to receive a one time passcode and verify your account`;
              let inputField = document.getElementById("email_personal");
              inputField.type = "text";
              inputField.placeholder = "Ex: John.smith@email.com";
              document.getElementById("email_personal").value = personal_email;
              let label = document.getElementById("bussinessemail_personal");
              label.innerHTML = "EMAIL";
              document.getElementById(
                "submitAndVerifyBtn_personal"
              ).style.display = "none";
              document.getElementById("nextbtn_2_personal").style.display =
                "block";
              document.getElementById("email_personal").style.borderColor = "";
              document.getElementById("errors_personal").innerHTML = "";
              localStorage.setItem("p_emailSegment", false);
            } else {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  // circle.style.backgroundColor = "";
                  circle.textContent = `${
                    parseInt(localStorage.getItem("currentTab")) + 1
                  }`;
                  circle.style.backgroundColor = "#fff";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              let currentTb2 = parseInt(localStorage.getItem("currentTab"));
              const nxtTab = currentTb2 - 1;
              document
                .querySelector(`#content${currentTb2 + 1}`)
                .classList.remove("active");
              document
                .querySelector(`.step:nth-child(${currentTb2 + 1})`)
                .classList.remove("active");
              currentTb2 = nxtTab;
              document
                .querySelector(`#content${currentTb2 + 1}`)
                .classList.add("active");
              document
                .querySelector(`.step:nth-child(${currentTb2 + 1})`)
                .classList.add("active");
              localStorage.setItem("currentTab", currentTb2);
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${
                    parseInt(localStorage.getItem("currentTab")) + 1
                  }`;

                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
            }
          } else {
            console.log("Entered previous function else", currentTab);
            if (currentTab == 1 && b_emailSegment == true) {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${currentTab + 1}`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              console.log("Entered if email segment");
              let para = document.getElementById("helptext");
              para.innerHTML = `Please enter your email address to receive a one time passcode and verify your account`;
              document.getElementById("email").value = email;
              let inputField = document.getElementById("email");
              inputField.type = "text";
              inputField.placeholder = "Ex: John.smith@email.com";
              let label = document.getElementById("bussinessemail");
              label.innerHTML = "BUSINESS EMAIL";
              document.getElementById("submitAndVerifyBtn").style.display =
                "none";
              document.getElementById("nextbtn_2").style.display = "block";
              document.getElementById("email").value = email;
              document.getElementById("email").style.borderColor = "";
              document.getElementById("errors").innerHTML = "";
              b_emailSegment = false;
            } else if (p_emailSegment == true && currentTab == 1) {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${currentTab + 1}`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              console.log("else if");
              let para = document.getElementById("helptext_personal");
              para.innerHTML = `Please enter your email address to receive a one time passcode and verify your account`;
              let inputField = document.getElementById("email_personal");
              inputField.type = "text";
              inputField.placeholder = "Ex: John.smith@email.com";
              document.getElementById("email_personal").value = personal_email;
              let label = document.getElementById("bussinessemail_personal");
              label.innerHTML = "EMAIL";
              document.getElementById(
                "submitAndVerifyBtn_personal"
              ).style.display = "none";
              document.getElementById("nextbtn_2_personal").style.display =
                "block";
              document.getElementById("email_personal").style.borderColor = "";
              document.getElementById("errors_personal").innerHTML = "";
              p_emailSegment = false;
            } else {
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  circle.textContent = `${currentTab + 1}`;
                  circle.style.backgroundColor = "#fff";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
              console.log("else");
              const nxtTab = (currentTab - 1) % 5;
              console.log(nxtTab);
              document
                .querySelector(`#content${currentTab + 1}`)
                .classList.remove("active");
              document
                .querySelector(`.step:nth-child(${currentTab + 1})`)
                .classList.remove("active");
              currentTab = nxtTab;
              document
                .querySelector(`#content${currentTab + 1}`)
                .classList.add("active");
              document
                .querySelector(`.step:nth-child(${currentTab + 1})`)
                .classList.add("active");
              document.querySelectorAll(".step .circle").forEach((circle) => {
                if (circle.parentElement.classList.contains("active")) {
                  console.log(circle);
                  circle.textContent = `${currentTab + 1}`;
                  circle.style.backgroundColor = "#F8DC3D";
                  circle.style.borderRadius = "30px";
                  circle.style.border = "2px solid #232320";
                  circle.style.color = "#232320";
                  circle.style.fontSize = "16px";
                  circle.style.display = "flex";
                  circle.style.backgroundImage = "none";
                  circle.style.backgroundRepeat = "none";
                  circle.style.backgroundPosition = "none";
                }
              });
            }
          }
          let accountType = document.getElementById("personal_type");
          document
            .querySelectorAll(`.step:nth-child(${currentTab + 1})`)
            .forEach((circle) => {
              if (
                document
                  .querySelector("#payment_details")
                  .textContent.trim() === "Payment Details" &&
                accountType.checked
              ) {
                document.getElementById(
                  "payment_details_personal"
                ).style.display = "block";
                document.getElementById(
                  "payment_details_bussiness"
                ).style.display = "none";
                document.getElementById("button_3_debit").style.display =
                  "none";
                document.getElementById(
                  "save_debitCredit_details"
                ).style.display = "none";
              }
              if (
                document
                  .querySelector("#account_details")
                  .textContent.trim() === "Account Details" &&
                accountType.checked
              ) {
                document.getElementById(
                  "bussiness_comapny_details"
                ).style.display = "none";
                document.getElementById(
                  "account_details_personal"
                ).style.display = "block";
              }
            });
        }

        document
          .getElementById("submit")
          .addEventListener("click", function (event) {
            let checkboxSubmit = document.getElementById("SubmitCheckbox");
            if (!checkboxSubmit.checked) {
              event.preventDefault();
            } else {
              let button = document.getElementById("submit");
              let buttonText = document.getElementById("submitText");
              let buttonSpinner = document.getElementById("submitSpinner");

              button.disabled = true;
              buttonText.style.display = "none";
              buttonSpinner.style.display = "block";
              let isBusinessAccout =
                document.getElementById("bussiness_type").checked;
              let isPersonalAccout =
                document.getElementById("personal_type").checked;
              let accountType = isBusinessAccout
                ? "Business Account"
                : "Personal Account";
              let b_firstName = document
                .getElementById("first_name")
                .value.trim();
              let b_lastName = document
                .getElementById("last_name")
                .value.trim();
              let b_email = email ? email : localStorage.getItem("email");
              let b_mobile = document.getElementById("mobile").value.trim();
              if (isBusinessAccout == true) {
                if (document.getElementById("companytype_1").checked == true) {
                  var b_companyName = document
                    .getElementById("registered_company_name")
                    .value.trim();
                  var b_companyCity = "";
                  var b_companyStreet =
                    document.getElementById("span_street1").textContent;
                  var b_companyPostalCode = "";
                  if (document.getElementById("span_postalcode1")) {
                    b_companyPostalCode =
                      document.getElementById("span_postalcode1").textContent;
                  }
                  if (
                    document.getElementById("span_region1") ||
                    document.getElementById("span_locality1")
                  ) {
                    b_companyCity = document
                      .getElementById("span_region1")
                      .textContent.trim()
                      ? document
                          .getElementById("span_region1")
                          .textContent.trim()
                      : document
                          .getElementById("span_locality1")
                          .textContent.trim();
                  }
                  var b_companyCountry = "United Kingdom";
                  if (localStorage.getItem("registered_company_number")) {
                    var b_companyNumber = parseInt(
                      localStorage.getItem("registered_company_number")
                    );
                  } else {
                    var b_companyNumber = document
                      .getElementById("span_company_number1")
                      .getAttribute("data-cno")
                      ? parseInt(
                          document
                            .getElementById("span_company_number1")
                            .getAttribute("data-cno")
                            .trim()
                        )
                      : 0;
                  }
                }
                if (document.getElementById("companytype_2").checked == true) {
                  var b_companyName = document
                    .getElementById("cname")
                    .value.trim();
                  var b_companyCity = document
                    .getElementById("townCity")
                    .value.trim();
                  var b_companyStreet =
                    document.getElementById("buildingNoName").value.trim() +
                    document.getElementById("addressValue").value.trim();
                  var b_companyPostalCode = document
                    .getElementById("postcode")
                    .value.trim();
                  var b_companyCountry = document.getElementById("countryname")
                    .value
                    ? document.getElementById("countryname").value.trim()
                    : "";
                  var b_companyNumber = parseInt(
                    document.getElementById("cnum").value.trim()
                  );
                  if (
                    b_companyNumber == null ||
                    b_companyNumber == undefined ||
                    isNaN(b_companyNumber) == true
                  ) {
                    b_companyNumber = 0;
                  }
                }
              }

              let b_paymentType = document.getElementById("paymentmethod_1")
                .checked
                ? "Direct Debit"
                : "Credit Card";
              let b_typeOfCreditCard = "";
              if (
                document.getElementById("individual_credit_card").checked ==
                  false &&
                document.getElementById("single_credit_card").checked == false
              ) {
                b_typeOfCreditCard = "";
              } else if (
                document.getElementById("individual_credit_card").checked ==
                  true &&
                document.getElementById("single_credit_card").checked == false
              ) {
                b_typeOfCreditCard = "Individual Credit Card";
              } else if (
                document.getElementById("individual_credit_card").checked ==
                  false &&
                document.getElementById("single_credit_card").checked == true
              ) {
                b_typeOfCreditCard = "Single Credit Card";
              }
              let b_tncAccepted =
                document.getElementById("SubmitCheckbox").checked;

              let p_firstName = document.getElementById(
                "first_name_personal"
              ).value;
              let p_lastName =
                document.getElementById("last_name_personal").value;

              let p_email = personal_email
                ? personal_email
                : localStorage.getItem("personal_email");
              let p_mobile = document.getElementById("mobile_personal").value;

              let soleTrader = document.getElementById("sole_trader").checked;
              let p_companyStreet = "";
              let p_companyCity = "";
              let p_companyCountry = "";
              let p_companyPostalCode = "";
              let p_companyNumber = "";
              if (soleTrader == true) {
                p_companyName = document
                  .getElementById("registered_company_name_sole_trader")
                  .value.trim();
                p_companyStreet = document.getElementById(
                  "span_personal_company_address"
                ).textContent;
                p_companyCity = document.getElementById(
                  "span_personal_company_locality"
                ).textContent;
                p_companyCountry = document.getElementById(
                  "span_personal_company_region"
                ).textContent;
                p_companyPostalCode = document.getElementById(
                  "span_personal_company_postalcode"
                ).textContent;
                p_companyNumber = parseInt(companyNumber);
              }
              if (soleTrader == false) {
                p_companyName = p_firstName + "" + p_lastName;
                p_companyStreet =
                  document.getElementById("buildingNoName_personal").value +
                  document.getElementById("addressValue_personal").value;
                p_companyCity =
                  document.getElementById("townCity_personal").value;
                p_companyCountry = "United Kingdom";
                p_companyPostalCode =
                  document.getElementById("postcode_personal").value;
                p_companyNumber = 0;
              }

              let p_paymentType = "Credit Card";
              let p_typeOfCreditCard = "";
              let p_tncAccepted =
                document.getElementById("SubmitCheckbox").checked;

              let dnbRecommendation = localStorage.getItem("riskSegment")
                ? parseInt(localStorage.getItem("riskSegment"))
                : 0;
              let dnbCreditLimit = creditLimit ? parseInt(creditLimit) : 0;
              let dnbTotalEmployees = localStorage.getItem("no_of_employee")
                ? parseInt(localStorage.getItem("no_of_employee"))
                : 0;
              let utm_source = localStorage.getItem("utm_source")
                ? localStorage.getItem("utm_source")
                : "";
              let utm_campaign = localStorage.getItem("utm_campaign")
                ? localStorage.getItem("utm_campaign")
                : "";
              let utm_medium = localStorage.getItem("utm_medium")
                ? localStorage.getItem("utm_medium")
                : "";

              submissionPayload = {
                accountType: accountType,
                first_name: isBusinessAccout ? b_firstName : p_firstName,
                last_name: isBusinessAccout ? b_lastName : p_lastName,
                email: isBusinessAccout ? b_email : p_email,
                mobile: isBusinessAccout ? b_mobile : p_mobile,
                // companyRegion: isBusinessAccout ? b_companyRegion : "",
                companyName: isBusinessAccout ? b_companyName : p_companyName,
                companyStreet: isBusinessAccout
                  ? b_companyStreet
                  : p_companyStreet,
                companyCity: isBusinessAccout ? b_companyCity : p_companyCity,
                companyCountry: isBusinessAccout
                  ? b_companyCountry
                  : p_companyCountry,
                companyPostalCode: isBusinessAccout
                  ? b_companyPostalCode
                  : p_companyPostalCode,

                paymentType: isBusinessAccout ? b_paymentType : p_paymentType,
                typeOfCreditCard: isBusinessAccout
                  ? b_typeOfCreditCard
                  : p_typeOfCreditCard,
                termsAndConditionsAccepted: isBusinessAccout
                  ? b_tncAccepted
                  : p_tncAccepted,
                dnbRecommendation: dnbRecommendation,
                dnbCreditLimit: dnbCreditLimit,
                dnbTotalEmployees: dnbTotalEmployees,
                duns_no: localStorage.getItem("duns")
                  ? parseInt(localStorage.getItem("duns"))
                  : 0,
                utm_source: utm_source,
                utm_campaign: utm_campaign,
                utm_medium: utm_medium,
                soleTrader: soleTrader,
                directDebitMandateID: "",
                otherDirectDebitParameters: "",
                companyNumber: isBusinessAccout
                  ? b_companyNumber
                  : p_companyNumber,
              };
              console.log("comp ", submissionPayload.duns_no);

              // if (comp_reg_no) {
              //   console.log("comp_reg_no");
              //   submissionPayload.companyNumber = parseInt(comp_reg_no);
              // } else if (localStorage.getItem("comp_reg_no")) {
              //   console.log("localStorage");
              //   submissionPayload.companyNumber = parseInt(
              //     localStorage.getItem("comp_reg_no")
              //   );
              // } else if (document.getElementById("cnum").value.trim()) {
              //   console.log("document");
              //   submissionPayload.companyNumber = parseInt(
              //     document.getElementById("cnum").value.trim()
              //   );
              // }
              console.log("submissionPayload 2 --->", submissionPayload);
              const requestOptions = {
                method: "POST",
                headers: {
                  "Content-Type": "application/json",
                },
                data: submissionPayload,
              };
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/addion_lee_production?submissionData=true`,
                {
                  method: "POST", // Specify the HTTP method
                  headers: {
                    "Content-Type": "application/json",
                  },
                  body: JSON.stringify(submissionPayload), // Collect form data
                }
              )
                .then((response) => {
                  if (!response.ok) {
                    if (
                      response.status === 400 ||
                      response.status === 404 ||
                      response.status == 500
                    ) {
                    }
                    button.disabled = false;
                    buttonText.style.display = "block";
                    buttonSpinner.style.display = "none";
                    throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.text(); // assuming the response is in JSON format
                })
                .then((data) => {
                  button.disabled = false;
                  buttonText.style.display = "block";
                  buttonSpinner.style.display = "none";
                  console.log("response data --->", data);
                  document.getElementById("afterSubmit").style.display =
                    "block";
                  let submitheadline =
                    document.getElementById("heading_submit");
                  document.getElementById("prebtn_5").style.display = "none";
                  document.getElementById("privacybtn").style.display = "none";
                  document.getElementById("submit_instructions").style.display =
                    "none";
                  let divContent = document.getElementById("afterSubmit");
                  if (document.getElementById("personal_type").checked) {
                    submitheadline.textContent =
                      "Account Application Complete!";
                    divContent.innerHTML = `Thanks again for choosing Addison Lee, London's premium choice for cars, Taxis and Courier & Delivery services.<br>
                  Please check your inbox for your Account Activation email and start making bookings today!<br>If you need support or more information,
                  don't hesitate to get in touch with our Sales Team on 020 3800 0365*<br><br><span style="    color: #232320;
    text-align: center;
    font-family: Steagal;
    font-size: 10px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                    divContent.style.width = "650px";
                  }
                  if (document.getElementById("bussiness_type").checked) {
                    submitheadline.textContent = "APPLICATION SUBMITTED";
                    divContent.innerHTML = `Thanks for choosing Addison Lee<br>
            We'll be back to you in a day (or two) with everything you need to get moving<br>
            Want to book a service today? No problem! Call us on 020 3800 0365*<br><br><span style="    color: #232320;
    text-align: center;
    font-family: Steagal;
    font-size: 10px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                  }
                  document.getElementById("home").style.display = "block";
                  document.getElementById("submit").style.display = "none";
                  document.getElementById("save_content_submit").style.display =
                    "none";
                  document
                    .querySelector(`.step:nth-child(5)`)
                    .classList.add("submitted-tab");
                  const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
            </svg>`;
                  const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
                    svgContent
                  )}")`;
                  document
                    .querySelectorAll(`.step .circle`)
                    .forEach((circle) => {
                      if (
                        circle.parentElement.classList.contains("submitted-tab")
                      ) {
                        circle.style.backgroundColor = "#33CB8B";
                        circle.style.borderRadius = "30px";
                        circle.style.border = "none";
                        circle.style.backgroundImage = svgDataUri;
                        circle.style.backgroundRepeat = "no-repeat";
                        circle.style.fontSize = "0px";
                        circle.style.display = "flex";
                        circle.style.backgroundPosition = "center";
                      }
                    });
                  localStorage.clear();
                })
                .catch((error) => {
                  document.getElementById("submit").disabled = false;
                  console.log("error while submission --->", error);
                  document.getElementById("afterSubmit").style.display =
                    "block";
                  let submitheadline =
                    document.getElementById("heading_submit");
                  submitheadline.textContent = "Something Went Wrong";
                  document.getElementById("prebtn_5").style.display = "none";
                  document.getElementById("privacybtn").style.display = "none";
                  document.getElementById("submit_instructions").style.display =
                    "none";
                  let divContent = document.getElementById("afterSubmit");
                  divContent.innerHTML = `There was a problem while submitting your application<br>
            Please try submitting your application again<br>
            Want to book a service today? No problem! Call us on 020 3800 0365*<br> <br><span style="    color: #232320;
    text-align: center;
    font-family: Steagal;
    font-size: 10px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                  document.getElementById("home").style.display = "block";
                  document.getElementById("submit").style.display = "none";
                  document.getElementById("save_content_submit").style.display =
                    "none";
                  console.log(
                    "currentTab 4",
                    currentTab,
                    localStorage.getItem("currentTab")
                  );
                  document
                    .querySelector(`.step:nth-child(5)`)
                    .classList.add("active");
                  const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M6.42095 9.76939L13.5272 1.6079L15.3695 3.09717L6.40541 13.3939L0.629869 8.72349L2.17186 6.95257L5.72943 9.82983L6.10433 10.133L6.42095 9.76939ZM6.61512 13.5635L6.61311 13.5618C6.61378 13.5624 6.61445 13.5629 6.61512 13.5635Z" fill="#232320" stroke="#232320"/>
            </svg>`;
                  const svgDataUri = `url("data:image/svg+xml;utf8,${encodeURIComponent(
                    svgContent
                  )}")`;
                  document
                    .querySelectorAll(`.step .circle`)
                    .forEach((circle) => {
                      if (circle.parentElement.classList.contains("active")) {
                        circle.style.backgroundColor = "#F8DC3D";
                        circle.style.borderRadius = "30px";
                        circle.style.border = "2px solid #232320";
                        circle.style.color = "#232320";
                      }
                    });
                });
            }
          });
        document
          .getElementById("home")
          .addEventListener("click", function (event) {
            location.href = "https://www.addisonlee.com/";
          });
        // business , save and countinue functions
        submit();
      }
      document.getElementsByClassName("stepper-container")[0].style.display = "none";
      
    </script>
  </body>
</html>

<?php get_footer();  ?>