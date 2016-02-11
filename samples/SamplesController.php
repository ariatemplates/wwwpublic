<?php
require_once('../_autoload.php');

class SamplesController {

    private $manifest;
    private $cat = '';

    public function getData() {

        $waiAria = filter_input(INPUT_GET, "wai", FILTER_VALIDATE_BOOLEAN, array("flags" => FILTER_NULL_ON_FAILURE));

        $data = new stdClass();
        $cat = @$_GET['cat'];
        $data->items = Helper::getSamplesList($cat);
        $data->breadcrums = array(array(
                'label' => 'Samples',
                'url' => $waiAria ? '/samples/?wai=true' : '/samples/'
        ));

        if ($cat != null) {
            $this->cat = preg_replace('#[^a-z0-9\-/ ]#i', '', $cat);

            // Build the breadcrum with labels and urls
            $currentParams = array();
            foreach(explode('/', $cat) as $category) {
            	$currentParams[] = $category;
                $url = '/samples/?cat='.implode('/', $currentParams);
                if ($waiAria) {
                    $url .= "&wai=true";
                }
            	$data->breadcrums[] = array(
            		'label' => $category,
           			'url' => $url
               	);
            }

        }

        $search = @$_GET['s'];
        if ($search != null) {
            $search = preg_replace('/[^a-z ]/i', '', $search);
            $filtered = array();

            $searchRegexp = '/'.$search.'/i';
            foreach($data->items as &$item) {
                $categories = @$item->categories;
                if ($categories == null) {
                    $categories = 'unclassified';
                }

                if (is_array($categories)) {
                    $categories = implode(',', $categories);
                }

                if (preg_match($searchRegexp, $categories) || preg_match($searchRegexp, $item->title) || preg_match($searchRegexp, $item->desc)) {
                    $filtered[] = $item;
                }
            }

            $data->items = $filtered;
        }

        return $data;
    }

    public function getSampleUrl($item) {
        $url = "/samples/".$this->cat."?path=" . $item->path;
        $waiAria = filter_input(INPUT_GET, "wai", FILTER_VALIDATE_BOOLEAN, array("flags" => FILTER_NULL_ON_FAILURE));
        if ($waiAria) {
            $url .= "&wai=true";
        }
        return $url;
    }

}
?>
