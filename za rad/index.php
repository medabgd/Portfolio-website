<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Milos Medic - Portfolio website</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Milos Medic is a Serbian student at University of Belgrade majoring in internet tehnology."/>
		<meta name="keywords" content="Milos Medic, serbia, student, web site, front-end, back-end, php, javascript"/>
		<meta name="author" content="Milos Medic"/>
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Portfolio website - Made by Milos Medic" />
		<meta property="og:description" content="Milos Medic is a Serbian student and web developer, for web sites and applications." />
		<meta property="og:url" content="http://milosmedic.com" />
		<meta property="og:site_name" content="Made by Milos Medic" />
		<meta property="fb:admins" content="100005213861682" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="src/css/main.css"/>  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='src/js/jquery-3.1.1.min.js'></script>
		<script src='src/js/main.js'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body> 
		<?php include_once("analyticstracking.php") ?>
		<a rel="slide" class="logodesc" href="http://localhost/proba/Portfolio-website/home"><img class="img-responsive" src="assets/images/milosmedic_logo.png" alt="logo"/></a>
		<div class="navbar navbar-static-top menu">
			<div class="container menu">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="glyphicon glyphicon-menu-hamburger reposition"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse navbar-centered">
					<ul class="nav navbar-nav" id="nav">
						<li><a rel="index" class="active" href="http://localhost/proba/Portfolio-website/home">Home</a></li>
						<li><span class="dotted">&#8226;</span><a rel="canonical" href="http://localhost/proba/Portfolio-website/about">About</a></li>
						<li><span class="dotted">&#8226;</span><a rel="canonical" href="http://localhost/proba/Portfolio-website/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<a rel="slide" class="work-link left-image" href="http://forum.milosmedic.com" title="Forum Meda">
				<div class="col-xs-6 col-md-4 col-md-offset-2 headerpic" style="background-color:#f7f0f7">
					<img src="assets/images/forum.png" class="img-responsive" alt="Forum Meda" />
				</div>
				<div class="col-xs-6 col-md-4 work-header">
					<div class="work-title">
						ForumMeda
					</div>
					<div  class="work-excerpt">
						<p>Online discussion site where people can hold conversations in the form of posted messages..</p>
					</div>
				</div>
			</a>
		</div>
		
		<aside id="share-all" class="row">
			<div class="container">
				<div class="col-xs-12">
					<div class="column-inner">
						<div class="share-tile">
							Share On
						</div> 
						<ul class="inline">
							<li>
								<a rel="slide" target="_blank" rel="nofollow" class="button-label facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmilosmedic.com" title="Share on Facebook: Portfolio+Website+-+Made+by+Milos+Medic">
									Facebook
								</a>
							</li>
							<li>
								<a rel="slide" target="_blank" rel="nofollow" class="button-label twitter" href="http://twitter.com/home?status=Portfolio+Website+-+Made+by+Milos+Medic+http%3A%2F%2Fmilosmedic.com+via+%40milos_meda" title="Share on Twitter: Portfolio+Website+-+Made+by+Milos+Medic">
									Twitter
								</a>
							</li>
							<li>
								<a rel="slide" target="_blank" rel="nofollow" class="button-label googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fmilosmedic.com" title="Share on Google+: Portfolio+Website+-+Made+by+Milos+Medic">
									Google+
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</aside>
		
		<footer id="site-footer" class="theme-light">
			<div class="row">
				<div class="column small-12 inner-content">
					<div class="contact">
						<a rel="slide" href="mailto:contact@milosmedic.com" title="text" class="button">Get in touch</a>
					</div>
					<ul class="inline doted small-dot name-url">
						<li>Milos Medic</li>
						<span class="dotted">&#8226;</span><li>milosmedic.com</li>				
					</ul>
					<div class="copyright">
						2017  All rights reserved
					</div>
					<div class="wap">
						<ul class="social-icons inline">
							<li>
								<a rel="slide" href="https://www.facebook.com/milosmedicmeda" rel="nofollow" target="_blank" title="Milos Medic" class="fa decorate fa-facebook" aria-hidden="true"></a>
							</li> 
							<li>
								<a rel="slide" href="https://www.linkedin.com/in/medicmilos" rel="nofollow" target="_blank" title="LinkedIn profile Milos Medic" class="fa decorate fa-linkedin" aria-hidden="true"></a>
							</li>
							<li>
								<a rel="slide" href="https://github.com/medabgd" rel="nofollow" target="_blank" title="Github Milos Medic" class="fa decorate fa-github" aria-hidden="true"></a>
							</li> 
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>