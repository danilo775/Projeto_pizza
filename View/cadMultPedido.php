<?php
	$result = $this->getData();
	require_once 'Model/DAO/PizzaDAO.php';
	require_once 'Model/DAO/BebidaDAO.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>Pizzaria X</title>
	<link rel="stylesheet" href="App/css/lista.css">
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


			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">	
		<!-- <script type="text/javascript" src="App/js/validaCadCliente.js"></script> -->
		<script type="text/javascript" >
			function criaLinha() {
				var = tabela = document.getElementById("tablePets");
				
				var linha = document.createElement("tr");
				table.appendChild(linha);
				linha.innerHTML = "<td><div ><input type='text'placeholder='valor' class='form-control' name='valor[]' id='valor'></div></td><td><div ><input type='text' placeholder='data' class='form-control' name='data[]' id='data'></div</td><td><div ><input type='text'placeholder='troco' class='form-control' name='troco[]' id='troco'></div>"
			}
		</script>			
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
		</nav>		
	
	</header>
	
	<section>
		<h1>Pedidos Pizzas<h1>
		
	<form ?controller=Cliente&action=addMultPedido method="POST" >

  		<div class="form-group">
    		<label for="exampleFormControlSelect1">Pizzas Sabores</label>
    		<select class="form-control" id="pizzas" name="pizzas[]">
     			<option value=""  >Pizzas</option>
					<?php
						$result = new PizzaDAO();
						$result =$this->connection()->query($sql);

						$sql = "SELECT * FROM pizza";
						while($row = $result->fetch(PDO::FETCH_ASSOC)){
							echo '<option value="'.$row['codigo'].'">'.$row['sabor'].'</option>';
						}
					?>
    		</select>
  	</div>

  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Quantidade</label>
    	<input type="int" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade[]">
  	</div>

 	<div class="form-group">
    	<label for="exampleFormControlTextarea1">Bebidas</label>
     	<select class="form-control" id="bebidas" name="bebidas[]">
      	<option value=""  >Bebidas</option>
			<?php
				
		
			$result = new BebidaDAO();
			$result= $this->connection()->query($sql);

			$sql = "SELECT * FROM bebida";
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				echo '<option value="'.$row['codigo'].'">'.$row['sabor'].'</option>';
			}
			?>
	</div>
  <button>add Pedido</button>
</form>
	</section>
	
	<footer>
		<p>
			Copyright © 2009 - 2021  <strong>PIZZARIA X !Home</strong> 

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