<?php
$date = "20.04.1889";
$pattern = "/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[0-2])\.(\d{4})$/";
$result = preg_match($pattern, $date);
print($result ? "Дата ''$date'' Корректна" : "Дата ''$date'' НЕ Корректна");
?>
