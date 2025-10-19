<?php
declare(strict_types=1);
$day = 3;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция match</title>
</head>
<body>
	<h1>Конструкция match</h1>
	<?php
	$result = match($day) {
	    $day >= 1 && $day <= 5 => "Это рабочий день",
	    $day >= 6 && $day <= 7 => "Это выходной день",
	    default => "Неизвестный день"
	};
	echo $result;
	?> 
</body>
</html>