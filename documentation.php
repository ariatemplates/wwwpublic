<!DOCTYPE html>
<html>
	<head>
		<?php include 'include/_head.php' ?>
	</head>
	<body class="documentation">
		<?php include 'include/_header.php' ?>
		<div class="content-wrapper">
			<section class="content">
				<div class="wrapper">
					<div class="columns main-page two">
						<article class="column">
							<h1>Documentation</h1>
							<h3>User Manual</h3>
							<p>The User Manual is the main Aria Templates documentation.  You'll find plenty of articles explaining the features of the framework along with samples illustrating them.
							<p><a href="/usermanual">Check out the User Manual</a></p>
							<!--p>We also have a page listing all the samples used to illustrate the articles of the user manual.
							<p><a href="/samples">Browse the samples</a></p-->
							<h3>Api documentation</h3>
							Our user-friendly API reference.
							<a href="aria/guide/apps/apidocs/">Check out the API Reference</a>.</p>
							<h3>Samples</h3>
							Our reference samples help you to learn and use the features available in Aria Templates. 
							<p><a href="/samples">Check out the samples</a>.</p>
							<h3>Guides</h3>
							<p>Guides are more than just live samples. They are full featured step by step tutorials you can follow to help you understand how Aria Templates works.</p>
							<p><a href="/guides">Browse the guides</a></p>
							<h3>FAQ</h3>
							<p>If you have doubt you can check the FAQ to find an answer.</p>
							<p><a href="/faq">Check the FAQ</a></p>
						</article>
						<aside class="column sidebar">
							<div class="search">
								<h4>Search documentation</h4>
								<form action="/usermanual/search/" method="get">
									<input type="text" id="search" name="q" value="" autocomplete="off" spellcheck="false"/>
									<button onclick="javascript:if(document.getElementById('search').value == '') return false;">Search</button>
								</form>
							</div>

							<div class="onsale">
								<h5>Contributions</h5>
								<p>You feel comfortable with Aria Templates and have a great idea about something awesome?</p>
								<p>Feel free to <a href="/about/contact">contact us</a>, or <a href="/contribute">fork us</a> on Github and open a pull request to push our changes.</p>
							</div>
						</aside>
						<!--a class="go-to-top" href="">Top of page</a-->
					</div>
				</div>
			</section>
		</div>
		<?php include 'include/_footer.html' ?>
	</body>
</html>