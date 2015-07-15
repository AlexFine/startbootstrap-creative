<?php
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "bayareastudententrepreneurs@gmail.com";
    $email_subject = "Application for BASE";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    /*if(!isset($_POST['name']) ||
        !isset($_POST['school']) ||
       !isset($_POST['city']) ||
       !isset($_POST['email']) ||
       !isset($_POST['idea']) ||
       !isset($_POST['strengths']) ||
       !isset($_POST['team']) ||
       !isset($_POST['challenge']) ||
       !isset($_POST['approach']) ||
       !isset($_POST['progress']) ||
       !isset($_POST['other']) ||
        !isset($_POST['pitch'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     */
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $school = $_POST['school']; // required
    $city = $_POST['city']; // required
    $idea = $_POST['idea']; // required
    $strengths = $_POST['strengths']; // required
    $team = $_POST['team']; // required
    $challenge = $_POST['challenge']; // required
    $approach = $_POST['approach']; // required
    $progress = $_POST['progress']; // required
    $pitch = $_POST['pitch']; // required
    $other = $_POST['other']; // required
    echo "made it one";
    /*$error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp, $first_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($city) < 2) {
    $error_message .= 'The city you entered do not appear to be valid.<br />';
  }
  if(strlen($idea) < 2) {
    $error_message .= 'The idea you entered do not appear to be valid.<br />';
  }  
  if(strlen($strengths) < 2) {
    $error_message .= 'The strengths you entered do not appear to be valid.<br />';
  }  
  if(strlen($team) < 2) {
    $error_message .= 'The team you entered do not appear to be valid.<br />';
  }
    if(strlen($challenge) < 2) {
    $error_message .= 'The challenge you entered do not appear to be valid.<br />';
  }
  if(strlen($approach) < 2) {
    $error_message .= 'The approach you entered do not appear to be valid.<br />';
  }
  if(strlen($progress) < 2) {
    $error_message .= 'The progress you entered do not appear to be valid.<br />';
  }

   if(strlen($pitch) < 2) {
    $error_message .= 'The pitch you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }*/
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "School: ".clean_string($school)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "Idea: ".clean_string($idea)."\n";
    $email_message .= "Strengths: ".clean_string($strengths)."\n";
    $email_message .= "Team: ".clean_string($team)."\n";
    $email_message .= "Challenge: ".clean_string($challenge)."\n";
    $email_message .= "Approach: ".clean_string($approach)."\n";
    $email_message .= "Demo: ".clean_string($demo)."\n";
    $email_message .= "progress: ".clean_string($progress)."\n";
    $email_message .= "Pitchdeck: ".clean_string($pitch)."\n";
    $email_message .= "other: ".clean_string($other)."\n";

     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 <html>
 <head>
 <meta http-equiv="refresh" content="0; url=http://base.codes/" />
</head>
 <body>
 <script>
 alert("Your application has been submitted!")
 </script>
</body>
</html>



<?php

?>