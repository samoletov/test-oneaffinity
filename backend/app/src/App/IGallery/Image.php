<?php

namespace App\IGallery;

/**
 * Class Image
 *
 * @package App\IGallery
 */
class Image
{

	/**
	 * @var string
	 */
	private $url;
	/**
	 * @var string
	 */
	private $thumbnailUrl;

	/**
	 * Image constructor.
	 *
	 * @param string      $thumbnailUrl
	 * @param string|null $url
	 */
	public function __construct(string $thumbnailUrl, ?string $url)
	{
		$this->url = $url;
		$this->thumbnailUrl = $thumbnailUrl;
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		return [
			'url' => $this->url ?? $this->thumbnailUrl,
			'thumbnail' => $this->thumbnailUrl
		];
	}
}