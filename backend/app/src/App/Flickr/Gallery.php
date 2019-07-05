<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 5/06/19
 * Time: 10:31 PM
 */

namespace App\Flickr;

use App\IGallery\AGallery;
use GuzzleHttp\Client;

/**
 * Class Gallery
 *
 * @package App\Flickr
 */
class Gallery extends AGallery
{

	/**
	 * @var Client
	 */
	private $client;

	/**
	 * @var string
	 */
	private $baseUrl;

	/**
	 * Constructor.
	 *
	 * @param string $apiKey
	 * @param int    $pageSize
	 */
	public function __construct(string $apiKey, int $pageSize = 5)
	{
		$this->client   = new Client();
		$this->pageSize = $pageSize;
		$this->baseUrl  = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=' . $apiKey .
			'&extras=url_t%2C+url_l&format=json&nojsoncallback=1&per_page=' . $pageSize;
		$this->parser   = new Parser();
	}

	/**
	 * @param int $page
	 *
	 * @return array
	 */
	public function getPage($page = 1): array
	{
		$url = $this->baseUrl . '&text=' . $this->queryString . '&page=' . $page;
		$json = $this->client->get($url)->getBody();

		return json_decode($json, TRUE);
	}
}