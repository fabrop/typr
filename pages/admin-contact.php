<html>
	<head>
		<meta charset="UTF-8">
		<title>Typr-Admin</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/admin.css" type="text/css" rel="stylesheet">
        <link href="../css/admin-contact.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        
        <?php require '../modules/admin-navbar.php'; ?>
        
        <div class="section card">
            <form action="" method="post">
                <div class="input">
                    <label for="name">Name: </label>
                    <input type="text" name="name" value="Max Mustermann" id="name">
                </div>

            </form>
        </div>
        
        <a id="link" href="contact.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zur Kontaktseite</p>
        </a>
    </body>
</html>