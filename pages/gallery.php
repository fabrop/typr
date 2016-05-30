<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Gallerie</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/gallery.css" type="text/css" rel="stylesheet">
        <link href="../css/navbar.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        <main>
            <?php 
                require_once '../modules/navbar.php';
            ?>

            <div id="wrapper">

                <div id="content">
                    <article class="card article">
                        
                    </article>
                </div>

                <div id="sidebar" class="card"> 
                    <form method="GET">
                        <p>Anzahl Bilder:</p>
                        <ul>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="8" id="number8" checked><label for="number8">8</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="16" id="number16"><label for="number16">16</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="32" id="number32"><label for="number32">32</label></li>
                        </ul>
                        <hr>
                        <p>Sortierung:</p>
                        <ul>
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="n" id="sort-new" checked><label for="sort-new">Neueste zuerst</label></li>
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="o" id="sort-old"><label for="sort-old">&Auml;lteste zuerst</label></li>
                        </ul>
                        <hr>
                        <p>
                            <a href="admin-gallery.php">Bilder verwalten...</a>
                            <br>
                            <a href="admin-gallery-add.php">Bild hinzufügen...</a>
                        </p>
                    </form>
                </div>

            </div>
        </main>
        
        <nav id="pagination">
            <ul>
                <li><a href="#">&lt&lt<span> Vorherige Seite</span></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><span>N&auml;chste Seite </span>&gt&gt</a></li>
            </ul>
        </nav>
        
	</body>
</html>