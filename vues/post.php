<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	    <meta name="description" content="Page présentant le portfolio de chaque membre de l'association ITeams"/>
	    <meta name="author" content="Gaetan Jonathan"/>
	    <meta name="keywords" content="portfolio, membres, iteams, association, jeunes"/>
	    <!-- Page title -->
		<title><?= $fullname; ?></title>
	    <!-- End -->
		<link rel="shortcut icon" type="image/x-icon" href="../libs/img/iteams.png" />
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="./libs/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./libs/css/et-lineicons.css">
		<link rel="stylesheet" href="./libs/css/font-awesome.css" />
		<link rel="stylesheet" href="./libs/css/magnific-popup.css" />
		<link rel="stylesheet" href="./libs/css/owl.carousel.min.css" />
		<link rel="stylesheet" href="./libs/css/owl.theme.default.min.css" />
		<link rel="stylesheet" href="./libs/css/aos.css" />
		<link rel="stylesheet" href="./libs/css/style.css" />
        <?php 
            if ( $dark_mode == 1 ) echo '<link rel="stylesheet" href="./libs/css/dark.css" />';
        ?>
	    <link rel="stylesheet" href="./libs/bootstrap/css/style.css">
	    <link rel="stylesheet" type="text/css" href="./libs/css/pinegram.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	</head>

