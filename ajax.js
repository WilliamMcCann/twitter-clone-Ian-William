	function ajaxGet(url, onSuccess) {
		xmlhttp = new XMLHttpRequest();
		document.getElementById("showmore1").onclick = (showmore1.style.color = "red");
		document.getElementById("showmore1").onclick = (showmore1.style.cursor = "progress");
		document.getElementById("showmore1").disabled = true;
		xmlhttp.onreadystatechange = setTimeout(function () {
		      showmore1.style.color = "white";
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{		
				onSuccess(xmlhttp.responseText);
			}
		}, 2000);
		xmlhttp.open('GET', url, true);
		xmlhttp.send();
	};
