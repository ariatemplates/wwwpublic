<!DOCTYPE html>
<html>
	<head>
		<?php include 'include/_head.php' ?>
	</head>
	<body class="home">
		<?php $home=true; include 'include/_header.php' ?>
		<div class="content-wrapper">
			<section class="content">
				<div class="wrapper">
					<div class="highlight" style="margin:0">
						<?php include 'include/_carousel.html' ?>
						<h2>A solid foundation for your web applications is what matters.</h2>
						<div class="quick-doc">
							<div>
								<img src="/images/documentation-logo.png" />
								<h4>Check out the documentation</h4>
								<div class="links">
									<a href="/usermanual">Usermanual</a>
									<a href="/api">API doc</a>
									<a href="/samples">Samples</a>
									<a href="/guides">Guides</a>
								</div>
							</div>
						</div>
					</div>
					<article class="columns">
						<h3>What is it ?</h3>
						<p>Aria Templates (aka AT) is an application framework written in JavaScript for building rich and large-scaled enterprise web applications.
						It is being developed since 2009 by <accr>Amadeus</accr> for its professional products. It has been designed for web apps that are used 
						8+ hours a day, and that need to display and process high amount of data with a minimum of bandwidth consumption.
						</p>
						<div class="column layers">
							<div class="onsale">
								<div class="layer">
									<img style="margin-left: 7px" src="/images/core.png" />
									<h4>Core</h4>
									<p>Versatile object oriented language and dependency management framework.</p>
								</div>
								<div class="layer">
									<img style="margin-left: 4px" src="/images/template.png" />
									<h4>Template</h4>
									<p>Efficient client-side templating engine for html and css with an easy to learn syntax.</p>
								</div>
								<div class="layer">
									<img src="/images/module.png" />
									<h4>Module</h4>
									<p>Full stack development, with a clear separation of data management, logic, and interface elements.</p>
								</div>
							</div>	
						</div>
						
					
					</article>
					<article class="columns two">
						<div class="column">
						<?php
							$latest_posts = 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/blog/homepage-include/';
							echo file_get_contents($latest_posts);
						?>
						</div>
						<div class="column">
							<h3>Download</h3>
							<div class="quick-download">
								<h4>Get the latest version</h4>
								<p>
									<?php include 'download/_current_version.php' ?>
								</p>
								<p>You can also download one of our <a href="/guides">guides</a>.<!--, or try our <a href="/samples">samples</a>--></p>
							</div>
							<h3>Cross Platform Browsers Compatibility</h3>
							<div class="browsers">
								<p>
									<img title="Google Chrome" src="images/browsers/chrome.png"/>
									<img title="Mozilla Firefox" src="images/browsers/firefox.png"/>
									<img title="Microsoft Internet Explorer" src="images/browsers/ie.png"/>
									<img title="Apple Safari" src="images/browsers/safari.png"/>Aria Templates makes it easy to build an app that gives you the power of the web regardless of what browser your customer uses.
								It lets developers deliver on an incredible variety of browsers and on more operating systems using the same code.</p>
							</div>
						</div>
					</article>
				</div>
			</section>
		</div>
		<?php include 'include/_footer.html' ?>
	</body>
</html>