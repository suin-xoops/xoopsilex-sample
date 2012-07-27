<?php

require_once '../../mainfile.php';

$app = new XoopSilex\Application();

$app->get('/', function() use ($app) {
	$accessHandler = Legacy_Utils::getModuleHandler('access', 'silex_counter');
	$accessObject  = $accessHandler->create();

	$root = XCube_Root::getSingleton();

	if ( $root->mContext->mUser->isInRole('Site.RegisteredUser') ) {
		$userId = $root->mContext->mXoopsUser->get('uid');
	} else {
		$userId = 0;
	}

	// Record access log
	$accessObject->set('uid', $userId);
	$accessObject->set('ip', $app['request']->server->get('REMOTE_ADDR'));
	$accessHandler->insert($accessObject, true);

	// Get access total
	$total = $accessHandler->getCount();
	return sprintf('<p>%u views</p>', $total);
});

$app->run();
