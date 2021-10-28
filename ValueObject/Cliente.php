<?php

class Cliente {
	
	// Atributos
	private $codigo;
	private $nome;
	private $cpf;
	private $endereco;
	private $login;
	
	public function __construct(){
		$this->codigo = NULL;
		$this->nome = NULL;
		$this->cpf = NULL;
		$this->endereco = NULL;
		$this->login = NULL;
	}
	
	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}
	
	public function setNome($nome)
	{
		$this->nome = $nome;				
	}
	
	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}
	
	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
	}
	
	public function setLogin($login)
	{
		$this->login = $login;
	}	
	
	public function getCodigo()
	{
		return $this->codigo;
	}
	
	public function getNome()
	{
		return $this->nome;
	}

	public function getCpf()
	{
		return $this->cpf;
	}
	
	public function getEndereco()
	{
		return $this->endereco;
	}
	
	public function getLogin()
	{
		return $this->login;
	}
}

?>