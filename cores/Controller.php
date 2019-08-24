<?php

class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        $cache = new Cache();

        if (file_exists('caches/' . $viewName . '.cache') && $cache->is_valido('caches/' . $viewName . '.cache')) {
            include 'caches/' . $viewName . '.cache';
        } else {
            ob_start();
            include 'views/' . $viewName . '.php';
            $html = ob_get_contents();
            ob_end_clean();
            file_put_contents('caches/' . $viewName . '.cache', $html);
            echo $html;
        }
    }

    public function loadTemplate($viewName, $viewData = array()) {

        $cache = new Cache();

        if (file_exists('caches/' . $viewName . '.cache') && $cache->is_valido('caches/' . $viewName . '.cache')) {
            include 'caches/' . $viewName . '.cache';
        } else {
            ob_start();
            include 'views/template.php';
            $html = ob_get_contents();
            ob_end_clean();
            file_put_contents('caches/' . $viewName . '.cache', $html);
            echo $html;
        }
    }
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

}
