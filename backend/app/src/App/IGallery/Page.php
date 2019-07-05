<?php

namespace App\IGallery;

/**
 * Class Page
 *
 * @package App\IGallery
 */
class Page
{

	private $number;
	/**
	 * @var Image[]
	 */
	private $images;
	/**
	 * @var int
	 */
	private $total;

	/**
	 * Page constructor.
	 *
	 * @param int     $number
	 * @param int     $total
	 * @param Image[] $images
	 */
	public function __construct(int $number, int $total, array $images)
	{
		$this->number = $number;
		$this->images = $images;
		$this->total  = $total;
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		return [
			'page'   => $this->number,
			'total'  => $this->total,
			'images' => array_map(function (Image $image) {
				return $image->toArray();
			}, $this->images),
		];
	}
}