 document.addEventListener("DOMContentLoaded", function(event) {
 	var status = document.getElementById(' ');
 	status.addEventListener("click", function () {
 		ajaxGet('/statuses-1.html', function(response) {
 			document.getElementById("extra_statuses").innerHTML = response;
 		});
 	})
 });