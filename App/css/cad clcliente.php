<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">	
		<!-- <script type="text/javascript" src="App/js/validaCadCliente.js"></script> -->
	</head>
	<body>
		<h1>Cadastro de Cliente<h1>
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
	</body>
</html>