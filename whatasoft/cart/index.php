<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("body_class", "wide");
$APPLICATION->SetPageProperty("show_sidebar", "N");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent(
  "whatasoft:basket",
  "",
  Array(
    "PATH_TO_BASKET" => SITE_DIR."cart/",
    "PATH_TO_ORDER" => SITE_DIR."cart/order/",
    "SHOW_NUM_PRODUCTS" => "Y",
    "SHOW_TOTAL_PRICE" => "Y"
  )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>