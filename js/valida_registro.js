with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Tens que escriure el nom d'usuari");
			username.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Tens que escriure el email");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Tens que escriure el password");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Tens que escriure la confirmació de password");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Els passwords no coincideixen");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
