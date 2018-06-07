<?php

function __autoload($class)
{
	include_once "/$class.php";
}

function getLogger($type)
{
	switch($type)
	{
		case 'database':
		return new DBLogger();
		break;
		case 'file':
		return new FileLogger();
		break;
	}
}
// $logger = new DBLogger();
// $logger = new FileLogger();
$logger = getLogger('database');

$profile =  new UserProfile($logger);

$profile->createUser();