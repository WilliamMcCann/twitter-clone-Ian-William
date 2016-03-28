 document.addEventListener("DOMContentLoaded", function(event) {
 	var status = document.getElementById('showmore1');
 	status.addEventListener("click", function () {
 		ajaxGet('statuses-1.html', function(response) {
 			document.getElementById("extra_statuses").innerHTML = response;
 			var buttontotal = document.getElementsByClassName("buttonreply");
 			for (i = 0; i < buttontotal.length; i++){
 				buttontotal[i].addEventListener("click", function(){
 					var buttons = document.getElementById(this.dataset.order);
 					buttons.toggle();    
 				});
 			};
 		})
 	})
 });