<?php

use XoopSilex\Application;

require_once '../../mainfile.php';

$app = new Application();

$app->get('/', function() {
	return "Hello World!";
});

$app->run();
