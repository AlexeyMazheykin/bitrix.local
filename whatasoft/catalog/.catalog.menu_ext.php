<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Config\Option;

global $APPLICATION;
$aMenuLinksExt = array();

$iblock_id = Option::get("whatasoft.shop", "catalog_id", 0, SITE_ID);
if($iblock_id){
  if(defined("BX_COMP_MANAGED_CACHE")){
    $GLOBALS["CACHE_MANAGER"]->RegisterTag("iblock_id_".$iblock_id);
  }
  
  $aMenuLinksExt = $APPLICATION->IncludeComponent("whatasoft:menu.sections", "", array(
    "IS_SEF" => "Y",
    "SEF_BASE_URL" => "",
    "IBLOCK_ID" => $iblock_id,
    "DEPTH_LEVEL" => "2",
    "CACHE_TYPE" => "N",
  ), false, Array('HIDE_ICONS' => 'Y'));
  
  if(defined("BX_COMP_MANAGED_CACHE")){
    $GLOBALS["CACHE_MANAGER"]->RegisterTag("iblock_id_new");
  }
}

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>