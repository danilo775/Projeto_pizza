<?php

require_once 'DAO/DAO.php';
require_once 'DAO/LoginDAO.php';
require_once 'DAO/ClienteDAO.php';
require_once 'DAO/PetDAO.php';
require_once 'DAO/PedidoDAO.php';
require_once 'DAO/PedidoPizzaDAO.php';
require_once 'DAO/PedidoBebidaDAO.php';
require_once 'DAO/PizzaDAO.php';

class ClienteService{
	
	public function add($cliente, $login)
	{
		$connection = DAO::createConnection();
		
		// BEGIN
		$connection->beginTransaction();
		
		$loginDAO = new LoginDAO($connection);
		$result = $loginDAO->insert($login);		
		
		if($result["sucess"] === true){

			$cliente->setLogin($result["code"]);
			
			$clienteDAO = new ClienteDAO($connection);
			$result = $clienteDAO->insert($cliente);
			
			if($result["sucess"] === true){
				
				// COMMIT
				$connection->commit();
				return "Dados inseridos com sucesso!";
			}
			else{
				// ROLLBACK
				$connection->rollback();
				return "Erro ao executar: " . $result["code"];
			}
		}
		else{
			// ROLLBACK
			$connection->rollback();			
			return "Erro ao executar: " . $result["code"];
		}		
	}	


	public function addMultPet($lista){
		$connection = DAO::createConnection();

		$connection->beginTransaction();

		foreach($lista as $item){

			$petDAO = new PetDAO($connection);			
			$result = $petDAO->insert($item);

			if(!($result["sucess"] === true)){

				$connection->rollback();
				return "Erro ao executar".$result["code"];
			}
		}

		$connection->commit();
		return "Dados inseridos com sucesso";
	}

	public function addPet($obj){

		$connection = DAO::createConnection();
	
		$petDAO = new PetDAO($connection);
		$result = $petDAO->insert($obj);

			if($result["sucess"] === true){
				
				return "Dados inseridos com sucesso";
				
			}
			else{
				return "Erro ao executar".$result["code"];
			}
		

		$connection->commit();
		return "Dados inseridos com sucesso";
	}



public function addMultPedido($lista)
	{
		$connection = DAO::createConnection();
		
		// BEGIN
		$connection->beginTransaction();
		foreach($lista as $item){	
				$pedidoDAO = new PedidoDAO($connection);
				$result = $pedidoDAO->insert($item);		
				
			if($result["sucess"] === true){

				$pedido>setPedido($result["code"]);
				
				$pedidoPizzaDAO = new PedidoPizzaDAO($connection);
				$result = $pedidoPizzaDAO->insert($item);
				
				if($result["sucess"] === true){

					$pedido>setPedido($result["code"]);
					
					$pedidoBebidaDAO = new PedidoBebidaDAO($connection);
					$result = $pedidoBebidaDAO->insert($item);

					if($result["sucess"] === true){
					
						// COMMIT
						$connection->commit();
						return "Dados inseridos com sucesso!";
					}
					else{
						// ROLLBACK
						$connection->rollback();
						return "Erro ao executar: " . $result["code"];
					}
				}
				else{
					// ROLLBACK
					$connection->rollback();
					return "Erro ao executar: " . $result["code"];
				}
			}
			else{
				// ROLLBACK
				$connection->rollback();			
				return "Erro ao executar: " . $result["code"];
			}
		}		
	}	
























}
?>