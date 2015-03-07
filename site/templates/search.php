<?php snippet('header') ?>

	<main id="main" class="main" role="main">
		<div class="wrapper">
			<h1 class="page-title"><?= $page->title() ?></h1>
			<article>
				<ul>
				  <?php foreach($results as $result): ?>
				  <li>
				    <a href="<?php echo $result->url() ?>">
				      <?php echo $result->title()->html() ?>
				    </a>
				  </li>
				  <?php endforeach ?>
				</ul>
			</article>
		</div>
	</main>

<?php snippet('footer') ?>