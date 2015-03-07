<aside class="sidebar animate slideInRight">
	<div class="sidebar-block tags cf">
		<h5>Explore by tag</h5>
		<?php foreach($tags as $tag): ?>
	    	<a class="tag" href="<?php echo url('twins/tag:' . $tag)?>"><?php echo html($tag) ?></a>
		<?php endforeach ?>
	</div>
	<div class="sidebar-stats cf">
		<div class="sidebar-stat">
			<h5>Twins</h5>
			<div class="stat-number"><?= $site->find('twins')->children()->visible()->count() ?></div>
		</div>
		<div class="sidebar-stat">
			<h5>Comments</h5>
			<div class="stat-number">666</div>
		</div>
	</div>
</aside>