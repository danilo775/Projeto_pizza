<?php 
 class PizzaDAO extends DAO{

 	public function __construct($connection){
 		$this->setConnection($connection);
 	}

 	public function insert($obj){
 		$sql = "INSERT INTO pizza(valor, sabor, tamanho) VALUES(?,?,?)";
 		
 		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getValor());
			$stmt->bindValue(2, $obj->getSabor());
			$stmt->bindValue(3, $obj->getTamanho());
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
 		$sql = "DELETE FROM pizza WHERE codigo = ?";
		
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
 		$sql = "UPDATE pizza SET valor = ?,
				sabor = ?, tamanho = ? WHERE codigo = ?";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getValor());
			$stmt->bindValue(2, $obj->getSabor());
			$stmt->bindValue(3, $obj->getTamanho());
			$stmt->bindValue(4, $obj->getCodigo());
			$stmt->execute();					
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return true;		
	}
 	

 	public function selectAll(){
 		$lista = array();
		$sql = "SELECT * FROM pizza";
		
		try{
			$result = $this->getConnection()->query($sql);
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				$pizza = new Pizza();
				$pizza->setCodigo($row["codigo"]);
				$pizza->setValor($row["valor"]);
				$pizza->setSabor($row["sabor"]);
				$pizza->setTamanho($row["tamanho"]);
				
				$lista[] = $pizza;				
			}
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return $lista;
 	}

 	


 }
 ?>