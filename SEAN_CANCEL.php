<!DOCTYPE html>
<html lang="en">
<head>
    
	<?php
		// Define variables
		$name = "Sean Cancel";
		$jobTitle = "Cybersecurity Intern";
		$email = "seancancel21@outlook.com";
		$phone = "(502) 500-8688";
		$linkedin = "https://www.linkedin.com/in/sean-cancel-348972280/";
		$github = "https://github.com/cancels1";
		$address = "10600 Irvin Pines Drive, Louisville, KY 40229";
		$summary = "I am a motivated cybersecurity student at Northern Kentucky University, pursuing a Bachelor of Science in Cybersecurity with a current GPA of 3.25. I have experience in facility operations, customer service, and tutoring, and have held leadership roles in Theta Chi and the NKU Dodgeball Club. I am proficient in various technical skills, including Google Workspace, Microsoft Office, HTML, Linux, C++, Java, and Python. I can also compete for three countries in the Olympics which are Australia, Puerto Rico, and USA.";
		$job_title1 = "Facility Operations";
		$company1 = "Northern Kentucky University";
		$duration1 = "Aug '24 - Present";
		$description1 = "Checked out and maintained recreational equipment for students ensuring proper usage and return. Monitored the area to ensure the safety of all guests, addressing any issues promptly. Helped students with inquiries and provided excellent customer service to enhance their experience.";
		$job_title2 = "Park Area Ambassador";
		$company2 = "Sea World";
		$duration2 = "Jun '24 - Aug '24";
		$description2 = "Ensured the cleanliness and orderliness of park facilities, including restrooms, picnic areas, and walkways. Assisted visitors by providing information about park rules, directions, and available services. Spearheaded guests effectively during emergencies, promoted prompt and organized resolutions while prioritizing safety, and maintained a serene environment.";
		$job_title3 = "Student Tutor";
		$company3 = "SummerWorks";
		$duration3 = "Jun '21 - Aug '21";
		$description3 = "Tutored 15-20 school-aged children from refugee and immigrant backgrounds in an academic setting. Aided students with English skills, reading comprehension, and math skills. Provided feedback to students, using positive reinforcement techniques to motivate and build confidence. Offered academic assistance to students with subject-specific problems and questions to improve academic achievement.";
	?>
	
	
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sean Cancel's Resume">
    <meta name="author" content="Sean Cancel">
    <link rel="shortcut icon" href="favicon.ico">
	
	
    
	<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="https://s3.amazonaws.com/handshake.production/app/public/assets/students/50282464/profile/A93D3F3C-6BB3-4A9B-B404-6A182782A54E.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIA2HSNSGACXF6KKT2H%2F20240902%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20240902T225405Z&X-Amz-Expires=900&X-Amz-SignedHeaders=host&X-Amz-Signature=0fe0f6327df674e9bbdd33467e9711f60063c3768545a24a77be6a33fe3ef33e" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"> <?php echo $name ?> </h1>
							    <div class="title mb-3"> <?php echo $jobTitle ?> </div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i> <?php echo $email ?> </li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i> <?php echo $phone ?> </a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span> <?php echo $linkedin ?> </a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span> <?php echo $github ?> </a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->

				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"> <?php echo $summary ?> </p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">

									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"> <?php echo $job_title1 ?> </h3>
										        <div class="resume-company-name ms-auto"> <?php echo $company1 ?> </div>
										    </div><!--//row-->
										    <div class="resume-position-time"> <?php echo $duration1 ?> </div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p> <?php echo $description1 ?> </p>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->

								    <article class="resume-timeline-item position-relative pb-5">

									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"> <?php echo $job_title2 ?> </h3>
										        <div class="resume-company-name ms-auto"> <?php echo $company2 ?> </div>
										    </div><!--//row-->
										    <div class="resume-position-time"> <?php echo $duration2 ?> </div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p> <?php echo $description2 ?> </p>

								    </article><!--//resume-timeline-item-->

								    <article class="resume-timeline-item position-relative pb-5">

									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1"> <?php echo $job_title3 ?> </h3>
										        <div class="resume-company-name ms-auto"> <?php echo $company3 ?> </div>
										    </div><!--//row-->
										    <div class="resume-position-time"> <?php echo $duration3 ?> </div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p> <?php echo $description3 ?> </p>

								    </article><!--//resume-timeline-item-->

							    </div><!--//resume-timeline-->

						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"> <?php echo "Google Workspace" ?> </div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"> <?php echo "Microsoft Office" ?> </div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"> <?php echo "HTML" ?> </div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>

								        <li class="mb-2">
								            <div class="resume-skill-name"> <?php echo "Python" ?> </div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"> <?php echo "Java" ?> </div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"> <?php echo "Others" ?> </h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"> <?php echo "Linux" ?> </span></li>
							            <li class="list-inline-item"><span class="badge badge-light"> <?php echo "C++" ?> </span></li>							           
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"> <?php echo "Bachelor of Science - Cybersecurity"?> </div>
								        <div class="resume-degree-org"> <?php echo "Northern Kentucky University" ?> </div>
								        <div class="resume-degree-time"> <?php echo "2023-2027" ?> </div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"> <?php echo "Bachelor of Science - Computer Information Technology"?> </div>
								        <div class="resume-degree-org"> <?php echo "Northern Kentucky University" ?> </div>
								        <div class="resume-degree-time"> <?php echo "2023-2027" ?> </div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"> <?php echo "Dean's List" ?> </div>
								        <div class="resume-award-desc"> <?php echo "Made the Dean's List in the fall of 2023" ?> </div>
								    </li>								    
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"> <?php echo "English" ?> </span> <small class="text-muted font-weight-normal"> <?php echo "(Native)" ?> </small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"> <?php echo "Interests" ?> </h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"> <?php echo "Basketball" ?> </li>
								    <li class="mb-1"> <?php echo "Dodgeball" ?> </li>
								    <li class="mb-1"> <?php echo "Reading" ?> </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->

				    </div>
			    </div><!--//row-->
		    </div><!--//resume-body-->


	    </div>
    </article>


    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> <?php echo "By " . $name ?></small>
    </footer>



</body>
</html>
