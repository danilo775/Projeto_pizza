<?php

require_once 'ValueObject/Login.php';
require_once 'ValueObject/Cliente.php';
require_once 'ValueObject/Pet.php';
require_once 'ValueObject/Pedido.php';
require_once 'ValueObject/Pizza.php';
require_once 'ValueObject/Bebida.php';
require_once 'ValueObject/PedidoPizza.php';
require_once 'ValueObject/PedidoBebida.php';
require_once 'Model/LoginService.php';
require_once 'Model/ClienteService.php';
require_once 'View/View.php';


class ClienteController{
	
	public function addClienteAction(){		
		$nome = $_REQUEST["nome"];
		$cpf = $_REQUEST["cpf"];
		$endereco = $_REQUEST["endereco"];
		$usuario = $_REQUEST["usuario"];
		$senha = $_REQUEST["senha"];
		
		$login = new Login();
		$login->setUsuario($usuario);
		$login->setSenha($senha);
		$login->setTipo(2);
		

		$cliente = new Cliente();
		$cliente->setNome($nome);
		$cliente->setCpf($cpf);
		$cliente->setEndereco($endereco);

		$clienteService = new ClienteService();
		$result = $clienteService->add($cliente, $login);
				
		$view = new View('View/mensagem.php', $result);
		$view->showContent();		
	}
		
	public function cadastroClienteAction(){
		$view = new View('View/cadastroCliente.php');
		$view->showContent();
	}

	public function addMultPetAction(){

		$nome = $_REQUEST["nome"];
		$especie = $_REQUEST["especie"];
		
		$lista = array();
		for ($i=0; $i < count($nome); $i++) { 
			$item = new Pet();
			$item->setNome($nome[$i]);
			$item->setEspecie($especie[$i]);

			$lista[] = $item;
		}
	}

	/*public function addMultPedidoAction(){

		$data = $_REQUEST["data"];
		$valor = $_REQUEST["valor"];
		$troco = $_REQUEST["troco"];
		$cliente = $_REQUEST["cliente"];
		
		$lista = array();
		for ($i=0; $i < count($cliente); $i++) { 
			$item = new Pet();
			$item->setcliente($cliente[$i]);
			$item->setValor($valor[$i]);

			$lista[] = $item;
		}
	}*/
	public function addMultPedidoAction(){		
		$pizza = $_REQUEST["pizza"];
		$bebida = $_REQUEST["bebida"];
		$quantidade = $_REQUEST["quanditade"];

		$clienteService = new ClienteService();
		$result = $clienteService->add($pedido, $pedidoPizza,$pedidoBebida);
				
		$view = new View('View/mensagem.php', $result);
		$view->showContent();

			$lista = array();
		for ($i=0; $i < count($pedido); $i++) { 
			$item = new PedidoPizza();			
			$item->setPedido($pedido[$i]);
			$item->setPizza($pizza[$i]);
			$item->setQuantidade($quantidade[$i]);

			$item = new PedidoBebida();
			$item->setPedido($pedido[$i]);
			$item->setBebida($pizza[$i]);

			$lista[] = $item;
		}		
	}

}	
?>