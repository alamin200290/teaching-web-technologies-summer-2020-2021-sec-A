
function ajax(){

	/*let name = document.getElementById('name').value;
	const http = new XMLHttpRequest();
	http.open('GET', `server.php?name=${name}`, true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}*/

	let name = document.getElementById('name').value;
	const http = new XMLHttpRequest();
	http.open('POST', `server.php`, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(`name=${name}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}