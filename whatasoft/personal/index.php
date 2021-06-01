<?
define('NEED_AUTH', true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>
<div class="profile-page">
  <h3>Рады приветствовать вас<?=($USER->GetFirstName() == '' ? '' : (', ' . $USER->GetFirstName()))?>.</h3>
  <p>Вы зарегистрированы в системе под логином &laquo;<?=$USER->GetLogin()?>&raquo;</p>
  <?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "personal",
    array(
      "ROOT_MENU_TYPE" => "right",
      "MENU_CACHE_TYPE" => "N",
      "MENU_CACHE_TIME" => "3600",
      "MENU_CACHE_USE_GROUPS" => "Y",
      "MENU_CACHE_GET_VARS" => array(
      ),
      "MAX_LEVEL" => "1",
      "CHILD_MENU_TYPE" => "right",
      "USE_EXT" => "N",
      "DELAY" => "N",
      "ALLOW_MULTI_SELECT" => "N"
    ),
    false
  );?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
