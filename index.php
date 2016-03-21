<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>News Feeder</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/default.css" />
	<script src="js/jquery-2.2.1.js" type="text/javascript"></script>
	<script src="js/myScript.js" type="text/javascript"></script>
	<script type="text/javascript">
	// function refreshTele(){
	// 	document.getElementById("content_1").innerHTML = getFeed("http://www.telegraaf.nl/rss/");
	// }

	// window.setInterval(refreshTele, 5000);

	// function refreshNu(){
	// 	document.getElementById("content_2").innerHTML = getFeed("http://www.nu.nl/rss");
	// }

	// window.setInterval(refreshNu, 5000);

	// function refreshVolks(){
	// 	document.getElementById("content_3").innerHTML = getFeed("http://www.volkskrant.nl/nieuws/rss.xml");
	// }

	// window.setInterval(refreshVolks, 5000);
	</script>
</head> 
<body>
	<div id="frame">
		<?php require_once "includes/functions.php"; ?>
		<div id="wrap">
			<ul id='topNavbar' class="nav nav-pills nav-justified">
				<li role="presentation"><a href="#content_1" class="selected">Telegraaf</a></li>

				<li role="presentation"><a href="#content_2">NU.nl</a></li>
				<li role="presentation"><a href="#content_3">Volkskrant</a></li>
			</ul>

			<div id="mainContent">

				<div id="content_1">
					<?php getFeed("http://www.telegraaf.nl/rss/"); ?>
				</div> <!-- end content 1 -->

				<div id="content_2">
					<?php getFeed("http://www.nu.nl/rss"); ?>		
				</div> <!-- end content 2 --> 

				<div id="content_3">
					<?php getFeed("http://www.volkskrant.nl/nieuws/rss.xml"); ?>
				</div> <!-- end content 3 -->
				
			</div> <!-- end main content -->
			
		</div> <!-- end wrap -->
	</div>
	<script type="text/javascript">
	 	setTimeout(function(){
	 		window.location.reload(1);
		}, 30000);
	</script>
</body>
</html>