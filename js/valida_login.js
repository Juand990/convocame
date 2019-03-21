with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Tens que escriure el nom d'usuari");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Tens que escriure el password");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
