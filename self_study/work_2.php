<?php
$code = "<p><strong>Die</strong> This <b><i>Terrible World!</i></b></p>";
$pattern = "/<[^>]+>/";
$tags = [];
$result = preg_match_all($pattern, $code, $tags);
print($result ? htmlspecialchars(implode(', ', $tags[0])) : "Теги НЕ Найдены");
?>
