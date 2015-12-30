<html>
	<head>
		<meta charset="UTF-8">
		<title>Typr</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet"/>
        <link href="../css/landing-admin.css" type="text/css" rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
        <div id="card">
            <form action="../index.php" method="post">
                <fieldset>
                    <legend>Landing-Page</legend>
                    <div class="input">
                        <label for="name">Name: </label>
                        <input type="text" name="name" value="Max Mustermann" id="name">
                    </div>
                    
                    <div class="input">
                        <label for="desc">Beschreibung: </label>
                        <textarea name="desc" id="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</textarea>
                    </div>
                    
                    <div class="input">
                        <input type="submit" value="Speichern" id="save">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>