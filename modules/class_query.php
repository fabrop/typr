<?php
	require_once('class-database.php');
	
	if(!class_exists('Query')){
		class Query{
			public function every_post(){
				global $db;
				$query = "
							SELECT * FROM posts
						";
						
				return $db->select($query);
			}
		}
	}
	$query = new Query;
?>