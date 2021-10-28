<?php 

class Pedido{
	private $codigo;
	private $data;
	private $valor;
	private $troco;
	Private $cliente;

	public function __construct(){
		$this->data = NULL;
		$this->valor = NULL;
		$this->troco = NULL;
		$this->cliente = NULL;
	}


	public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
	public function getCodigo(){
			return $this->codigo;
		}

	public function setData($data){
		$this->data = $data;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function setTroco($troco){
		$this->troco = $troco;
	}

	public function setCliente($cliente){
		$this->cliente = $cliente;
	}

	public function getData(){
		return $this->data;
	}

	public function getValor(){
		return $this->valor;
	}

	public function getTroco(){
		return $this->troco;
	}


	public function getCliente(){
		return $this->cliente;
	}

}
 ?>