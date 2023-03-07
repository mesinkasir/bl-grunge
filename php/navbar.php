<nav class="navbar">
<!-- active this navbar if you use post content page 
<a class="nav-link" href="<?php echo Theme::siteUrl(); ?>">Home</a> 
-->
<?php foreach ($staticContent as $staticPage): ?>
  <a class="nav-link" href="<?php echo $staticPage->permalink(); ?>"><small><?php echo $staticPage->title(); ?></small></a>
  <?php endforeach ?>
  <a class="nav-link" href="https://www.fiverr.com/creativitas/design-your-website-with-phyton-django"><small>Hire Me</small></a>		
</nav>
