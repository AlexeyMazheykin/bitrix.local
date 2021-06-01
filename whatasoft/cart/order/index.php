<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("body_class", "wide");
$APPLICATION->SetPageProperty("show_sidebar", "N");
$APPLICATION->SetTitle("Оформление заказа");
?><?$APPLICATION->IncludeComponent(
  "whatasoft:order",
  "",
  Array(
    "PATH_TO_BASKET" => SITE_DIR."cart/",
    "USER_CONSENT" => "Y",
    "USER_CONSENT_ID" => "1",
    "USER_CONSENT_IS_CHECKED" => "Y",
    "USER_CONSENT_IS_LOADED" => "N"
  )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>