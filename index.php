<?php include_once 'app.php'; ?>
<?php include_once 'header.php' ?>
<body>

    <?php include_once 'navigation.php' ?>

    <div class="main container">
        <div class="jumbotron">
        <?php echo $recipe->html();?>                
        </div>
    </div> <!-- #main-container -->

    <script src="js/vendor/jquery-1.10.1.min.js"></script>    
    <script src="js/bootstrap.js"></script> 
    <script src="js/main.js"></script>

</body>
</html>
