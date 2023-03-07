<?php if ($page->custom('what_we_do')): ?>
<div class="row favorit">
<div class="col-md-8 offset-md-2 p-3 p-md-5 mt-5 text-center">
<div class="p-3 mt-5">
<h3 class="display-4 mt-5"><strong><a class="text-dark" href="<?php echo Theme::siteUrl(); ?>">What We Do.</a></strong></h3>
<p><?php echo $page->custom('what_we_do'); ?></p>
</div>
</div>
</div>
<?php endif ?>