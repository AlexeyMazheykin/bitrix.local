<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Сравнение товаров");
$APPLICATION->SetTitle("Сравнение товаров");
?>
<?$APPLICATION->IncludeComponent(
  "whatasoft:catalog.compare.list",
  "",
  Array(
    "IBLOCK_ID" => "3",
    "IBLOCK_TYPE" => "catalog",
    "GROUP_BY_SECTION" => "Y",
    "PROPERTY_CODE" => array("DEMO_BRAND","DEMO_WARRANTY","DEMO_COUNTRY","DEMO_TYPE","DEMO_COLOR","DEMO_SIZE","DEMO_POWER","DEMO_MATERIAL","DEMO_AUDIOFORMAT","DEMO_RADIOTUNER","DEMO_CDDISC","DEMO_ROMMEMORY","DEMO_EXTERNALMEMORY","DEMO_NFC","DEMO_BLUETOOTH","DEMO_DISPLAY","DEMO_RECIPESBOOK","DEMO_DELAYEDSTART","DEMO_CORE","DEMO_HDD","DEMO_WEIGHT","DEMO_PLATFORM","DEMO_BITRIX",""),
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "ASC"
  )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>