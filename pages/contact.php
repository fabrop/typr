<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kontakt</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/contact.css" type="text/css" rel="stylesheet">
        <link href="../css/navbar.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        
        <?php 
		//Alle Kontaktdaten wrden aufgerufen und in die vorgesehenen Felder geschrieben
            require_once '../modules/navbar.php';
			require_once '../modules/class-database.php';
			$query = "
					SELECT * 
					FROM contact
					WHERE id=1
					";
			$raw_data = $db->action($query);
			$data = mysqli_fetch_assoc($raw_data);
			echo '
				<div id="wrapper" class="card">
					<h3>Name</h3>
					<p>'.$data['name'].'</p>

					<h3>Telefonnummer</h3>
					<p>'.$data['phone'].'</p>

					<h3>Email-Adresse</h3>
					<p>'.$data['email'].'</p>

					<h3>Adresse</h3>
					<p>'.$data['adress'].'</p>
				</div>
				';
		?>

        
	</body>
</html>