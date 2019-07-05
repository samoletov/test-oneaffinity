<?php

namespace App\IGallery;

/**
 * Interface IParser
 *
 * @package App\Flickr
 */
interface IParser
{

	/**
	 * @param array $data
	 *
	 * @return Page
	 */
	function parse(array $data): Page;
}