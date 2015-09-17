<?php
require_once('../_autoload.php');

class CategoriesController {

	public function getData() {

		$data = new stdClass();
		$items = Helper::getManifest();

		$breadcrumbs = array();
		foreach ($items as $item) {
			$categories = @$item->categories;
			if ($categories == null) {
				$categories = array('Unclassified');
			}

			if (!is_array($categories)) {
				$categories = array($categories);
			}
			foreach($categories as $categorie) {
				$categorie = trim($categorie);
				if (@$breadcrumbs[$categorie] == null) {
					$breadcrumbs[$categorie] = 0;
				}
				$breadcrumbs[$categorie]++;
			}
		}
		ksort($breadcrumbs);

		// Convert the found breadcrums to an array of array
		$data->categories = array();
		foreach ($breadcrumbs as $breadcrumb => $nb) {
			$array = &$data->categories;
			$items = explode('/', $breadcrumb);
			foreach ($items as $item) {
				if (!isset($array[$item])) {
					$array[$item] = array();
				}
				$array = &$array[$item];
			}
		}


		$search = @$_GET['s'];
		if ($search == null) {
			$search = '';
		}
		$data->search = preg_replace('/[^a-z ]/i', '', $search);


		return $data;
	}

	public function getCategoryUrl($categoryPath) {
		$url = "/samples/" . implode('/', $categoryPath);

		$waiAria = filter_input(INPUT_GET, "wai", FILTER_VALIDATE_BOOLEAN, array("flags" => FILTER_NULL_ON_FAILURE));
		if ($waiAria) {
			$url .= "?wai=true";
		}
		return $url;
	}

}
?>
