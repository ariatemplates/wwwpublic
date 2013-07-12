
<!DOCTYPE html>
<html>
	<head>
		<?php include '../../../../include/_head.php' ?>
		<script type="text/javascript" src="/js/top-scrolling.js"></script>		
	</head>
	<body class="documentation">
		<div id="top"><a href="#top"></a></div>
		<?php include '../../../../include/_header.php' ?>
		<div class="content-wrapper">
			<section class="content">
				<div class="wrapper">
					<div class="columns main-page two">
						<h2><a href="../../../">Samples</a> \ <a href="../../">Widgets</a> \ <a href="../">Aria</a> \ 						
						<h1>Button</h1></h2>
						<p>
							Styling your buttons can be done changing the properties of your widget or applying an sclass.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/button/style/'></iframe>
						<p>
							The Button widget is an action widget, meaning that it can call a function when an action happens on it. This is done providing a callback to the onevent.
							In the next sample there are two buttons with different onclick callback, a simple one and another one with arguments. Clicking on the buttons will open an alert dialog.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/button/action/'></iframe>
						<p>
							All Aria Templates widgets can be automatically bound to properties contained inside your data model.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/button/binding/'></iframe>
					</div>
				</div>
			</section>
		</div>
		<?php include '../../../../include/_footer.html' ?>
	</body>
</html>