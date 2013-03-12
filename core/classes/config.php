<?php
/**
 * @version 2.0
 * @autor Edwin Manuel Cerrón Angeles
 */


/*
# Uso
$config = Config::getInstance(PATH);
echo $config->dummy;
echo $config->db['password'];

[config.php]
<?php
return array(
'db' => array(
       'host' => 'localhost',
       'username' => 'user1',
       'password' => 'mypass'),
'ip' => '123456',
}
 */

class Config
{
    private static $_instance = null;
    public $options = array();

    private function __construct($filepath)
    {
        $this->options = include $filepath;
    }

    private function __clone(){}

    public static function getInstance($filepath = 'app/config.php')
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self($filepath);
        }
        return self::$_instance;
    }

    public function __get($key)
    {
        if (isset($this->options[$key])) {
            return $this->options[$key];
        }else{
            trigger_error("la variable $key no existe!", E_USER_NOTICE);
        }
    }

    public function __set($key, $value)
    {
        $this->options[$key] = $value;
    }
}