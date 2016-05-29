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
      
        <div class="section card" id="addpost">
            <a href="admin-blog-add.php">Post hinzufügen...</a>
        </div>
        
        <?php
            public function get_time($datetime){
                time = substr($datetime, 11, 8);
                return time;
            }
            public function get_date($datetime){
                date = substr($datetime, 0, 9);
                return date;
            }
            
            
        ?>
        
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
                    <tr>
                        <td>Lorem ipsum dolor</td>
                        <td>21:09</td>
                        <td>29.05.2016</td>
                        <td>432 Wörter</td>
                        <td><a href="#"><img alt="edit" src="../img/edit.png"></a></td>
                        <td><img alt="edit" src="../img/delete.png"><input type="submit" name="deletePost" value="" /></td>
                    </tr>
                    <tr>
                        <td>Temporibus autem quibusdam</td>
                        <td>23:11</td>
                        <td>17.03.2016</td>
                        <td>127 Wörter</td>
                        <td><a href="#"><img alt="edit" src="../img/edit.png"></a></td>
                        <td><img alt="edit" src="../img/delete.png"><input type="submit" name="deletePost" value="" /></td>
                    </tr>
                    <tr>
                        <td>Nihil impedit quo minus id quod</td>
                        <td>11:08</td>
                        <td>05.02.2015</td>
                        <td>288 Wörter</td>
                        <td><a href="#"><img alt="edit" src="../img/edit.png"></a></td>
                        <td><img alt="edit" src="../img/delete.png"><input type="submit" name="deletePost" value="" /></td>
                    </tr>
                </table>
            </form>
        </div>
        
        <a id="link" href="blog.php">
            <img src="../img/back-arrow.png">
            <p>Zur&uuml;ck zum Blog</p>
        </a>
    </body>
</html>