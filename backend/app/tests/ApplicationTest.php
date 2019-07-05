<?php

namespace tests;

use App\Application;
use App\Flickr\Gallery;
use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

/**
 * Class AppTest
 *
 * @package tests
 */
class ApplicationTest extends TestCase
{

	protected function setUp()
	{
		$dotenv = Dotenv::create(__DIR__, '../../.env');
		$dotenv->load();
	}

	/**
	 * @throws \App\Exception
	 */
	public function testGallery()
	{
		$gallery = new Gallery(getenv('FLICKR_API_KEY'));
		$app     = new Application($gallery);
		$result = $app->getImages([
			'query' => 'test',
			'page' => '2'
		]);
		$this->assertGreaterThan(0, count($result));
	}

}
