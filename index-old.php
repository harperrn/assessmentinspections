<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assessment Inspections</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<![if !IE]>
<link rel="icon" href="img/thing.png" type="image/x-icon" />
<![endif]>
<!-- This is needed for IE -->
<link rel="shortcut icon" href="img/thing.ico" type="image/ico" />

<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Contact Form'; 
        $to = 'assessmentinspections@gmail.com'; 
        $subject = 'Contact Entry ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                   <i> <img id="logo" src="img/logo.png" width="150px"></i>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"> About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Contact Us </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"> Hire Assessment Inspections</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Assessment Inspections</h1>
                        <p class="intro-text">Meticulous. Unbiased. Nationally Certified. <br> We protect your home investment.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <div class="hi">
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 style="color:#42dca3">About Assessment Inspections</h2>
                <p>You invest your time and money before, during, and after your wood floor installation/refinishing process. Assessment Inspections offers two opportunities to ensure that your home's wood floors will last for years. </p> <br>
<br> <br> <h2 style="color:#42dca3"> Meet Joseph Rocco</h1>
                <img src="/img/joe.png" alt="Joe Rocco" width="300"> <br> <br>
                 <p> Combine Experience and Technical Education
Joseph Rocco has 23 years of hands-on experience coupled with formal National Certifications in Installation, Sand/Finishing, and Inspection.
Many wood flooring contractors rely on outdated and inaccurate information when installing, sanding, and finishing hardwood floors.  Technical education is imperative.  The following is a detailed list of Joseph Rocco’s experience, education, achievements and awards. <br> <br>
           <div class="awards">     
More than 20 years' experience in the hardwood flooring industry (Sanding, Finishing, Installation, and Inspection) <br> <br>

Owner and Lead Technician for nine years - Denver's only Nationally Certified Advanced Master Craftsman, Artistic Floors by Design <br> <br>

National Wood Flooring Association Certified Professional: Installation, Sand/Finish, and Inspection <br> <br>
               
National Wood Flooring Association Degrees Earned: Vanguard, Craftsman, Master Craftsman, and Advanced Master Craftsman <br> <br>
               
National Wood Flooring Association Regional Technician Trainer <br> <br>
               
National Wood Flooring Board of Directors (2010-2015) <br> <br>
               
Wood Floor of the Year Award Winner (2012, NWFA Designer Choice) <br> <br>
            
Best Residential Flooring Installation (2014, Floor Coverings Installer) <br> <br>

Best of Houzz: Customer Service (2014 & 2015), Design (2015) <br> <br>

Editor’s Pick, 2015 Denver Home + Life Magazine <br> <br>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 style="color:#42dca3">Pricing</h2>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Pre-Installation Consultation
			</h3>
                <p>
                    This 60-90 minute site investigation provides you with the following information within 48 hours: <br> <br>
                    
                    Whole home relative humidity and other acclimation information. <br>
                    
                    Type of flooring that would best suit you and your environment. <br>
                    
                    Recommended budget of your wood flooring project, and what to expect for installation and/or refinishing projects. 
                </p> <br>
            <h4 style="color:#42dca3">COST: $150/hr</h4>
			
			<h3>
				Inspection Report 
			</h3>
                <p>
                    While wood flooring is meant to outlast other types of flooring, wood floors can fail. If this occours, you will notice: <br> <br>
                    
                    Popping, Crackling, Squeaking <br>
                    
                    Cracking, Warping, Cupping, or Crowning <br> <br>
                    
                    After a three-to-four hour detailed inspection; Assessment Inspections will provide you with the following results within 10 business days: <br> <br>
                    
                    On site conditions. (current and while the work occurred) <br>
                    
                    Interviews with all parties including: the homeowner, contractor, and manufacturer (if necessary) <br>
                    
                    Photography and Magnet Testing <br>
                    
                    Destructive testing  (Additional Cost, TBD)
                </p> <br>
                <h4 style="color:#42dca3">COST: $685</h4>

		</div>
	</div>
</div>
            </div>
        </div>
    </section>


                  <br> <br>
               <br> <h2 style="color:#42dca3">Hire Assessment Inspections</h2>
               <div class="p1">
                <p>You need Assessment Inspections to verify the security of your investment. Investing in 
hardwood flooring increases property value by more than ten percent, increases the indoor air quality for your 
loved ones, and helps to create a cleaner environment, when it is done properly and according to 
industry standards (NWFA National Technical Standards).  If it is not done properly, it can lead to longer 
resale timeframes and lower appraisal values. It can also lead to health issues such as allergic reactions or it can be a detriment to the environment.  Do 
not allow yourself to be confused, irritated, or misled by biased individuals. Ask a Certified Inspector for a consultation or report so that your investment is secured for the future of your home, family, and planet. 
Our Certified Inspector has 23 years of experience in installation, sanding, and finishing of all 
types of hardwood flooring (Pre-Finished, Engineered, Solid, and Custom Marquetry).  He has accumulated 
more than 2,000 hours of educational instruction and is a Regional Instructor for the NWFA.  He is the 
only contractor in Denver, CO to receive the Advanced Master Craftsman degree.</p></div> <br>
            <h2 style="color:#42dca3"> Know when to call us</h2>
            <h3> Are you unsure if you even need to get a floor inspection?</h3> <p>See the list of concerns below that usually necessitate an inspection to see if you may need our services.</p> <br> <br>
            
            
           
            
            <div class="col-md-12">
            <h2 style="color:#42dca3">Call Joseph Rocco</h2>
            <h3 style="color:#fff">Dial or tap the number below to call.</h3>
            <i class="fa fa-phone fa-4x"></i> <br><br> <a href="tel:720-252-9375"><h2 style="color:#fff">(720)-252-9375</h2></a>
            
                <ul id = "Contact2">
                
                    
  </div>
</div>
</div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 style="color:black">Get a Free Quote below! </h2>
                    <h4 style="color:black">Do you think your floor fits the criteria? <br> Fill out the form below and we will get back to you ASAP!</h4>
                     <form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" placeholder="Floor concerns/Details"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="What's 2 + 3?">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>
                     <br>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->

    <div id="map">

    <!-- Footer -->
    <footer>
        <div class="container text-center">
           <br> <br>
            <p>Copyright &copy; 2015 Assessment Inspections, Inc.</p>
            <img src="/img/logo.png" width="100px" <br> <br>
            
            
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
 
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>