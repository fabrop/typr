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
			require_once '../modules/class-database.php';
			require_once '../modules/class-insert.php';
			
			if(isset($_POST['name'])&&isset($_POST['desc'])&&isset($_POST['article_numb'])){
				$insert->update_general($_POST['name'],$_POST['desc'],$_POST['article_numb']);
			}
			
			$query = "
						SELECT id,name,description,article_numb
						FROM Contact
						WHERE id = 1
					";
			$raw_data = $db->action($query);
			$data = mysqli_fetch_assoc($raw_data);
        echo '
				 <div class="section card">
					<form action="admin-general.php" method="post">
						<div class="input">
							<label for="name">Name: </label>
							<input type="text" name="name" value="'.$data['name'].'" id="name">
						</div>
	
						<div class="input">
							<label for="desc">Beschreibung: </label>
							<textarea name="desc" id="desc">'.$data['description'].'</textarea>
						</div>

						<div class="input">
							<label for="article_numb">Anzahl Artikel: </label>
							<input type="number" id="article_numb" name="article_numb" value='.$data['article_numb'].' min="2" max="8">
						</div>
                
						<div class="input">
							<input type="submit" value="Speichern" id="save">
						</div>
					</form>
				</div>
			'
		
		?>
        
       
        
        <a id="link" href="../index.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zur Startseite</p>
        </a>
    </body>
</html>