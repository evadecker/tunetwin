<!DOCTYPE html>
<html lang="en">
<head>

	<?php if($page->isHomepage()): ?>
		<title><?= html($site->title()) ?></title>
		<meta property="og:title" content="<?= html($site->title()) ?>" />
	<?php else: ?>
		<title><?= html($page->title()) ?> &middot; <?= html($site->title()) ?></title>
		<meta property="og:title" content="<?= html($page->title()) ?> &middot; <?= html($site->title()) ?>" />
	<?php endif ?>
	<meta name="description" property="og:description" content="<?= $site->description()->html() ?>" />
	<meta name="keywords" content="<?= $site->keywords()->html() ?>" /> 

	<meta charset="utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta property="og:url" content="<?= $site->url() ?>" />

	<link rel="icon" href="favicon.ico" />
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<?= css('assets/styles/main.css') ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<?= js(array('assets/js/jquery.smoothState.min.js', 'assets/js/functions.min.js')) ?>
	<script src="//use.typekit.net/qsi3wmr.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

</head>
<body>

	<header class="header cf" role="banner">
		<a class="logo" href="<?php echo url() ?>">
			<?= $site->title(); ?>
		</a>
		<nav class="menu" role="navigation">
		    <?php foreach($pages->visible() as $p): ?><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->slug() ?></a><?php endforeach ?>
		</nav>
		<?php snippet('search') ?>
	</header>