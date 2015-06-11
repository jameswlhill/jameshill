<?php
/**
 * Index page for jameshill.us
 */

include("php/contact.php");
?>

<!DOCTYPE html>
<html>
	<!--

 ..................................OMMM OMMM....................................
...................................DMMM.8MMM....................................
..  .....  ........................DMMM.8MMM....................................
...................................DMMM.8MMM....................................
............................. ZMMD.DMMM.8MMM.OMMN ..............................
..............................MMMM.DMMM.8MMM.NMMM ..............................
..............................MMMM.DMMM.8MMM.NMMM ..............................
..............................MMMM.DMMM.8MMM.NMMM ..... .... ..... .............
............... .....  ... .  MMMM.DMMM.8MMM.NMMM          .
............     . ..  ... . .MMMM.DMMM.8MMM.NMMM .. .. .. . ..  . .   ..  .. .
............ .   . ..  ... .  MMMM.DMMM.8MMM.NMMM ..... .  . ..  .       . ....
............ .   . ..  ... . .MMMM.DMMM.8MMM.NMMM          . .
............ .   . .   . . . .MMMM.DMMM.8MMM.NMMM  ....  . . ..              .
............             .   .MMMM.DMMM 8MMM.NMMM    .     . ..
..................... .. . . .MMMM.DMMM.8MMM.NMMM    .     .
....................  .      .MMMM.DMMM.DMMM.NMMM
............     . .         .MMMM8MMMMMMMMM8DMMM
............       .         .MMMMMMMMMMMMMMMMMMM
............                 DMMMMMD+,...,+OMMMMM8
......IMMMMMMMMMMMMMMMMMMMMMMMMMM+          .+MMMMMMMMMMMMMMMMMMMMMMMMMMI.
..... MMMMMMMMMMMMMMMMMMMMMMMMM=               +MMMMMMMMMMMMMMMMMMMMMMMMD.
........,,,,,,,,,,,,,,,,,,MMMM+                 .MMMN,...................    .
$MMMMMMMMMMMMMMMMMMMMMMMMMMMM+.                  =MMMMMMMMMMMMMMMMMMMMMMMMMMMMZ.
MMMMMMMMMMMMMMMMMMMMMMMMMMMMM.                   .MMMMMMMMMMMMMMMMMMMMMMMMMMMMM=
.ONNNNNNNNNNNNNNNNNNNNNNNMMMM.                    MMMM88888888888888888888888$.
 777777777777777777777777MMMM                     MMMMZZZZZZZZZZZZZZZZZZZZZZZ$,.
