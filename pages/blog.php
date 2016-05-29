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
                <article class="card article">
                    <h3 class="article-heading">Lorem ipsum dolor</h3>
                    <p class="article-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    <p class="date">21:33 - 29.05.2016</p>
                </article>
                <article class="card article">
                    <h3 class="article-heading">Nemo enim ipsam</h3>
                    <p class="article-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                    <p class="date">21:12 - 29.05.2016</p>
                </article>
                <article class="card article">
                    <h3 class="article-heading">Nihil impedit quo minus id quod</h3>
                    <p class="article-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    <p class="date">20:48 - 29.05.2016</p>
                </article>
            </div>
            
            <div id="sidebar">
                <div class="card" id="sidebar-tagcard">
                    <h2 id="sidebar-tag">Alle Kategorien</h2>
                </div>
                <div class="card" id="sidebar-formcard">
                    <form method="GET">
                        <p>Anzahl Posts:</p>
                        <ul>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="5" id="number5" checked><label for="number5">5</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="10" id="number10"><label for="number10">10</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="15" id="number15"><label for="number15">15</label></li>
                        </ul>
                        <p>Sortierung:</p>
                        <ul>
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="n" id="sort-new" checked><label for="sort-new">Neueste zuerst</label></li>
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="o" id="sort-old"><label for="sort-old">&Auml;lteste zuerst</label></li>
                        </ul>
                    </form>
                </div>
            </div>
            
        </div>
	</body>
</html>