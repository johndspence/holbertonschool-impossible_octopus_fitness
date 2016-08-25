document.addEventListener('DOMContentLoaded', replyfunction());
function replyfunction (){
var elements = document.getElementsByClassName('reply_button');
//console.log(elements);
for (var i = 0; i < elements.length; i++){
      //elements[i].onclick = function() {

		elements[i].addEventListener("click", function() {
			//console.log("Check message");
		var test = document.getElementById(this.dataset.index);
		test.toggle();

    })
    
}
})