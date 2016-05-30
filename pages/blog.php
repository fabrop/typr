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
        

            echo '<div id="wrapper">

                <div id="content">';
				
					require_once('../modules/class_query.php');
                    
					function get_time($datetime){
                        $time = substr($datetime, 11, 8);
                        return $time;
                    }
                    function get_date($datetime){
                        $date = substr($datetime, 0, 10);
                        return $date;
                    }
					
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
					$tags = $_GET['tag'];
					
					$tags_processed = "";
					foreach($tags as $var){
						$tags_processed = $tags_processed." tags = '".$var."' OR ";
					}
					$tags_processed = substr($tags_processed, 0, (strlen($tags_processed) -4));
					$page = $query->get_posts($nbr_posts,$cur_page,$sort,$tags_processed);
					
					while ($row = mysqli_fetch_assoc($page)){
						echo '<article class="card article grid-sel">
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
                            $query = "SELECT DISTINCT tags FROM Posts";
                            $tag_row = $db->action($query);
                    
                            for ($i = 0; $tag = mysqli_fetch_assoc($tag_row); $i++){
                                echo 
                                    '<li>
                                        <input 
                                            type="checkbox" 
                                            name="tag[]" 
                                            onChange="this.form.submit();" 
                                            value="'.$tag['tags'].'" 
                                            id="tag['.$tag['tags'].']"
                                            ';
                                            if(isset($_GET['tag'])) {
                                                if (in_array($tag['tags'], $_GET['tag'], FALSE)) {
                                                    echo 'checked';
                                                }
                                            }
                                            else {
                                                echo 'checked';
                                            }
                                            
                                echo '
                                        >
                                    
                                        <label 
                                            for="tag['.$tag['tags'].']"
                                        >
                                            '.$tag['tags'].'
                                        </label>
                                    </li>
                                ';
                                
                            }
                            echo '
                            </ul>
                            <hr>
                            <p>Anzahl Posts:</p>
                            <ul>
                            
                                <li>
                                    <input 
                                    type="radio" 
                                    name="number" 
                                    onChange="this.form.submit();" 
                                    value="6" 
                                    id="number6"';
                                    if ($nbr_posts==6) {
                                        echo 'checked';
                                    }
                                    echo '>
                                    <label for="number6">6</label>
                                </li>
                                <li>
                                    <input 
                                    type="radio" 
                                    name="number" 
                                    onChange="this.form.submit();" 
                                    value="12" 
                                    id="number12"';
                                    if ($nbr_posts==12) {
                                        echo 'checked';
                                    }
                                    echo '>
                                    <label for="number12">12</label></li>
                                <li>
                                    <input 
                                    type="radio" 
                                    name="number" 
                                    onChange="this.form.submit();" 
                                    value="20" 
                                    id="number20"';
                                    if ($nbr_posts==20) {
                                        echo 'checked';
                                    }
                                    echo '>
                                    <label for="number20">20</label>
                                </li>
                            
                            </ul>
                            <hr>
                            <p>Sortierung:</p>
                            <ul>
                                <li>
                                    <input 
                                        type=radio 
                                        name="sort" 
                                        onChange="this.form.submit();" 
                                        value="DESC" 
                                        id="sort-new"';
                                        if (!isset($_GET['sort']) OR $sort=="DESC") { 
                                            echo 'checked';
                                        }
                                        echo '>
                                    <label for="sort-new">Neueste zuerst</label>
                                </li>
                                <li>
                                    <input 
                                        type=radio 
                                        name="sort" 
                                        onChange="this.form.submit();" 
                                        value="ASC" 
                                        id="sort-old"';
                                        if (isset($_GET['sort'])) { 
                                            if ($sort=="ASC") {
                                                echo 'checked';
                                            }
                                        }
                                    echo '>
                                    <label for="sort-old">&Auml;lteste zuerst</label></li>
                            </ul>
                            <hr>
                            <p>
                                <a href="admin-blog.php">Posts verwalten...</a>
                                <br>
                                <a href="admin-blog-add.php">Post schreiben...</a>
                            </p>
                        
                    </div>
                 
                    
               
                    
                </div>
            </main>
               
        <nav id="pagination">
            <ul>
			';
			
				if(($cur_page - 2) > 1){
					echo '<li><input type="submit" name="first" value="Erste Seite" /></li>';
				}
				for($i = ($cur_page - 2);$i <= ($cur_page + 2);$i++){
					if(($i >= 1)&&($i <= $cnt_pages)){
						echo '<li><input type="submit" name="page" value='.$i.' /></li>';
					}
				}
				if(($cur_page + 2) < $cnt_pages){
					echo '<li><input type="submit" name="last" value="Letzte Seite" /></li>';
				}
			?>
			</form>
              
            </ul>
        </nav>
        <script src="../js/jquery.js"></script>
        <script src="../js/masonry.js"></script>
        <script>
            $('#content').masonry({
                itemSelector: '.grid-sel',
                columnWidth: '.article'
            });
        </script>
        
	</body>
</html>