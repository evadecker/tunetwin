<?php

return function($site, $pages, $page) {

	$twins = $site->find('twins')->children()->visible()->flip();

	$tags = $twins->pluck('tags', ',', true);

	if($tag = urldecode(param('tag'))) {
		$twins = $twins->filterBy('tags', $tag, ',');
	}

	return compact('twins', 'tags');

};

?>