<?php
	require_once('CategoriesController.php');
	$controller = new CategoriesController();
	$data = $controller->getData();
?>
<?php function displayCategories($categories, $breadcrum, $level) { ?>
<ul class="level<?php echo $level; ?>">
	<?php foreach($categories as $name => &$categorie)  {
		$newBreadcrum = $breadcrum;
		$newBreadcrum[] = strtolower($name);
	?>
	<li><a href="<?php echo $controller.getCategotyUrl($newBreadcrum); ?>"><?php echo $name; ?></a><?php if (count($categorie) > 0) { displayCategories($categorie, $newBreadcrum, $level + 1); } ?></li>
	<?php } ?>
</ul>
<?php } ?>
<ul class="layout">
	<li id="search" class="widget widget_search">
		<h4 class="widget-title">Search the samples</h4>
		<form action="/samples/" id="searchform" method="get">
			<div><label for="s" class="screen-reader-text">Search for:</label><input type="text" id="s" name="s" value="<?php echo $data->search; ?>"><input type="submit" value="Search" id="searchsubmit"></div>

			<?php
				if (filter_input(@$_GET, "wai", FILTER_VALIDATE_BOOLEAN, array("flags" => FILTER_NULL_ON_FAILURE))) {
			?>
				<input type="hidden" name="wai" value="true" />
			<?php
				}
			?>
		</form>
	</li>
	<li id="categories" class="widget widget_categories">
		<h4 class="widget-title">Categories</h4>
		<?php displayCategories($data->categories, array(), 0); ?>
	</li>
</ul>
