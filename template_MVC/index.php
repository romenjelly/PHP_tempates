<?php
	define('PAGE_VAR', 'p');
	define('PAGE_MAIN', 'main');
	require('model.php');
	
	
	$page = "";
	if (isset($_GET[PAGE_VAR])) {
		$page = $_GET[PAGE_VAR];
		if ($page == "") {
			$page = PAGE_MAIN;
		}
	} else {
		$page = PAGE_MAIN;
	}
	
	$views =
		[
			PAGE_MAIN => "mainView",
			"second"  => "secondaryView",
			"third"   => "tertiaryView"
		];
	
	if (array_key_exists($page, $views)) {
		getView($views[$page]);
	} else {
		getView('not_found');
	}
?>