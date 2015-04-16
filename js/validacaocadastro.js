function validarSenha(){
	senha1 = document.form.pass.value
	senha2 = document.form.confirmpass.value
 
	if (senha1 == senha2)
		alert("SENHAS IGUAIS")
	else
		alert("SENHAS DIFERENTES")
}