<!DOCTYPE HTML>
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
        
        <?php 
            require_once '../modules/admin-navbar.php'; 
			require_once '../modules/class_database.php';
			$query = "
						SELECT 
					"
        ?>
        
        <div class="section card">
            <form action="admin-general.php" method="post">
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
                
                <div class="input">
                    <input type="submit" value="Speichern" id="save">
                </div>
                
            </form>
        </div>
        
        <a id="link" href="../index.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zur Startseite</p>
        </a>
    </body>
</html>