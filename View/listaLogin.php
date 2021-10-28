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
			<a href="/" id="cadastrar" class="menu1"><?php echo $_SESSION["usuario"]; ?></a>
			<a href="?controller=Index&action=unlogin"id="login" class="menu1">Sair</a>
			
			<input id="pesq" type="text" placeholder="Pesquisar">
		</nav>		
	</header>
		
	<section>
		<h1>Pizzaria X</h1>	
		<fieldset>
			<legend>Listagem Usuários</legend>
			<table class="table">
				<tr>
					<th>Código</th>
					<th>Usuário</th>
					<th>Tipo</th>
					<th></th>
				</tr>
<?php
	foreach($result as $user)
	{
?>
		<tr>
			<td><?php echo $user->getCodigo(); ?></td>
			<td><?php echo $user->getUsuario(); ?></td>
			<td><?php echo $user->getTipoTexto(); ?></td>
			<td>
				<a href="?controller=Index&action=modificaLogin&codigo=<?php echo $user->getCodigo(); ?>">
					<img src="App/img/edit.png" class="icon">
				</a>
				        
				<a href="?controller=Index&action=removeLogin&codigo=<?php echo $user->getCodigo(); ?>">
					<img src="App/img/delete.png" class="icon">
				</a>						
			
			</td>
		</tr>
<?php
	}
?>				
			</table>
		</fieldset>		
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