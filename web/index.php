<?php

require_once __DIR__.'/../vendor/autoload.php';
$config_path = __DIR__.'/../core/config/config.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use WebLab\Core as Core;
$app = Core::getInstance();
$app->run($config_path);
?>