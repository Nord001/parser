<?php

include_once 'functions.php';
include_once 'idiorm.php';
include_once 'config.php';
include_once 'parser.php';
include_once 'phpdom.php';

$parser = new parser();
$parser->set_login('DIqaLQkZl');
$parser->set_password('WXAHKDBkm');
$parser->set_proxy('proxy_list.txt');
$html = $html = str_get_html($parser->get_content_recursive('http://ya.ru'));


