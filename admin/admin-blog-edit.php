<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Typr-Admin</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/admin.css" type="text/css" rel="stylesheet">
        <link href="../css/admin-blog-add.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        
        <?php 
            require_once '../modules/admin-navbar.php'; 
            require_once '../modules/class-insert.php'; 
			require_once '../modules/class-query.php';
			require_once '../modules/class-database.php';
        ?>
        
        <div class="section card" id="allposts">
            <a href="admin-blog.php">Posts verwalten...</a>
        </div>
        <?php
			
            if(isset($_POST['title'])&&isset($_POST['text'])&&isset($_POST['tags'])){
				$insert->update_posts($_GET['id'],$_POST['title'],$_POST['text'],$_POST['tags']);
			}
			global $db;
				$query = "
							SELECT *
							FROM posts
							WHERE id = ".$_GET['id']."
						";
						
				$raw_post = $db->action($query);
			//$raw_post = $query->get_one_post($_GET['id']);
			$post = mysqli_fetch_assoc($raw_post);
            echo '<div class="section card">
					<form method="post">
						<label for="title">Titel: </label><input type="text" id="title" name="title" value='.$post['title'].'>
                
						<textarea id="text" name="text">'.$post['content'].'</textarea>
                
						<label for="tags">Kategorien: </label><input type="text" id="tags" name="tags" value='.$post['tags'].'>
                
						<input type="submit" value="Update" id="save">
					</form>
				</div>'
		?>
        
        
        <a id="link" href="../pages/blog.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zum Blog</p>
        </a>
    </body>
</html>