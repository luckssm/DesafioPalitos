<?php
	//Classe de conexão com o banco de dados
	class Db extends PDO{
		
		private $host 		= 'localhost';
		private $user		= 'danielbo_lucas_usp';
		private $password	= 'M@rc0nd3s';
		private $dbname 	= 'danielbo_lucas_usp';


		private $type		= 'mysql';
		private $port		= 3306;

		protected $conn;
		
	
		
		function query($sql){
			$r = parent::query($sql);
			$r->setFetchMode(PDO::FETCH_OBJ);
			return $r;
		}

		public function __construct(){
		        try{
		           	$this->conn = parent::__construct($this->type.":host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->password);
		        } catch(PDOException $e){
		            die("Connection failed. Try again");
		        }
		}
		    
		public function getConn(){
		        return $this->conn;
		}
		    
		/**
		* Fecha a conexao com o DB
		**/
		public function __destruct(){
		        $this->conn = null;
		}
		
		
	}


?>
