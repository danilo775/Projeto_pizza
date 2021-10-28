<?php 
 class PedidoDAO extends DAO{

 	public function __construct($connection){
 		$this->setConnection($connection);
 	}

 	public function insert($obj){
 		$sql = "INSERT INTO Pedido(data, valor, troco, cliente) VALUES(?,?,?,?)";
 		
 		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getData());
			$stmt->bindValue(2, $obj->getValor());
			$stmt->bindValue(3, $obj->getTroco());
			$stmt->bindValue(4, $obj->getCliente());
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
 		$sql = "DELETE FROM pedido WHERE codigo = ?";
		
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
 		$sql = "UPDATE pedido SET valor = ?,
				troco = ? WHERE codigo = ?";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getData());
			$stmt->bindValue(2, $obj->getValor());
			$stmt->bindValue(3, $obj->getSenha());
			$stmt->bindValue(4, $obj->getCodigo());
			$stmt->execute();					
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return true;		
	}
 	

 	public function selectAll(){
 		$lista = array();
		$sql = "SELECT * FROM pedido";
		
		try{
			$result = $this->getConnection()->query($sql);
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				$pedido = new Pedido();
				$pedido->setCodigo($row["codigo"]);
				$pedido->setUsuario($row["data"]);
				$pedido->setValor($row["valor"]);
				$pedido->setTroco($row["troco"]);
				$pedido->setCliente($row["cliente"]);
				
				$lista[] = $pedido;				
			}
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return $lista;
 	}

 	


 }
 ?>