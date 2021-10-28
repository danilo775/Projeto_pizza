<?php
	$result = $this->getData();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">	
		<link rel="stylesheet" href="App/css/base.css">
	<title>Pizzaria X</title>
	<link rel="stylesheet" href="App/css/lista.css">
</head>
<body>
<div id="tudo">
	<header>
		<div id="cabeçalho">
			<a href="https://www.facebook.com/danilo.santos.9465177"><img src="App/img/google.jpg" class="face"></a>
			<a href="/"><img src="App/img/logo.png" id="logo"></a>
			<a href="https://www.facebook.com/danilo.santos.9465177"><img src="App/img/facebook.png" class="face"></a>
			<a href="https://www.instagram.com/?hl=pt-br"><img src="App/img/stagran.png" class="face"></a>
			<a href="https://twitter.com/login?lang=pt"><img src="App/img/twiter.png" class="face"></a>			
		</div>
		<nav>
			<a href="/" class="menu">Inicio</a>
			<a href="/" class="menu">Cardápio</a>
			<a href="/" class="menu">Pedidos</a>
			<a href="/" class="menu">Promoção</a>
			<a href="/" class="menu">Contato</a>
			
			<a href="?controller=Index&action=unlogin"id="login" class="menu1">Voltar</a>
			
			<input id="pesq" type="text" placeholder="Pesquisar">
		</nav>		
	</header>
		
	<section>
		<h1>Cadastro <h1>
		<form action="?controller=Cliente&action=addCliente" method="POST" onsubmit="return valida();">			
			<fieldset>
					<div class="form-group">
						<label for="nome">Nome Completo</label>
						<input type="text" placeholder="Nome Completo" class="form-control" name="nome" id="nome">
					</div>
					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="text" placeholder="CPF" class="form-control" name="cpf" id="cpf">
					</div>
					<div class="form-group">
						<label for="endereco">Endereço</label>
						<input type="text" placeholder="Endereço" class="form-control" name="endereco" id="endereco">
					</div>					
					<div class="form-group">
						<label for="user">Usuário</label>
						<input type="text" maxlength="15" placeholder="Usuário" class="form-control" name="usuario" id="user">
					</div>
					
					<div class="form-group">
						<label for="pwd">Senha</label>
						<input type="password" placeholder="Senha" class="form-control" maxlength="8" name="senha" id="pwd">			
					</div>
					
					<div class="form-group">
						<label for="reppwd">Repetir Senha</label>
						<input type="password" placeholder="Repetir Senha" class="form-control" maxlength="8" name="repsenha" id="reppwd">
					</div>											
					
					<input type="submit" class="btn btn-default" value="Cadastrar">
					<span id="msg"></span>
			</fieldset>
		</form>
	</section>
	
	<footer>
		<p>
			Copyright © 2009 - 2021  <strong>PIZZARIA X !Home</strong> 

		</p>
		<button> <a href="#">Peça ja</a> </button>
	</footer>
</div>	

</body>
</html>