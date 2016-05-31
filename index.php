<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
        <link href="./css/main.css" type="text/css" rel="stylesheet">
        <link href="./css/landing.css" type="text/css" rel="stylesheet">
        <link href="./img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        <div id="card">
            <div id="card-img">
                <div id="square">
                    <div id="circle">
                        <div id="card-head"></div>
                        <div id="card-body"></div>
                    </div>
                </div>
            </div>
            <?php
				require_once '/modules/class-database.php';
				$query = "
						SELECT id,name,description
						FROM Contact
						WHERE id = 1
						";
				$raw_data = $db->action($query);
				$contact_data = mysqli_fetch_assoc($raw_data);
				echo '
				<div id="card-txt">
					<h1 id="card-name">'.$contact_data['name'].'</h1>
					<h2 id="card-desc">'.$contact_data['description'].'</h2>
					<div id="card-links">    
						<a class="card-link" href="./pages/blog.php">Blog</a>
						<a class="card-link" href="./pages/gallery.php">Gallerie</a>
					</div>
				</div>
        </div>
        
        <div id="content">
        
        ';
            $query_numbr = "
                    SELECT id,article_numb
                    FROM Contact
                    WHERE id = 1
                ";
            $raw_numbr = $db->action($query_numbr);
            $numbr = mysqli_fetch_assoc($raw_numbr);

            
            $query = "
							SELECT id,caption,text
							FROM home
						";
            $result = $db->action($query);
            for($i = 1; $i <= $numbr['article_numb'];$i++){
                $article = mysqli_fetch_assoc($result);
                echo '
                <div class="article">
                <h3 class="article-head">
                '.$article['caption'].'
                </h3>
                <hr>
                <p class="article-text">
                '.$article['text'].'
                </p>
                <img class="article-img">
                </div>';
            }
            ?>
        </div>
        
        <div id="footer">
            <nav>
                <ul id="navigation">
                    <li><a href="./pages/blog.php" class="nav-link">Blog</a></li>
                    <li><a href="./pages/gallery.php" class="nav-link">Gallerie</a></li>
                    <li><a href="./pages/contact.php" class="nav-link">Kontakt</a></li>
                    <li><a href="./admin/admin-landing.php" class="nav-link">Admin</a></li>
                </ul>
            </nav>
        </div>
        
	</body>
</html>