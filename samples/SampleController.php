<?php
require_once('../_autoload.php');

class SampleController {

	private $manifest;

	public function getData() {

		$data = new stdClass();

		$items = Helper::getSamplesList(@$_GET['cat']);
		//Debug::display($items);
		//$data->basePath = implode('.', $basePath);


		$path = @$_GET['path'];
		if ($path != null) {
			$path = preg_replace('/[^a-z0-9.]/i', '', $path); // Security concern, only accept these characters
			$found = false;
			foreach ($items as $i => &$item) {
				if ($item->path == $path) {
					$found = true;
					break;
				}
			}

			$data->cat = @$_GET['cat'] ? $_GET['cat'] : '';

			if ($found) {
				$data->item = &$items[$i];
				$data->mainUrl = str_replace('.', '/', $data->item->path);
				$data->previous = $i > 0 ? $items[$i - 1] : null;
				$data->next = $i != count($items) - 1 ? $items[$i + 1] : null;
			} else {
				Debug::display("$path not found");
			}

		}

		$data->waiAria = filter_input(INPUT_GET, "wai", FILTER_VALIDATE_BOOLEAN, array("flags" => FILTER_NULL_ON_FAILURE));

		return $data;
	}

	public function getSampleUrl($item) {
		if ($item == null) {
			return "";
		}

		$url = explode('.', $item->path);
		array_pop($url); // The higher level is the file name
		$snippet_url = 'http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/'.implode('/', $url);

		$waiAria = filter_input(INPUT_GET, "wai", FILTER_VALIDATE_BOOLEAN, array("flags" => FILTER_NULL_ON_FAILURE));
		if ($waiAria) {
			$snippet_url .= "?wai=true";
		}
		return $snippet_url;
	}
}
?>
