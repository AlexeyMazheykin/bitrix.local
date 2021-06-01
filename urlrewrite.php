<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/whatasoft/info/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/whatasoft/info/news/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/whatasoft/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/whatasoft/services/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/whatasoft/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/whatasoft/articles/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/whatasoft/catalog/#',
    'RULE' => '',
    'ID' => 'whatasoft:catalog',
    'PATH' => '/whatasoft/catalog/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/whatasoft/promo/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/whatasoft/promo/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/whatasoft/lp/#',
    'RULE' => '',
    'ID' => 'whatasoft:landing',
    'PATH' => '/whatasoft/lp/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
