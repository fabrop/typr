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
        
        <?php require '../modules/admin-navbar.php'; ?>
        <?php require_once '../modules/class-insert.php' ?>
        
        <div class="section card" id="allposts">
            <a href="admin-blog.php">Posts verwalten...</a>
        </div>
        
        <div class="section card">
            <form action="admin-blog-add.php" method="post">
                <label for="title">Titel: </label><input type="text" id="title">
                
                <textarea id="text"></textarea>
                
                <label for="tags">Kategorien: </label><input type="text" id="tags">
                
                <input type="submit" value="Posten" id="save">
            </form>
        </div>
        
        <a id="link" href="blog.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zum Blog</p>
        </a>
    </body>
</html>