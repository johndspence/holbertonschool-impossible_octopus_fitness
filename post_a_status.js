//Post a status

document.addEventListener('DOMContentLoaded', displayForm);
function displayForm(){
	var elements = document.querySelectorAll('.post_status_button');
	[].map.call(elements, function(elem) {
		elem.addEventListener('click', toggle, true)
	})
}