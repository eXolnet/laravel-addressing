<?php

use Exolnet\Addressing\County;

class CountyTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var \Exolnet\Addressing\County
	 */
	protected $model;

	public function setUp()
	{
		$this->model = new County();
	}

	public function testItIsInitializable()
	{
		$this->assertInstanceOf(County::class, $this->model);
	}
}
