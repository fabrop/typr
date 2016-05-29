<html>
	<head>
		<meta charset="UTF-8">
		<title>Typr-Admin</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/admin.css" type="text/css" rel="stylesheet">
        <link href="../css/admin-blog.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        
        <?php require '../modules/admin-navbar.php'; ?>  
        <?php require_once '../modules/class-database.php'; ?> 
      
        <div class="section card" id="addpost">
            <a href="admin-blog-add.php">Post hinzufügen...</a>
        </div>
        

        <div class="section card">
            <form action="" method="POST">
                <table>
                    <tr>
                        <th>Titel</th>
                        <th>Uhrzeit</th>
                        <th>Datum</th>
                        <th>L&auml;nge</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                        function get_time($datetime){
                            $time = substr($datetime, 11, 8);
                            return $time;
                        }
                        function get_date($datetime){
                            $date = substr($datetime, 0, 10);
                            return $date;
                        }
                    
                        if(isset($_POST['deletePost'])) {
                            $delete = $_POST['deletePost'];
                            $query = "DELETE FROM Posts WHERE id = '$delete'"; 
                            $db->delete($query);
                        }

                        require_once('../modules/class_query.php');
                        $everything = $query->every_post();

                        while ($row = mysqli_fetch_assoc($everything)){
                            echo "<tr>\n";
                                echo "<td><a href=\"blog-post.php?id=".$row['id']."\">".$row['title']."</a></td>";
                                echo "<td>".get_time($row['date'])."</td>";
                                echo "<td>".get_date($row['date'])."</td>";
                                echo "<td>".str_word_count($row['content'])." Wörter</td>";
                                echo "<td><a href=\"admin-blog-post.php?id=".$row['id']."\"><img alt=\"edit\" src=\"../img/edit.png\"></a></td>";
                                echo "<td><img alt=\"edit\" src=\"../img/delete.png\"><input type=\"submit\" name=\"deletePost\" value=\"".$row['id']."\" /></td>";
                            echo "</tr>\n";
                        } 
                        echo "</table>";
                    ?>
        
                </table>
            </form>
        </div>
        
        <a id="link" href="blog.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zum Blog</p>
        </a>
    </body>
</html>