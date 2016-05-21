<?php

namespace Example;

class User{

	protected $name;
	protected $lastName;
	
	public function __construct($name, $lastName)
	{
		$this->name = $name;
		$this->lastName = $lastName;
	}

	public function getCompleteName()
	{
		return $this->name . " " .$this->lastName;
	}

	public function getName()
	{
		return $this->name;
	}
}