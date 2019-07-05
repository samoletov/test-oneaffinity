<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 5/06/19
 * Time: 10:30 PM
 */

namespace App\IGallery;

/**
 * Interface IGallery
 *
 * @package App\IGallery
 */
interface IGallery
{

    /**
     * @param int $number
     *
     * @return array
     */
    function getPage(int $number);

	/**
	 * @param $queryString
	 *
	 * @return IGallery
	 */
	function setQueryString($queryString) : IGallery;

	/**
	 * @param string $query
	 * @param string $page
	 *
	 * @return Page
	 */
	function findImages(string $query, string $page) : Page;

}