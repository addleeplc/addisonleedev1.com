function cleanUTMStorage(){
	var utmStorage = localStorage.getItem("utm_data"),
		uniqueUtmKeys = [],
		uniqueUtms = [];

	var hashes = utmStorage.split('&');
	for (var i = hashes.length - 1; i >= 0; i--) {
		var hash = hashes[i].split('=');
		if (!uniqueUtmKeys.includes(hash[0])) {
			uniqueUtmKeys.push(hash[0]);
			uniqueUtms.push(hashes[i]);
		}
	}
	localStorage.setItem("utm_data", uniqueUtms.join('&'));
}

function utmTracker(){
	var urlParams = getUrlVariables();
    if (urlParams.length !== 0) {
		var json_urlParams = urlParams;
		if (localStorage.getItem("utm_data") !== null) {
			var old_utm_data = localStorage.getItem("utm_data");
			var new_utm_data = old_utm_data + '&' + json_urlParams;
			localStorage.setItem("utm_data", new_utm_data);
			cleanUTMStorage();
		} else {
			localStorage.setItem("utm_data", json_urlParams);
		}
    }
}
function getUrlVariables()
{
    var vars = [], hash, jsonstr="";
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; )
    {
        hash = hashes[i].split('=');
		i++;
		if(hash[0].startsWith("utm_")){ // Find all utm params
			if(i == hashes.length){
			jsonstr += hash[0] + '=' + hash[1];
			}
			else{
			jsonstr += hash[0] + '=' + hash[1] + '&';
			}
		}
    }
	return jsonstr;
}

utmTracker();

document.querySelectorAll('a').forEach(function(anchor) {
	anchor.addEventListener('click', function(event) {
		var atag = event.target.closest('a');
		var url2redirect = atag.href;
		if (url2redirect.includes("book.addisonlee.com")) {
			event.preventDefault();
			const qs = localStorage.getItem('utm_data');
			if (url2redirect.includes("?")) {
				url2redirect += '&' + qs +'';
			} else {
				url2redirect += '?' + qs +'';
			}
			window.location.href = url2redirect;
		}
	});
});


// driver tracking code
function utmTracking(){
    var urlParams = new URLSearchParams(window.location.search);
    const utm_source = urlParams.get("utm_source") || null;
    const utm_campaign = urlParams.get("utm_campaign") || null;
    const utm_medium = urlParams.get("utm_medium") || null;
    if (utm_source) {
      console.log("set utm_source :", utm_source);
      localStorage.setItem("utm_source", utm_source);
     
    }
    if (utm_campaign) {
      console.log("set utm_campaign :", utm_campaign);
      localStorage.setItem("utm_campaign", utm_campaign);
    }
    if (utm_medium) {
      console.log("set utm_medium :", utm_medium);
      localStorage.setItem("utm_medium", utm_medium);
    }
}

utmTracking();