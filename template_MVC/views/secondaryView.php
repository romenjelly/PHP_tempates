<?php ob_start(); ?>



<!--
	Your content here.
-->
<h2>Second Page</h2>
<a href="?<? echo PAGE_VAR; ?>">Go to the main page</a>



<?php
	$title   = 'Second Page';
	$content = ob_get_clean();

	require('default.php');
?>	