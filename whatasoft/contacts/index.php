<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("body_class", "wide");
$APPLICATION->SetPageProperty("show_sidebar", "N");
$APPLICATION->SetTitle("Контакты");
?><?$APPLICATION->IncludeComponent(
  "whatasoft:map.yandex.list", 
  ".default", 
  array(
    "BEHAVIORS" => array("DBLCLICK_ZOOM","DRAGGING"),
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "CONTROLS" => array("TYPE","ZOOM"),
    "DETAIL_URL" => "",
    "FILTER_NAME" => "",
    "IBLOCK_ID" => "11",
    "IBLOCK_TYPE" => "whatasoft_shop_content",
    "INCLUDE_SUBSECTIONS" => "Y",
    "INIT_MAP_TYPE" => "MAP",
    "ITEMS_LIMIT" => "100",
    "MAP_AUTO_SCALE_CENTER" => "Y",
    "MAP_BALLOON_COLOR" => "",
    "MAP_BALLOON_COORDS" => "PROPERTY_COORDS",
    "MAP_BALLOON_DETAIL_IMG" => "FIELD_PREVIEW_PICTURE",
    "MAP_BALLOON_LINK_SHOW" => "N",
    "MAP_BALLOON_NAME" => "FIELD_NAME",
    "MAP_BALLOON_PROPERTIES" => array("ADDRESS","SCHEDULE",""),
    "MAP_BALLOON_TEXT" => "FIELD_PREVIEW_TEXT",
    "MAP_BALLOON_TITLE" => "FIELD_NAME",
    "MAP_CENTER" => "55.75349011273107,37.62307626939214",
    "MAP_CLUSTER" => "Y",
    "MAP_CLUSTER_CONTENT_LEFT_COLUMN_WIDTH" => "120",
    "MAP_CLUSTER_CONTENT_WIDTH" => "400",
    "MAP_CLUSTER_SIMPLE" => "N",
    "MAP_COLOR" => "528DCA",
    "MAP_HEIGHT" => "400px",
    "MAP_ICON" => "",
    "MAP_ID" => "",
    "MAP_LIST_HEADER" => "Наши офисы",
    "MAP_LIST_SHOW" => "Y",
    "MAP_SCALE" => "14",
    "MAP_WIDTH" => "100%",
    "MESSAGE_404" => "",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "SET_STATUS_404" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "ID",
    "SORT_ORDER1" => "ASC",
    "SORT_ORDER2" => "DESC",
    "USE_ELEMENT_ICON" => "N",
    "COMPONENT_TEMPLATE" => ".default",
    "COMPOSITE_FRAME_MODE" => "A",
    "COMPOSITE_FRAME_TYPE" => "AUTO",
    "USE_SECTION_ICON" => "N"
  ),
  false
);?>

<div class="contacts-columns">
  <div class="column">
    <?$APPLICATION->IncludeComponent(
      "bitrix:main.include",
      "",
      Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."include/page_contacts.php"
      )
    );?>
  </div>
  <div class="column">
    <?$APPLICATION->IncludeComponent(
      "whatasoft:form",
      "feedback",
      Array(
        "IBLOCK_ID" => "19",
        "IBLOCK_TYPE" => "whatasoft_shop_forms",
        "FORM_TITLE" => "Обратная связь",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "IS_PLACEHOLDER" => "Y",
        "SEND_BUTTON_CLASS" => "btn",
        "SEND_BUTTON_NAME" => "",
        "SUCCESS_MESSAGE" => "",
        "SUCCESS_URL" => "",
        "USE_CAPTCHA" => "N",
        "USER_CONSENT" => "Y",
        "USER_CONSENT_ID" => "1",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "Y"
      )
    );?>
  </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>