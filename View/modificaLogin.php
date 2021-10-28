<?php
	$result = $this->getData()[0];
?>

<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">	
		<script type="text/javascript" src="App/js/validaCadLogin.js"></script>
	</head>
	<body>
		<form action="?controller=Index&action=editUser" method="POST" onsubmit="return valida();">
			<fieldset>
					
					<input type="hidden" name="codigo" value="<?php echo $result->getCodigo(); ?>">
					
					<div class="form-group">
						<label for="user">Usuário</label>
						<input value="<?php echo $result->getUsuario(); ?>" type="text" maxlength="15" placeholder="Usuário" class="form-control" name="usuario" id="user">
					</div>
					
					<div class="form-group">
						<label for="pwd">Senha</label>
						<input type="password" placeholder="Senha" class="form-control" maxlength="8" name="senha" id="pwd">			
					</div>
					
					<div class="form-group">
						<label for="reppwd">Repetir Senha</label>
						<input type="password" placeholder="Repetir Senha" class="form-control" maxlength="8" name="repsenha" id="reppwd">
					</div>				
					
					<div class="form-group">
						<label for="type">Tipo de Acesso</label>
						<select class="form-control" name="tipo" id="type">
							<option value="1" <?php echo $result->getTipo() === 1 ? "selected" : ""; ?>>Comum</option>
							<option value="2" <?php echo $result->getTipo() === 2 ? "selected" : ""; ?>>Administrador</option>
						</select>
					</div>								
					
					<input type="submit" class="btn btn-default" value="Modificar">
					<span id="msg"></span>
			</fieldset>
		</form>
	</body>
</html>