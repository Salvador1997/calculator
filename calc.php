<?php 
	$startDeposit = $_POST['StartDep'];
	$depositReplen = $_POST['Add'];
	$termOfDeposit = $_POST['Term'];
	$date = $_POST['Date'];

	$daysy = date('L', strtotime($date))?366:365;//определяем кол-во дней в данном году
	$dateSplit = explode('.', $date);

	$result = $startDeposit;
	for ($i=0; $i < $termOfDeposit; $i++) {
		$daysn = date('t', mktime(0, 0, 0, $dateSplit[1], $dateSplit[0], $dateSplit[2]));//определяем кол-во дней в данном месяце
		$result = $result + ($result + $depositReplen) * $daysn * (10 /$daysy);
		$dateSplit[1]++;//прибавляем к месяцу единицу
		if ($dateSplit[1] > 12) {
			$dateSplit[1] = 1;
		}
	}
	echo round($result);
?>