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
        ?>
        
        <div class="section card" id="allposts">
            <a href="admin-blog.php">Posts verwalten...</a>
        </div>
        <?php
			if(isset($_POST['title'])&&isset($_POST['text'])&&isset($_POST['tags'])){
				$insert->insert_posts($_POST['title'],$_POST['text'],$_POST['tags']);
			}
        
		?>
        <div class="section card">
            <form method="post">
                <label for="title">Titel: </label><input type="text" id="title" name="title">
                
                <textarea id="text" name="text"></textarea>
                
                <label for="tags">Kategorien: </label><input type="text" id="tags" name="tags">
                
                <input type="submit" value="Posten" id="save">
            </form>
        </div>
        
        <a id="link" href="../pages/blog.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zum Blog</p>
        </a>
    </body>
</html>