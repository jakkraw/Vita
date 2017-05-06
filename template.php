<?php	
function showPage(){
	
	$title = "Centrum Medyczne Vita";
	$keywords = "Vita, Centrum medyczne, Lekarz, Bytów, Dermatolog, Ginekolog";
	$links = array(
			"Ginekolog"=>"Ginekolog",
			"Dermatolog"=>"Dermatolog",
			"Medycyna Pracy"=>"Medycyna_Pracy",
			"Badania Kierowców"=>"Badania_Kierowcow",
			"Laboratorium"=>"Laboratorium",
			"Gabinet USG"=>"Gabinet_USG",
			"Gabinet Laryngologiczny"=>"Gabinet_Laryngologiczny",
			"Gabinet Urologiczny"=>"Gabinet_Urologiczny",
			"Poradnia Alergologiczna"=>"Poradnia_Alergologiczna"
			);
?>
<!doctype html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/> -->
		<title><?php echo $title ?></title>
		<meta name="google-site-verification" content="VSOw11k2mRFllQky1xiL-P9e8cea2R2OUX4f6C5nSjY" />
		<meta name="description" content="Centrum medyczne Vita w Bytowie Sikorskiego 57"/>
		<meta name="keywords" content="<?php echo $keywords ?>"/>
		<link rel="stylesheet" href="style.css" type="text/css" />	
		<link  rel="shortcut icon" href="vita.ico"/>
		<?php if (function_exists('addedHeader')){ addedHeader();} ?>
	</head>
	<body>
		<div id="container">	
			<img id="photo" src="vita.jpg"/>
			<div id="logo"> 
				<a href="."> 
					<h6 id="smallLogo">Niepubliczny Specjalistyczny Zakład Opieki Zdrowotnej </h6>
					Centrum Medyczne <q style="color:#1B87AB">Vita</q>	
					<h6 id="smallLogo">Bytów Sikorskiego 57</h6>			
				</a>
			</div>
		
			<div id="nav">
				<?php foreach ($links as $name => $link){ ?>
				<div class="option"><a href="<?php echo $link ?>"><?php echo $name ?></a></div>
				<?php }?>
				<div style="clear:both;"></div>
			</div>
			
			<div id="content">
				<?php if (function_exists('content')){ content();} ?>
			</div>
			
			<div id="footer">
			</div>
		</div>
	</body>
</html>	
<?php 
}					