
function TTCHECK (xURL) {
	
	if (xURL=='') {
		xURL="http://" + document.TTFORM.TTURL.value;
		}
	else {
		xURL= xURL;
	}
	
	// is URL valid?
	
	if (xURL.indexOf('.')==-1){
		return false;
	}
	
	return true;
}


function TTBROWSE (xURL, xSKINID) {
	
	var wurl;
	var datum = new Date();

	datum = escape(datum.getTime());
	
	if (xURL=='') {
		if (document.TTFORM.TTURL.value == '') {
			return;
		}
		xURL= document.TTFORM.TTURL.value;
		}
	else {
		xURL= xURL;
	}
	// is there a skin parameter?
	
	if (xSKINID=="") {
		xSKINID = "P1";
	}

	wurl=escape(xURL);
	v = window.open('http://tagtag.com/cgi/wapemulator.cgi?O__SKIN=' + xSKINID + '&wurl=' + wurl + '&dummy='+datum, 'TagTag','width=220,height=285');
}
