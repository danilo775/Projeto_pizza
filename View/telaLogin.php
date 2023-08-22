<!DOCTYPE html>
<html>
<head>
	<script src="App/js/createRequest.js"></script>
	<script type="text/javascript">
		

	</script>
	<title>Pizzaria</title>
	<link rel="stylesheet" href="App/css/estilo.css">
</head>
<body>
<div id="tudo">
	<header>
		<div id="cabeçalho">
			<a href="https://www.facebook.com/danilo.santos.9465177"><img src="App/img/google.jpg" class="face"></a>
			<a href="/"><img src="App/img/lg.png" id="logo"></a>
			<a href="https://www.facebook.com/danilo.santos.9465177"><img src="App/img/facebook.png" class="face"></a>
			<a href="https://www.instagram.com/?hl=pt-br"><img src="App/img/stagran.png" class="face"></a>
			<a href="https://twitter.com/login?lang=pt"><img src="App/img/twiter.png" class="face"></a>			
		</div>
		<nav>
			<a href="?controller=Cliente&action=cadMultPet.php" class="menu">Inicio</a>
			<a href="/" class="menu">Cardápio</a>
			<a href="/" class="menu">Pedidos</a>
			<a href="/" class="menu">Promoção</a>
			<a href="/" class="menu">Contato</a>
			<a href="?controller=Cliente&action=cadastroCliente" id="cadastrar" class="menu1">Cadastre-se</a>
			<button id="login" onclick="entrar()" class="menu1"> Entrar</button>
			<div id="entrar">
				<form action="?controller=Index&action=login" method="POST">	
					<div>
						<label class="inputlabel">Usuario:</label>
						<input class="input" type="text" id="user" name="user" >

					</div>

					<div class="inputlabel">
						<label>Senha:</label>
						<input  class="input" type="password" id="pwd" name="pwd">
					
					</div>
					<span id="msg"></span>
					   <button id="submit" onclick="Atualiza">Logar </button>  
				</form>
			</div>			
			<input id="pesq" type="text" placeholder="Pesquisar">
		</nav>		
	
	</header>
	
	<section>
		<div id="conteine">
			<a href=""><img src="App/img/ft.jpg" id="ft"></a>
			
		</div>		
	</section>
	
	<footer>
		<p>
			Copyright © 2009 - 2023  <strong>PIZZARIA X !Home</strong> 

		</p>
		<button> <a href="#">Peça ja</a> </button>
	</footer>
</div>	
<script type="text/javascript">
	var str=false;
	function entrar(){
		
		if(str==false){
			document.getElementById("entrar").style.display="block";
			str=true;
		}else{
			document.getElementById("entrar").style.display="none";
			str=false;
		}
	}	

	
</script>
</body>
</html>