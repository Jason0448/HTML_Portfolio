<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Personal Portfolio Website </title>
	<link href="../style2.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/0ec5e8cf2f.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
	<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
	<nav class="navbar">
		<div class="max-width">
				<div class="logo"><a href="#">Portfo<span>lio</span></a></div>
				<ul class="menu">
					<li><a href="#home" class="menu-btn">Home</a></li>
					<li><a href="#about" class="menu-btn">About</a></li>
					<li><a href="#services" class="menu-btn">Projects</a></li>
					<li><a href="#skills" class="menu-btn">Skills</a></li>
					<li><a href="#contact" class="menu-btn">Contact</a></li>
				</ul>
				<div class="menu-btn">
					<i class="fas fa-bars"></i>
				</div>
			</div>
		</nav>
		
		<!--home sectie start-->
		<section class="home" id="home">
			<div class="max-width">
				<div class="home-content">
					<div class="text-1"> Hello my name is</div>
					<div class="text-2"> <span>Jason Wong</span></div>
					<div class="text-3"> and i am a <span class="typing"></span></div>
					<a href="#">Sheeesh</a>
				</div>
			</div>
		</section>

			<!--about sectie start-->
				<section class="about" id="about">
					<div class="max-width">
						<h2 class="title">About me</h2>
						<div class="about-content">
							<div class="column left">
								<img src="../Images/image0.jpg" alt="">								 
							</div>
							<div class="column right">
								<div class="text">I am Jason Wong and i'm <span class="typing-2"></span></div>
								<p>Hello welcome to my website portfolio. My name is Jason Wong, i'm 17 years old and im studying to become a Full Stack Software developer. I learn alot of things on this education, examples are coding in different computer languages like c#, python, html and css. My hobby's are gaming with friends on my laptop, watching youtube/netflix or disney+ and playing soccer with my friends. I also really like traveling with my family, i've been to alot of countries like Spain, Portugal Italy, Greece, England, Sweden and i traveled to China two times in my life</p>
								<a href="#">Download CV</a>
							</div>
						</div>
					</div>
				</section>

			<!--Services sectie start-->
					<section class="services" id="services">
						<div class="max-width">
							<h2 class="title">My projects</h2>
							<div class="serv-content">
								<div class="card">
									<div class="box">
										<i class="fas fa-project-diagram"></i>
										<div class="text">Project</div>
										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nobis fuga exercitationem officiis assumenda molestias, et necessitatibus iure natus, quo voluptatibus commodi dolore repudiandae iste excepturi autem atque modi similique?</p>
									</div>
								</div>	
							<div class="card">
								<div class="box">
									<i class="fas fa-project-diagram"></i>
									<div class="text">Project</div>
									<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nobis fuga exercitationem officiis assumenda molestias, et necessitatibus iure natus, quo voluptatibus commodi dolore repudiandae iste excepturi autem atque modi similique?</p>
								</div>
							</div>								
							<div class="card">
									<div class="box">
									<i class="fas fa-project-diagram"></i>
									<div class="text">Project</div>
									<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nobis fuga exercitationem officiis assumenda molestias, et necessitatibus iure natus, quo voluptatibus commodi dolore repudiandae iste excepturi autem atque modi similique?</p>
								</div>
							</div>
					</div>								
					</div>							
				</div>
			</section>		

		<!--Skills section start-->
		<section class="skills" id="skills">
			<div class="max-width">
				<h2 class="title">My skills</h2>
				<div class="skills-content">
					<div class="column left">
						<div class="text">My creative skills & experiences.</div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero accusamus voluptatibus perspiciatis sapiente voluptas in quam, reprehenderit, suscipit enim temporibus, veritatis fugit necessitatibus incidunt! Incidunt obcaecati commodi iste fugiat inventore?</p>
						<a href="#">Read more</a>
					</div>
				<div class="column right">
					<div class="bars">
						<div class="info">						 
							<span>HTML</span>
							<span>70%</span>
						</div>
						<div class="line html" style="--my-html-width-var: 70%"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>CSS</span>
							<span>60%</span>
						</div>
						<div class="line css" style="--my-css-width-var: 60%"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>JavaScript</span>
							<span>50%</span>
						</div>
						<div class="line js" style="--my-js-width-var: 50%"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>PHP</span>
							<span>50%</span>
						</div>
						<div class="line php" style="--my-php-width-var: 50%"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>MySQL</span>
							<span>50%</span>
						</div>
						<div class="line mysql" style="--my-mysql-width-var: 50%"></div>
					</div>
				</div>
			</div>
		</div>			
	</section>

<!--Teams selectie start-->
<section class="teams" id="teams">
	<div class="max-width">
		<h2 class="title">My teams</h2>
		<div class="carousel owl-carousel">
			<div class="card">
				<div class="box">
				<img src="../Images/image0.jpg" alt="">
				<div class="text">Jason Wong</div>
				<p>Beste teammate ooit</p>
				</div>
			</div>
			<div class="card">
				<div class="box">
				<img src="../Images/travis.jpg" alt="">
				<div class="text">Travis Scott</div>
				<p>Rapper</p>
				</div>
			</div>
			<div class="card">
				<div class="box">
				<img src="../Images/jaumpje.jpg" alt="">
				<div class="text">Jaume</div>
				<p>Mn maatje</p>
				</div>
			</div>
			<div class="card">
				<div class="box">
				<img src="../Images/frenkie.jpg" alt="">
				<div class="text">Voetballer</div>
				<p>Balliman</p>
				</div>
			</div>
			<div class="card">
				<div class="box">
				<img src="../Images/sinatraa.jpg" alt="">
				<div class="text">Jay Sinatraa</div>
				<p>E sporter</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Contact section start-->
