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
						
				return $db->action($query);
			}
			
			public function get_posts($nbr,$page,$sort,$tags){
				global $db;
				$start = ($nbr * ($page - 1));
				$query = "
							SELECT * 
							FROM posts
							WHERE $tags
							ORDER BY id $sort
							LIMIT $start,$nbr
						";
						
				return $db->action($query);
			}
			
			public function get_one_post($nbr){
				global $db;
				$query = "
							SELECT *
							FROM posts
							WHERE id = $nbr
						";
						
				return $db->action($query);
			}
			
			public function get_number_posts(){
				global $db;
				$query = "
							SELECT COUNT(*) AS count_posts
							FROM posts
						";
				
				return $db->action($query);
			}
			
			public function numbr_articles(){
				global $db;
				$query = "
							SELECT id,article_numb
							FROM Contact
							WHERE id = 1
						";
				
				return $db->action($query);
			}
			
			public function get_home(){
				global $db;
				$query = "
							SELECT id,caption,text
							FROM home
						";
				
				return $db->action($query);
			}
		}
	}
	$query = new Query;
?>