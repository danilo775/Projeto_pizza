<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">	
	</head>
	<body>
		<span class="msg">
		<?php
			echo $this->getData();
		?>
		</span>
		<br><br>
		<a href="?">Voltar</a>
	</body>
</html>