<?php



if ( ! file_exists(APPPATH.'controllers/'.$class.'.php'))
{
    show_404("{$class}/{$method}");
}

include_once(APPPATH.'controllers/'.$class.'.php');