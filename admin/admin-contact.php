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
        
        <?php 
            require_once '../modules/admin-navbar.php'; 
            require_once '../modules/class-database.php';
            require_once '../modules/class-insert.php';

            // kontaktinfo updaten
            if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['adress'])){
            $insert->update_contact($_POST['name'],$_POST['phone'],$_POST['email'],$_POST['adress']);
            }
            // aktuelle infos holen
            $query = "
                    SELECT * 
                    FROM contact
                    WHERE id=1
                    ";
            $raw_data = $db->action($query);
            $data = mysqli_fetch_assoc($raw_data);
        
            // formular mit vorher ausgefüllten daten generieren
            echo'
                <div class="section card">
                    <form action="" method="post">
                        <div class="input">
                            <label for="name">Name: </label>
                            <input type="text" name="name" value="'.$data['name'].'" id="name">
                        </div>
                        <div class="input">
                            <label for="tel">Telefonnummer: </label>
                            <input type="text" name="phone" value="'.$data['phone'].'" id="tel">
                        </div>
                        <div class="input">
                            <label for="mail">Email-Adresse: </label>
                            <input type="text" name="email" value="'.$data['email'].'" id="mail">
                        </div>
                        <div class="input">
                            <label for="addr">Adresse: </label>
                            <input type="text" name="adress" value="'.$data['adress'].'" id="addr">
                        </div>

                        <div class="input">
                            <input type="submit" value="Speichern" id="save">
                        </div>
                    </form>
                </div>
            ';
		?>
        
        
        
        <a id="link" href="../pages/contact.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zur Kontaktseite</p>
        </a>
    </body>
</html>