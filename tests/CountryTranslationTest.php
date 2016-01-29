<?php

use Exolnet\Addressing\CountryTranslation;

class CountryTranslationTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var \Exolnet\Addressing\CountryTranslation
	 */
	protected $model;

	public function setUp()
	{
		$this->model = new CountryTranslation();
	}

	public function testItIsInitializable()
	{
		$this->assertInstanceOf(CountryTranslation::class, $this->model);
	}
}
