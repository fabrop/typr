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
                <div class="input">
                    <label for="tel">Telefonnummer: </label>
                    <input type="text" name="name" value="01234 12345" id="tel">
                </div>
                <div class="input">
                    <label for="mail">Email-Adresse: </label>
                    <input type="text" name="name" value="max.mustermann@provider.de" id="mail">
                </div>
                <div class="input">
                    <label for="addr">Adresse: </label>
                    <input type="text" name="name" value="Hauptstraße 123, 12345 Musterstadt" id="addr">
                </div>
                
                <div class="input">
                    <input type="submit" value="Speichern" id="save">
                </div>
            </form>
        </div>
        
        <a id="link" href="../pages/contact.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zur Kontaktseite</p>
        </a>
    </body>
</html>