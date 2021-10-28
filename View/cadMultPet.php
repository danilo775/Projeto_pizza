<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">	
		<!-- <script type="text/javascript" src="App/js/validaCadCliente.js"></script> -->
		<script type="text/javascript" >
			function criaLinha() {
				var = tabela = document.getElementById("tablePets");
				
				var linha = document.createElement("tr");
				table.appendChild(linha);
				linha.innerHTML = "<td><div ><input type='text'placeholder='Nome do Pet' class='form-control' name='nome[]' id='nome'></div></td><td><div ><input type='text' placeholder='Especie' class='form-control' name='especie[]' id='especie'></div</td>"
			}
		</script>	
	</head>
	<body>
		<h1>Cadastro de Cliente<h1>
			<button onclick="criaLinha()">Add Novo Pet</button>
		<form action="?controller=Cliente&action=addMultPet" method="POST" >			
			<fieldset>
				
				<table id="tablePets">
					<tr>
						<td>
							<div >								
								<input type="text" placeholder="Nome do Pet" class="form-control" name="nome[]" id="nome">
							</div>
						</td>

						<td>
							<div >
								<input type="text" placeholder="Especie" class="form-control" name="especie[]" id="especie">
							</div>
						</td>
					</tr>

				</table>
					
					
											
					
					<input type="submit" class="btn btn-default" value="Cadastrar">
					<span id="msg"></span>
			</fieldset>
		</form>
	</body>
</html>