<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?><?$APPLICATION->IncludeComponent(
  "whatasoft:catalog.favorite",
  "",
  Array(
    "ITEMS_COUNT" => 20,
  )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>