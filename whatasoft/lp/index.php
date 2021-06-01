<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Лендинг");
?>
<?$APPLICATION->IncludeComponent(
  "whatasoft:landing",
  "",
  Array(
    "BROWSER_TITLE" => "",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "FILE_404" => SITE_DIR."404.php",
    "FORM_IBLOCK_ID" => "22",
    "FORM_IBLOCK_TYPE" => "whatasoft_shop_forms",
    "FORM_ONECLICK_IBLOCK_ID" => "23",
    "FORM_ONECLICK_IBLOCK_TYPE" => "whatasoft_shop_forms",
    "IBLOCK_ID" => "16",
    "IBLOCK_TYPE" => "whatasoft_shop_content",
    "MESSAGE_404" => "",
    "META_DESCRIPTION" => "",
    "META_KEYWORDS" => "",
    "PROPERTY_CODE" => array("",""),
    "SEF_FOLDER" => "/whatasoft/lp/",
    "SEF_MODE" => "Y",
    "SEF_URL_TEMPLATES" => array("element"=>"#ELEMENT_CODE#/"),
    "SET_STATUS_404" => "Y",
    "SHOW_404" => "Y",
    "USER_CONSENT" => "Y",
    "USER_CONSENT_ID" => "1",
    "USER_CONSENT_IS_CHECKED" => "Y",
    "USER_CONSENT_IS_LOADED" => "N"
  )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>