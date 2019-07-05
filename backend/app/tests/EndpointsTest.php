<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 31/05/19
 * Time: 4:12 PM
 */

namespace tests;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use PHPUnit\Framework\TestCase;

class EndpointsTest extends TestCase
{

	public function testGoogle()
	{
		$client = new Client();
		$res    = $client->request('GET', 'http://localhost:8321/api/images', [
			RequestOptions::JSON => ['query' => 'test']
		]);

		$this->assertEquals(200, $res->getStatusCode());
	}
}