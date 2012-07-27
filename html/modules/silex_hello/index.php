<?php

// /modules/silex_hello/hello/foo にアクセスしてみて
require_once '../../mainfile.php';

$app = new XoopSilex\Application();

$app->get('/hello/{name}', function($name){
	return 'Hello '.$name;
});

$app->run();
