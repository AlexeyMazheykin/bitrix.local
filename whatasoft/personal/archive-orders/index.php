<?
define('NEED_AUTH', true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История заказов");
$APPLICATION->SetPageProperty("content_class", "profile-page");
?><?$APPLICATION->IncludeComponent(
	"whatasoft:personal.order.list",
	"archive",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y / H:i",
		"ALLOW_INNER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEFAULT_SORT" => "STATUS",
		"HISTORIC_STATUSES" => array(
			0 => "F",
		),
		"ID" => $ID,
		"NAV_TEMPLATE" => "",
		"ONLY_INNER_FULL" => "N",
		"ORDERS_PER_PAGE" => "20",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_CANCEL" => "",
		"PATH_TO_CATALOG" => SITE_DIR."catalog/",
		"PATH_TO_COPY" => "",
		"PATH_TO_DETAIL" => "",
		"PATH_TO_PAYMENT" => "",
		"RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "0",
		),
		"SAVE_IN_SESSION" => "Y",
		"SET_TITLE" => "N",
		"STATUS_COLOR_F" => "gray",
		"STATUS_COLOR_N" => "green",
		"STATUS_COLOR_PSEUDO_CANCELLED" => "red",
		"COMPONENT_TEMPLATE" => "archive",
		"SHOW_HISTORY" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>