<?php
class Router {
    function prepareVariables($page = 'index') {
        $vars = [];
        switch ($page) {
            case 'index':
                $vars['content'] = '../templates/index.php';
                break;
            default:
                $vars['content'] = '../templates/index.php';
        }
        return $vars;
    }
    function getUrl() {
        $url_array = explode('/',$_SERVER['REQUEST_URI']);
        if($url_array[1] == "") {
            $page_name = "index";
        } else {
            $page_name = $url_array[1];
        }
        return $page_name;
    }
}
