<?php

require_once(dirname(__DIR__)."/config/config.php");

require_once CORE. "/functions.php";
require_once (CORE. "/classes/DB.php");

$db_config = require(CONFIG. "/db.php");
//$db = new DB($db_config);

$db = DB::getInstance()->getConnection($db_config); //->query("SELECT * FROM posts")->findAll();
$db2 = DB::getInstance()->getConnection($db_config);

require_once CORE. "/router.php";



