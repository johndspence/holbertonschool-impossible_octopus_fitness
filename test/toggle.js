//window.addEventListener('load', displayForm)
HTMLElement.prototype.toggle = function() {
	//var displayStyle = theForm.style.display;
	if (this.style.display == "block")
		{
			this.style.display = "none";
		}
	else 
		{
			this.style.display = "block";
		}
}
//document.addEventListener('DOMContentLoaded', function(){

//1})