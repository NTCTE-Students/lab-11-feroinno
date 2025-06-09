<?php
$card = "4758 1468 2549 3121";
$pattern = "/\b\d{4} \d{4} \d{4} \d{4}\b/";
$result = preg_match($pattern, $card);
print($result ? "Номер Карты ''$card'' Корректный" : "Номер Карты ''$card'' НЕ Корректный");
?>
