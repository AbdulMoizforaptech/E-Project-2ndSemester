<?php
    include("admin/config.php");
    session_start();
    if (isset($_SESSION['admin_session'])){
        $query = "SELECT * FROM tbl_admin WHERE id = $_SESSION[admin_session]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      } elseif (isset($_SESSION['hospital_session'])){
        $query = "SELECT * FROM tbl_hospital WHERE id = $_SESSION[hospital_session]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      } elseif (isset($_SESSION['patient_session'])){
        $query = "SELECT * FROM tbl_patient WHERE id = $_SESSION[patient_session]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID TEST and VACCINATION System</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assests/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/jquery-ui.css">
    <link rel="stylesheet" href="assests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assests/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assests/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="assests/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assests/fonts/flaticon-covid/font/flaticon.css">

    <link rel="stylesheet" href="assests/css/aos.css">

    <link rel="stylesheet" href="assests/css/style.css">
    
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap">

<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
    <span class="icon-close2 js-menu-toggle"></span>
    </div>
</div>
<div class="site-mobile-menu-body"></div>
</div>


<header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <div class="mb-0 site-logo"><a href="#" class="mb-0"><img src="assests/images/1.png" alt=""style="width:150px;"><span class="text-primary"></span> </a></div>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li class="has-children">
                    <a href="#prevention" class="nav-link">Prevention</a>
                    <ul class="dropdown">
                        <li><a href="#safe" class="nav-link">Stay at home</a></li>
                        <li><a href="#safe" class="nav-link">Keep social distancing</a></li>
                        <li><a href="#safe1" class="nav-link">Wear facemask</a></li>
                        <li><a href="#safe1" class="nav-link">Wash your hands</a></li>
                        <li class="has-children">
                        </li>
                    </ul>
                    </li>
                    <li><a href="#symptoms" class="nav-link">Symptoms</a></li>
                    <li class="active"><a href="#" class="nav-link">FAQS</a></li>
                    <li><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="has-children">
                    <a href="" class="nav-link">
                        <?php if(isset($_SESSION['admin_session']))  echo $row['name'];
                        elseif(isset($_SESSION['hospital_session'])) echo $row['name'];
                        elseif(isset($_SESSION['patient_session'])) echo $row['name']; else echo "Login"; ?>
                    </a>
                    <ul class="dropdown">
                        <li><a href="admin/login.php" class="nav-link">Admin</a></li>
                        <li><a href="hospital/login.php" class="nav-link">Hospital</a></li>
                        <li><a href="patient/login.php" class="nav-link">Patient</a></li>
                    </ul>
                    </li>
                    <!-- <li><a href="#" class="nav-link" onclick="GoTOLogin()"><?php if(isset($_SESSION['admin_session'])) echo $row['name']; else echo "Login"; ?></a></li> -->
                </ul>
                </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

            </div>
        </div>

        </header>


        <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6 mr-auto text-center text-lg-left">
                <span class="d-block subheading">Covid-19 Awareness</span>
                <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
                <p class="mb-5">To stay safe during the COVID-19 pandemic, it's crucial to stay home as much as possible, reducing your exposure to the virus.</p>
                <p class="mb-4"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#prevent">How to prevent</a></p>


                
                <!-- Modal -->
                <div class="modal fade" id="prevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">How to prevent from Corona Virus?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <p>To prevent the spread of the coronavirus, follow these key guidelines:</p>
                    <p><b>1. Practice Good Hygiene:</b> Wash your hands frequently with soap and water for at least 20 seconds, use hand sanitizer with at least 60% alcohol, and avoid touching your face.</p>
                    <p><b>2. Wear a Mask:</b> Wear a mask that covers your nose and mouth in public settings, especially where social distancing measures are difficult to maintain.</p>
                    <p><b>3. Maintain Social Distance:</b> Keep a distance of at least 6 feet (about 2 meters) from others, particularly those who are not in your household.</p>
                    <p><b>4. Avoid Crowded Places and Close Contact:</b> Avoid large gatherings and close contact with individuals who are sick.</p>
                    <p><b>5. Clean and Disinfect:</b> Regularly clean and disinfect frequently touched surfaces daily, such as doorknobs, light switches, and phones.</p>
                    <p><b>6. Monitor Your Health:</b> Be alert for symptoms such as fever, cough, and shortness of breath. If you feel unwell, stay home and seek medical advice.</p>
                    <p><b>7. Get Vaccinated:</b> Receive the COVID-19 vaccine and any recommended booster doses to help protect against severe illness and reduce the spread of the virus.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>  <!-- Modal -->


            </div>
            <div class="col-lg-6">
                <figure class="illustration">
                <img src="assests/images/illustration.png" alt="Image" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6"></div>
            </div>
        </div>
        </div>

        <h2 class="section-heading col-md-5 text-center mx-auto" style="padding: 30px;" >Coronavirus disease (COVID-19): Variants of SARS-COV-2</h2>
        <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
            <div class="col text-left mx-auto">
                <h2 class="section-heading">1. What are variants of SARS-COV-2, the virus that causes COVID-19?</h2>
                <p>It is usual for viruses to change and evolve as they spread between people over time. When these changes become significantly different to a previously detected virus, these new virus types are known as “variants.” To identify variants, scientists map the genetic material of viruses (known as sequencing) and then look for differences between them to see if they have changed.

                 Since 2020, SARS-CoV-2, the virus that causes COVID-19, has been spreading and changing globally. These changes have led to the detection of variants in many countries around the world. The more significant of these variants are grouped in three different ways – variants under monitoring, variants of interest and variants of concern</p>
            </div>
            </div>
        <div>
        <div>  
            
        <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
            <div class="col text-left mx-auto">
                <h2 class="section-heading">2. What is the difference between variants under monitoring, variants of interest, and variants of concern?
                </h2>
                <p>A Variant Under Monitoring (VUM) is a term used to signal to public health authorities that a SARS-CoV-2 variant may require prioritized attention and monitoring. The main objective of this category is to investigate if this variant (and others closely related to it) may pose an additional threat to global public health as compared to other circulating variants.</p>
            </div>
            </div>
        <div>
        <div>  
        <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
            <div class="col text-left mx-auto">
                <h2 class="section-heading">3. What can I do to protect myself from SARS-CoV-2 variants?</h2>
                <p>To protect yourself and others from all SARS-CoV-2 (COVID-19), including all the virus variants, consider the following:

                <li>wear a mask when in crowded, enclosed, or poorly ventilated areas, and keep a safe distance from others, as feasible</li>
                <li>practice respiratory etiquette - covering coughs and sneezes</li>
                <li>clean your hands regularly with soap and water or alcohol-based sanitizer</li>
                <li>stay up to date with vaccinations, including booster/additional doses</li>
                <li>stay home if you are sick</li>
                <li>get tested if you have symptoms or you’ve been exposed to SARS-CoV-2.</li></p>
            </div>
            </div>
        <div>
        <div>  
        <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
            <div class="col text-left mx-auto">
                <h2 class="section-heading">4. How can we stop new variants from emerging?</h2>
                <p>As with all viruses, SARS-CoV-2, the virus that causes COVID-19, will continue to evolve as long as it continues to spread. The more that the virus spreads, the more pressure there is for the virus to change. So, the best way to prevent more variants from emerging is to stop the spread of the virus.<br>

        Follow these measures to protect yourself and others from all SARS-CoV-2 variants:

      <li> wear a mask when in crowded, enclosed, or poorly ventilated areas, and keep a safe distance from others, as feasible</li>
       <li>practice respiratory etiquette - covering coughs and sneezes</li>
       <li>clean your hands regularly with soap and water or alcohol-based sanitizer</li>
       <li>stay up to date with vaccinations, including additional doses<li>
       <li>stay home if you are sick</li>
       <li>get tested if you have symptoms or you’ve been exposed to SARS-CoV-2<li>

       </p>
            </div>
            </div>
        <div>
        <div>  

        <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
            <div class="col text-left mx-auto">
                <h2 class="section-heading">5. Do COVID-19 vaccines protect against newer virus variant?</h2>
                <p>IThe COVID-19 vaccines with WHO Emergency Use Listing (EUL) or approval from stringent regulatory authorities (SRAs) provide different levels of protection against infection, mild disease, severe disease, hospitalization, and death, and are most effective against severe disease. Research is ongoing by thousands of scientists around the world to better understand how new virus mutations and variants affect the effectiveness of the different COVID-19 vaccines.</p>
            </div>
            </div>
        <div>
        <div>  


        
        <div class="site-footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <h2 class="footer-heading mb-4">About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
                <div class="my-5">
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-4">Quick Links</h2>
                    <ul class="list-unstyled">
                    <li><a href="#">Symptoms</a></li>
                    <li><a href="#">Prevention</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">About Coronavirus</a></li>
                    <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-4">Helpful Link</h2>
                    <ul class="list-unstyled">
                    <li><a href="#">Helathcare Professional</a></li>
                    <li><a href="#">LGU Facilities</a></li>
                    <li><a href="#">Protect Your Family</a></li>
                    <li><a href="#">World Health</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-4">Resources</h2>
                    <ul class="list-unstyled">
                    <li><a href="#">WHO Website</a></li>
                    <li><a href="#">CDC Website</a></li>
                    <li><a href="#">Gov Website</a></li>
                    <li><a href="#">DOH Website</a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
            <div class="row text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                <p class="copyright"><small>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

                </div>
                </div>

            </div>
            </div>
        </div>
        </div>

    </div>
</body>
</html>