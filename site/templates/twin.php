<?php snippet('header') ?>

<?php echo js(array(
	'assets/js/soundmanager2-nodebug.js',
	'assets/js/excanvas.js',
	'assets/js/berniecode-animator.js',
	'assets/js/360player.js'),
	$async = true
) ?>

<main id="main" class="main main-with-sidebar" role="main">
	<div class="mainbar">
		<?php $tunes = $page->children() ?>
		<div class="twin cf">
			<div class="albums cf">
				<?php foreach($tunes as $tune): ?>
					<div class="album">
						<div class="album-art" <?php if($tune->hasImages()): ?>style="background-image: url(<?= $tune->images()->first()->url() ?>)"<?php endif ?>></div>
					</div>
				<?php endforeach ?>
			</div>
			<div class="twin-title"><h1><?= $page->title()->html() ?></h1></div>
			<?php foreach($tunes as $tune): ?>
				<div class="tune">
					<div class="tune-info">
						<?php if($tune->hasAudio()): ?>
							<div class="player">
								<div class="ui360">
									<a href="<?= $tune->audio()->first()->url() ?>">Play <?= $tune->title()->html() ?></a>
								</div>
							</div>
						<?php endif ?>
						<h3 class="tune-title"><?= $tune->title()->html() ?></h3>
						<div class="tune-details">
							<div class="tune-from"><?= $tune->work()->html() ?></div>
							<div>
								<span class="tune-composer"><?= $tune->composer()->html() ?></span> &middot; <span class="tune-year"><?= $tune->year()->html() ?></span>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>

		<?php if(!$page->text()->empty()): ?>
			<article class="twin-text">
				<?= $page->text()->kirbytext() ?>
			</article>
		<?php endif ?>

		<div class="comments">
			<?php snippet('disqus', array('disqus_shortname' => 'tunetwin')) ?>
		</div>
	</div>
	<aside class="sidebar">
		<div class="sidebar-block cf next">
			<h5>Next</h5>
			<?php if($page->hasPrev()): ?>
				<a class="next-twin" href="<?= $page->prev()->url() ?>"><?= $page->prev()->title() ?>&nbsp;&rarr;</a>
			<?php else: ?>
				<a class="next-twin" href="<?= $site->find('twins')->children()->not($page->uid())->shuffle()->first()->url() ?>">You found the oldest upload! Click for a random twin.</a>
			<?php endif ?>
		</div>
		<?php if(!$page->tags()->empty()): ?>
			<div class="sidebar-block cf tags">
				<h5>Tagged</h5>
			    <?php foreach($page->tags()->split(',') as $tag): ?><a class="tag" href="<?= url('twins/tag:' . $tag)?>"><?= html($tag) ?></a><?php endforeach ?>
			</div>
		<?php endif ?>
		<div class="sidebar-stats cf">
			<div class="sidebar-stat twin-views">
				<h5>Views</h5>
				<div class="stat-number">999</div>
			</div>
			<div class="sidebar-stat twin-postdate">
				<h5>Posted</h5>
				<div class="stat-number">
					<time datetime="<?php echo $page->date('c') ?>"><?= $page->date('j M Y') ?></time>
				</div>
			</div>
		</div>
	</aside>
</main>

<?php snippet('footer') ?>