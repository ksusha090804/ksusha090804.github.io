<?php
require_once dirname( __DIR__) . '/config/init.php';
require_once LIBS . '/function.php';
require_once CONF . '/routes.php';
new \ishop\App();
//throw new Exception('Page not found', 404);
//debug(\ishop\Router::getRoutes());
?>