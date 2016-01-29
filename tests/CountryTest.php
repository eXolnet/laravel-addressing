<?php

use Exolnet\Addressing\Country;

class CountryTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var \Exolnet\Addressing\Country
	 */
	protected $model;

	public function setUp()
	{
		$this->model = new Country();
	}

	public function testItIsInitializable()
	{
		$this->assertInstanceOf(Country::class, $this->model);
	}
}
