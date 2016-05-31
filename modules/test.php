<html><?php
	/*$titel = "wubi";
	$cont = "ruwebvo";
	$tag = "vnue";
	error_reporting(E_ALL);
	ini_set('display_errors','1');
	require_once('class_query.php');
	//$insert->insert_posts();
	//$insert->insert_posts($titel,$cont,$tag);
	$everything = $query->every_post();
	while($row = mysqli_fetch_assoc($everything)){
		printf ("%s (%s)\n", $row["title"], $row["content"]);
	}*/
	$password = "geheim";
	$password = sha1($password);

	echo $password; 
?>
<form action="upTest.php" method="post" enctype="multipart/form-data">
<input type="file" name="datei"><br>
<input type="submit" value="Hochladen">
</form>
</html>