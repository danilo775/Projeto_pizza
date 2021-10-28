<?php 
 class PetDAO extends DAO{

 	public function __construct($connection){
 		$thi->setConnection($connection);
 	}

 	public function insert($obj){
 		$sql = "INSERT INTO Pet(cliente, nome, especie) VALUES(?,?,?)";
 		
 		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getCliente());
			$stmt->bindValue(2, $obj->getNome());
			$stmt->bindValue(3, $obj->getEspecie());
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

 	}
 	public function update($obj){

 	}

 	public function selectAll(){
 		
 	}
 }











 ?>