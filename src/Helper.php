<?php
class Helper {

	private static $manifest;

	public static function getManifest() {
		if (self::$manifest == null) {

			$manifestPathLocal = _ROOT_PATH.'/samples/manifest.json';
			$content = null;

			// Try to find it locally first
			if (file_exists($manifestPathLocal)) {
				$content = file_get_contents($manifestPathLocal);
			}

			if ($content == null) {
				$content = file_get_contents(Env::$manifestUrl);

				// Save the content locally
				file_put_contents($manifestPathLocal, $content);
			}

			// $content must be defined now
			self::$manifest = Json::decode($content);

		}
		return self::$manifest;
	}

	public static function getSamplesList($cat = null) {
		$items = self::getManifest();
		if ($cat) {
			$cat = preg_replace('#[^a-z0-9\-/ ]#i', '', $cat);
			$filtered = array();
			$catRegexp = '#,'.$cat.'[,/]#i';
			foreach($items as $item) {
				$categories = @$item->categories;
				if ($categories == null) {
					$categories = array('Unclassified');
				}
				if (!is_array($categories)) {
					$categories = array($categories);
				}
				$categories = ','.implode(',', $categories).',';
				if (preg_match($catRegexp, $categories)) {
					$filtered[] = $item;
				}
			}

			$items = $filtered;
		}
		return $items;
	}


}
?>
