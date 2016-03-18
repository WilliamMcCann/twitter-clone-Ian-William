	function ajaxGet(url, onSuccess) {
		var timeoutID;

		function delayedAlert() {
			timeoutID = window.setTimeout(ajaxGet, 2000);
		}
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function()
		{	
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{		
				onSuccess(xmlhttp.responseText);
			}
		}
		xmlhttp.open('GET', url, true);
		xmlhttp.send();
	};