<body>
    <!-- Mobile Menu -->
	<div class="body-overlay"></div>
	<div id="box-mobile-menu" class="box-mobile-menu"> <a href="javascript:void(0);" id="back-menu" class="back-menu"><i class="fa fa-angle-left"></i></a> <span class="box-title">Menu</span>
		<a href="javascript:void(0);" class="close-menu"></a>
		<div class="box-inner"></div>
	</div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" id="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="https://iteam-s.mg"><!-- <img src="assets/img/iteams.png" class="logo-img" alt="iTeams-$"></a> -->
            <a class="menu-bar mobile-navigation" href="javascript:void(0)"> <span class="menu-btn-icon">
                <span></span> <span></span> <span></span> </span>
            </a>
            <!-- Navigation -->
            <nav id="primary-navigation" class="site-navigation">
                <div class="main-menu-wrapper"></div>
                <div id="navbarSupportedContent" class="main-navigation" data-width="1007">
                    <ul id="menu-main-menu" class="nav menu-nav clone-main-menu kunka-nav main-menu">
                        <li class="nav-item menu-item page-active"> <a class="nav-link active" href="#particles-js" data-scroll-nav="0" style="font-size: 16px;">Accueil</a></li>
                        <li class="nav-item menu-item"> <a class="nav-link text-white" href="#about" data-scroll-nav="1" style="font-size: 16px;">A propos</a> </li>
                        <li class="nav-item menu-item"> <a class="nav-link text-white" href="#competences_menu" data-scroll-nav="2" style="font-size: 16px;">Compétences</a> </li>
                        <li class="nav-item menu-item"> <a class="nav-link text-white" href="#experience" data-scroll-nav="3" style="font-size: 16px;">Expériences</a> </li>
                        <li class="nav-item menu-item"> <a class="nav-link text-white" href="#educations_menu" data-scroll-nav="4" style="font-size: 16px;">Formations</a> </li>
                        <li class="nav-item menu-item"> <a class="nav-link text-white" href="#educations_menu" data-scroll-nav="4" style="font-size: 16px;">distinction</a> </li>  
             	        <li class="nav-item menu-item"> <a class="nav-link text-white" href="#contact_menu" data-scroll-nav="5" style="font-size: 16px;">Contacts</a> </li>          
                    </ul>
                </div>
            </nav>
        </div>
    </nav>

    <!-- Content -->
    <div class="craig-side-content">
        <!-- Header -->
        <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="8" data-background="<?=$membre_info["pdc"]?>" data-stellar-background-ratio="0.5">
             <div id="particles-js"></div>
            <div class="container">
                <div class="row">
                    <div class="text-center offset-md-7 offset-xs-6 caption mt-30" data-aos="fade-up">
                        <h1><?= $fullname; ?></h1>
                        <h4><span>
                            <span class="typewrite" data-period="2000" data-type='<?= json_encode($fonction_pers); ?>'>
                            <span class="wrap"></span></span></span>
                        </h4>
                        <?php 
                            if (!empty($cv))
                                echo '<a href="'.$cv.'" class="buton buton-null mt-30 default-button button-black"><span>Télécharger mon CV</span></a>';
                            else 
                                echo '<a href="#contact_menu" data-scroll-nav="5" class="buton buton-null mt-30 default-button button-black"><span>Me contacter</span></a>';
                        ?>
                    </div>
                </div>
            </div>
        </header>

       <!-- About -->
        <div class="section py-6" id="about" role="doc-part" data-scroll-index="1">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="section-content wow slideInLeft">
                        <h1 class="text-white">A propos de moi</h1>
                        <hr class="theme-style-left">
                        <div>
                            <h6 style="color: #888;" class="text-grey"><?= $description_pers; ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="vcard-profile wow slideInRight">
                        <div class="img-place">
                            <img src="<?= $photo_pers; ?>"  alt="">
                        </div>
                        <div class="detailed-profile">
                            <span class="name" style="world-wrap: break-word !important; "><?= $fullname; ?></span>
                            <div class="phone">
                                <span class="ti-mobile"></span>&nbsp; <?= $tel; ?>
                            </div>
                            <div class="address">
                                <span class="ti-map-alt"></span>&nbsp; <?= $adresse; ?>
                            </div>
                            <div class="email">
                                <span class="ti-email"></span>&nbsp; <?= $email; ?>
                            </div>
                            <div class="sosmed-container">
                                <a href="https://www.linkedin.com/in<?= $linkedin; ?>" class="btn btn-fab-outline sosmed-link">
                                    <span class="ti-linkedin"></span>
                                </a>
                                <a href="https://www.facebook.com<?= $facebook; ?>" class="btn btn-fab-outline sosmed-link">
                                    <span class="ti-facebook"></span>
                                </a>
                                <a href="https://github.com/<?= $github; ?>" class="btn btn-fab-outline sosmed-link">
                                    <span class="ti-github"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="services section-padding" id="competences_menu" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="section-head-green col-md-12">
                        <h4 class="text-white">Compétences</h4>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                <?php while ($data3 = $result3->fetch()): 
                        $nom_comp = $data3["nom"];
                        $liste_comp = $data3["liste"];
                ?>

                <div class="feat-item col-lg-4 col-md-6" style="background-color; black !important">
                    <div class="feat-inner"> <span class="icon <?= $data3["icone"]; ?>"></span>
                        <div class="feat-info">
                            <h5 class="text-white"><?= $nom_comp; ?></h5>
                            <h6><?= $liste_comp; ?></h6> </div>
                    </div>
                </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>

		<!-- START TIMELINE -->
		<section id="experience" class="my-timeline section-padding" data-scroll-index="3">
			<div class="container">
				<div class="row">
					<div class="section-head-green col-md-12">
						<h4 class="text-white">Expérience</h4>
					</div>
					<div class="col-md-12">
						<div class="main-timeline">
							<div class="col-md-12">
								<div class="main-timeline">
                                    <?php while ($data4 = $result4->fetch()): 
                                        $nom_exp = $data4["nom"];
                                        $annee_exp = $data4["annee"];
                                        $type_exp = $data4["type"];
                                        $description_exp = $data4["description"];
                                    ?>
									<div class="timeline">
										<div class="icon"></div>
										<div class="date-content">
											<div class="date-outer">
												<span class="date" >
													<span class="month"><?= $nom_exp; ?></span>
													<span class="year"><?= $annee_exp; ?></span>
												</span>
											</div>
										</div>
										<div class="timeline-content">
											<h3 class="title text-white"><?= $type_exp; ?></h3>
											<p class="description text-grey">
												<?= $description_exp; ?>   
											</p>
										</div>
									</div>
                                    <?php endwhile; ?>
							</div> 
							</div>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END TIMELINE -->
	    	
	    	 <!-- START DISTINCTION -->
		<section id="distinction" class="my-timeline section-padding" data-scroll-index="3">
			<div class="container">
				<div class="row">
					<div class="section-head-green col-md-12">
						<h4 class="text-white">Distinction</h4>
					</div>
					<div class="col-md-12">
						<div class="main-timeline">
							<div class="col-md-12">
								<div class="main-timeline">
                                <?php while ($data4 = $result4->fetch()): 
                                        $nom_dist = $data4["nom"];
                                        $annee_dist = $data4["annee"];
                                        $type_dist = $data4["type"];
                                        $description_dist = $data4["description"];
                                    ?>
									<div class="timeline">
										<div class="icon"></div>
										<div class="date-content">
											<div class="date-outer">
												<span class="date" >
                                                    <span class="month"><?= $nom_dist; ?></span>
													<span class="year"><?= $annee_dist; ?></span>
												</span>
											</div>
										</div>
										<div class="timeline-content">
											<h3 class="title text-white"><?= $type_dist; ?></h3>
											<p class="description text-grey">
												<?= $description_dist; ?>   
											</p>
										</div>
									</div>
                                    <?php endwhile; ?>
							</div> 
							</div>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END DISTINCTION -->

		<!-- START EDUCATION -->
		<section id="education" class="my-education section-padding" data-scroll-index="4">
			<div id="educations_menu" class="container">
				<div class="row">
					<div class="section-head-green col-md-12">
						<h4 class="text-white">Formations et diplômes</h4>
					</div>
					<div class="col-md-12">
						<div class="main-timeline">
                             <?php while ($data5 = $result5->fetch()): 
                                $lieu_form = $data5["lieu"];
                                $annee_form = $data5["annee"];
                                $type_form = $data5["type"];
                                $description_form = $data5["description"];
                            ?>
							<div class="timeline">
								<div class="icon"></div>
								<div class="date-content">
									<div class="date-outer">
										<span class="date">
											<span class="month"><?= $lieu_form; ?></span>
											<span class="year"><?= $annee_form; ?></span>
										</span>
									</div>
								</div>
								<div class="timeline-content">
									<h3 class="title text-white"><?= $type_form; ?></h3>
									<p class="description text-grey">
										<?= $description_form; ?>
									</p>
								</div>
							</div>
                            <?php endwhile; ?>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END EDUCATION -->

    <!-- PROJECTS SECTION -->
        <!--
		<section class="works section-padding" data-scroll-index="4">
		<div class="container">
			<div class="row">
			<div class="section-head-green col-md-12">
				<h4>Projets réalisés et en cours</h4>
			</div>
			</div>
			<div class="row">
			<div class="filtering text-center mb-30 col-sm-12">
				<div class="filter"> <span data-filter='*' class="active">Tous</span> <span data-filter='.brand'>Web</span> <span data-filter='.web'>Applications Desktop</span> <span data-filter='.graphic'>Application mobile</span> </div>
			</div>

	<div class="clearfix"></div>
			<div class="gallery full-width">
				<div class="isotope-sizer"></div>
				<div class="col-lg-4 col-md-6 items graphic">
				<div class="item-img"> <img src="assets/img/portfolio/1.jpg" alt="image">
					<div class="item-img-overlay">
					<div class="overlay-info full-width">
						<p>Project | Graphic</p>
						<h6>Creative Design</h6>
						<a href="assets/img/portfolio/1.jpg" class="popimg"> <span class="icon"><i class="fa fa-angle-right"></i></span> </a>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-6 items web">
				<div class="item-img"> <img src="assets/img/portfolio/2.jpg" alt="image">
					<div class="item-img-overlay">
					<div class="overlay-info full-width">
						<p>Project | Design</p>
						<h6>Creative Design</h6>
						<a href="assets/img/portfolio/2.jpg" class="popimg"> <span class="icon"><i class="fa fa-angle-right"></i></span> </a>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-6 items brand">
				<div class="item-img"> <img src="assets/img/portfolio/3.jpg" alt="image">
					<div class="item-img-overlay">
					<div class="overlay-info full-width">
						<p>Project | Branding</p>
						<h6>Creative Design</h6>
						<a href="assets/img/portfolio/3.jpg" class="popimg"> <span class="icon"><i class="fa fa-angle-right"></i></span> </a>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-6 items graphic">
				<div class="item-img"> <img src="assets/img/portfolio/4.jpg" alt="image">
					<div class="item-img-overlay">
					<div class="overlay-info full-width">
						<p>Project | Graphic</p>
						<h6>Creative Design</h6>
						<a href="assets/img/portfolio/4.jpg" class="popimg"> <span class="icon"><i class="fa fa-angle-right"></i></span> </a>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-6 items web">
				<div class="item-img"> <img src="assets/img/portfolio/5.jpg" alt="image">
					<div class="item-img-overlay">
					<div class="overlay-info full-width">
						<p>Project | Design</p>
						<h6>Creative Design</h6>
						<a href="assets/img/portfolio/5.jpg" class="popimg"> <span class="icon"><i class="fa fa-angle-right"></i></span> </a>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-6 items brand">
				<div class="item-img"> <img src="assets/img/portfolio/6.jpg" alt="image">
					<div class="item-img-overlay">
					<div class="overlay-info full-width">
						<p>Project | Branding</p>
						<h6>Creative Design</h6>
						<a href="assets/img/portfolio/6.jpg" class="popimg"> <span class="icon"><i class="fa fa-angle-right"></i></span> </a>
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	</section>
    -->
