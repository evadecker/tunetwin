<?php snippet('header') ?>

<?php echo js(array('assets/js/masonry.min.js')) ?>

<main id="main" class="main main-with-sidebar" role="main">
	<div class="mainbar mainbar-padding">
		<div class="archive">
			<?php foreach($twins as $twin): ?>
				<div class="archive-post">
					<div class="archive-date"><?= $twin->date('d M') ?></div>
					<div class="archive-title"><a href="<?= $twin->url() ?>"><?= $twin->title()->html() ?></a></div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<?php snippet('sidebar') ?>
</main>

<?php snippet('footer') ?>