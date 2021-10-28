<?php 

class Pizza{
	private $codigo;
	private $valor;
	private $sabor;
	private $tamanho;

	public function __construct(){
		$this->codigo = NULL;
		$this->valor = NULL;
		$this->sabor = NULL;
		$this->tamanho = NULL;
	}


	public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
	

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function setSabor($sabor){
		$this->sabor = $sabor;
	}

	public function setTamanho($tamanho){
		$this->tamanho = $tamanho;
	}

	public function getCodigo(){
			return $this->codigo;
		}

	public function getValor(){
		return $this->valor;
	}

	public function getTamanho(){
		return $this->tamanho;
	}

	public function getSabor(){
		return $this->sabor;
	}



}


 ?>