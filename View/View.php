<?php

class View{
	private $content; // Tags da tela;
	private $view; // Arquivo com a tela;
	private $data; // Dados carregados na tela;
	
	public function __construct($view, $data = null){

		if($view != null){

			$this->setView($view);
		}
		
		$this->data = $data;
	}
	
	public function setView($view){

		if(file_exists($view)){

			$this->view = $view;
		}
		else{
			throw new Exception("Arquivo '$view' nao encontrado");
		}
	}
	
	public function getView(){

		return $this->view;
	}
	
	public function setData($data){

		$this->data = $data;
	}
	
	public function getData()
	{
		return $this->data;
	}
	
	private function getContent(){

		ob_start();

		if(isset($this->view)){
			require_once $this->view;
		}
			$this->content = ob_get_contents();
			ob_end_clean();
		
		return $this->content;
	}
	
	public function showContent(){

		echo $this->getContent();
	}
}

?>