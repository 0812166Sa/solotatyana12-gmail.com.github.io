<?php
header('Content-Type: text/html; charset=utf-8');
if (!isset($_GET['module'])) {
	$_GET['module'] = 'static';
}
if (!isset($_GET['page'])) {
	$_GET['page'] = 'main';
}

ob_start();
include './modules/' . $_GET['module'] . '/' . $_GET['page'] . '.php';
include './skins/default' . '/' . $_GET['module'] . '/' . $_GET['page'] . '.tpl';
$content = ob_get_contents();
ob_end_clean();
include './skins/default' . '/index.tpl';
