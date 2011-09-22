<?php
//*****Contact Page*****//
	if(!is_array($_SESSION)) session_start();
	
	$send = true;
	if(!isset($_SESSION['info'])){$_SESSION['info'] = array();}
	if(!isset($_SESSION['error'])){$_SESSION['error'] = array();}
	
	if(isset($_POST['submit'])){
		
		$required = array('email');
		foreach($required as $name){
			if(empty($_POST[$name])){
				$_SESSION['error'][$name] = "<span class='error'>This field is required.</span><br />";
				$send = false;
		}
			else{unset($_SESSION['error'][$name]);}
		}
		
		if(!isset($_SESSION['error']['email']) && isset($_POST['email'])){
			if(!ereg ("^[^@ ]+@[^@ ]+\.[^@ \.]+$", $_POST['email'] )){ 
				$_SESSION['error']['email'] = "Please enter a valid email address.";
				$send = false;
			}
		}
		
		if ( $send ) {
			$email_content = "Message from Website - \n";
			$email_content .= "Name: $_POST[name]\n";
			$email_content .= "Email: $_POST[email]\n";
			$email_content .= "Message: $_POST[message]\n";
			$safe_email = str_replace("\r\n","",$_POST[email]);
			mail('godwearspants@gmail.com','Message from RainyDay Interactive',$email_content,"From: $safe_email\r\n");
			$message = "Thanks for your message!<br/>";
			unset($_POST);
		}
		
		$_SESSION['info'] = $_POST;
	}
	$s = $_SESSION['info'];
	
	function error($name){
		$error = '';
		if(isset($_SESSION['error'][$name])){
			$error = "<div class=\"red\"><strong>".$_SESSION['error'][$name]."</strong></div>";
		}
		return $error;
	}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta charset="UTF-8">
<!--
¡        ¡       ¡  ¡         
    ¡       @             
 ¡      @@@@@@@@@@       ¡
    @@@@@@@@@@@@@@@@@@     
  @@@@@@@@@@@@@@@@@@@@@@  
 @@@@@@@@@@@@@@@@@@@@@@@@ 
@@ RainyDay Interactive @@
@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@  @@@    @@   @@@  @@@@ 
 @    @     @@    @     @  
            @@            
            @@            
            @@   @        ¡
            @@   @         
             @@@@         
             
             
 Thanks for stopping by!!            
         
