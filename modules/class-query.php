<?php
	require_once('class-database.php');
	
	if(!class_exists('Query')){
		class Query{
			public function every_post(){
				global $db;
				$query = "
							SELECT * 
							FROM posts
						";
						
				return $db->select($query);
			}
			
			public function get_posts($nbr,$page,$sort){
				global $db;
				$start = ($nbr * ($page - 1)) + 1;
				$query = "
							SELECT * 
							FROM posts
							ORDER BY id $sort
							LIMIT $start,$nbr
						";
						
				return $db->select($query);
			}
		}
	}
	$query = new Query;
?>