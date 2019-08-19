<?php

$init_data = parse_ini_file("conf.ini");
$url = $init_data['url'];
$login = $init_data['login'];
$password = $init_data['password'];
$db = new PDO($url, $login, $password);
