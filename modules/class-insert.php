<?php
	require_once('class-database.php');
	
	if(!class_exists('Insert')){
		class insert{ //Klasse, die dazu dient, mehrere verschiedene querys in Funktionen zu speichern und diese wiedrverwendbar zu machen
						// Es folgen Methoden der Klasse insert, welche Schreibaufgaben auf der Datenbank übernemen
			public function insert_posts($title,$content,$tags){
				global $db;
				
				$query = "
							INSERT INTO posts(title,content,tags)
							VALUES ('$title','$content','$tags')
						";
				return $db->action($query);
			}
			
			public function insert_pics($title,$pic,$alt,$desc){
				global $db;
				
				$query = "
							INSERT INTO posts(title,picture,alt_text,description)
							VALUES ('$title','$pic','$alt','$desc')
						";
				return $db->action($query);
			}
			
			public function update_posts($id,$title,$content,$tags){
				global $db;
				
				$query = "
							UPDATE posts
							SET title='$title', content='$content', tags='$tags'
							WHERE id='$id'
						";
				return $db->action($query);
			}
			
			public function update_contact($name,$phone,$mail,$location){
				global $db;
				
				$query = "
							UPDATE contact
							SET name='$name', phone='$phone', email='$mail', adress='$location'
							WHERE id=1
						";
				return $db->action($query);
			}
			
			public function update_general($name,$desc,$numbr){
				global $db;
				
				$query = "
							UPDATE contact
							SET name='$name', description='$desc', article_numb='$numbr'
							WHERE id=1
						";
				return $db->action($query);
			}
			
			public function update_home($title,$text,$numbr){
				global $db;
				
				$query = "
							UPDATE home
							SET caption='$title', text='$text'
							WHERE id=$numbr
						";
				return $db->action($query);
			}
		}
	}
	//Erzeugen einer Instanz der Klasse, sodass man auf diese drc einfaches includen zugreifn kann
	$insert = new Insert;	
?>