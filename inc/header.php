<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div id="disclaimer" style="position: fixed; width: 100%; right: 0; left: 0; background: #1c1c1c; opacity: 50%; z-index: 100000000; padding: 10px; text-align: center; color: #999">
        This site is for demonstration purposes only. To learn how to make this site, visit &nbsp;<a style="color: #EEE;" href="http://teamtreehouse.com/library/programming-2/build-a-simple-php-application">TeamTreehouse.com</a>.
	</div>

	<div class="header" style="padding-top: 40px;">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php if ($section == "shirts") { echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li>
			</ul>

		</div>

	</div>

	<div id="content">