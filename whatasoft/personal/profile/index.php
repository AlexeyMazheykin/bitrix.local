<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мой профиль");
$APPLICATION->SetPageProperty("content_class", "profile-page");
?><?$APPLICATION->IncludeComponent(
  "whatasoft:user.profile",
  "",
  Array(
    "CHECK_RIGHTS" => "N",
    "SEND_INFO" => "N",
    "SET_TITLE" => "N",
    "USER_PROPERTY" => array()
  )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>