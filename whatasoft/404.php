<?
if(!defined("ERROR_404")){
  include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
}

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("body_class", "404 wide");
$APPLICATION->SetPageProperty("show_sidebar", "N");
$APPLICATION->SetTitle("");
?>
<div class="error-404-banner">
  <b>404</b>
  <div class="text">Страница не найдена</div>
</div>

<div class="error-404-text">
  <div class="description">
    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
      "AREA_FILE_SHOW" => "file",
      "PATH" => SITE_DIR."include/page_404.php"
      ),
      false
    );?>
  </div>
  <?$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
      "LEVEL" => "3",
      "COL_NUM" => "2",
      "SHOW_DESCRIPTION" => "N",
      "SET_TITLE" => "N",
      "CACHE_TIME" => "3600",
    ),
    false
  );?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>