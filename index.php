	<?php
	if(isset($_GET["btnSubmit"])){
		$url="https://www.google.com/recaptcha/api/siteverify"; 
		$privatekey="6LdpGhAUAAAAAAz4UVF37QI5zyyjoIkiFaRykAZh";

		$client_captcha_response = $_GET['g-recaptcha-response'];
		$user_ip = $_SERVER['REMOTE_ADDR'];

		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$privatekey&response=$client_captcha_response&remoteip=$user_ip");
		$data = json_decode($response);

		if($data->success===true){
			header("Location:index.php?CaptchaPass=True");
		}else{
			header("Location:index.php?CaptchaFailed=True");
		}

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
	

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content="Milos Medic"/>
		<link rel="shortcut icon" href=""/>
		<link rel="stylesheet" type="text/css" href="src/css/main.css"/>  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='src/js/jquery-3.1.1.min.js'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
			
	 
	</head>
	<body>
		<img  class="img-responsive" src="assets/images/madebytj_logo.png"/>
		<div class="navbar navbar-static-top menu">
			<div class="container menu">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="glyphicon glyphicon-menu-hamburger reposition"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse navbar-centered">
					<ul class="nav navbar-nav" id="nav">
						<li><a href="#">Home</a></li>
						<li><span class="dotted">&#8226;</span><a href="#">About</a></li>
						<li><span class="dotted">&#8226;</span><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		<div id="site-content">
			<div class="row work-list">
				<div class="column small-12 large-10 large-centered">
					<a class="work-link left-image" href="http://madebytj.com/work/wittiz/" title="WittiZ">
						<div class="work-image" style="background-color:#f7f0f7">
							<img width="692" height="692" src="http://madebytj.com/wp-content/uploads/2014/05/Wittiz-home.jpg" class="attachment-post-thumbnail wp-post-image" alt="WittiZ - home" />
						</div>
						<div class="work-header ">
							<div class="work-title">WittiZ</div>
								<div  class="work-excerpt">
									<p>Mobile application for iOS and <br class="br-resp small-only" />Android <br class="br-resp xlarge-only" /><br class="br-resp large-only" /><br class="br-resp medium-only" />to share brief scenes <br class="br-resp small-only" />of cult movies and videos.</p>
								</div>
						</div>				
					</a>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
		
<footer id="site-footer" class="theme-light">
		<div class="row">
			<div class="column small-12 inner-content">
				<div class="contact">
					<a href="mailto:contact@milosmedic.com" title="" class="button">Get in touch</a>
				</div>

				<ul class="inline doted small-dot name-url">
					<li>Milos Medic</li>
					<span class="dotted">&#8226;</span><li>milosmedic.com</li>				
				</ul>
				
				<div class="copyright">2016  All rights reserved</div>
				<div class="wap">
					<ul class="social-icons inline">
						<li>
							<a href="https://www.facebook.com/milosmedicmeda" rel="nofollow" target="_blank" title="Behance" class="fa decorate fa-facebook" aria-hidden="true"></a>
						</li> 
						<li>
							<a href="#" rel="nofollow" target="_blank" title="LinkedIn" class="fa decorate fa-linkedin" aria-hidden="true"></a>
						</li>
						<li>
							<a href="https://github.com/medabgd" rel="nofollow" target="_blank" title="Pinterest" class="fa decorate fa-github" aria-hidden="true"></a>
						</li> 
					</ul>
				</div>
			</div>
		</div>
</footer>



	</body>
</html>