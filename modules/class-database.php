<?php
	if(!class_exists('database')){
		class database{
			public function __construct(){
				$mysqli = new mysqli('81.169.252.236',$user,$password,'typr');
				
				if($mysqli->connect_errno){
					print("no connection \n", $mysqli->connect_error);
					exit();
				}
				return $mysqli;
			}
			
			public function insert_posts(){
				$query = "
							INSERT INTO Posts (title,content,tags)
							VALUES ($title,$content,$tags)
						";
				$result = $mysqli->query($query);
				
				return $result;
			}
			
			public function insert_pics(){
				$query = "
							INSERT INTO Pics (title,picture,alt_text,description)
							VALUES ($title,$picture,$alt_text,$description)
						";
				$result = $mysqli->query($query);
				
				return $result;
			}
		}
	}
	
?>