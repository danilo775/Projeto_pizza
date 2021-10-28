<?php 
 class BebidaDAO extends DAO{

 	public function __construct($connection){
 		$this->setConnection($connection);
 	}

 	public function insert($obj){
 		$sql = "INSERT INTO bebida(valor, descricao) VALUES(?,?)";
 		
 		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getValor());
			$stmt->bindValue(2, $obj->getDescricao());
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
 		$sql = "DELETE FROM bebida WHERE codigo = ?";
		
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
 		$sql = "UPDATE bebida SET valor = ?,
				descricao = ? WHERE codigo = ?";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getValor());
			$stmt->bindValue(2, $obj->getDescricao());;
			$stmt->bindValue(3, $obj->getCodigo());
			$stmt->execute();					
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return true;		
	}
 	

 	public function selectAll(){
 		$lista = array();
		$sql = "SELECT * FROM bebida";
		
		try{
			$result = $this->getConnection()->query($sql);
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				$bebida = new Bebida();
				$bebida->setCodigo($row["codigo"]);
				$bebida->setValor($row["valor"]);
				$bebida->setSabor($row["descricao"]);
				
				$lista[] = $bebida;				
			}
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return $lista;
 	}

 	


 }
 ?>