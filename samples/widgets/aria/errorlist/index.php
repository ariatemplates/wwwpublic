
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
						<h1>ErrorList</h1></h2>						
						<p>
							The ErrorList widget can be used to display a list of errors (client-side or server-side / technical or functional). These errors and messages can be triggered via the error management subsystem in Aria Templates, which produces nested lists of messages that can be displayed through the widget by binding.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/errorlist/standard/'></iframe>
						<p>
							The following filter types are supported:
							<ul>
							    <li>TYPE_FATAL F -- uses the error icon.</li>
							    <li>TYPE_ERROR E -- uses the error icon.</li>
							    <li>TYPE_WARNING W -- uses the warning icon.</li>
							    <li>TYPE_INFO I -- uses the info icon.</li>
							    <li>TYPE_NOTYPE N -- uses the info icon.</li>
							    <li>TYPE_CRITICAL_WARNING C -- uses the warning icon.</li>
							    <li>TYPE_CONFIRMATION O -- uses the confirmation icon.</li>
							</ul>
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/errorlist/filtering/'></iframe>
						<p>
							The ErrorList widget is also a bind-able widget and the properties bindable are:
							<ul>
							    <li>message.</li>
							    <li>tooltip.</li>							   
							</ul>
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/errorlist/binding/'></iframe>
						<p>
							The ErrorList widget is a based on a template to display its content. Therefore, it may be customized to fit several types of displays.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/errorlist/custom/'></iframe>
					</div>
				</div>
			</section>
		</div>
		<?php include '../../../../include/_footer.html' ?>
	</body>
</html> 