<?php 

class Bebida{
	private $codigo;
	private $valor;
	private $descricao;


	public function __construct(){
		$this->codigo = NULL;
		$this->valor = NULL;
		$this->descricao = NULL;
	}


	public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
	

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}


	public function getCodigo(){
			return $this->codigo;
		}

	public function getValor(){
		return $this->valor;
	}

	public function getDescricao(){
		return $this->descricao;
	}

}












 ?>