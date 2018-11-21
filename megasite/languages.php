<form action="" method="GET">
	<p>html<input type="checkbox" name="lang[]" value="html"></p>
	<p>css<input type="checkbox" name="lang[]" value="css"></p>
	<p>php<input type="checkbox" name="lang[]" value="php"></p>
	<p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
	<input type="submit">
</form>

<?php
	if(isset($_REQUEST['lang']))
	{
		echo 'Вы знаете: ' . implode(', ', $_REQUEST['lang']);
	}
?>