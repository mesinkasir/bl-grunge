<?php if ($page->custom('about_us')): ?>
<div class="row fitur">
<div class="col-md-8 offset-md-2 p-3 p-md-5 mt-5 text-center">
<div class="p-3 mt-5">
<h3 class="display-4 mt-5"><strong><a class="text-dark" href="<?php echo Theme::siteUrl(); ?>">About Us. </a></strong></h3>
<p><?php echo $page->custom('about_us'); ?></p>
</div>
</div>
</div>
<?php endif ?>