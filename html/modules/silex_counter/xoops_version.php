<?php

$modversion['name']        = 'Silex Counter';
$modversion['dirname']     = 'silex_counter';
$modversion['version']     = 1.00;
$modversion['description'] = '';
$modversion['author']      = 'suin';
$modversion['credits']     = 'suin <suinyeze@gmail.com>';
$modversion['license']     = 'GPLv2';
$modversion['image']       = 'images/module_icon.png';
$modversion['cube_style']  = true;

$modversion['hasMain']  = 1;
$modversion['hasAdmin'] = 0;


// Database
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['tables'][] = '{prefix}_{dirname}_access';