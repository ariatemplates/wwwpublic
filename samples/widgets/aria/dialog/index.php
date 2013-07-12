
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
						<h1>Dialog</h1></h2>						
						<p>
							The properties bindable for dialog widget are
							<ul>
						    	<li>contentMacro</li>
						    	<li>title</li>
						    	<li>tooltip</li>
						    	<li>visible</li>
						    	<li>xpos</li>
						    	<li>ypos</li>
						    	<li>center</li>
						    </ul>
							If center is set to true, it will have precedence over xpos and ypos, which will be updated according to the actual position of the dialog.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/dialog/binding/'></iframe>
						<p>
							To enable Drag & Drop on a Dialog widget it's enough to set the movable property to true.
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/dialog/movable/'></iframe>
						<p>
							Resizable dialog allows users to resize the dialog by dragging any corners of the dialog. Dialogue resizing can be enabled by setting "resizable" property to true. 
						</p>
						<iframe class='sampleShot' src='http://snippets.ariatemplates.com/samples/github.com/ariatemplates/documentation-code/samples/widgets/dialog/resizable/'></iframe>
					</div>
				</div>
			</section>
		</div>
		<?php include '../../../../include/_footer.html' ?>
	</body>
</html> 