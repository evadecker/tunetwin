<?php snippet('header') ?>

	<main id="main" class="main" role="main">
		<div class="wrapper animate fadeIn">
		    <?php if($image = $page->image('header.jpg')): ?>
				<img class="page-image" src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
			<?php endif ?>
			<h1 class="page-title"><?= $page->title() ?><span class="page-subtitle"><?= $page->subtitle() ?></span></h1>
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