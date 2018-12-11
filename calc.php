
<h3>Калькулятор доходности банковского вклада с индексацией</h3>
<form>
	<input type="number" name="bank" required placeholder="первоначальный вклад"><br><br>
	<input type="number" name="month" required placeholder="срок в месяцах"><br><br>
	<input type="number" name="percent" required placeholder="ежегодный процент"><br><br>
	<input type="submit">
</form>

<?php
if (isset($_GET['bank']) and isset($_GET['month']) and isset($_GET['percent']))
{
	$bank = $_GET['bank'];
	$month = $_GET['month'] * 30;
	$percent = $_GET['percent'] / 365 / 100;
		
			for ($i = 1; $i <= $month ; $i++)
			{
				$bank = $bank + $bank * $percent;
				echo $i.'й день '. round($bank, 2).'<br>';
			}
}



