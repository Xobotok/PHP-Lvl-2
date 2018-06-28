<?
include_once '../engine/router.php';

$router = new Router();
$page_name = $router->getUrl();
$content = $router->prepareVariables($page_name);

include_once '../templates/base.php';