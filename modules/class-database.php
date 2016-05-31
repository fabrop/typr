<?php
	if(!class_exists('database')){
		class database{
			public function __construct(){
				// hier die anmeldedaten eintragen
				$username = "root";
				$password = "";
				$mysqli = new mysqli('localhost',$username,$password,'typr');
				
				if($mysqli->connect_errno){
					printf("no connection \n",$mysqli->connect_error);
					exit();
				}
				$this->connect = $mysqli;
			}
			
            // über diese funktion laufen alle aktionen auf der datenbank
			public function action($query) {  
				$result = $this->connect->query($query);
				
				return $result;
			}
		}
	}
	// eine instanz der verbindung zur datenbank wird erstellt, um von überall darauf zugreifen zu können
	$db = new database;
	
?>