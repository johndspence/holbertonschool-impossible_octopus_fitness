function ajaxGet(url, onSuccess) {
  	var buttonId = document.getElementById("extra_status_btn");
  	buttonId.disabled = "true";
  	buttonId.style.cursor = "text";
  	buttonId.style.background = "#FF0000";
  	var xhttp=new XMLHttpRequest ();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
      		onSuccess(xhttp);
    	}
  	};
 	xhttp.open("GET", url, true);
  	setTimeout(function(){
  		xhttp.send();
  		buttonId.disabled = false;
  		buttonId.style.cursor = "default";
  	}, 2000);
}




