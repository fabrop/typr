<!DOCTYPE HTML>
<html>
	<head>
        <title>Logout</title>
        <meta charset="UTF-8">
	</head>
	   
	<body>
        <?php
            session_start();
            session_destroy();
            header("Location: ./login.php");
        ?>
	</body>
</html>