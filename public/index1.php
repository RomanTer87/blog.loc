<?php

define ("PATH",'https://blog.loc/');  //domain url
define("ROOT", dirname(__DIR__)); //root directory

define("APP", ROOT . '/app'); //app folder
define("VIEWS", APP . '/views'); //views folder
define("COMPONENTS", VIEWS . '/components'); // components folder
define("CONTROLLERS", APP . '/controllers'); // app controllers folder

define("CORE", ROOT . '/core');
define("PUBLIC", ROOT . '/public');

require_once CORE. "/functions.php";
require_once CONTROLLERS. "/index.php";
