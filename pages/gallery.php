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

            <div id="wrapper" class="clearfix">

                <div id="content">
                    <article class="card article">
                        <div class="img">
                            <img src="" alt="" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
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
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }

            // Get all images and insert the clicked image inside the modal
            // Get the content of the image description and insert it inside the modal image caption
            var images = document.getElementsByTagName('img');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            var i;
            for (i = 0; i < images.length; i++) {
               images[i].onclick = function(){
                   modal.style.display = "block";
                   modalImg.src = this.src;
                   modalImg.alt = this.alt;
                   captionText.innerHTML = this.nextElementSibling.innerHTML;
               }
            }
        </script>
	</body>
</html>