<?php snippet('header') ?>

<main id="main" class="main main-with-sidebar" role="main">
	<div class="mainbar mainbar-padding animate fadeIn">
		<div class="twin-entries cf">
			<?php foreach($twins as $twin): ?>
				<?php $tune1 = $twin->find('tune-1') ?>
				<?php $tune2 = $twin->find('tune-2') ?>
				<?php $hasArt = $tune1->hasImages() && $tune2->hasImages() ?>
				<div class="twin-entry cf <?php if(!$hasArt) echo 'no-art' ?>">
					<a href="<?= $twin->url() ?>" class="twin-entry__art">
						<div class="albums albums-hover cf">
							<div class="album">
								<div class="album-art" <?php if($tune1->hasImages()): ?>style="background-image: url(<?= thumb($tune1->images()->first(), array('width' => 400))->url() ?>)"<?php endif ?>></div>
							</div>
							<div class="album">
								<div class="album-art" <?php if($tune2->hasImages()): ?>style="background-image: url(<?= thumb($tune2->images()->first(), array('width' => 400))->url() ?>)"<?php endif ?>></div>
							</div>
						</div>
					</a>
					<div class="twin-entry__text">
						<h3 class="twin-entry__title"><a href="<?= $twin->url() ?>"><?= $twin->title() ?></a></h3>
						<?php if(!$twin->excerpt()->empty()): ?>
							<div class="twin-entry__excerpt"><?= $twin->excerpt()->kirbytext() ?></div>
						<?php endif ?>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<div class="end-of-twins">
			That's it! You scrolled past all <?= $site->find('twins')->children()->visible()->count() ?> twins. <a href="<?= page('submit')->url() ?>">Submit your own to the collection.</a>
		</div>
	</div>
	<?php snippet('sidebar') ?>
</main>

<?php snippet('footer') ?>