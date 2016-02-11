<?php
	require_once('SamplesController.php');

	$controller = new SamplesController();
	$data = $controller->getData();
	$items = &$data->items;
	$basePath = &$data->basePath;
	$breadcrums = &$data->breadcrums;
	$lastBreadcrumsItem = array_pop($breadcrums);
	?>
<?php /* <div class="samplesFilter">Filter : <input id="samplesFilter" value="" /></div> */ ?>
<h1>
	<?php echo $lastBreadcrumsItem['label']; ?>
	<div class="breadcrum">
		<?php foreach($breadcrums as &$breadcrum) {
			$catPath[] = $breadcrum['label'];
		?>
		<a href="<?php echo $breadcrum['url']; ?>"><?php echo $breadcrum['label']; ?></a> \
		<?php } ?>
	</div>
</h1>
<ul class="samplesList">
	<?php foreach($items as &$item) { ?>
	<li class="sampleShot">
		<a href="<?php echo $controller->getSampleUrl($item); ?>">
			<h4><?php echo $item->title; ?></h4>
			<div><?php echo $item->desc; ?></div>
		</a>
	</li>
	<?php } ?>
</ul>
