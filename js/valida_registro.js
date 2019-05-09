with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Has d'escriure el nom d'usuari.");
			username.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Has d'escriure el email.");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Has d'escriure el password.");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Has d'escriure la confirmació de password.");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("El password no coincideixen");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
