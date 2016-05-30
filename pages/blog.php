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
					
					if(isset($_GET['page'])){
						$cur_page = $_GET['page'];
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
				?>
                </div>

                <div id="sidebar" class="card"> 
                    <form method="GET">
                        <p>Kategorien:</p>
                        <ul>
                            <li><input type="checkbox" name="tag" onChange="this.form.submit();" value="1" id="tag1" checked><label for="tag1">Tag 1</label></li>
                            <li><input type="checkbox" name="tag" onChange="this.form.submit();" value="2" id="tag2" checked><label for="tag2">Tag 2</label></li>
                            <li><input type="checkbox" name="tag" onChange="this.form.submit();" value="3" id="tag3" checked><label for="tag3">Tag 3</label></li>
                        </ul>
                        <hr>
                        <p>Anzahl Posts:</p>
                        <ul>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="6" id="number6" checked><label for="number6">6</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="12" id="number12"><label for="number12">12</label></li>
                            <li><input type="radio" name="number" onChange="this.form.submit();" value="20" id="number20"><label for="number20">20</label></li>
                        </ul>
                        <hr>
                        <p>Sortierung:</p>
                        <ul>
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="DESC" id="sort-new" checked><label for="sort-new">Neueste zuerst</label></li>
                            <li><input type=radio name="sort" onChange="this.form.submit();" value="ASC" id="sort-old"><label for="sort-old">&Auml;lteste zuerst</label></li>
                        </ul>
                        <hr>
                        <p>
                            <a href="admin-blog.php">Posts verwalten...</a>
                            <br>
                            <a href="admin-blog-add.php">Post schreiben...</a>
                        </p>
                    </form>
                </div>

            </div>
        </main>
        
        <nav id="pagination">
            <ul>
			<form action="" method="GET">
			<?php
				$raw_number = $query->get_number_posts();
				$number_arr = mysqli_fetch_assoc($raw_number);
				$number = $number_arr['count_posts'];
				//echo $number;
				$cnt_pages = ceil($number / $nbr_posts);
				for($i = ($cur_page - 2);$i <= ($cur_page + 2);$i++){
					if(($i >= 1)&&($i <= $cnt_pages)){
						echo '<li><input type="submit" name="page" value='.$i.' /></li>';
					}
				}
				
			?>
			</form>
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