<?php

// /modules/silex_hello_smarty/hello/foo にアクセスしてみて
require_once '../../mainfile.php';

$app = new XoopSilex\Application();

$app->register(new \XoopSilex\Provider\XoopsTplServiceProvider());

$app->get('/hello/{name}', function($name) use ($app) {
	$app['xoopsTpl']->assign('name', $name);
	return $app['xoopsTpl']->fetch('db:silex_hello_smarty_index.html');
});

$app->run();
