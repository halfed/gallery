<?php

	defined('/') ? null : define('DS, DIRECTORY_SEPARATOR');

	defined('/') ? null : define('SITE_ROOT', '/'.'Applications'.'/'.'php-projects'.'/'.'gallery');
	define('INCLUDES_PATH', SITE_ROOT.'/'.'admin'.'/'.'includes');

	require_once("functions.php");
	require_once("new_config.php");
	require_once("database.php");
	require_once("Db_object.php");
	require_once("user.php");
	require_once("photo.php");
	require_once("session.php");
?>