<?php

require_once 'DAO/DAO.php';
require_once 'DAO/LoginDAO.php';

class LoginService{
	
	public function add($obj)
	{
		$connection = DAO::createConnection();
		
		$loginDAO = new LoginDAO($connection);
		$result = $loginDAO->insert($obj);
		
		if($result["sucess"] === true)
		{
			return "Dados inseridos com sucesso!";
		}
		else{
			return "Erro ao executar: " . $result["code"];
		}		
	}
	
	public function remove($value)
	{
		$connection = DAO::createConnection();
		
		$loginDAO = new LoginDAO($connection);
		$result = $loginDAO->delete($value);
		
		if($result === true)
		{
			return "Dados removidos com sucesso!";
		}
		else{
			return "Erro ao executar: " . $result;
		}		
	}
	
	public function edit($obj)
	{
		$connection = DAO::createConnection();
		
		$loginDAO = new LoginDAO($connection);
		$result = $loginDAO->update($obj);
		
		if($result === true)
		{
			return "Dados modificados com sucesso!";
		}
		else{
			return "Erro ao executar: " . $result;
		}		
	}
	
	public function listAll()
	{
		$connection = DAO::createConnection();
		
		$loginDAO = new LoginDAO($connection);
		$result = $loginDAO->selectAll();
		
		if(is_array($result))
		{
			return $result;
		}
		else{
			return "Erro ao executar: " . $result;
		}		
	}		
	
	public function listSelected($value)
	{
		$connection = DAO::createConnection();
		
		$loginDAO = new LoginDAO($connection);
		$result = $loginDAO->select($value);
		
		if(is_array($result))
		{
			return $result;
		}
		else{
			return "Erro ao executar: " . $result;
		}		
	}
	
	public function login($usuario, $senha)
	{
		$connection = DAO::createConnection();
		
		$loginDAO = new LoginDAO($connection);
		$result = $loginDAO->selectByLogin($usuario, $senha);
		
		if(is_array($result))
		{
			if(count($result) == 1)
			{
				return $result;
			}
			else{
				return "Usuário ou Senha inválidos!";
			}
		}
		else{
			return "Erro ao executar: " . $result;
		}				
	}
}

?>