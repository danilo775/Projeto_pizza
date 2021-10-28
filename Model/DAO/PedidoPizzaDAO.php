<?php 
 class PedidoPizzaDAO extends DAO{

 	public function __construct($connection){
 		$this->setConnection($connection);
 	}

 
 	public function insert($obj){
 		
 		$sql = "INSERT INTO pedidoPizza(pedido, pizza, quantidade) VALUES(?,?,?)";
 		
 		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getPedido());
			$stmt->bindValue(2, $obj->getPizza());
			$stmt->bindValue(3, $obj->getQuantidade());	
			$stmt->execute();					
		} catch(Exception $e){
			
			$result["sucess"] = false;
			$result["code"] = $e->getCode();
			
			return $result;
 		}
 		$result["sucess"] = true;
 		$result["code"] = $this->getConnection()->lastInsertId();
 		return $result;
 	}

 	public function delete($value){

 		$sql = "DELETE FROM pedidoPizza WHERE codigo = ?";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $value);
			$stmt->execute();					
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return true;	
 	}


 	public function update($obj){

 		$sql = "UPDATE pedidoPizza SET pedido = ?, pizza = ?,
				quantidade = ? WHERE codigo = ?";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getPedido());
			$stmt->bindValue(2, $obj->getPizza());
			$stmt->bindValue(3, $obj->getQuantidade());
			$stmt->bindValue(4, $obj->getCodigo());
			$stmt->execute();					
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return true;	
 	}

 	public function selectAll(){
 		$lista = array();
		$sql = "SELECT * FROM pedidoPizza";
		
		try{
			$result = $this->getConnection()->query($sql);
			while($row = $result->fetch(PDO::FETCH_ASSOC)){

				$pedidoPizza = new PedidoPizza();
				$pedidoPizza->setCodigo($row["codigo"]);
				$pedidoPizza->setPedido($row["pedido"]);
				$pedidoPizza->setPizza($row["pizza"]);
				$pedidoPizza->setQuantidade($row["quantidade"]);
				
				$lista[] = $pedidoPizza;				
			}
		} catch(Exception $e){
			return $e->getCode();
		}
		
		
		return $lista;
 	}

 	


 }
 ?>