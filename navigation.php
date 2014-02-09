<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Avaa menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="pawlogo" src="img/paw.png" />
      <a class="navbar-brand" href="index.php">Tahmatassujen reseptit</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="<?php echo page_active('recipelist.php', 'index.php'); ?>"><a href="recipelist.php">Reseptit</a></li>            
        <li class="<?php echo page_active('about.php'); ?>" ><a href="about.php">Info</a></li>            
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>