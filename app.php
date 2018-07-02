<?
include_once '../engine/router.php';
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();


$page_name = Router::getUrl();
$content = Router::prepareVariables($page_name);

include_once '../templates/base.php';
?>


