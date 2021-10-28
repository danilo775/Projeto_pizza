<?php

class ClienteDAO extends DAO{
	public function __construct($connection)
	{
		$this->setConnection($connection);
	}
	
	public function insert($obj){

		$sql = "INSERT INTO cliente (nome, cpf, endereco, login)
				VALUES (?, ?, ?, ?)";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getNome());
			$stmt->bindValue(2, $obj->getCpf());
			$stmt->bindValue(3, $obj->getEndereco());
			$stmt->bindValue(4, $obj->getLogin());
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

 		$sql = "DELETE FROM cliente WHERE codigo = ?";
		
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

 		$sql = "UPDATE cliente SET nome = ?, cpf = ?,
				endereco = ?, login = ?  WHERE codigo = ?";
		
		try{
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->bindValue(1, $obj->getNome());
			$stmt->bindValue(2, $obj->getCpf());
			$stmt->bindValue(3, $obj->getEndereco());
			$stmt->bindValue(4, $obj->getLogin());
			$stmt->bindValue(5, $obj->getCodigo());
			$stmt->execute();					
		} catch(Exception $e){
			return $e->getCode();
		}
		
		return true;	
 	}

 	public function selectAll(){
 		$lista = array();
		$sql = "SELECT * FROM cliente";
		
		try{
			$result = $this->getConnection()->query($sql);
			while($row = $result->fetch(PDO::FETCH_ASSOC)){

				$cliente = new Cliente();
				$cliente->setCodigo($row["codigo"]);
				$cliente->setNome($row["nome"]);
				$cliente->setCpf($row["cpf"]);
				$cliente->setEndereco($row["endereco"]);
				$cliente->setLogin($row["login"]);
				$lista[] = $cliente;				
			}
		} catch(Exception $e){
			return $e->getCode();
		}
		
		
		return $lista;
 	}

 	
}

?>