<?php if ($page->custom('intro')): ?>
<div class="row intro">
<div class="col-md-8 offset-md-2 p-3 p-md-5 mt-5 text-center">
<div class="p-3 mt-5">
<h3 class=" mt-5 display-4"><strong><a class="text-dark" href="<?php echo Theme::siteUrl(); ?>">Introduction.</a></strong></h3>
<p><?php echo $page->custom('intro'); ?></p>
</div>
</div>
</div>
<?php endif ?>