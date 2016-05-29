<?php
	if(!class_exists('database')){
		class database{
			public function __construct(){
				$mysqli = new mysqli('localhost','root','','typr'); //muss gegen Anmeldedaten Variabeln ausgetauscht werden
				
				if($mysqli->connect_errno){
					printf("no connection \n",$mysqli->connect_error);
					exit();
				}
				$this->connect = $mysqli;
			}
			
			public function insert($query){
				//$query = "
				//			INSERT INTO Posts (title,content,tags)
				//			VALUES ($title,$content,$tags)
				//		";
				$result = $this->connect->query($query);
				
				return $result;
			}
			
			public function select($query){
				$result = $this->connect->query($query);
				
				return $result;
			}
		}
	}
	
	$db = new database;
	
?>