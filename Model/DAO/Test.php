<?php 
include_once 'DAO.php';
include_once 'PedidoBebidaDAO.php';
include_once '../../ValueObject/PedidoBebida.php';
	$connection = DAO::createConnection();
	$pedidoBebida = new PedidoBebida();

	$pedidoBebida->setPedido(1);
	$pedidoBebida->setBebida(1);
	$pedidoPizza->setQuantidade(1);

	$pedidoBebidaDAO = new PedidoBebidaDAO($connection);
	$result = $pedidoBebidaDAO->insert($pedidoBebida);

	var_dump($result);

 ?>