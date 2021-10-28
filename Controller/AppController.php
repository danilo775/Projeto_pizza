<?php

class Application
{
	private $controller; // Armazenar o controlador que eu quero acessar;
	private $action; // Armazena o método que eu quero acessar;
	
	public function dispatch(){

		$this->controller = isset($_REQUEST["controller"]) ? $_REQUEST["controller"] : "Index";
		$this->action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "index";
		
		// Verificando o arquivo
		$controllerFile = "Controller/" . $this->controller . "Controller.php";
		if(file_exists($controllerFile)){

			require_once $controllerFile;
		}
		else{
			throw new Exception("Arquivo '$controllerFile' nao encontrado");
		}
		
		// Verificando a classe
		$class = $this->controller . "Controller";
		if(class_exists($class)){
			$objClass = new $class;
		}
		else{
			throw new Exception("Classe '$class' nao encontrada em '$controllerFile'");
		}
		
		// Verificando o método
		$method = $this->action . "Action";
		if(method_exists($objClass, $method)){
			$objClass->$method();
		}
		else{
			throw new Exception("Metodo '$method' nao existe na classe '$class'");
		}
	}
	
}

?>