<?php
error_reporting(E_ALL ^ (E_NOTICE | E_DEPRECATED | E_WARNING));

define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/beadando2/');
define('SITE_ROOT', 'http://tanosveny.bead2.nhely.hu/beadando2/');
require_once(SERVER_ROOT . 'controllers/' . 'router.php');
