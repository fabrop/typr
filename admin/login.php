<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/admin.css" type="text/css" rel="stylesheet">
        <link href="../css/login.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
		<form action="validate.php" method="post" class="card">
			<label for="userid">User-ID</label>
			<input type="text" name="userid" id="userid" />
			<br />
			<label for="password">Password</label>
			<input type="password" name="password" id="password" />
			<br />
			<input type="submit" name="submit" value="Submit" id="save"/>
		</form>
        
        <a id="link" href="../index.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zur Startseite</p>
        </a>
	</body>
</html>