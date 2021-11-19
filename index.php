<?php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('WEB_ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once WEB_ROOT."controllers/Controller.php";

$params = explode('/', $_GET['p']);
$controller = isset($params[0]) && !empty($params[0]) ? $params[0] : 'home';
$action = isset($params[1]) && !empty($params[1]) ? $params[1] : 'init';


require_once WEB_ROOT."controllers/".$controller."Controller.php";

$controller = $controller.'Controller';
$controller = new $controller();

if(method_exists($controller, $action)){
    unset($params[0]); unset($params[1]);
    call_user_func_array(array($controller, $action), $params);
}

?>