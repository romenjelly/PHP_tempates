<?php ob_start(); ?>



<!--
	Your content here.
-->
<h2>Page '<? echo $_GET[PAGE_VAR] ?>' not found.</h2>
<a href="?<? echo PAGE_VAR; ?>">Go back to the main page</a>



<?php
	$title   = 'Pge not found';
	$content = ob_get_clean();

	require('default.php');
?>	