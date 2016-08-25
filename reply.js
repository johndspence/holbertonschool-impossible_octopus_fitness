//Reply button for each status
document.addEventListener('DOMContentLoaded', replyFunction);
function replyFunction(){
	var elements = document.querySelectorAll('.reply_button');
	[].map.call(elements, function(elem) {
		elem.addEventListener('click', toggle, true)
	})
}
