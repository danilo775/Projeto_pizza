<?php 

class PedidoBebida{
	private $codigo;
	private $pedido;
	private $bebida;


	public function __construct(){
		$this->codigo = NULL;
		$this->pedido = NULL;
		$this->bebida = NULL;

	}


	public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
	

	public function setPedido($pedido){
		$this->pedido = $pedido;
	}

	public function setBebida($bebida){
		$this->bebida = $bebida;
	}


	public function getCodigo(){
			return $this->codigo;
		}

	public function getPedido(){
		return $this->pedido;
	}

	public function getBebida(){
		return $this->bebida;
	}




}












 ?>