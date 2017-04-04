<?php

require_once 'vendors/smarty 3.1.30/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->template_dir = 'test/templates';
$smarty->compile_dir = 'test/compile';
$smarty->config_dir = 'test/config';
$smarty->cache_dir = 'test/cache';

/*
  $title = 'Example';
  $author = 'Oleg';
  $text = 'Hello world!';

  $smarty->assign('title', $title);
  $smarty->assign('author', $author);
  $smarty->assign('text', $text);
 */

$posts = [
    'title' => 'Example',
    'author' => 'Oleg',
    'text' => 'Hello world!',
    'p' => [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5]
];
$smarty->assign(data, $posts);

$smarty->display('template.tpl');
?>