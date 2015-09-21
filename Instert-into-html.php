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









           <!--
				<div class="col-md-4">
					<div class="thumbnail">
						
                        <div class="caption">
							<h3>
								Popping, Cracking, or Squeaking
							</h3>
							<p>
								Either of these things could be caused by some type of weakness in the glue or nails that were used to install your floor. Another possible cause could be moisture, and this is a major concern becuase of the probability of mold or mildew forming.
							</p>
							<p>
								<a class="btn btn-primary" href="">More Info</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h3>
								Color Variations
							</h3>
							<p>
								Color varitaions can be caused by moisture, or normal wear and tear. The sun is a common cause of this too, and most of the time, can be fixed by a re-stain or sanding and refinishing.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Learn More</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h3>
								Cupping, Warping, or Crowning
							</h3>
							<p>
								Most of the time, these three things happen at the same time. They are all associated with moisture, and can be bad enough that the subfloor suffers. 
							</p>
							<p>
								<a class="btn btn-primary" href="#">Learn More</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                   			
				<div class="col-md-4">
					<div class="thumbnail">
						
                        <div class="caption">
							<h3>
								Vapor Retarders VS Moisture Barriers
							</h3>
							<p>
								Lorem ipsum ajnkldbflkajhsdlufhijn fdjahlkfuhj ba.kdjflkua ejalkusdgliu e kuhfaiudhfpihn;fkjaidu crliunalsdjfiuhalifake liadfklaliduhf e liuhaiduyfoiaun4 raljrhia rhrjkd audhfiaysf</p>
                            <br>
							<p>
								<a class="btn btn-primary" href="">More Info</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h3>
								Moisture Testing
							</h3>
							<p> loem liauyoifjh;ajhdkfhulkajhdiofnliut tipuahfou yapisduhfioauhdlifuha fliurlk jali haluhfliauds ifuh alkurgi ;ugh alygfliwliufgo8at vlijbhbtkuysdg jbfyruydsgiuhfblkjdsb fuygalfbf
							</p>
							<p>
								<a class="btn btn-primary" href="#">Learn More</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h3>
								White Line Syndrome
							</h3>
							<p>White ajd;fhlaud;f a;sjdf la liudhfl iuagsoi uhoiefglasjdfh iuahroif 7yoriuhaoi7ypadsyo fuhleiuhtoiauhfo7a pfali gfipas dfoag sdfoiu gapiu foa7sd pifuha;sdufhi oauhdfiuahsf as df asid fliau gdfigap iertoaiuer a faid fipua d9f7tapiyf a
							</p>
							<p>
								<a class="btn btn-primary" href="#">Learn More</a>
							</p>
						</div>
					</div>
				</div>
-->





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
                    
                    
                    
                    
  //add you e-mail address here
  define("MY_EMAIL", "form@assessmentinspections.org");
 
  /**
   * Sets error header and json error message response.
   *
   * @param  String $messsage error message of response
   * @return void
   */
  function errorResponse ($messsage) {
    header('HTTP/1.1 500 Internal Server Error');
    die(json_encode(array('message' => $messsage)));
  }
 
  /**
   * Return a formatted message body of the form:
   * Name: <name of submitter>
   * Comment: <message/comment submitted by user>
   *
   * @param String $name     name of submitter
   * @param String $message message/comment submitted
   */
  function setMessageBody ($name, $message) {
    $message_body = "Name: " . $name."\n\n";
    $message_body .= "Comment:\n" . nl2br($message);
    return $message_body;
  }
 
  $email = $_POST['email']; 
  $message = $_POST['message'];
 
  header('Content-type: application/json');
  //do some simple validation. this should have been validated on the client-side also
  if (empty($email) || empty($message)) {
    errorResponse('Email or message is empty.');
  }
 
  //try to send the message
  if(mail(MY_EMAIL, "Contact Form", setMessageBody($_POST["name"], $message), "From: $email")) {
    echo json_encode(array('message' => 'Your message was successfully submitted.'));
  } else {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('message' => 'Unexpected error while attempting to send e-mail.'));
  }