<!-- END OF PROJECT -->

        <!-- Contact -->
        <section id="contact_menu" class="contact section-padding" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="section-head-green col-md-12">
                        <h4 class="text-white">Entrer en contact</h4>
                    </div>
                    <div class="offset-md-1 col-md-10">
                        <div class="contact-info mb-md50">
                            <div class="row">
                                <div class="col-md-4 mb-50">
                                    <div class="item"> <span class="icon et-phone"></span>
                                        <div class="cont">
                                            <p class="text-white"><?= $tel; ?></p>
                                            <h6 class="text-grey">Téléphone</h6> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-50">
                                    <div class="item"> <span class="icon et-envelope"></span>
                                        <div class="cont">
                                            <p class="text-white"><a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
                                            <h6 class="text-grey">Email</h6> </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item"> <span class="icon et-map"></span>
                                        <div class="cont">
                                            <p class="text-white"><?= $adresse; ?></p>
                                            <h6 class="text-grey">Adresse</h6> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="form" id="contact-form">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Nom" required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email" required="required"> </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Objet"> </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <span class="buton buton-bg" style="cursor:pointer !important">Envoyer</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>



        <!-- Footer -->
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <img style="width: 3% !important" src="../libs/img/iteams.png" class="logo-img" alt="">
                        </div> 
                        <!-- Social Media -->
                        <div class="social">
                            <a href="https://facebook.com<?= $facebook; ?>"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://github.com/<?= $github; ?>"><i class="fa fa-github"></i></a>
                            <a href="https://linkedin.com/in<?= $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <!-- Copyright -->
                        <p class="text-white">Edition &copy; iTeam-$ Community <a href="#"></a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <?php 
        $result1->closeCursor(); 
        $result3->closeCursor(); 
        $result4->closeCursor(); 
        $result5->closeCursor(); 
    ?>

    <!-- jQuery -->
    <script src="./libs/js/jquery-3.0.0.min.js"></script>
    <script src="./libs/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="./libs/js/popper.min.js"></script>
    <script src="./libs/js/bootstrap.min.js"></script>
    <script src="./libs/js/scrollIt.min.js"></script>
    <script src="./libs/js/jquery.waypoints.min.js"></script>
    <script src="./libs/js/owl.carousel.min.js"></script>
    <script src="./libs/js/jquery.magnific-popup.min.js"></script>
    <script src="./libs/js/jquery.stellar.min.js"></script>
    <script src="./libs/js/isotope.pkgd.min.js"></script>
    <script src="./libs/js/validator.js"></script>
    <script src="./libs/js/particles.min.js"></script>
    <script src="./libs/js/autotype.js"></script>
    <script src='./libs/js/aos.js'></script>
    <script src="./libs/js/scripts.js"></script>
</body>
</html>
