<?php 
  require 'classes/db.php';
  require 'classes/stats.php';
  require 'classes/phpfix.php';
  require 'classes/picture.php';
  require 'classes/category.php';
  
?>

<!DOCTYPE html>
<html lang="pt-BR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo (isset($site)) ? h($site) :"Banco da Coreia do Norte" ; ?></title>
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
</script><script src="./assets/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
<style type="text/css">
	img.wp-smiley,
	img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 .07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="./assets/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="typedjs-style-css" href="./assets/typedjs.min.css" type="text/css" media="all">
<link rel="stylesheet" id="font-google-css" href="./assets/css" type="text/css" media="all">
<link rel="stylesheet" id="plugin-css" href="./assets/plugin.css" type="text/css" media="all">
<link rel="stylesheet" id="gap-icon-css" href="./assets/gap-icons.css" type="text/css" media="all">
<link rel="stylesheet" id="rolling-style-css" href="./assets/style.css" type="text/css" media="all">
<style id="rolling-style-inline-css" type="text/css">
	@media only screen and (min-width: 75em) {.jas-container {width: px;}}body {font-family: "Poppins";font-weight: 400;font-size:16px;}h1, h2, h3, h4, h5, h6, .f__pop {font-family: "Poppins";font-weight:500}h1 { font-size:48px; }h2 { font-size:36px; }h3 { font-size:24px; }h4 { font-size:21px; }h5 { font-size:18px; }h6 { font-size:16px; }
</style>
<link rel="stylesheet" id="kc-general-css" href="./assets/kingcomposer.min.css" type="text/css" media="all">
<link rel="stylesheet" id="kc-animate-css" href="./assets/animate.css" type="text/css" media="all">
<link rel="stylesheet" id="kc-icon-1-css" href="./assets/icons.css" type="text/css" media="all">
<script type="text/javascript" src="./assets/jquery.js.download"></script>
<script type="text/javascript" src="./assets/jquery-migrate.min.js.download"></script>
<script type="text/javascript" src="./assets/typed.min.js.download"></script>

<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

<script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.uipasta.com\/wordpress-preview\/rolling\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.3"}};
        !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
</head>


<body class="home page-template page-template-homepage page-template-homepage-php page page-id-16 home-page kingcomposer kc-css-system loaded">

	<!-- Home & Menu Section Start -->
	<header id="header" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">  
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="logo">
							<h1 class="site-title"><a href="http://bancocn.com" rel="home">Banco da Coreia do Norte</a></h1>
							<p class="site-description">Nós amamos o capitalismo</p>
						</div>
					</div>

					<div class="col-sm-9">
						<div class="navigation-menu">
							<div class="navbar">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="navbar-collapse collapse">
									<ul id="onepage-menu" class="nav navbar-nav navbar-right">
										<li id="menu-item-9" class="smoth-scroll menu-item menu-item-type-custom menu-item-object-custom menu-item-9 active"><a href="http://www.bancocn.com">Home</a></li>
										<?php Category::render_menu(); ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Home & Menu Section End-->


	<div id="content">
  
