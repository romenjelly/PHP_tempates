<?php ob_start(); ?>



<!--
	Your content here.
-->
<h2>Main Page</h2>
<a href="?<? echo PAGE_VAR; ?>=second">Go to the second page</a>
<br/>
<a href="?<? echo PAGE_VAR; ?>=third">Go to the third page</a>



<?php
	$title   = 'Main Page';
	$content = ob_get_clean();

	require('default.php');
?>	