<?php include_once 'app.php'; ?>
<?php include_once 'header.php' ?>
<body>

<?php include_once 'navigation.php' ?>

<div class="list-group">
  	<?php foreach ($recipes as $rep): ?>
	 <a href='index.php?recipe=<?= $rep->hash() ?>' 
	 	class='list-group-item <?= active($rep) ?>' ><?= $rep->title() ?></a>
	<?php endforeach; ?>
</div>

<?php include_once 'footer.php' ?>