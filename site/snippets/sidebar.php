<aside class="sidebar">
	<div class="sidebar-block cf">
		<nav class="toggle-nav">
			<a href=""><i class="fa fa-clock-o"></i> Newest</a>
			<a class="active" href=""><i class="fa fa-star"></i> Popular</a>
		</nav>
	</div>
	<div class="sidebar-block tags cf">
		<h5><i class="fa fa-tag"></i> Explore by tag</h5>
		<?php foreach($tags as $tag): ?>
	    	<a class="tag" href="<?php echo url('twins/tag:' . $tag)?>"><?php echo html($tag) ?></a>
		<?php endforeach ?>
	</div>
	<div class="sidebar-block">
		<a href="<?= page('submit')->url() ?>" class="btn"><i class="fa fa-plus"></i> Submit</a>
	</div>
</aside>