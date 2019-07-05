<?php

namespace App;

use App\IGallery\IGallery;

/**
 * Class Application
 *
 * @package App
 */
class Application
{   
    /**
     * @var IGallery
     */
    private $gallery;

	/**
	 * App constructor.
	 *
	 * @param IGallery $gallery
	 */
    public function __construct(IGallery $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * @param $json
     *
     * @return mixed
     * @throws Exception
     */
    public function getImages($json)
    {
        if (!isset($json['query'])) {
            throw new Exception('Query must be defined');
        }
		if (!isset($json['page'])) {
			throw new Exception('Page must be defined');
		}

        return $this->gallery->findImages($json['query'], $json['page'])->toArray();
    }

}