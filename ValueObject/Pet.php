<?php 

class Pet{
	private $codigo;
	private $nome;
	private $especie;
	Private $cliente;

	public function __construct(){
		$this->nome = NULL;
		$this->especie = NULL;
		$this->cliente = NULL;
	}
	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}	

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEspecie($especie){
		$this->especie = $especie;
	}

	public function setCliente($cliente){
		$this->cliente = $cliente;
	}

	public function getCodigo(){
		return $this->codigo;
	}


	public function getNome(){
		return $this->nome;
	}

	public function getEspecie(){
		return $this->especie;
	}


	public function getCiente(){
		return $this->cliente;
	}

}












 ?>