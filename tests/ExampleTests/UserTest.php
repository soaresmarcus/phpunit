<?php
namespace ExampleTests;

use PHPUnit_Framework_TestCase;
use Example\User;

class UserTest extends PHPUnit_Framework_TestCase
{
	
	public function testRetornaOPrimeiroNome()
	{
		$user = new User("Marcus", "Aurélio");
		$expected = "Marcus";
		$actual = $user->getName();

		$this->assertEquals($expected, $actual);

		$user = new User("Marcus", "Doe");
		$expected = "Marcus";
		$actual = $user->getName();

		$this->assertEquals($expected, $actual);
	}
	
	public function testNomeCompletoComNomeESobrenome()
	{
		$user = new User("Marcus", "Aurélio");
		$expected = "Marcus Aurélio";
		$actual = $user->getCompleteName();

		$this->assertEquals($expected, $actual);

		$user = new User("Marcus", "Doe");
		$expected = "Marcus Doe";
		$actual = $user->getCompleteName();

		$this->assertEquals($expected, $actual);
	}
}