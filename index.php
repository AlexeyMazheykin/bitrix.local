<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>content<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"",
Array()
);?><?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>