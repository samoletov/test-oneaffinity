<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 5/06/19
 * Time: 5:53 PM
 */

namespace App\Flickr;

use App\IGallery\Image;
use App\IGallery\IParser;
use App\IGallery\Page;

/**
 * Class Parser
 *
 * @package App\Flickr
 */
class Parser implements IParser
{

    /**
     * @param array $data
     *
     * @return Page
     */
    public function parse(array $data): Page
    {
    	$images = [];
    	foreach ($data['photos']['photo'] ?? [] as $photo){
			$images[] = new Image($photo['url_t'], $photo['url_l'] ?? null);
    	}

		return new Page($data['photos']['page'], $data['photos']['total'], $images);
    }
}