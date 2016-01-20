<html>
	<head>
		<meta charset="UTF-8">
		<title>Typr-Admin</title>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
        <link href="../css/admin-landing.css" type="text/css" rel="stylesheet">
        <link href="../img/favicon.png" type="image/png" rel="icon">
	</head>
	
	<body>
        <div class="card">
            <form action="admin-landing.php" method="post">
                <fieldset>
                    <legend>Startseite</legend>
                    <div class="input">
                        <label for="name">Name: </label>
                        <input type="text" name="name" value="Max Mustermann" id="name">
                    </div>
                    
                    <div class="input">
                        <label for="desc">Beschreibung: </label>
                        <textarea name="desc" id="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</textarea>
                    </div>
                    
                    <div class="input">
                        <label for="article-numb">Anzahl Artikel: </label>
                        <input type="number" id="article-numb" value="4" min="2" max="8">
                    </div>
                </fieldset>
                
                <div class="input">
                    <input type="submit" value="Speichern" id="save">
                </div>
                
            </form>
        </div>
        
        <div class="card">
            <form action="admin-landing.php" method="post">
                <fieldset>
                    <legend>Artikel 1</legend>
                    <div class="input">
                        <label for="title1">&Uuml;berschrift: </label>
                        <input type="text" name="title1" value="Lorem ipsum dolor" id="title1" class="title">
                    </div>
                    
                    <div class="input">
                        <label for="txt1">Text: </label>
                        <textarea name="txt1" id="txt1" class="txt">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</textarea>
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>Artikel 2</legend>
                    <div class="input">
                        <label for="title2">&Uuml;berschrift: </label>
                        <input type="text" name="title2" value="Temporibus autem quibusdam" id="title2" class="title">
                    </div>
                    
                    <div class="input">
                        <label for="txt2">Text: </label>
                        <textarea name="txt2" id="txt2" class="txt">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</textarea>
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>Artikel 3</legend>
                    <div class="input">
                        <label for="title3">&Uuml;berschrift: </label>
                        <input name="title3" value="Nemo enim ipsam" id="title3" class="title">
                    </div>
                    
                    <div class="input">
                        <label for="txt3">Text: </label>
                        <textarea name="txt3" id="txt3" class="txt">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</textarea>
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>Artikel 4</legend>
                    <div class="input">
                        <label for="title4">&Uuml;berschrift: </label>
                        <input type="title4" name="title4" value="Nihil impedit quo minus id quod" id="name" class="title">
                    </div>
                    
                    <div class="input">
                        <label for="txt4">Text: </label>
                        <textarea name="txt4"id="txt4" class="txt">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</textarea>
                    </div>
                </fieldset>
                
                <div class="input">
                    <input type="submit" value="Speichern" id="save">
                </div>
                
            </form>
        </div>
        
        <div id="link">
            <img src="../img/back-arrow.png">
            <a href="../index.php">Zur&uuml;ck zur Startseite</a>
        </div>
    </body>
</html>