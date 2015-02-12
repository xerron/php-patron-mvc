<?php
/**
 * User: xerron
 * Date: 12/02/15
 * Link: https://github.com/xerron
 * 
 */

class App{
    public function __construct()
    {
        $url = $this->parseUrl();
    }

    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL);
        }
    }
}