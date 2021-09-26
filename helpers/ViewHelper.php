<?php
require(__DIR__ . '/../config.php');

class ViewHelper
{
    /**
     * Generic view getter
     *
     * @param string $viewName
     * @param array $vars
     *
     * @return string Rendered HTML
     */
    public static function get(string $viewName, array $vars = [])
	{
        ob_start();
        require __DIR__ . '/../views/' . $viewName . '.php';
        return ob_get_clean();
    }
}