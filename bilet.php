<p>Введите номер билета</p>
<form style="text-align:center;" action="" method="GET">
	<input type="number" name="Билет" minlength="6" maxlength="6">
	<input type="submit">
</form>


<?php
if(isset($_REQUEST['Билет']))
{
	$num = strip_tags($_REQUEST['Билет']);
	echo bilet($num);
}

function bilet($num)
{

        if (strlen($num) != 6)
        {
            echo 'номер билета должен состоять из 6 цифр';
            return;
        }


	function drob($num)
	{
	$arr = str_split($num, 3);
	if(array_sum(str_split($arr[0],1)) == array_sum(str_split($arr[1],1)))
	{
		return true;
	}
		else
		{
			return false;
		}
	}


	if (drob($num))
	{
		echo 'счастливый билет';

	}
	else
	{
		echo 'обычный билет';

	}

}

?>
