<?php

require_once 'ValueObject/Login.php';
require_once 'Model/LoginService.php';
require_once 'View/View.php';

class IndexController{

	public function addUserAction(){

		
		$usuario = $_REQUEST["usuario"];
		$senha = $_REQUEST["senha"];
		$tipo = $_REQUEST["tipo"];
			
		$login = new Login();
		$login->setUsuario($usuario);
		$login->setSenha($senha);
		$login->setTipo($tipo);
		
		$loginService = new LoginService();
		$result = $loginService->add($login);
				
		$view = new View('View/mensagem.php', $result);
		$view->showContent();		
	}
	
	public function indexAction(){

		if(isset($_SESSION["conectado"]) && $_SESSION["conectado"] === true){

			$this->listaPedidoAction();
		}
		else{
			$view = new View('View/telaLogin.php');
			$view->showContent();
		}
	}
	
	public function cadastroLoginAction(){

		$view = new View('View/cadastroLogin.php');
		$view->showContent();
	}
	
	public function listaLoginAction(){

		$loginService = new LoginService();
		$result = $loginService->listAll();
		
		$view = new View('View/listaLogin.php', $result);
		$view->showContent();
	}
	public function listaPedidoAction(){

		$loginService = new LoginService();
		$result = $loginService->listAll();
		
		$view = new View('View/CadMultPedido.php', $result);
		$view->showContent();
	}
	
	public function removeLoginAction(){

		$value = $_REQUEST["codigo"];
		
		$loginService = new LoginService();
		$result = $loginService->remove($value);
		
		$view = new View('View/mensagem.php', $result);
		$view->showContent();
	}
	
	public function modificaLoginAction(){

		$value =$_REQUEST["codigo"];
		
		$loginService = new LoginService();
		$result = $loginService->listSelected($value);
		
		$view = new View('View/modificaLogin.php', $result);
		$view->showContent();
	}
	
	public function editUserAction(){

		// Recebendo os dados via HTTP
		$codigo = $_REQUEST["codigo"];
		$usuario = $_REQUEST["usuario"];
		$senha = $_REQUEST["senha"];
		$tipo = $_REQUEST["tipo"];
		
		// Criando o Value Object
		$login = new Login();
		$login->setCodigo($codigo);
		$login->setUsuario($usuario);
		$login->setSenha($senha);
		$login->setTipo($tipo);
		
		// Chamando o serviço
		$loginService = new LoginService();
		$result = $loginService->edit($login);
				
		$view = new View('View/mensagem.php', $result);
		$view->showContent();				
	}
	
	public function loginAction(){

		$usuario = $_REQUEST["user"];
		$senha = $_REQUEST["pwd"];
		
		$loginService = new LoginService();
		$result = $loginService->login($usuario, $senha);
		
		if(is_array($result)){

			$user = $result[0];
			$_SESSION["conectado"] = true;
			$_SESSION["usuario"] = $user->getUsuario();
			
			$this->listaPedidoAction();
		}
		else{
			$view = new View('View/mensagem.php', $result);
			$view->showContent();
		}
	}
	
	public function unloginAction(){
		$_SESSION["conectado"] = false;
		unset($_SESSION["usuario"]);
		
		$this->indexAction();
	}
}
	
?>