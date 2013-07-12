
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
						<h1>Fieldset</h1></h2>						
						<p>
							Fieldset is a container widget and is mainly used for:
							<ul>
								<li>Visual grouping of fields. Different styling being possible (background color, borders, label, positioning).</li>
								<li>Handling of default submit button for a set of fields.</li>
							</ul>
							Also, when focusing on the elements and pressing ENTER, it executes the onSubmit callback.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/fieldset/'></iframe>
						<p>
							The Fieldset is an action widget, meaning that it can call an onSubmit callback function called when the user presses ENTER in a field inside the fieldset. For instance, if an onSubmit() callback is implemented on the root Fieldset, then all the nested fieldsets bubble to the root fieldset, provided that the child fieldset implemented onSubmit callback should return true.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/fieldset/action/'></iframe>
						<p>
							For the fieldset widget, the property bindable is tooltip and can be bound to a value in the datamodel.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/fieldset/binding/'></iframe>
					</div>
				</div>
			</section>
		</div>
		<?php include '../../../../include/_footer.html' ?>
	</body>
</html> 