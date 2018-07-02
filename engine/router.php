<?php
class Router {
    static function prepareVariables($page = 'index') {
        $vars = [];
        switch ($page) {
            case 'index':
                $vars['content'] = '../templates/index.php';
                break;
            case 'gallery':
                $url_array = explode("/", $_SERVER['REQUEST_URI']);
                if ($url_array[2]){
                    $vars['content'] = '../templates/gallery_item.tmpl';
                    $vars['image'] = $url_array[2];
                } else {
                    $vars['content'] = '../templates/gallery.tmpl';
                }

                break;
            default:
                $vars['content'] = '../templates/index.php';
        }
        return $vars;
    }
    static function getUrl() {
        $url_array = explode('/',$_SERVER['REQUEST_URI']);
        if($url_array[1] == "") {
            $page_name = "index";
        } else {
            $page_name = $url_array[1];
        }
        return $page_name;
    }
}
