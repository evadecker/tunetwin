<?php snippet('header') ?>

	<main id="main" class="main" role="main">
		<div class="wrapper animate fadeIn">
			<h1 class="page-title"><?= $page->title() ?></h1>
			<article>
				<?php echo $page->text()->kirbytext() ?>
			</article>
		</div>
	</main>

<?php snippet('footer') ?>