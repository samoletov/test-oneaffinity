<?php

use App\Application;
use App\Flickr\Gallery;

require __DIR__ . '/../vendor/autoload.php';

header('Access-Control-Allow-Origin: *');

try {

	$gallery = new Gallery(getenv('FLICKR_API_KEY'));
	$app     = new Application($gallery);

	$input     = [];

	$parts = parse_url($_SERVER['REQUEST_URI']);
	parse_str($parts['query'], $input);


	try {
		switch ($parts['path']) {

			case '/images':

				$responseData = $app->getImages($input);
				break;
			default:
				$responseData = ['status' => '404', 'message' => 'Not Found'];
		}

		echo json_encode($responseData);

	} catch (Exception $e) {
		echo '{"status":"400", "message": "' . $e->getMessage() . '"}';
	}
} catch (\Exception $exception) {
	// TODO: add exceptions logging
	echo '{"status":"500", "message": "Internal server error"}';
}