<?php

use Exolnet\Addressing\CountyTranslation;

class CountyTranslationTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var \Exolnet\Addressing\CountyTranslation
	 */
	protected $model;

	public function setUp()
	{
		$this->model = new CountyTranslation();
	}

	public function testItIsInitializable()
	{
		$this->assertInstanceOf(CountyTranslation::class, $this->model);
	}
}
