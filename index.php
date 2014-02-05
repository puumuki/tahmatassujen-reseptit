<?php
include 'app.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tahmatassujen reseptit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css.php">

        <link rel="icon" href="touch-icon-iphone.png" type="image/png" />
        <link rel="apple-touch-icon" href="touch-icon-iphone.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png" />

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <datalist id="recipeslist">
        <?php foreach ($recipes as $rep): ?>
            <option value='<?= $rep->title() ?>' />
        <?php endforeach; ?>
        </datalist>


        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Tahmatassujen reseptit</h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Reseptit</a></li>                        
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main clearfix">
                <?php if($recipe): ?>
                <article>
                   <?php echo $recipe->html();?>
                </article>
                <?php else: ?>
                <div class="recipelist">
                    <ul>
                    <?php foreach ($recipes as $recipe): ?>
                        <a href='index.php?recipe=<?= $recipe->hash() ?>'><li><?= $recipe->title() ?></li></a>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif;?>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <!--
                <input id="searchrecipes" list="recipeslist" />
                <button id="search">Hae</button>
                -->
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>

    <!-- 
    (c) Teemu Puukko 2013
    Reseptit ovat vapaasti kaikkien käytettävissä, levitettävissä ja muokattavissa.    
    -->
</html>
