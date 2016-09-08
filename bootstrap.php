<?php
require_once('src/Psr4Autoloader.php');
// instantiate the loader
$loader = new \dpd\Psr4Autoloader();
// register the autoloader
$loader->register();
// register the base directories for the namespace prefix
$loader->addNamespace('dpd\\', __DIR__.'/src');