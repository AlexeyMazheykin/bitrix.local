<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Статьи");
?><?$APPLICATION->IncludeComponent(
  "bitrix:news",
  "articles",
  Array(
    "IBLOCK_ID" => "2",
    "IBLOCK_TYPE" => "whatasoft_shop_content",
    "ADD_ELEMENT_CHAIN" => "Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "BROWSER_TITLE" => "-",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "N",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "COMPOSITE_FRAME_MODE" => "A",
    "COMPOSITE_FRAME_TYPE" => "AUTO",
    "DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
    "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
    "DETAIL_DISPLAY_TOP_PAGER" => "N",
    "DETAIL_FIELD_CODE" => array("",""),
    "DETAIL_PAGER_SHOW_ALL" => "N",
    "DETAIL_PAGER_TEMPLATE" => "",
    "DETAIL_PAGER_TITLE" => "Статьи",
    "DETAIL_PROPERTY_CODE" => array("",""),
    "DETAIL_SET_CANONICAL_URL" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FILE_404" => SITE_DIR."404.php",
    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "LIST_ACTIVE_DATE_FORMAT" => "j F Y",
    "LIST_FIELD_CODE" => array("",""),
    "LIST_PROPERTY_CODE" => array("",""),
    "MESSAGE_404" => "",
    "META_DESCRIPTION" => "-",
    "META_KEYWORDS" => "-",
    "NEWS_COUNT" => "6",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Статьи",
    "PREVIEW_TRUNCATE_LEN" => "",
    "SEF_FOLDER" => "/whatasoft/articles/",
    "SEF_MODE" => "Y",
    "SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/","news"=>"","section"=>""),
    "SET_LAST_MODIFIED" => "N",
    "SET_STATUS_404" => "Y",
    "SET_TITLE" => "Y",
    "SHOW_404" => "Y",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "ID",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "DESC",
    "USE_CATEGORIES" => "N",
    "USE_FILTER" => "N",
    "USE_PERMISSIONS" => "N",
    "USE_RATING" => "N",
    "USE_REVIEW" => "N",
    "USE_RSS" => "N",
    "USE_SEARCH" => "N"
  )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>