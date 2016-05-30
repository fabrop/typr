<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blog</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/blog.css" type="text/css" rel="stylesheet">
        <link href="../css/navbar.css" type="text/css" rel="stylesheet">
        <link href="../css/blog-post.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        
        <?php 
            require_once '../modules/navbar.php';
        ?>

        <div id="wrapper"> 

            <div id="content">
                <article class="card article">
                    <?php
					function get_time($datetime){
                        $time = substr($datetime, 11, 8);
                        return $time;
                    }
                    function get_date($datetime){
                        $date = substr($datetime, 0, 10);
                        return $date;
                    }
					require_once'../modules/class_query.php';
					
					$raw_post = $query->get_one_post($_GET['id']);
					$post = mysqli_fetch_assoc($raw_post);
					echo '<h3 class="article-heading">'.$post['title'].'</h3>';
					echo '<p class="article-text">'.$post['content'].'</p>';
					echo '<p class="date">'.get_time($post['date']).' - '.get_date($post['date']).'</p>';
					?>
                </article>
            </div>

            <div id="sidebar" class="card">
                <h2 id="sidebar-tag">Kategorien</h2>
                <ul>
                    <li>Tag 1</li>
                    <li>Tag 2</li>
                    <li>Tag 3</li>
                </ul>
                <hr>
                <?php 
                    if(isset($_GET['id'])) {
                        echo "<a href=\"admin-blog-edit.php?id=";
                        echo $_GET['id'];
                        echo "\">Bearbeiten...</a>";
                    }
                
                ?>
            </div>

        </div>
	</body>
</html>