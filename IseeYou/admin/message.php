<?php
// define variables and set to empty values
$numberErr = $fnameErr = $schedule = $number = $fname = $content = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["number"])) {
    $numberErr = "Number is required";
  } else {  
    $number = $_POST["number"];
    // check if name only contains letters and whitespace
    if (!preg_match("/233^[0-9]+$/",$number)) {
      $noNumberErr = "Only numbers allowed. 233 should begin the number"; 
    }
  }
  
  if (empty($_POST["fname"])) {
    $fnameErr = "User is required";
  } else {
    $fname = $_POST["fname"]; 
    }
	
	if (empty($_POST["email"])) {
    $Emailerr = "EMAIL is required";
  } else {
    $email = $_POST["email"]; 
    }
	if (empty($_POST["password"])) {
    $pworderr = "Password is required";
  } else {
    $password = $_POST["password"]; 
    }
  
    

  $url = "http://127.0.0.1:13013/cgi-bin/sendsms?username=tester&password=foobar&to=".$number."&from=FindRejiApp&smsc=smscMTN&text=You have 
  successfully created an account with FindRejiApp. Your email used to login is:".$email."and your password is: ".$password;
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        // Set so curl_exec returns the result instead of outputting it.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

        // Get the response and close the channel.
        $response = curl_exec($ch);
			if ($response == 0)
			{}
			else {
				curl_close($ch);
				}
}
 
?>



