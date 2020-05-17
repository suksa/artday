<?php
$ROOT_URL = $_SERVER["HTTP_HOST"];
$PAGE_NAME = str_replace('.php', '', basename($_SERVER["PHP_SELF"]));
$ROOT_PATH = $_SERVER["DOCUMENT_ROOT"];
define('ROOT_URL', $ROOT_URL);
define('PAGE_NAME', $PAGE_NAME);
define('ROOT_PATH', $ROOT_PATH);
?>