<?php include(THEME_DIR_PHP.'header.php'); ?>
<?php include(THEME_DIR_PHP.'custom.php'); ?>
<div class="row content">
<?php Theme::plugins('pageBegin'); ?>
<?php if ($page->coverImage()): ?>
<div class="col-md-10 offset-md-1 rounded p-3 p-md-5">
<img class="img-fluid ser" width="100%" src="<?php echo $page->coverImage(); ?>"/>
</div>
<?php endif ?>
<div class="col-md-10 offset-md-1 p-3 p-md-5">
<h1><strong><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h1>
<?php if ($page->description()): ?>
<h2><span><?php echo $page->description(); ?></span></h2>
<?php endif ?>
<?php echo $page->content(); ?>
</div>
<?php Theme::plugins('pageEnd'); ?>
</div>

