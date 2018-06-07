<?php

class UserProfile {
	private $logger;

	public function createUser()
	{
		// $logger = new Logger();
		echo "creating user";
		$this->logger->log("user created.");
	}
	public function updateUser()
	{
		// $logger = new Logger();
		echo "updating user";
		$this->logger->log("user updated.");
	}
	public function deleteUser()
	{ 
		// $logger = new Logger();
		echo "deleting user";
		$this->logger->log("user deleted.");
	}
	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}
}