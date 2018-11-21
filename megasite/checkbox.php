<form action="" method="GET">
	<input type="text" name="name">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>

<?php

	
if (isset($_REQUEST['name']))
{
	$name = strip_tags($_REQUEST['name']);
}
if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
		echo 'goodbye '.$name;
	}

	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
		echo 'hello '.$name;
	}
	?>