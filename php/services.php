<?php if ($page->custom('product')): ?>
<div class="row list">
<div class="col-md-6 offset-md-3 p-3 p-md-5 mt-5 text-center">
<div class="p-3 mt-5">
<h3 class="display-4 mt-5"><strong><a class="text-dark" href="<?php echo Theme::siteUrl(); ?>">Product Services.</a></strong></h3>
<p><?php echo $page->custom('product'); ?></p>
</div>
</div>
</div>
<?php endif ?>