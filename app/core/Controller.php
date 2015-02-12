<?php

/**
 * User: xerron
 * Date: 12/02/15
 * Link: https://github.com/xerron
 *
 */
Class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . 'php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}