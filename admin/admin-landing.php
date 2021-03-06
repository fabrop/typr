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
            <form action="" method="post">
                <?php
                    // anzahl artikel herausfinden
					$query = "
							SELECT id,article_numb
							FROM Contact
							WHERE id = 1
						";
					$raw_numbr = $db->action($query);
					$numbr = mysqli_fetch_assoc($raw_numbr);
					
                    // artikel mit formulardaten updaten
					for($i = 1; $i <= $numbr['article_numb'];$i++){
						$active_title = "title".$i;
						$active_text = "txt".$i;
						if(isset($_POST[$active_title])&&isset($_POST[$active_text])){
							$insert->update_home($_POST[$active_title],$_POST[$active_text],$i);
							
						}
					}
                
                    // aktuelle artikel holen 
					$query = "
							SELECT id,caption,text
							FROM home
						";
					$result = $db->action($query);
                    // artikel inputs generieren 
					for($i = 1; $i <= $numbr['article_numb'];$i++){
						$content = mysqli_fetch_assoc($result);
						echo '
							<fieldset>
							<legend>Artikel '.$i.'</legend>
								<div class="input">
									<label for="title'.$i.'">&Uuml;berschrift: </label>
									<input type="text" name="title'.$i.'" value="'.$content['caption'].'" id="title'.$i.'" class="title">
								</div>
						
								<div class="input">
									<label for="txt'.$i.'">Text: </label>
									<textarea name="txt'.$i.'" id="txt'.$i.'" class="txt">'.$content['text'].'</textarea>
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