<section class="contact" id="contact">
		<div class="max-width">
			<h2 class="title">Contact me</h2>
			<div class="contact-content">
					<div class="column left">
					<div class="text">Get in touch</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nihil autem iure in inventore eligendi iusto ipsa est quidem. Voluptate unde voluptas quod nemo deserunt quisquam totam vitae consequatur repellendus.</p>
					<div class="icons">
						<div class="rows">
							<i class="fas fa-user"></i>
							<div class="info">
								<div class="head">Name</div>
								<div class="sub-title">Jason Wong</div>
							</div>
						</div>
						<div class="rows">
							<i class="fas fa-map-marker-alt"></i>
							<div class="info">
								<div class="head">Address</div>
								<div class="sub-title">Heemskerk, Nederland</div>
							</div>
						</div>
						<div class="rows">
							<i class="fas fa-envelope"></i>
							<div class="info">
								<div class="head">Email</div>
								<div class="sub-title">Jason.jpy.wong@gmail.com</div>
							</div>
						</div>
					</div>
				</div>
				<div class="column right">
					<div class="text">Message me</div>
					<form action="#" method="post">
						<div class="fields">
							<div class="field name">
								<input type="text" name="naam" placeholder="Name" required>
							</div>
							<div class="field email">
								<input type="email" name="email" placeholder="Email" required>
							</div>								
						</div>
						<div class="field Company name">
								<input type="text" placeholder="Company name">
							</div>
							<div class="field Address">
								<input type="text" placeholder="Address">
							</div>
							<div class='field Postcode'>
								<input type='text' name='postcode' placeholder="postcode">
							</div>
							<div class="field telefoonnummer">
								<input type="digits" name="telefoonnummer" placeholder="telefoonnummer" required>
							</div>
						<div class="field">
                            <input type="text" name="onderwerp" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="bericht" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="Send_message">Send_message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<?php

	$naam = "";
	$email = "";
	$postcode = "";
	$telefoonnummer = "";
	$onderwerp = "";
	$bericht = "";
	

	// array voor invoerfouten definiteren
	$invoerfouten = array();

// als op registreer wordt gedrukt
	
 	if (isset($_POST['Send_message'])){
		$naam		    = $_POST['naam'];
		$email 			= $_POST['email'];
		$postcode 	    = $_POST['postcode'];
		$telefoonnummer	= $_POST['telefoonnummer'];
		$onderwerp 		= $_POST['onderwerp'];
		$bericht 	    = $_POST['bericht'];	 
		
	 	
	if (empty($naam)){
		// als inlognaam niet is ingevuld(leeg), dan regel toevoegen aan array invoerfouten.
		array_push($invoerfouten,"Een voornaam en achternaam zijn verplicht");
	}
	if (ctype_alpha($naam) == false){
		// als inlognaam niet is ingevuld(leeg), dan regel toevoegen aan array invoerfouten.
		array_push($invoerfouten,"Een voor en achternaam kunnen geen cijfers bevatten.");
	}                       
	if (empty($email)){
		array_push($invoerfouten,"Een email adres is verplicht");
	}
	if(!filter_var($email)) {
		array_push($invoerfouten, "Ongeldig email adres");
	}
	if (empty($telefoonnummer)){
		array_push($invoerfouten,"Een telefoonnummer is verplicht");
	}
	if (is_numeric($telefoonnummer) == false)
    {
        array_push($invoerfouten, "telefoonnummer is niet numeriek.");
    }
	if(preg_match('/^\W*[1-9]{1}[0-9]{3}\W*[a-zA-Z]{2}\W*$/',  $postcode)) 
	{
        array_push($invoerfouten, "Dit is een ongeldig postcode.");
    } 
	

		if (count($invoerfouten) == 0) {
		// Database connectie opbouwen
		$conn = new mysqli("localhost", "root", "", "websiteportfolio");
		// Connectie controleren
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		}

		// insert statement samenstellen
		$sql = "insert into contact (naam, email, postcode, telefoonnummer, onderwerp, bericht)
		values('$naam', '$email','$postcode', '$telefoonnummer', '$onderwerp', '$bericht')";

		mysqli_query($conn, $sql);

		var_dump ($sql);

		} else
		{
		//als er invoerfouten zijn, voor elke regel de fout tonen.
		foreach ($invoerfouten as $invoerfout) {
		// voor iedere regel in het array de invoerfout tonen  tekstkleur rood.
		echo "<div style=color:red>" . $invoerfout . "</div>";
		}
 	}
	 }
	?>  <!-- einde php -->

	    <!-- footer section start -->
		<footer>
			<span>Created By <a href="https://www.codingnepalweb.com"></a>Jason Wong</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
		</footer>
	
	<script src="../script.js"></script>
</body>
</html>