<?php 

class PedidoPizza{
	private $codigo;
	private $pedido;
	private $pizza;
	private $quantidade;

	public function __construct(){
		$this->codigo = NULL;
		$this->pedido = NULL;
		$this->pizza = NULL;
		$this->cliente = NULL;
	}


	public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
	

	public function setPedido($pedido){
		$this->pedido = $pedido;
	}

	public function setPizza($pizza){
		$this->pizza = $pizza;
	}

	public function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}

	public function getCodigo(){
			return $this->codigo;
		}

	public function getPedido(){
		return $this->pedido;
	}

	public function getPizza(){
		return $this->pizza;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}



}












 ?>