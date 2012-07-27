<?php

require_once '../../mainfile.php';

$app = new XoopSilex\Application();

$app->get('/', function() {
	return "Hello World!";
});

$app->run();
