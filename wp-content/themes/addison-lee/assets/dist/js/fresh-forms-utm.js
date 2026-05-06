var WebFormEvent = {
beforeSubmit: function () {
  // Function to get UTM parameters from the URL
  function getUTMParam(paramName) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(paramName) || "";
  }

  // Append hidden fields with UTM parameters
  WebForm.$('<input>').attr({
    type: 'hidden',
    name: 'contact[custom_field][cf_lead_source]',
    value: getUTMParam('utm_source')
  }).appendTo('.fs-webform-container form');

  WebForm.$('<input>').attr({
    type: 'hidden',
    name: 'contact[custom_field][cf_lead_medium]',
    value: getUTMParam('utm_medium')
  }).appendTo('.fs-webform-container form');

  WebForm.$('<input>').attr({
    type: 'hidden',
    name: 'contact[custom_field][cf_lead_campaign]',
    value: getUTMParam('utm_campaign')
  }).appendTo('.fs-webform-container form');

  WebForm.$('<input>').attr({
    type: 'hidden',
    name: 'contact[custom_field][cf_google_click_id]',
    value: getUTMParam('gclid')
  }).appendTo('.fs-webform-container form');

  WebForm.$('<input>').attr({
    type: 'hidden',
    name: 'contact[custom_field][cf_facebook_click_id]',
    value: getUTMParam('fbclid')
  }).appendTo('.fs-webform-container form');

  WebForm.$('<input>').attr({
    type: 'hidden',
    name: 'contact[custom_field][cf_ga_client_id]',
    value: getUTMParam('gaid')
  }).appendTo('.fs-webform-container form');
}
}
	