<?php ob_start(); ?>



<!--
	Your content here.
-->
<h2>Third Page</h2>
<a href="?<? echo PAGE_VAR; ?>">Go to the main page</a>



<?php
	$title   = 'Third Page';
	$content = ob_get_clean();

	require('default.php');
?>	