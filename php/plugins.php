<div class="col-md-12 p-3 p-md-5">
<div class="row p-md-5">
<?php Theme::plugins('siteSidebar') ?>
<?php foreach (Theme::socialNetworks() as $key=>$label): ?><a class="col-md-3 p-1 col-4 text-dark mt-1" href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?>.</a><?php endforeach; ?>
<?php if (Theme::rssUrl()): ?><a class="col-md-3 p-1 col-4 text-dark" mt-1 href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a></li><?php endif; ?>
</div>
</div>