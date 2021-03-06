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
                <!-- hardcoded zum testen -->
                <div id="content">
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/1.png" alt="1.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/2.png" alt="2.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/3.png" alt="3.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/4.png" alt="4.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/5.png" alt="5.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/6.png" alt="6.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/7.png" alt="7.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="img">
                            <img src="../gallery/8.png" alt="8.png" >
                            <div class="desc">Lorem Ipsum dolor sit amet.</div>
                        </div>
                    </article>
                </div>
                
                <!-- overlay -->
                <div id="imgModal" class="modal">
                      <span class="x">×</span>
                      <img class="modal-content" id="image">
                      <div id="caption"></div>
                </div>

                <!-- sidebar mit optionen -->
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
                            <a href="../admin/admin-gallery.php">Bilder verwalten...</a>
                            <br>
                            <a href="../admin/admin-gallery-add.php">Bild hinzufügen...</a>
                        </p>
                    </form>
                </div>

            </div>
        </main>
        
        <nav id="pagination">
            <ul>
                <!-- hardgecodede links zum testen -->
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
            // ganzer overlay container 
            var modal = document.getElementById('imgModal');
            // schließen element
            var span = document.getElementsByClassName("x")[0];
            // schließen funktionsaufruf
            span.onclick = function() { 
                modal.style.display = "none";
            }
            // bilder-array
            var images = document.getElementsByTagName('img');
            // overlay-bild
            var modalImg = document.getElementById("image");
            // overlay-bildunterschrift
            var captionText = document.getElementById("caption");
            
            for (var i = 0; i < images.length; i++) {
               images[i].onclick = function(){
                   modal.style.display = "block";
                   // bild und alt holen
                   modalImg.src = this.src;
                   modalImg.alt = this.alt;
                   // bildunterschrift holen
                   captionText.innerHTML = this.nextElementSibling.innerHTML;
               }
            }
        </script>
	</body>
</html>