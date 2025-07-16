    // Account form javsascript.
      
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

	  window.enableNextButton = function() {
    document.getElementById("nextbtn_1").classList.add("enabled");
};


      document.addEventListener("DOMContentLoaded", (event) => {
        const accountForm = document.querySelector(".account-form");
        // if (localStorage.getItem("personal_flow_selected")) {
 
        //   setTimeout(() => {
        //     document.getElementById("personal_type").checked = true;
        //     document.getElementById("personal_type").click();
        //     enableNextButton();
        //   }, 100);
        // }
        // if (localStorage.getItem("business_flow_selected")) {

        //   setTimeout(() => {

        //     document.getElementById("bussiness_type").checked = true;
        //     document.getElementById("bussiness_type").click();
        //     enableNextButton();
        //   }, 100);
        // }

  
          if (accountForm.classList.contains("personal")) {
              setTimeout(() => {
                  // document.getElementById("personal_type").checked = true;
                  document.getElementById("personal_type").click();
                  enableNextButton();
              }, 500);
          } else if (accountForm.classList.contains("business")) {
              setTimeout(() => {
                  // document.getElementById("bussiness_type").checked = true;
                  document.getElementById("bussiness_type").click();
                  enableNextButton();
              }, 500);
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
            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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
            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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

            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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

            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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

            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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
            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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
            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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
            location.href = 'https://addisonlee2.wpengine.com/business/apply2/';

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
                    `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?code=${encodeURIComponent(
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
            inputField.maxLength = 4;

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
          let account_details_error = document.getElementById("account_details_error");
          
          if (
            checkbox_business.checked == true ||
            checkbox_personal.checked == true
          ) {
            nextTab();
            account_details_error.style.display = 'none';
          } else {
            account_details_error.style.display = 'block';
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
              // location.reload();
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
                'https://addisonlee2.wpengine.com/business/apply2/';
            }
            let accountType = document.getElementById("personal_type");
            localStorage.setItem("personal_flow_selected", true);
            if (localStorage.getItem("business_flow_selected")) {
              localStorage.clear();
              localStorage.setItem("personal_flow_selected", true);
              // location.reload();
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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
                      //option.value = item.duns;
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
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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

                    option.setAttribute(
                      "data-id",
                      item.duns ? item.duns : "0"
                    );                    
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
            localStorage.setItem("duns", selectedOption.dataset.id);
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?dunsId=${encodeURIComponent(
                selectedOption.dataset.id
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
                document.getElementById("directDebitDiv").style.display = "none";
                document.getElementById("directdebit").style.display = "none";
                document.getElementById("paymentmethod_1").style.display = "none";
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
              // Update https://addisonlee1dev.wpengine.com/ to https://www.addisonlee.com for production
              let queryparams = `showerrordetail=true&ttl=${ttl}&ddplanreference=${dynamicDdplanreference}&callbackurl=https://sandbox.api.eu.addisonleeglobal.net/api-wpforms/v2/api/direct-debit/statuses&redirecturl=https://addisonlee2.wpengine.com/business/apply2/&firstname=${firstName_business}&lastname=${lastName_business}&email=${email}&mobile=${mobile_business}&requestid=${randomGUID}&applyingascompany=true&currentpostcode=${removeSpaces(
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?edata=${encodeURIComponent(
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
				  console.log('change');
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
        inputField.maxLength = 4;
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?code=${encodeURIComponent(
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
          let newElement = `<div id="direct_debit_failed_label" class="mk-bg-third-grey mk-text-sm mk-my-6 mk-p-4">
            We’re sorry but your Direct Debit application could not be processed at this time.<br><br> 
            To open your account please get in touch with our Sales Team on 020 3800 0365*<br><br><span>*(Mon-Fri 9.00AM – 5.30PM) </span>
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
		  document.getElementById("directDebitDiv").style.display = "none";
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
			const accountForm = document.querySelector(".account-form");
			if (accountForm) {
			accountForm.scrollIntoView({ behavior: "smooth", block: "start" });
			}
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
              inputField.removeAttribute('maxLength');
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
              inputField.removeAttribute('maxLength');
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
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?email=${encodeURIComponent(
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
                    `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?email=${encodeURIComponent(
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
                        inputField.maxLength = 4;
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
                                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?code=${encodeURIComponent(
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
            let tcs_err_msg = document.getElementById("tcs_err_msg");
            
            if (!checkboxSubmit.checked) {
              tcs_err_msg.classList.remove('mk-hidden');
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?submissionData=true`,
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
                    divContent.innerHTML = `<p>Thanks again for chossing Addison Lee, London's premium choice for cars, Taxis and Courier & Delivery services.</p>
                  <p>Please check your inbox for your Account Activation email and start making bookings today!</p>If you need support or more information,
                  don't hesitate to get in touch with our Sales Team on 020 3800 0365*</p><br><span class="mk-text-xs">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                  }
                  if (document.getElementById("bussiness_type").checked) {
                    submitheadline.textContent = "APPLICATION SUBMITTED";
                    divContent.innerHTML = `<p>Thanks for choosing Addison Lee</p>
            <p>We'll be back to you in a day (or two) with everything you need to get moving</p>
            <p>Want to book a service today? No problem! Call us on 020 3800 0365*</p><br><span class="mk-text-xs">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
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
            Want to book a service today? No problem! Call us on 020 3800 0365*<br><br><span class="mk-text-xs">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
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
                'https://addisonlee2.wpengine.com/business/apply2/';
            }
            let accountType = document.getElementById("bussiness_type");
            localStorage.setItem("business_flow_selected", true);
            if (localStorage.getItem("personal_flow_selected")) {
              localStorage.clear();
              localStorage.setItem("business_flow_selected", true);
              // location.reload();
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
                'https://addisonlee2.wpengine.com/business/apply2/';
            }
            let accountType = document.getElementById("personal_type");
            localStorage.setItem("personal_flow_selected", true);
            if (localStorage.getItem("business_flow_selected")) {
              localStorage.clear();
              localStorage.setItem("personal_flow_selected", true);
              // location.reload();
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
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?email=${encodeURIComponent(
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
                    `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?email=${encodeURIComponent(
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
                        inputField.maxLength = 4;
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
                                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?code=${encodeURIComponent(
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
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?email=${encodeURIComponent(
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
                    `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?email=${encodeURIComponent(
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
                        inputField.maxLength = 4;
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?code=${encodeURIComponent(
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
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?postcode=${encodeURIComponent(
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
              address.length === 0 ||
              city.length === 0
            ) {
              if (postcode === "") {
                document.getElementById("postcode_personal").style.borderColor =
                  "red";
                document.getElementById("p_postcode_err_msg").innerHTML =
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
                  document.getElementById("paymentmethod_1").style.display = "none";
                  document.getElementById("directdebit").style.display = "none";
				  document.getElementById("directDebitDiv").style.display = "none";
                }
                if (creditcheck == true) {
                  document.getElementById("paymentmethod_1").style.display = "block";
                  document.getElementById("directdebit").style.display = "block";
				  document.getElementById("directDebitDiv").style.display = "block";
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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
                      option.setAttribute(
                        "data-id",
                        item.duns ? item.duns : "0"
                      );
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
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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
                    option.setAttribute(
                      "data-id",
                      item.duns ? item.duns : "0"
                    );
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
            localStorage.setItem("duns", selectedOption.dataset.id);
            fetch(
              `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?dunsId=${encodeURIComponent(
                selectedOption.dataset.id
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
                    `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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
                          option.setAttribute(
                            "data-id",
                            item.duns ? item.duns : "0"
                          );
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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
                      option.setAttribute(
                        "data-id",
                        item.duns ? item.duns : "0"
                      );
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
              localStorage.setItem("duns", selectedOption.dataset.id);
              fetch(
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?dunsId=${encodeURIComponent(
                  selectedOption.dataset.id
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
              // URLS: https://api.eu.addisonleeglobal.net - production
              // https://sandbox.api.eu.addisonleeglobal.net - staging
              // Redirects: https://www.addisonlee.com -production
              // https://addisonlee1dev.wpengine.com/ - staging
              let queryparams = `showerrordetail=true&ttl=${ttl}&ddplanreference=${dynamicDdplanreference}&callbackurl=https://sandbox.api.eu.addisonleeglobal.net/api-wpforms/v2/api/direct-debit/statuses&redirecturl=https://addisonlee2.wpengine.com/business/apply2/&firstname=${firstName_business}&lastname=${lastName_business}&email=${email}&mobile=${mobile_business}&requestid=${randomGUID}&applyingascompany=true&currentpostcode=${removeSpaces(
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?edata=${encodeURIComponent(
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
                  `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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
                        option.setAttribute(
                          "data-id",
                          item.duns ? item.duns : "0"
                        );
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
                          localStorage.setItem("duns", selectedOption.dataset.id);
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
                `https://us-central1-konnectify-d1.cloudfunctions.net/Addison_DNB?searchTerm=${encodeURIComponent(
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
                      option.setAttribute(
                        "data-id",
                        item.duns ? item.duns : "0"
                      );
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
                        localStorage.setItem("duns", selectedOption.dataset.id);
                        inputSpinner.style.display = "none";
                        display_label.innerHTML = `<label
                              class="fieldname"
                              id="company_name"
                              placeholder="Ex: Addison Lee Ltd"
                            >
                              Registered Company Details
                            </label>`;
                        display_data.innerHTML = `<div><span id="span_personal_company_name">${selectedOption.dataset.name}</span><br/>
                          <span id="span_personal_company_number">#${selectedOption.dataset.id}</span><br/>
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
		  const accountForm = document.querySelector(".account-form");
		  if (accountForm) {
			accountForm.scrollIntoView({ behavior: "smooth", block: "start" });
		  }
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
              inputField.removeAttribute('maxLength');
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
              inputField.removeAttribute('maxLength');
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
              inputField.removeAttribute('maxLength');
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
              inputField.removeAttribute('maxLength');
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
            let tcs_err_msg = document.getElementById("tcs_err_msg");
            if (!checkboxSubmit.checked) {
              tcs_err_msg.classList.remove('mk-hidden');
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
                  "client_id": "8f082bed9b4944f6a62ea5a217dc1ebb",
                  "client_secret": "428e097bbB054E3aaA761A09E5C42E6F"
                },
                data: submissionPayload,
              };
              fetch(
     
                `https://sandbox.api.eu.addisonleeglobal.net/api-wpforms/v2/api/accounts`,
                {
                  method: "POST", // Specify the HTTP method
                  headers: {
                    "Content-Type": "application/json",
                    "client_id": "8f082bed9b4944f6a62ea5a217dc1ebb",
                    "client_secret": "428e097bbB054E3aaA761A09E5C42E6F"
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
                  don't hesitate to get in touch with our Sales Team on 020 3800 0365*<br><br><span class="mk-text-sm">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
                    divContent.style.width = "650px";
                  }
                  if (document.getElementById("bussiness_type").checked) {
                    submitheadline.textContent = "APPLICATION SUBMITTED";
                    divContent.innerHTML = `Thanks for choosing Addison Lee<br>
            We'll be back to you in a day (or two) with everything you need to get moving<br>
            Want to book a service today? No problem! Call us on 020 3800 0365*<br><br><span class="mk-text-sm">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
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
            Want to book a service today? No problem! Call us on 020 3800 0365*<br> <br><span class="mk-text-xs">*(Mon-Fri 09.00AM - 05.30PM)</span>`;
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
        
        // business , save and countinue functions
        submit();
      }