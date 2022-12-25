<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>Java</title>        
        <!-- CSS -->
        <link rel="stylesheet" href="./css/styles.css" />        
        <!-- FONT RALEWAY -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">        
    </head>
    <!-- id=toppage - для прокрутки вверх -->
    <body id="toppage">

        <?php require "blocks/header.php" ?>   

        <main class="main">

            <div class="wrapper-col">

                <?php require "blocks/aside.php" ?> 

                <?php require "contents/content_java.php" ?>              
            </div>
        </main>
        <footer>
            <?php require "blocks/footer.php" ?> 
        </footer>

        <script src="./js/calendar_current_date.js" type="module"></script>

    </body>

</html>
