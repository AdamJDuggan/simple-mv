<?php

class ViewHelper
{
        public static function get($viewName)
        {
                ob_start();
                require __DIR__ . '/../views/' . $viewName . '.php';
                return ob_get_clean();
        }
}