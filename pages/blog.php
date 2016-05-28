<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blog</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/blog.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        <div id="top" class="clearfix">
            <img id="logo" alt="blog-logo" src="../img/blog-logo.png">

            <nav>
                <ul class="main-nav">
                    <li><a href="../index.php">Home</a></li>
                    <li class="dropdown">
                        <a>Kategorien</a>
                        <ul class="sub-nav">
                            <li><a href="?tag=tag1">Tag 1</a></li>
                            <li><a href="?tag=tag2">Tag 2</a></li>
                            <li><a href="?tag=tag3">Tag 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a>Admin</a>
                        <ul class="sub-nav">
                            <li><a href="admin-blog.php">Verwalten</a></li>
                            <li><a href="admin-add_blog.php">Post hinzufügen</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.php">Gallerie</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                </ul>
            </nav>
        </div>

        <div id="wrapper">
            
            <div id="content">
                <div class="card"> 
                    <h2 id="heading">Blog Posts</h2>
                </div>
                <article class="card article">
                    <h3 class="article-heading"></h3>
                    <p class="article-text"></p>
                    <p class="date"></p>
                </article>
                <article class="card article">
                    <h3 class="article-heading"></h3>
                    <p class="article-text"></p>
                    <p class="date"></p>
                </article>
                <article class="card article">
                    <h3 class="article-heading"></h3>
                    <p class="article-text"></p>
                    <p class="date"></p>
                </article>
            </div>
            
            <div id="sidebar">
                <div class="card">
                
                </div>
                <div class="card">
                
                </div>
            </div>
            
        </div>
	</body>
</html>