-->
<title>RainyDay Interactive</title>
<meta content='index, all' name='Robots' />
<meta content='RainyDay Interactive is the personal brand of Emma Steimann.' name='Description' />
<meta content='Emma Steimann' name='Author' />
<link href='/images/favicon.ico' rel='icon' />
<script src="jquery-1.5.min.js" type="text/javascript"></script>
<script src="main.js" type="text/javascript"></script>
<script src="rainpeople.js" type="text/javascript"></script>
<script src="raphael-min.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<link rel="stylesheet" href="font.css" type="text/css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21964990-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
	<div id="maintop">
	
		<div id="overlay">
		
		<div id="flashContent"></div>
		<div id="windthing"></div>
		<div id="banner">
		</div>
		<div id="logo" class="logo-<?=rand(1,4)?>"><h1>RainyDay Interactive</h1></div>
	</div>
	
	</div>
	<div id="nav">
	<ul>
	<li id="portnav"><a href="#portfolio" title="Portfolio Pieces"><span class="port"></span>Portfolio</a></li>
	<li id="aboutnav"><a href="#about" title="About RainyDay Interactive"><span class="about"></span>About</a></li>
	<li id="reznav"><a href="#resume" title="Resume of Emma Steimann"><span class="resume"></span>Resume</a></li>
	<li id="contnav"><a href="#contact" title="Contact Me!"><span class="contact"></span>Contact</a></li>
	</ul>
	</div>
	<div id="portfolio">
		<div id="kite" class="piecehead">
			<img src="images/kite2.jpg" />
			<img src="images/kite1.jpg" class="overlap"/>
			<a href="#" title="Scroll to Design a Kite"><span class="icon kite"></span>Design a Kite</a>
			<p>Design a Kite was a Flash application, where one can celebrate the spring by creating a kite and sharing it with friends.</p>
		</div>
		<div id="igdis" class="piecehead">
			<img src="images/igdis1.jpg" />
			<img src="images/igdis2.jpg" class="overlap"/>
			<a href="#" title="Scroll to Monitoring Growth & Development"><span class="icon igdis"></span>Monitoring Growth & Development</a>
			<p>Monitoring Growth & Development is a comprehensive student, staff and admin database management system for the U of M's Early Learning Labs Monitoring Growth & Development program.</p>
		</div>
		<div id="whoop" class="piecehead">
			<img src="images/whoop1.jpg" />
			<img src="images/whoop2.jpg" class="overlap"/>
			<a href="#" title="Scroll to Whoop Design Portfolio"><span class="icon whoop"></span>Whoop Design</a>
			<p>Whoop Design's Portfolio Site offered a unique way to showcase their work and blog about recent activities.</p>
		</div>
		<div id="neblot" class="piecehead">
			
			<img src="images/ne1.jpg" />
			<img src="images/ne2.jpg" class="overlap"/>
			<a href="#" title="Scroll to Nebraska Lottery Connect"><span class="icon nel"></span>Nebraska Lottery</a>
			<p>Nebraska Lottery Connect is an administrative database management system for the Nebraska State Lottery.</p>
		</div>
	</div>
	<div id="portbody" class="clearfix">
		<div id="kiteproj" class="portproj">
			<div class="leftsect">
					<img class="mainimg" alt="Design a Kite Screenshot" src="images/kite1big.jpg" />
					<img class="mainimg"  alt="Design a Kite Screenshot" src="images/kite2big.jpg" style="display:none;"/>
					<img class="mainimg"  alt="Design a Kite Screenshot" src="images/kite3big.jpg" style="display:none;"/>
				<div class="thumbnails">
					<img alt="Design a Kite Thumbnail" src="images/kite1tiny.jpg" />
					<img alt="Design a Kite Thumbnail" src="images/kite2tiny.jpg" />
					<img alt="Design a Kite Thumbnail" src="images/kite3tiny.jpg" />
				</div>
				<div class="bump">
					<p>
					<h4>Roles:</h4> Sole Developer
					</p>
					<p>
					<h4>Tech:</h4> Flash Player 10, ActionScript 3.0, PHP5, AMFPHP, MySQL
					</p>
					<p>
					<h4>Client:</h4> Whoop Design
					</p>
				</div>
			</div>
			<div class="rightsect">
				<div class="projhojpoj">
				<span class="headline"><h3>Design a Kite</h3></span>
				<br/>
				
				Design a Kite was a Flash application, where one can celebrate the spring by creating a custom-painted kite, choosing an avatar, writing a message and sharing it all with friends through email or posting to your Facebook wall. This project was AS3 intensive, and involved in-depth use of the Facebook AS3 API.
				
				</div>
			</div>
		</div>
		<div id="igdisproj" class="portproj">
					<div class="leftsect">
						<img class="mainimg" alt="Monitoring Growth & Development Screenshot" src="images/igdis1big.jpg" />
						<img class="mainimg" alt="Monitoring Growth & Development Screenshot" src="images/igdis2big.jpg" style="display:none;"/>
						<img class="mainimg" alt="Monitoring Growth & Development Screenshot" src="images/igdis3big.jpg" style="display:none;"/>
							<div class="thumbnails">
								<img alt="Monitoring Growth & Development Thumbnail" src="images/igdis1tiny.jpg" />
								<img alt="Monitoring Growth & Development Thumbnail" src="images/igdis2tiny.jpg" />
								<img alt="Monitoring Growth & Development Thumbnail" src="images/igdis3tiny.jpg" />
							</div>
							<div class="bump">
							
							
							<p>
							<h4>Roles:</h4> Sole Developer, Server Manager
							</p>
							<p>
							<h4>Tech:</h4> Ubuntu Linux Server, PHP5, MySQL, SOAP, cURL, jQuery
							</p>
							<p>
							<h4>Client:</h4> University of Minnesota
							
							</div>
						</div>
					<div class="rightsect">
						<div class="projhojpoj">
						<span class="headline"><h3>Monitoring Growth & Development</h3></span>
						<br/>
					
						Monitoring Growth & Development is a data management system for the U of M Early Learning Labs. The system allows teachers, parents and admins to generate reports, dynamic graphs, and create and sync new accounts. For the project I set up and customized a full Linux LAMP server to host multiple sites and built an entire CMS to manage millions of records.
						
						</div>
					
				</div>
			</div>
		<div id="whoopproj" class="portproj">
					<div class="leftsect">
						<img class="mainimg" src="images/whoop1big.jpg" />
						<img class="mainimg" src="images/whoop2big.jpg" style="display:none;"/>
						<img class="mainimg" src="images/whoop3big.jpg" style="display:none;"/>
						
							<div class="thumbnails">
								<img src="images/whoop1tiny.jpg" />
								<img src="images/whoop2tiny.jpg" />
								<img src="images/whoop3tiny.jpg" />
							</div>
							<div class="bump">
							
							<p>
							<h4>Roles:</h4> Sole Developer
							</p>
							<p>
							<h4>Tech:</h4> PHP5, MySQL, jQuery, WordPress
							</p>
							<p>
							<h4>Client:</h4> Whoop Design
							
							
							</div>
						</div>
					<div class="rightsect">
						<div class="projhojpoj">
						<span class="headline"><h3>Whoop Design Portfolio</h3></span>
						<br/>
						
						In early 2010, Whoop Design commissioned me to redo their portfolio site, offering a unique way to showcase their work and blog about recent activities. Built on WordPress and utilizing Jquery and custom plugins, the redone portfolio helped generate new business and allowed for users to keep up to date on Whoop's current clients.
						
						</div>
					
				</div>
			</div>
		<div id="neblotproj" class="portproj">
					<div class="leftsect">
						<img class="mainimg" src="images/neblot1big.jpg" />
						<img class="mainimg" src="images/neblot2big.jpg" style="display:none;"/>
						<img class="mainimg" src="images/neblot3big.jpg" style="display:none;"/>
							<div class="thumbnails">
								<img src="images/neblot1tiny.jpg" />
								<img src="images/neblot2tiny.jpg" />
								<img src="images/neblot3tiny.jpg" />
							</div>
							<div class="bump">
							
							<p>
							<h4>Roles:</h4> Developer
							</p>
							<p>
							<h4>Tech:</h4> C#.Net, LINQ to SQL, Microsoft SQL Server
							</p>
							<p>
							<h4>Client:</h4> Nebraska Lottery
							
							</div>
						</div>
					<div class="rightsect">
						<div class="projhojpoj">
						<span class="headline"><h3>Nebraska Lottery Connect</h3></span>
						<br/>
						While at IQ Marketing, I took over the role of C#/ASP.NET support for the Nebraska Lottery, building several expansions on the Nebraska Lottery Connect, a player maintanence site. I enhanced the site's administrative capabilities, added increased search functionality and corrected previously built less stable components.
						</div>
					
				</div>
			</div>
	</div>
	<div id="resume" class="clearfix">
		<div id="leftside">
			<span class="headline"><h2>Resume</h2> - <span class="ital">Download Resume <a href="EmmaSteimannResume.pdf">PDF</a><!-- or <a href="">Doc</a>--></span></span>
			<h3>Programming Languages</h3>
			<ul>
			<li>HTML/HTML5</li>
			<li>CSS/CSS3</li>
			<li>PHP</li>
			<li>ActionScript 3.0/MXML</li>
			<li>JavaScript</li>
			<li>Apache Ant/Ivy</li>
			<li>Java</li>
			<li>Processing</li>
			<li>C#/ASP.NET</li>
			<li>ColdFusion</li>
			<li>MySQL</li>
			<li>SQL/LINQ to SQL</li>
			
			</ul>
			<h3>Familiar Frameworks/Tech</h3>
			<br/>
			<span class="ital">Frontend:</span>
			<ul>
			<li>JQuery</li>
			<li>MooTools</li>
			<li>Processing.js</li>
			<li>Flex 3.0/4.0</li>
			</ul>
			<span class="ital">Backend:</span>
			<ul>
			<li>ColdBox</li>
			<li>CodeIgniter</li>
			<li>WordPress</li>
			<li>NodeJS</li>
			<li>Zend Framework</li>
			<li>SOAP</li>
			<li>Linux Ubuntu Server</li>
			<li>IIS</li>
			<li>ASP.NET MVC</li>
			<li>SVN/Git/TFS</li>
			</ul>
		</div>
		<div id="rightside">
		<h3>Associate Software Engineer / Olson </h3><span class="italright">2011&mdash;Present</span>
		<p>Working as Software Engineer, performing Frontend & Backend website development for Bauer Hockey & Target. Getting to stretch my talents using a wide variety of languages and frameworks, such as ColdFusion, ColdBox, Flex, PHP, Javascript, Apache Ant/Ivy and Java.</p>
		<h3>Web Developer / IQ Marketing </h3><span class="italright">2010&mdash;2011</span>
		<p>Worked as Frontend Developer, Backend Developer, performed server administration and interface design. Served as the primary Web Developer for C#/ASP.NET Plug-in Development on Nebraska Lottery Connect site.</p>
		<h3>Lead Web Developer / Whoop Design </h3><span class="italright">2010</span>
		<p>Worked as sole Frontend Developer, Backend Developer and Server Administrator on majority of client projects. Worked in a team with Designer to create interface and other interactive components.</p>
		<h3>Web Developer Intern / Avallo Multimedia </h3><span class="italright">2009</span>
		<p>As intern worked directly under lead developer, creating client websites and administrative CMS components.</p>
		<h3>Art Institutes International Minnesota </h3><span class="italright">March 2011</span>
		<p>B.S. Web Design &#38; Interactive Media <br/>Best In Show - Graduation Portfolio Show Winter 2011 </p>
		<h3>Speaker / MN.swf Camp </h3><span class="italright">April 2011</span>
		<p>ActionScript Animation Techniques in HTML5 <br/>
		<span class="fancy ital"><a href="http://rainydayinteractive.net/mnswf2011/" target="_blank">View Presentation</a></span>
		</p>
		
		
		</div>
	</div>
	<div id="aboconarea" class="clearfix">
		<div id="about" class="clearfix">
		<span class="headline"><h2>About RainyDay Interactive</h2></span>
		RainyDay Interactive is the personal brand of Emma Steimann. <br/><br/>Emma is an Interactive Developer currently based in the Twin Cities, focusing on PHP, ColdFusion, C#/ASP.NET, Flash and interface development. She received her Bachelors of Science in Web Design and Interactive Media from the Art Institutes International Minnesota. In her spare time she enjoys tinkering with just enough web languages to make her dangerous and still retain her stylish demeanor. 
		
		<div id="social" class="clearfix">
			<ul>
				<li ><a title="Email Me!" href="mailto:hello@rainydayinteractive.net"><span class="email"></span></a></li>
				<li ><a title="Follow Me on Twitter" target="_blank" href="http://twitter.com/esteimann"><span class="twitter"></span></a></li>
				<li ><a title="Check Out my LinkedIn" target="_blank" href="http://www.linkedin.com/in/emmasteimann"><span class="linkedin"></span></a></li>
			</ul>
		</div>
		</div>
		<div id="contact" class="clearfix">
		<span class="headline"><h2>Contact Me!</h2> - <span class="ital">Get <a href="EmmaSteimann.vcf">vCard</a></span></span>
		<form id="contactform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contactform">
		<?php echo $message ?>
		<label for="name">Name</label>
		
		<br/>
		
		<input type="text" id="name" name="name" value="" />
		<br/>
		<label for="email">Email*</label>
		<br/>
		<?=error('email')?>
		<input type="text" name="email" id="email" value="<?=@$s['email'] ?>" />
		<br/>
		<label for="message">Message</label>
			
		<br/>
		<textarea name="message" id="message"></textarea><br/>
		<input type="submit" name="submit" id="submit" value="Get in touch..." />
		<br/>
		</form>
		</div>
	</div>
	<div id="footer">
		<span id="seedino">Did you see the dinosaur?</span><br/>
		Copyright &copy; 2011 &mdash; Emma Steimann
	</div>
	<div id="cloud">
	<p>
	<span class="top">Beginning</span>
	<span class="rez">Resume</span>
	<span class="abocon">About &#38; Contact</span>
	</p>
	</div>
	
</body>
</html>