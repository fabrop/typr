<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Typr-Admin</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/admin.css" type="text/css" rel="stylesheet">
        <link href="../css/admin-landing.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        
        <?php 
            require_once '../modules/admin-navbar.php'; 
			require_once '../modules/class-database.php';
			require_once '../modules/class-insert.php';
			require_once '../modules/class-query.php';
        ?>    
      
        <div class="section card">
            <form action="admin-landing.php" method="post">
                <?php
					$query = "
							SELECT id,article_numb
							FROM Contact
							WHERE id = 1
						";
					$raw_numbr = $db->action($query);
					$numbr = mysqli_fetch_assoc($raw_numbr);
					//echo $numbr['article_numb'];
					for($i = 1; $i <= $numbr['article_numb'];$i++){
						echo '
							<fieldset>
							<legend>Artikel '.$i.'</legend>
								<div class="input">
									<label for="title'.$i.'">&Uuml;berschrift: </label>
									<input type="text" name="title'.$i.'" value="Lorem ipsum dolor" id="title'.$i.'" class="title">
								</div>
						
								<div class="input">
									<label for="txt'.$i.'">Text: </label>
									<textarea name="txt1" id="txt'.$i.'" class="txt"></textarea>
								</div>
							</fieldset>
						';
					}
				?> 
                
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