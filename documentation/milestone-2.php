<?php
/**
 * Milestone-2 outlines my PWP personas, use cases, proposed site map, and proposed features/functionality
 *
 * @author James Hill <james@jameshill.us>>
 */
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="../css/img.css" rel="stylesheet" type="text/css" >
		<title>Milestone-2</title>
	</head>
	<body>
		<header>
			<h1>James Hill's Personal Website Project Milestone-2</h1>
		</header>
		<section>
			<h3><strong>Introduction:</strong></h3>
			<p>
				The following abstract outlines the User Experience and Interaction Design for James Hill’s Personal
				Website Project. This project is a professional portfolio website with a focus on James’ technical skills,
				interests, and education. The site will be designed to cater to a wide variety of professionals and personal
				contacts. The target audience may include: startup founders, hiring managers, recruiters, peers, as well as
				friends and family. The primary goal of this site is for users to learn more about James on a personal level
				as well as his background in web development. The site will then allow users to initiate contact in regards to
				employment or collaboration opportunities through the contact form, and/or the connected social media profiles.
			</p>
		</section>
		<section>
			<h3><strong>Persona:</strong></h3>
			<p>
				<strong>Name: </strong>Timaios Finnegan
				<strong>Age: </strong>54
			</p>
			<p>
				<strong>Profession:</strong>
				Co-Founder and President of ziadesigns.com, an established web design firm in Santa Fe, NM that is looking to
				hire a full-time, in-house Full Stack Developer with plenty of experience in PHP and Front-End Design. Mr. Finnegan
				primarily wishes to hire someone capable of building custom WordPress solutions for his clients. ZiaDesigns has
				been growing steadily since 2011, solidifying a multitude of loyal local business clients, most of whom require
				WordPress plugins designed specifically for their business needs.
			</p>
			<p>
				<strong>Technology:</strong>
				Primarily, Timaios is a Mac user, however he also tends to keep around various installs of linux and android for testing
				and admin purposes. He uses a 5K iMac Desktop with a 30” cinema display while in the office,
				a 13 inch MacBook Pro laptop with retina display at home, and always carries his iPhone 6 with an unlimited 4G data connection.
				He also just purchased a Samsung Galaxy S6 and an HTC One, both running Lollipop.
			</p>
			<p>
				<strong>Attitudes/Behaviors:</strong>
				Typically dividing the majority of his time between his existing or prospective clients, Timaios is immediately
				repelled by any site that is not concise and to the point. He, like most busy CTO’s, will not spend more than 5 minutes max
				looking at anyone’s portfolio, and only about 30 seconds on a resume. Timaios is also a very grassroots professional,
				often opting for local development talent over freelancing remote workers.
			</p>
			<p>
				<strong>Needs:</strong>
				Timaios is on the hunt for a unique candidate. They should be a strong team player as well as someone who is well-versed
				in the technologies preferred by the company. This includes HTML5, CSS3, JavaScript and JQuery, Node.js, SQL and NoSQL databases,
				as well as PHP for building custom WordPress plugins. The ideal hire will also be someone local, who shares the same cultural
				background as ZiaDesign’s primarily New Mexican clientele and who will be available to work as needed in the local office.
			</p>
			<p>
				<strong>Goals:</strong>
				Timaios has a lot on his plate and needs to find what he’s looking for within five minutes of finding the potential
				candidate’s site. If the site is well-organized and to the point, this will suit his needs, giving him immediate
				access to the applicant's personality and examples of previous work in a mere two or three clicks.
			</p>
			<p>
				<strong>Ideal Features:</strong>
			</p>
			<p>
				<ul>
					<li>
						Call to action for either learning more about the candidate, or immediately sending that candidate an email via contact form
					</li>
					<li>
						Mobile first design with minimalist, yet elegant and effective components
					</li>
					<li>
						Simple, non-invasive contact form
					</li>
					<li>
						Simple, intuitive site navigation
					</li>
					<li>
						Slick portfolio page with informative project summaries
					</li>
				</ul>
			</p>
		</section>
		<section>
			<h3><strong>Use Case:</strong></h3>
			<p>
				From his office desktop monitor, our potential employer peruses jameshill.us after remembering James from a recent
				ABQ Startup Weekend event. He’s presented with a simple greeting message and call to action with less than 100% opacity.
				The two Calls to Action are ‘About James’ or ‘Contact James’. Since Timaios is already somewhat familiar with James’
				previous work and skill set, he is only interested in dropping a quick line to express interest in hiring James.
				So, clicking ‘Contact James’, the landing screen fades away while slowly bringing a contact form into clear view.
				This form will have social media icons/glyphs as options above the blank contact fields, in case Timaios prefers to
				contact James via LinkedIn or do further personal research via Twitter. If not, he can continue to fill out the simple
				form requirements, which will then allow him to send a brief e-mail to James’ professional account, james@appists.com.
			</p>
			<div class="container">
			<figure>
				<img src="../img/contactflow.png" id="contactflow" class="sketch" alt="use case flow chart" />
			</figure>
			</div>
		</section>
		<section>
			<h3><strong>Proposed Site Map:</strong></h3>
			<p>Site will consist of 5 top-level pages, as well as a Call to Action landing page.</p>
			<p>
				<ul>
					<li>Call to action landing page</li>
					<li>Home Page</li>
					<li>About Me</li>
					<li>Education</li>
					<li>Projects</li>
					<li>Contact Me</li>
				</ul>
			</p>
			<figure>
				<img src="../img/pwpwireframe2.png" id="pwpwireframe" class="sketch" alt="Personal site wireframe" />
			</figure>
			<p>
				<h4><strong>Call to Action:</strong></h4>
				<p>
					This will be a landing page for all visitors, which will consist of a logo, home page link in the top right corner,
					a brief greeting, and two easy options to either go to the 'About James' page or the 'Contact James' contact form page.
				</p>
				<h4><strong>Home Page:</strong></h4>
				<p>
					This will mainly be a stylish site navigation page, with a 'JH' diamond logo in the top left corner, a top right nav menu,
					acontact/company info in the footer, as well as a centrally placed menu for additional site pages. This menu will consists
					of a turqoise-on-black zia symbol, the four terminals of the zia symbol being the internal site links to the other pages.
					The home page will also include links to my social media accounts (LinkedIn, Facebook, and Twitter).
				</p>
				<h4><strong>About Me:</strong></h4>
				<p>
					This will consist of similar header and footer navs, with a high quality jumbotron photo of a New Mexican landscape.
					Beneath that photo, there will be several thumbnails consisting of simple imagery and explanatory captions beneath.
					Each of these will be interactive. If the user clicks on a thumbnail, a hidden box will be produced with JQuery giving
					more details and options about that particular interest of mine. Examples of thumbnails may be things such as hobbies,
					professional associations, and technological interests.
				</p>
				<h4><strong>Education:</strong></h4>
				<p>
					This page will have similar header and footer navs. The main attraction will be an interactive, event-driven JQuery
					timeline of my educational milestones and achievements. As the user drags the cursor left or right on the page,
					the timeline will move a highlighted/animated section across the line itself and then highlight each node/milestone in turn,
					which can then be hovered over for more information.
				</p>
				<h4><strong>Projects:</strong></h4>
				<p>
					This will be an interactive JQuery carousel slideshow of previous development experiences and projects. If a thumbnail
					in the slide is clicked, it will open various websites, web apps, or GitHub repositories that I’ve worked on in a new window.
				</p>
				<h4><strong>Contact Me:</strong></h4>
				<p>
					This will consist of a simple, clean-looking contact form where the user can easily send a message to my professional
					email account, designate their own contact preferences, as well as link to my social media accounts.
				</p>
			</p>
		</section>
		<section>
			<h3><strong>Proposed Features/Functionality:</strong></h3>
			<p>
				<ul>
					<li>Top right drop-down/drop-side triple-line nav menu on all pages</li>
					<li>Social media links and contact/company info on footer of all pages</li>
					<li>Interactive education timeline using JavaScript/JQuery</li>
					<li>Interactive carousel slider for past projects/portfolio gallery using JQuery</li>
					<li>Interactive contact form</li>
					<li>Option to download CV and Resume in pdf format</li>
				</ul>
			</p>
		</section>
	</body>
</html>