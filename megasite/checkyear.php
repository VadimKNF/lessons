<!DOCTYPE html>
<html>
<body>
<form action="" method="GET">
	<input type="number" name="year" placeholder="введите год">
	<input type="submit" value="проверить">
</form>
<script src="three.js"></script>
</body>
</html>
<?php


if(isset($_REQUEST['year']))
{
	$year = strip_tags($_REQUEST['year']);


function checkYear($year)
{
	if(($year % 4 == 0 && $year % 100 != 0 )|| $year % 400 == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

if(checkYear($year))
{
	echo 'високосный';
}	
else
{
	echo 'не високосный';
}
}
?>