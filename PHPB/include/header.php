<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<meta name="keywords" content="Liberal Arts and Sciences, University, Humanities, Liberal Education, College, University of Florida, Gainesville, African and Asian Languages, Anthropology, Astronomy, Botany, Biology, Chemistry, Communication Sciences and Disorders, Criminology Law and Society, English, Geography, Geological Sciences, History, Mathematics, Philosophy, Physics, Political Science, Psychology, Religion, Romance Languages and Literatures, Sociology, Statistics, Zoology, African Studies, Bob Graham Center, European Studies, France Florida Research Institute, Greek Studies, Hindu Traditions, Jewish Studies, LUECI, Latin-American Studies, Medieval and Early Modern Studies, Paris Research Center, Women's Studies and Gender Research, Linguistics, African American Studies, Asian Studies, Linguistics, Oral History Program, Quantum Theory Project, Upward Bound Program, Academic Advising" />
		<meta name="description" content="The UF College of Liberal Arts and Sciences constitutes the intellectual core of the university. Its principal mission is to lead the academic quest to understand our place in the universe, and to help shape our society and environment.">
		<link rel="stylesheet" href="css/master.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="css/<?php echo $page; ?>.css">
		<link rel="icon" href="image/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>
		<header>
			<!-- blue section with the two UF logos -->
			<div class="maxWidth top-container" id="logoSection">
					<div id="dept">
						<span>
							<a href="http://www.clas.ufl.edu/">
								<img src="image/CLASUF.png" alt="">
							</a>
						</span>
					</div>
					<div id="uf">
						<span>
							<a href="http://www.ufl.edu/">
								<img src="image/uf.png" alt="">
							</a>
						</span>
					</div>
			</div><!-- # logos -->

			<!-- MOBILE Navigation | display: none @ 992px -->
			<dl class="headerMobile" id="myHeaderMobile">
				<dt>Menu</dt>
				<dd>
				    <ul>
<?php if ($page !== "index") { ?>
				      <li><a href="index.php">Home</a></li>
<?php } ?>
				      <li><a href="admission.php">Admission</a></li>
				      <li><a href="courses.php">Course Information</a></li>
				      <li><a href="features.php">Program Features</a></li>
				      <li><a href="finances.php">Financial Information</a></li>
				      <li><a href="faq.php">FAQ</a></li>
				      <li><a href="advising.php">Advising</a></li>
				      <li><a href="alumni.php">Alumni Success</a></li>
							<li><a href="faculty.php">Faculty</a></li>
							<li><a href="contact.php">Contact</a></li>
				      <li><a href="apply.php">Apply</a></li>
							<li><a href="current.php">Current Students</a></li>
				      <li class="newlyAdmittedBackground"><a href="newstudents.php">Newly Admitted Students</a></li>
				    </ul>
				</dd>
			</dl>
			<div class="clear"></div>

			<!-- DESKTOP Navigation | display: block @ 992px -->
			<nav class="header desktopNav" id="myHeader">
				<div class="maxWidth">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="admission.php">Admission</a></li>
						<li><a href="courses.php">Courses</a></li>
						<li><a href="finances.php">Financing</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="advising.php">Advising</a></li>
						<li><a href="apply.php">Apply</a></li>
						<div class="clear"></div>
					</ul>
				</div><!-- max width -->
			</nav>

			<div class="content">
				<img class="desktopImage" src="image/<?php echo $page; ?>_desktop.jpg" alt="College of Liberal Arts and Sciences Human Resources">
				<img class="mobileImage" src="image/<?php echo $page; ?>.jpg" alt="College of Liberal Arts and Sciences Human Resources">
			</div>

		</header>

		<div id="container">

			<h1>Pre-Health Post-Baccalaureate Program <span id="shrinkPHPBLogo">(PHPB)</span></h1>
<?php require_once("include/sidebar.php"); ?>
