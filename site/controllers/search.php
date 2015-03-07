<?php 

return function($site, $pages, $page) {

	$query   = get('q');
	$results = page('twins')->index()->visible()->search($query, 'title|text|tags');

	return array(
		'query'   => $query,
		'results' => $results, 
	);

};

?>