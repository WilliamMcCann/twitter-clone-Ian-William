document.addEventListener("DOMContentLoaded", function reply(){
    var buttontotal = document.getElementsByClassName("buttonreply");
    for (i = 0; i < buttontotal.length; i++){
        buttontotal[i].addEventListener("click", function(){
         var buttons = document.getElementById(this.dataset.order);
            buttons.toggle();    
		});
	}
});