<?php //Kontrolle, ob der Nutzer berechtigt ist, Adminseiten zu betreten
				session_start();
				header("Cache-control: private");
				
				if (!($_SESSION['access'] == "granted"))
				  
				  header("Location: ./login.php");//bei ungültiger session überleitung zum login screen
			?> 
<div id="navbar" class="section card">
    <h1 id="admin-title">Admin</h1> 
    <nav>
        <ul>
            <li><a href="../admin/admin-general.php">Allgemein</a></li>
            <li><a href="../admin/admin-landing.php">Startseite</a></li>
            <li><a href="../admin/admin-blog.php">Blog</a></li>
            <li><a href="../admin/admin-gallery.php">Gallerie</a></li>
            <li><a href="../admin/admin-contact.php">Kontakt</a></li>
            <li><a href="../admin/logout.php">Logout</a></li>
        </ul>
    </nav>
</div>
<!-- diese Navbar wird in jeder Adminseite eingebaut. So könen Berechtigungen überprüft werden und es wird ein gleichmäßiges Layout geschaffen. -->