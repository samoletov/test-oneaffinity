<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 5/06/19
 * Time: 10:23 PM
 */

namespace App\IGallery;

use App\Flickr\IParser;

/**
 * Class AGallery
 *
 * @package App\IGallery
 */
abstract class AGallery implements IGallery
{

	protected $parser;
	protected $queryString;
	protected $pageSize;

	/**
	 * @param $query
	 * @param $page
	 *
	 * @return Page
	 */
	public function findImages(string $query, string $page) : Page
	{
		$data = $this->setQueryString($query)->getPage($page);

		return $this->getParser()->parse($data);
	}

	/**
	 * @param mixed $queryString
	 *
	 * @return IGallery
	 */
	public function setQueryString($queryString) : IGallery
	{
		$this->queryString = $queryString;

		return $this;
	}

	/**
	 * @return IParser
	 */
	public function getParser()
	{
		return $this->parser;
	}

}