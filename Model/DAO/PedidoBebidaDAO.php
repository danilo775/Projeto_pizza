<?php 
 class PedidoBebidaDAO extends DAO{

 	public function __construct($connection){
 		$this->setConnection($connection);
 	}

 
 	public function insert($obj){
 		$sql = "INSERT INTO pedidoBebida(pedido, bebida) VALUES(?,?)";
 		
 		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getPedido());
			$stmt->bindValue(2, $obj->getBebida());
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
 		$sql = "DELETE FROM pedidoBebida WHERE codigo = ?";
		
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
 		$sql = "UPDATE pedidoBebida SET pedido = ?, bebida = ?
				 WHERE codigo = ?";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getPedido());
			$stmt->bindValue(2, $obj->getBebida());
			$stmt->bindValue(3, $obj->getCodigo());
			$stmt->execute();					
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return true;	
 	}

 	public function selectAll(){
 		$lista = array();
		$sql = "SELECT * FROM pedidoBebida";
		
		try{
			
			$result = $this->getConnection()->query($sql);

			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				$pedidoBebida = new PedidoBebida();
				$pedidoBebida->setCodigo($row["codigo"]);
				$pedidoBebida->setPedido($row["pedido"]);
				$pedidoBebida->setPizza($row["bebida"]);
				$pedidoBebida->setQuantidade($row["quantidade"]);
				
				$lista[] = $pedidoBebida;				
			}
		} catch(Exception $e){
			return $e->getCode();
		}
		
		
		return $lista;
 	}
 	


 }
 ?>