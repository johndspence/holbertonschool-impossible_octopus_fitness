function onSuccess(xhttp) {
    document.getElementById("extra_statuses").innerHTML = xhttp.responseText;
}
