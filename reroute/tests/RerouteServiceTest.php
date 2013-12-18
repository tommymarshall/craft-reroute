<?php

namespace Craft;

use Mockery as m;
use PHPUnit_Framework_TestCase;

class RerouteServiceTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->rerouteRecord = m::mock('RerouteRecord');
		$this->service = new RerouteService($this->rerouteRecord);
	}

	public function testCanCreateNewRedirects()
	{
		$result = $this->service->create();
		$this->assertInstanceOf('Craft\RerouteModel', $result);
	}

	public function testGetAllRedirects()
	{
		$fakeResults = array(
			array(
				'id'     => '1',
				'oldUrl' => 'old-bar',
				'newUrl' => 'new-bar',
			),
			array(
				'id'     => '2',
				'oldUrl' => 'old-bar',
				'newUrl' => 'new-bar',
			),
		);

		$this->rerouteRecord
			->shouldReceive('findAll')
			->andReturn($fakeResults);

		$results = $this->service->getAll();

		$this->assertEquals(1, count($results));
		$this->assertInstanceOf('Craft\RerouteModel', $results);
	}

	public function tearDown()
	{
		m::close();
	}
}
