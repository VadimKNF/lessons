<p style="text-align:center;">Введите год</p>
<form style="text-align:center;" action="" method="GET">
	<input type="number" name="year" placeholder="введите год">
	<input type="submit" value="проверить">
</form>
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
