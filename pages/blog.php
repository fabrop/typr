<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blog</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/blog.css" type="text/css" rel="stylesheet">
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
				<?php
				
					function get_time($datetime){
                        $time = substr($datetime, 11, 8);
                        return $time;
                    }
                    function get_date($datetime){
                        $date = substr($datetime, 0, 10);
                        return $date;
                    }
					
					require_once('../modules/class_query.php');
                    if(isset($_GET['number'])){
						$nbr_posts = $_GET['number'];
					}
					else{
						$nbr_posts = 6;
					}
					
					$raw_number = $query->get_number_posts();
					$number_arr = mysqli_fetch_assoc($raw_number);
					$number = $number_arr['count_posts'];
                    
					$cnt_pages = ceil($number / $nbr_posts);
					if(isset($_GET['page'])){
						$cur_page = $_GET['page'];
					}
					elseif(isset($_GET['first'])){
						$cur_page = 1;
					}	
					elseif(isset($_GET['last'])){
						$cur_page = $cnt_pages;
					}
					else{
						$cur_page = 1;
					}
					
					if(isset($_GET['sort'])){
						$sort = $_GET['sort'];
					}
					else{
						$sort = 'DESC';
					}	
					
					$page = $query->get_posts($nbr_posts,$cur_page,$sort);
					
					while ($row = mysqli_fetch_assoc($page)){
						echo '<article class="card article">
								<a href="blog-post.php?id='.$row['id'].'">
									<h3 class="article-heading">'.$row['title'].'</h3>
									<p class="article-text">'.$row['content'].'</p>
									<p class="date">'.get_time($row['date']).' - '.get_date($row['date']).'</p>
								</a>
							</article>';
					}
				
                echo '</div>';
                
                echo '
                    <div id="sidebar" class="card"> 
                        <form method="GET">
                            <p>Kategorien:</p>
                            <ul>
                            ';
                            
                            /*
                            <li><input type="checkbox" name="tag" onChange="this.form.submit();" value="1" id="tag1" ''><label for="tag1">Tag 1</label></li>
                            <li><input type="checkbox" name="tag" onChange="this.form.submit();" value="2" id="tag2" checked><label for="tag2">Tag 2</label></li>
                            <li><input type="checkbox" name="tag" onChange="this.form.submit();" value="3" id="tag3" checked><label for="tag3">Tag 3</label></li>
                            */
                            echo '
                            </ul>
                            <hr>
                            <p>Anzahl Posts:</p>
                            <ul>
                            ';
                            /* 
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="6" id="number6" checked><label for="number6">6</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="12" id="number12"><label for="number12">12</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="20" id="number20"><label for="number20">20</label></li>
                            */
                            echo '
                            </ul>
                            <hr>
                            <p>Sortierung:</p>
                            <ul>
                            ';
                            /*
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="DESC" id="sort-new" checked><label for="sort-new">Neueste zuerst</label></li>
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="ASC" id="sort-old"><label for="sort-old">&Auml;lteste zuerst</label></li>
                            */
                            echo '
                            </ul>
                            <hr>
                            <p>
                                <a href="admin-blog.php">Posts verwalten...</a>
                                <br>
                                <a href="admin-blog-add.php">Post schreiben...</a>
                            </p>
                        </form>
                    </div>
                '; 
                    
                ?>
                    
                </div>
            </main>
               
        <nav id="pagination">
            <ul>
			<form action="" method="GET">
			<?php
				
				echo '<input type="hidden" name="number" value='.$nbr_posts.'>';
				echo '<input type="hidden" name="sort" value='.$sort.'>';
				if(($cur_page - 2) > 1){
					echo '<li><input type="submit" name="first" value="ersteSeite" /></li>';
				}
				for($i = ($cur_page - 2);$i <= ($cur_page + 2);$i++){
					if(($i >= 1)&&($i <= $cnt_pages)){
						echo '<li><input type="submit" name="page" value='.$i.' /></li>';
					}
				}
				if(($cur_page + 2) < $cnt_pages){
					echo '<li><input type="submit" name="last" value="letzteSeite" /></li>';
				}
			?>
			</form>
              
            </ul>
        </nav>
        
	</body>
</html>