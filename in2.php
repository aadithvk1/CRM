<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>

      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <meta charset="UTF-8">
	<title>Bhaccasyoniztas Beach Resort Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>
	
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="in.php"><img src="images/logo.png" alt="LOGO" height="112" width="300"></a>
				</div>
				
				<div id="navigation">
					<ul>
						<li class="selected">
							<a href="index.html">Home</a>
						</li>
						<li>
						<a href="login.php">Login</a>
						</li>
						<li>
							<a href="order.html">Order</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="foods.html">Food</a>
						</li>
						<li>
							<a href="news.html">News</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</div>
					<h3 align="right"><marquee>Welcome,<?= $fgmembersite->UserFullName() ?>
</marquee></h3>	
			
			
			<div id="contents">
			<h4 align="right"><a href="logout.php">Log out</a></h4>
				<div id="adbox">
					<img src="images/sea-sound.jpg" width="852px" height="425px">
					<h1>Glad you're here</h1>
					<p>
						You can buy our products officially from <a href="http://www.flipkart.com/">Flipkart</a>. You can replace your old inveter at good price. EMI options are available at various banks. Now you can power up your computers and house with "APC" UPS and Inverters.
					</p>
				</div>
				<div id="main">
					<div class="box">
						<div>
							<div>
								<h3>Latest Blog</h3>
								<ul>
									<li>
										<h4><a href="news.html">AMIGO GIVEAWAY WINNER THIS WEEK !!!</a></h4>
										<span>July 02, 2018</span>
										<p>
											Ebin. P, Colachel.
										</p>
									</li>
									<li>
										<h4><a href="news.html">Top 2 Customers of this week</a></h4>
										<span>July 02, 2018</span>
										<p>
											A. Anish.<br>
											X. Ashwin.
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="testimonials" class="box">
						<div>
							<div>
								<h3>Testimonials</h3>
								<p>
									“We are providing best UPS since 2000. We are certified by ISO9000-9001. We are happy in powering up your houses. We are the best. Thanks for choosing us.” <br><center><span>- <a href="index.html">Team AMIGO's</a></span></center>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div id="sidebar">
					<div class="section">
						<a href="order.html"><img src="images/rooms.png" alt="Img"></a>
					</div>
					<div class="section">
						<a href="signup.html"><img src="images/dive-site.png" alt="Img"></a>
					</div>
					<div class="section">
						<a href="foods.html"><img src="images/food.png" alt="Img"></a>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li class="active">
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="login.html">Login</a>
					</li>
					<li>
						<a href="order.html">Order</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
					<li>
						<a href="foods.html">Food</a>
					</li>
					<li>
						<a href="news.html">News</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2018 by AMIGO's . All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>