  <!doctype html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Koval Games</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <header> 
 <h1><a class = "Game-Name" href="index.php">Koval Games</a></h1>
     <?php
		require('menu.php');
        echo Menu::GetMenu($_GET['page']);
    ?> 
  </header>
  <body>
    <?php
     require('Content.php');
        echo Content::GetContent($_GET['page']);
    ?>
  </body>
  </html>
