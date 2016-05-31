<?php
require_once'../modules/class-database.php';
/* get the incoming ID and password hash */
$user = $_POST["userid"];
$pass = sha1($_POST["password"]);

  
/* SQL statement to query the database */
$query = "SELECT * FROM User WHERE name = '$user'
         AND pw_hash = '$pass'";
echo $query;
/* query the database */
$result = $db->action($query);
print_r($result);
/* Allow access if a matching record was found, else deny access. */

if (mysqli_fetch_assoc($result)) {
  /* access granted */
  session_start();
  header("Cache-control: private");
  $_SESSION["access"] = "granted";
  header("Location: ./admin-landing.php");
} else
  /* access denied &#8211; redirect back to login */
  header("Location: ./login.php");

  
?>
