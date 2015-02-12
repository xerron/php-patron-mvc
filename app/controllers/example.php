<?php
/**
 * User: xerron
 * Date: 12/02/15
 * Link: https://github.com/xerron
 * 
 */

class Example extends Controller
{
    public function index($name = 'Alex')
    {
        $user = $this->model('User');
        $user->name = $name;

        $this->view('example/index', ['name'=> $user->name]);

    }
}