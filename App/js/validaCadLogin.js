function valida(){
	var usuario = document.getElementById("user");
	var senha = document.getElementById("pwd");
	var repsenha = document.getElementById("reppwd");
	var msg = document.getElementById("msg");
	
	if(!usuario.value)
	{
		msg.innerHTML = "Usuário não informado!";
		return false;
	}
	
	if(!senha.value)
	{
		msg.innerHTML = "Senha não informado!";
		return false;
	}				
	
	if(!repsenha.value)
	{
		msg.innerHTML = "Repita a senha!";
		return false;
	}				
	
	if(senha.value != repsenha.value)
	{
		msg.innerHTML = "Senha repetida diferente da senha informada!";
		return false;
	}
	
	return true;
}