MMMMMMMMMMMMMMMMMMMMMMMMMMMMM.                    MMMMMMMMMMMMMMMMMMMMMMMMMMMMM+
ZMMMMMMMMMMMMMMMMMMMMMMMMMMMM+                   +MMMMMMMMMMMMMMMMMMMMMMMMMMMM$.
..........................MMMM=                 .MMMM:,,,,,,,,,,,,,,,,,..
..... NMMMMMMMMMMMMMMMMMMMMMMMM+               +MMMMMMMMMMMMMMMMMMMMMMMMD.
......7MMMMMMMMMMMMMMMMMMMMMMMMMM+           ~MMMMMMMMMMMMMMMMMMMMMMMMMM?.
........                     DMMMMMD+,   .=OMMMMM8
............. ....  . .      .MMMMMMMMMMMMMMMMMMM
............    ..  . .      .MMMM8MMMMMMMMM8DMMM
............  .. .  . .      .MMMM.8MMM.8MMM.DMMM
............     .           .MMMM.8MMM 8MMM.DMMM
............  .. .  . .      .MMMM.8MMM 8MMM.DMMM
............. .... .....     .MMMM.8MMM 8MMM.DMMM
............     .           .MMMM.8MMM 8MMM.DMMM
............. .... .....     .MMMM.8MMM 8MMM.DMMM
............. .... .. .      .MMMM.8MMM 8MMM DMMM
............  ....  . .      .MMMM.8MMM 8MMM.DMMM
............  ....  . .      .MMMM.8MMM 8MMM.DMMM
............     .           .MMMM.8MMM 8MMM.DMMM
............     .           .MMMM.8MMM 8MMM DMMM
............. .... .....      ZMMN 8MMM 8MMM.ZMMM
............    ..  . .        ..  8MMM 8MMM. .,
............  .... .. .            8MMM 8MMM.
............  ....  . .            8MMM 8MMM.
............  ....  . .            ZMMM ZMMM
............     .                  :,   .:.

	-->
	<head lang="en">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>James Hill</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" />
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Google Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'/>
		<link href='//fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poiret+One">
		<link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="/css/style.css"> <!-- jquery timeline style -->
		<link rel="shortcut icon" href="/img/blackzia.ico">

		<!-- Custom Stylesheet -->
		<link rel="stylesheet" type="text/css" href="/css/custom.css"/>

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="/lib/modernizr.js"></script>
	</head>
	<body>
		<div id="home">
			<div class="container">
				<!--Nav-->
				<nav class="navbar navbar-inverse navbar-fixed-top" id="top-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img class="navbar-brand" src="/img/turqonblackzia.png" />
					</div> <!--End Navbar Header -->
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#about">About Me</a></li>
							<li><a href="#resume">My Resume</a></li>
							<li><a href="#education">Education</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="//github.com/jameswlhill">My GitHub</a></li>
						</ul>
					</div>
				</nav> <!--End Nav -->
			</div> <!--End Nav Container -->
			<div class="jumbotron" id="zia">
				<div id="welcome" class="col-lg-12 col-lg-offset-1 col-md-12 col-xs-12">
					<h1>Welcome,</h1></br>
					<h1>My name is James Hill</h1>
				</div>
				<div class="col-lg-12 col-lg-offset-3 col-md-12 col-xs-12">
					<figure class="text-center">
						<img class="img-thumbnail img-circle img-responsive pull-left" src="/img/mecorrales.jpg" alt="me">
					</figure>
					<div class="col-md-6 col-offset-4">
						<p>
							I live in beautiful New Mexico with my amazing girlfriend and our dog.
							I dabble in many things, but here's a short snapshot of projects I've been pursuing most recently...
						</p>
					</div>
				</div>
			</div>
			<div class="jumbotron" id="attemptatmobilefix"></div>
			</div>
		</div>

		<div class="jumbotron" id="about">
				<div class="row" id="clear"></div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-xs-12">
						<div class="thumbnail">
							<img id="bottle" src="/img/bottle.jpg"/>
							<div class="caption">
								<h2 id="brewingcaption">Brewing!</h2>
								<p>
									I've been home brewing now for a couple years, and I love it! I'm currently working with my wonderful girlfriend to
									form a production and licensing company for an amazing and innovative new alcoholic beverage. Some of our less-classified concoctions
									as of late include a roasted dandelion root American stout, and a home-made bitters exhibiting some great herbal selections native to our
									home, New Mexico.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12">
						<div class="thumbnail">
							<img id="code" src="/img/code.jpg"/>
							<div class="caption">
								<h2 id="codingcaption">Coding!</h2>
								<p>
									I'm always reading the latest headlines from various technological journals, web design consortiums, and code forums such as Stack Overflow.
									I'm especially interested in server-side JavaScript technologies such as the MEAN stack, as well as full stack web app development platforms
									such as Meteor.js.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12">
						<div class="thumbnail">
							<img src="/img/orangeaero.png"/>
							<div class="caption">
								<h2 id="horticaption">Horticultural Research</h2>
								<p>
									I've been interested in plant biology for a number of years, and have grown many varieties of vegetables
									and medicinal phenotypes in various growing environments. I'm particularly interested in sustainable
									aeroponic/aquaponic environments designed to reduce the cost of production and transportation, while
									simultaneously increasing nutrient content and reducing spoilage.
								</p>
							</div>
						</div>
					</div>
				</div>
		</div>

		<div class="jumbotron" id="resume">
			<div class="row">
				<div class="col-xs-12 col-lg-8 col-lg-offset-2">
					<section class="panel panel-default">
						<div id="resumepanel" class="panel-body">
							<article class="panel-body">
								<figure class="text-center">
										<h3>My Resume</h3>
										<p>Appists LLC</p>
								</figure>
							</article>
							<hr>
							<article>
								<h4>
									<strong>Contact Info</strong>
								</h4>
								<dl class="dl-horizontal">
									<dt>Email:</dt>
									<dd>james@appists.com</dd>
									<dt>Cell:</dt>
									<dd>(505) 695-2310</dd>
								</dl>
							</article>
							<hr>
							<article>
								<h4>
									<strong>Skills</strong>
								</h4>
								<dl class="dl-horizontal">
									<dt>Languages:</dt>
									<dd>HTML5, CSS3, JavaScript, PHP, SQL, Spanish, and Ancient Greek</dd>
									<dt>Frameworks:</dt>
									<dd>jQuery, Bootstrap, Bowtie, Meteor, PhoneGap</dd>
								</dl>
							</article>
							<hr>
							<article>
								<h4>
									<strong>Experience</strong>
								</h4>
								<dl class="dl-horizontal">
									<dt>2012-Present</dt>
									<dd>Co-Founder and Project Manager Appists LLC</dd>
									<dt>2014-Present</dt>
									<dd>CTO HoneyMoon Brewery</dd>
								</dl>
							</article>
							<hr>
							<article>
								<h4>
									<strong>Projects</strong>
								</h4>
								<dl class="dl-horizontal">
									<dt>CrowdSifter:</dt>
									<dd>Real-time movement tracker using the MEAN stack</dd>
									<dt>Personal Website:</dt>
									<dd>Ground-up design and manual implementation of all components</dd>
									<dt>Cheqout:</dt>
									<dd>DDC boot camp capstone team project built with LAMP stack and JavaScript</dd>
								</dl>
							</article>
							<hr>
						</div>
					</section>
				</div>
			</div>
		</div>

		<div class="jumbotron" id="education">
			<!-- Vertical Animated Timeline JQuery Plugin-->
			<div class="container">
				<h2>My Education</h2>
			</div>
			<section id="cd-timeline" class="cd-container">
				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-picture">
						<img src="/img/griffin.jpeg" alt="Prep Logo">
					</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h2>Santa Fe Prep</h2>
						<p>
							I attended this private college preparatory school in Santa Fe, NM for all six years of middle school and high school.
							Prep instilled in me a love of literature that continues to this day, and provided a solid framework for study and self assessment
							which has made all subsequent work and study much more straight-forward and comfortable to approach.
						</p>
						<a href="//www.sfprep.org/" class="cd-read-more">Visit Prep's Site</a>
						<span class="cd-date">2003</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-picture">
						<img src="/img/sjclogo.png" alt="Saint John's Logo">
					</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h2>St. John's College Santa Fe</h2>
						<p>
							St. John's was a unique opportunity that I could not bring myself to pass up. Having lived in Hawaii for two years after graduating from Prep,
							I decided to put a hold on the eternal summer that I had found there. Once again, I shifted my focus back towards strict academic indulgences. A beautiful
							four-year program ensued in which I lived and breathed philosophy, literature, as well as traditional western sciences and mathematics.
						</p>
						<a href="//www.sjc.edu/" class="cd-read-more">Visit Site</a>
						<span class="cd-date">2012</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-picture">
						<img src="/img/ddcicon.png" alt="Deep Dive Logo">
					</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h2>Deep Dive Coders</h2>
						<p>
							The web development course offered through CNM has really brought me up to speed on many modern techniques and
							technologies utilized in the creation of web sites and web applications. From instruction on technical design and execution, to business
							mentorship and professional networking, this program has really taken my creativity to the next level and has opened plenty of new doors to explore.
						</p>
						<a href="//bootcamp-coders.cnm.edu" class="cd-read-more">Discover Bootcamp</a>
						<span class="cd-date">2015</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->
			</section>
		</div> <!-- End Timeline -->

		<div class="jumbotron" id="projects">
			<section>
				<div class="page-header" id="gallery">
					<h2>Projects I've Worked On</h2>
				</div>
				<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#screenshot-carousel" data-slide-to="1"></li>
						<li data-target="#screenshot-carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<a href="//bootcamp-coders.cnm.edu/~jhill/cheqout/shop/index.php">
								<img class="first-slide" src="/img/cheqout.png" alt="project screenshot">
							</a>
							<div class="container">
								<div class="carousel-caption">
									<h3>Ecommerce Site for DDC</h3>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="//www.honeymoonbrewery.com/">
								<img class="second-slide" src="/img/honeymoon2.jpg" alt="project screenshot">
							</a>
						</div>
						<div class="item">
							<img class="third-slide" src="/img/mysite.png" alt="project screenshot">
						</div>
					</div> <!-- end carousel inner-->
					<a href="#screenshot-carousel" class="left carousel-control" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a href="#screenshot-carousel" class="right carousel-control" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a> <!--End carousel controls -->
				</div> <!--end carousel -->
			</section>
		</div>

		<div class="row" id="contact">
			<div class="container">
				<div class="container">
					<h2>Drop me a line!</h2>
				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 form-wrap">
					<form method="post" action="./php/contact.php" id="contact-form" class="form-horizontal col-xs-10 col-xs-offset-1" role="form">
						<div class="form-group">
							<label for="name" class="control-label">Your Name</label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</div>
								<input type="text" class="form-control" id="name" name='name' placeholder="What's your name?" maxlength="150" value="<?php echo htmlspecialchars($_POST['name']); ?>" />
								<?php echo "<p class='text-danger'>$errName</p>";?>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="control-label">Preferred Email</label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</div>
								<input type="email" id="email" name='email' class="form-control" maxlength="150" placeholder="Please enter your preferred email" value="<?php echo htmlspecialchars($_POST['email']); ?>"/>
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label" for="message">How May I Help You?</label>
							<textarea class="form-control" rows="5" id="message" name="message" maxlength="500" placeholder="500 characters max."><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>

						<div class="form-group">
							<button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
						</div>

						<div class="form-group">
							<?php echo $result; ?>
						</div>
						<div id="output"></div>
					</form>
				</div>
			</div>
		</div>
		<!--JavaScript resources-->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/lib/custom.js"></script> <!-- gallery carousel and timeline animations -->
	</body>
</html>