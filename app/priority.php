<?php
$path = dirname(__DIR__);
require_once $path."/fun/modfyPriority.php";

$arrteste = array("um","dois","tres");
// $arrteste = addOne($arrteste,"dois");
var_dump($arrteste);
$arrteste = addOne($arrteste,"dois");
echo "<br>";
if ($arrteste == false) {
    echo "mudança inválida";
} else {
    echo "mudança válida<br>";
    var_dump($arrteste);
}
// $arrteste = subOne($arrteste,"dois");
?>