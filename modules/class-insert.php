<?php
	require_once('class-database.php');
	
	if(!class_exists('Insert')){
		class insert{
			public function insert_posts($title,$content,$tags){
				global $db;
				
				$query = "
							INSERT INTO posts(title,content,tags)
							VALUES ('$title','$content','$tags')
						";
				return $db->insert($query);
			}
			
			public function insert_pics($title,$pic,$alt,$desc){
				global $db;
				
				$query = "
							INSERT INTO posts(title,picture,alt_text,description)
							VALUES ('$title','$pic','$alt','$desc')
						";
				return $db->insert($query);
			}
		}
	}
	$insert = new Insert;	
?>