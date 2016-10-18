function addLine(text_to_add){
	var li = document.createElement("li");
	li.innerHTML = text_to_add;
	document.getElementById("list").appendChild(li);
}

//addLine("Ligne 4");

function loginAjax(){
	var xmlhttp = new XMLHttpRequest();	
	/*xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			callback(xmlhttp.responseText);
		}
	}*/
	var data = {'username':'gerald',''};
	xmlhttp.open("POST", "ajax.php", false);
	xmlhttp.send(data);
	var response = xmlhttp.responseText;
	console.log(response);
}


/*var list = document.getElementById("list");
list.addEventListener("mouseenter", function(){
	console.log("enter");
});*/

/*document.getElementById("list").onmouseenter = function(){
	console.log("enter");
}*/

