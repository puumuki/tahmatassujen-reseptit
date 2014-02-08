<?php include_once 'app.php'; ?>
<?php include_once 'header.php' ?>

<?php include_once 'navigation.php' ?>

<div class='main container'>
	<div class='jumbotron'>
	<?php echo $recipe->html();?>                
	</div>
</div> <!-- #main-container -->

<?php  include_once 'footer.php' ?>
