<?php

require_once (__DIR__ . "/DependencyContainer.php");
require_once (__DIR__ . "/TDependency.php");
require_once (__DIR__ . "/MyProjectContainer.php");
require_once (__DIR__ . "/UserManager.php");

//Container
$dc = new \c00\dependencies\MyProjectContainer();

//Add stuff to it.
$dc->add(new \c00\dependencies\UserManager());
//Add more as you go along.

//Now we can call it like this:
$user = $dc->getUm()->getUser(123);

