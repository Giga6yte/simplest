<?php

require_once 'vendors/smarty 3.1.30/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'compile';
$smarty->config_dir = 'config';
$smarty->cache_dir = 'cache';

//#1. Для каждой переменной определено одно значение
//
//$title = 'Example';
//$author = 'Oleg';
//$text = 'Hello world!';
//
//$smarty->assign('title', $title);
//$smarty->assign('author', $author);
//$smarty->assign('text', $text);
//
//#end 1.

//#2. Использование массивов

$posts = [
    'title' => 'Example',
    'author' => 'Oleg',
    'text' => 'Hello world!',
    'p' => [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5]
];
$smarty->assign(data, $posts);

//#end 2.

$smarty->display('template.tpl');
?>