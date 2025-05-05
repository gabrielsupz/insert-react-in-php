<?php


define('SF_ROOT_DIR', realpath(dirname(__FILE__) . '/../'));
define('SF_APP', 'frontend');  

// Incluindo o autoloader do Symfony
require_once(SF_ROOT_DIR.'/config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration(SF_APP, 'prod', false);
sfContext::createInstance($configuration);

// Incluir e rodar o seed
require_once(SF_ROOT_DIR.'/apps/'.SF_APP.'/lib/task/PartidoSeed.php');
$seed = new PartySeed();
$seed->run();
