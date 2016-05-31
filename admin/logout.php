<!DOCTYPE HTML>
<html>
	<head>
	</head>
	   
	<body>
        <?php
            session_start();
            session_destroy();
            header("Location: ./login.php");
        ?>
	</body>
</html>