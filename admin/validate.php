<?php
require_once'../modules/class-database.php';
// variablen vom formular 
$user = $_POST["userid"];
$pass = sha1($_POST["password"]);

  
// query zur passwort/user abfrage
$query = "SELECT * FROM User WHERE name = '$user'
         AND pw_hash = '$pass'";
echo $query;
// query abschicken 
$result = $db->action($query);
print_r($result);

if (mysqli_fetch_assoc($result)) {
    // session erzeugen 
    session_start();
    header("Cache-control: private");
    $_SESSION["access"] = "granted";
    header("Location: ./admin-landing.php");
} else
    // zurück zum login 
    header("Location: ./login.php");
?>
