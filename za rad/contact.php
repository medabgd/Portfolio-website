	<?php
	if(isset($_GET["btnSubmit"])){
		$url="https://www.google.com/recaptcha/api/siteverify"; 
		$privatekey="6LdpGhAUAAAAAAz4UVF37QI5zyyjoIkiFaRykAZh";

		$client_captcha_response = $_GET['g-recaptcha-response'];
		$user_ip = $_SERVER['REMOTE_ADDR'];

		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$privatekey&response=$client_captcha_response&remoteip=$user_ip");
		$data = json_decode($response);

		if($data->success===true){
			header("Location:contact.php?CaptchaPass=True");
		}else{
			header("Location:contact.php?CaptchaFailed=True");
		}

		$name = trim($_REQUEST['name']); 
		$mail = trim($_REQUEST['email']); 
		$message = trim($_REQUEST['message']); 
		
		$rname = "/^[\w\s\/\.\_\d]{2,28}$/";
		$rmail = "/^[\w\.]+[\d]*@[\w]+\.\w{2,3}(\.[\w]{2})?$/"; 
		
		$greske = array(); 
		 $g=0; 
		
		if(!preg_match($rname, $name)){
			$g++;
			echo("n");
		}
		if(!preg_match($rmail, $mail)){
			$g++;
			echo("e");
		}   
		if($message==""){
			$g++;
			echo("m");
		}  
		
		if($g==0){ 		
			$name = trim($_REQUEST['name']); 
			$mail = trim($_REQUEST['email']); 
			$message = trim($_REQUEST['message']);
			$headers =  'MIME-Version: 1.0' . "\r\n"; 
			$headers .= 'From:'.$name.' <'.$mail.'>' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
				
			$to = "milos.medic.pvt@gmail.com";
			$subject = 'Contact form'; 
			$message = '<!DOCTYPE html><html><head><style type="text/css">.table-fill{background:#fff;border-radius:3px;border-collapse:collapse;height:320px;margin:auto;max-width:600px;padding:5px;width:100%;box-shadow:0 5px 10px rgba(0,0,0,0.1);animation:float 5s infinite}th{color:#D5DDE5;background:#1b1e24;border-bottom:4px solid #9ea7af;border-right:1px solid #343a45;font-size:23px;font-weight:100;padding:24px;text-align:left;text-shadow:0 1px 1px rgba(0,0,0,0.1);vertical-align:middle}th:first-child{border-top-left-radius:3px}th:last-child{border-top-right-radius:3px;border-right:none}tr{border-top:1px solid #C1C3D1;border-bottom-:1px solid #C1C3D1;color:#666B85;font-size:16px;font-weight:400;text-shadow:0 1px 1px rgba(256,256,256,0.1)}tr:hover td{background:#4E5066;color:#FFF;border-top:1px solid #22262e;border-bottom:1px solid #22262e}tr:first-child{border-top:none}tr:last-child{border-bottom:none}tr:nth-child(odd) td{background:#EBEBEB}tr:nth-child(odd):hover td{background:#4E5066}tr:last-child td:first-child{border-bottom-left-radius:3px}tr:last-child td:last-child{border-bottom-right-radius:3px}td{background:#FFF;padding:20px;text-align:left;vertical-align:middle;font-weight:300;font-size:18px;text-shadow:-1px -1px 1px rgba(0,0,0,0.1);border-right:1px solid #C1C3D1}td:last-child{border-right:0}th.text-left{text-align:left}th.text-center{text-align:center}th.text-right{text-align:right}td.text-left{text-align:left}td.text-center{text-align:center}td.text-right{text-align:right}</style></head><body><table class="table-fill"><thead><tr><th class="text-left">Name</th><th class="text-left">Email</th><th class="text-left">Message</th></tr></thead><tbody class="table-hover"><tr><td class="text-left">'.$name.'</td><td class="text-left">'.$mail.'</td><td class="text-left">'.$message.'</td></tr></tbody></table></body></html>';
				
			if (mail($to, $subject, $message, $headers)) {   
				header("Location:index.php?MailPass=True");
			}else { 
				header("Location:index.php?MailFailed=True");
			}
		}	
	}
?>
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
						<li><a rel="index" href="http://localhost/proba/Portfolio-website/home">Home</a></li>
						<li><span class="dotted">&#8226;</span><a rel="canonical" href="http://localhost/proba/Portfolio-website/about">About</a></li>
						<li><span class="dotted">&#8226;</span><a rel="canonical" href="http://localhost/proba/Portfolio-website/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid"> 
			<div class="row" id="contact">
				<div class="col-lg-6 col-lg-offset-3">
					<form class="" action='<?php echo $_SERVER['PHP_SELF']; ?>' method="GET" name="ContactForm" id="ContactForm" onSubmit='return check2();'>
						<?php 
							if(isset($_GET["CaptchaPass"])){
								echo "<div>Message Sent</div>";
							}
						?>
						<?php 
							if(isset($_GET["CaptchaFail"])){
								echo "<div>Captcha Failed</div>";
							} 
							if(isset($_GET["MailFail"])){
								echo "<div>Mail not sent.</div>";
							}
						?>
						<ul class="list-unstyled">
							<div id="div-name" class="form-group has-feedback">
								<li>
									<label for="contact-name" class="control-label">Your name:</label>
									<input type="text" class="form-control" name="name" id="contact-name" placeholder="eg. John Smith" value="" onBlur="namecheck();"/>
									<span id="span-name" class="" aria-hidden="true"></span>
								</li>
							</div>
							<div id="div-email" class="form-group has-feedback">
								<li>
									<label for="contact-email" class="control-label">Your email:</label>
									<input type="text" class="form-control" name="email" id="contact-email" placeholder="eg. example@gmail.com" value="" onBlur="emailcheck();"/>
									<span id="span-email" class="" aria-hidden="true"></span>
								</li>
							</div>
							<div id="div-captcha" class="form-group has-feedback">
								<li>
									<div class="g-recaptcha" data-sitekey="6LdpGhAUAAAAAKln-PvJqgAKFDDYFtZEsAA1Lx3V"></div>
								</li>
							</div>
							<div id="div-message" class="form-group has-feedback">
								<li>
									<label for="contact-message" class="control-label">Message</label>
									<textarea class="form-control" name="message" id="contact-message" onBlur="messagecheck();"></textarea>
									<span id="span-message" class="" aria-hidden="true"></span>
								</li>
							</div>
							<div class="form-group">
								<li>
									<button class="btn btn-default" type="submit" name="btnSubmit">Send</button>
								</li>
							</div>
						</ul>
					</form>
				</div>
			</div>			
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
						2016  All rights reserved
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