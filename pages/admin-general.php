<html>
	<head>
		<meta charset="UTF-8">
		<title>Typr-Admin</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/admin.css" type="text/css" rel="stylesheet">
        <link href="../css/admin-general.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        
        <?php require '../modules/admin-navbar.php'; ?>
        
        <div class="section card">
            <form action="admin-general.php" method="post">
                <fieldset>
                    <legend>Startseite</legend>
                    <div class="input">
                        <label for="name">Name: </label>
                        <input type="text" name="name" value="Max Mustermann" id="name">
                    </div>
                    
                    <div class="input">
                        <label for="desc">Beschreibung: </label>
                        <textarea name="desc" id="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</textarea>
                    </div>
                    
                    <div class="input">
                        <label for="article-numb">Anzahl Artikel: </label>
                        <input type="number" id="article-numb" value="4" min="2" max="8">
                    </div>
                </fieldset>
                
                <div class="input">
                    <input type="submit" value="Speichern" id="save">
                </div>
                
            </form>
        </div>
        
        <a id="link" href="blog.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zum Blog</p>
        </a>
    </body>
</html>