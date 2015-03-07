<?php snippet('header') ?>

<?= js('assets/js/masonry.min.js') ?>

<main id="main" class="main main-with-sidebar" role="main">
	<div class="mainbar mainbar-padding animate fadeIn">
		<div class="cards cf js-masonry" data-masonry-options='{ "itemSelector": ".card-wrapper" }'>
			<div class="card-sizer"></div>
			<?php foreach($twins as $twin): ?>
				<?php $tune1 = $twin->find('tune-1') ?>
				<?php $tune2 = $twin->find('tune-2') ?>
				<?php $hasArt = $tune1->hasImages() && $tune2->hasImages() ?>
				<div class="card-wrapper">
					<div class="card <?php if(!$hasArt) echo('no-art') ?>">
						<?php if($hasArt): ?>
							<a href="<?= $twin->url() ?>" class="card-link">
								<div class="albums albums-hover cf">
									<div class="album">
										<div class="album-art" <?php if($tune1->hasImages()): ?>style="background-image: url(<?= thumb($tune1->images()->first(), array('width' => 400))->url() ?>)"<?php endif ?>></div>
									</div>
									<div class="album">
										<div class="album-art" <?php if($tune2->hasImages()): ?>style="background-image: url(<?= thumb($tune2->images()->first(), array('width' => 400))->url() ?>)"<?php endif ?>></div>
									</div>
								</div>
							</a>
						<?php endif ?>
						<div class="card-info">
							<h3 class="card-title"><a href="<?= $twin->url() ?>"><?= $twin->title() ?></a></h3>
							<?php if(!$twin->text()->empty()): ?>
								<p class="card-excerpt"><?= $twin->text()->excerpt(200) ?></p>
							<?php endif ?>
							<div class="card-stats cf">
								<div class="card-stat"><time datetime="<?php echo $twin->date('c') ?>"><?= $twin->date('M j') ?></time></div>
								<div class="card-stat">823</div>
								<div class="card-stat disqus-comment-count" data-disqus-url="<?= $twin->url() ?>"></div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<div class="end-of-twins">
			That's it! You scrolled past all <?= $site->find('twins')->children()->visible()->count() ?> twins. <a href="submit">Submit your own to the collection.</a>
		</div>
	</div>
	<?php snippet('sidebar') ?>
</main>

<?php snippet('disqus-comments') ?>
<?php snippet('footer') ?>