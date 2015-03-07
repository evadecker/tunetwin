<?php snippet('header') ?>

	<main id="main" class="main" role="main">
		<div class="wrapper animate fadeIn">
			<h1 class="page-title"><?= $page->title() ?></h1>
    		<article>
    			<?php echo $page->text()->kirbytext() ?>
			</article>
		</div>
	</main>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bigfoot.min.js"></script>
<script type="text/javascript">
	$.bigfoot();
</script>

<?php snippet('footer') ?>