<?php
// define variables and set to empty values

include_once("users.php");


//include_once("users.php");

if(isset($_REQUEST['cmd'])){
$cmd=$_REQUEST['cmd'];
switch($cmd){
	case 1:
	registernsendmsg();
	break;
	case 2:
	bookhotel();
	break;
	case 3:
	atmuse();
	break;
	case 4:
	food();
	break;
	case 5:
	fuel();
	break;
	default:
	echo "wrong command";
	break;
}
}

function registernsendmsg(){
	if(!isset($_REQUEST['email'])){
	exit();
	}
	
	$uname=$_REQUEST['uname'];
	$fullname = $_REQUEST['fname'];
	$phone = $_REQUEST['phone'];
	$email=$_REQUEST['email'];
	$pword=$_REQUEST['password'];
	
	$new = new users();
	$check = $new->addusers($uname,$fullname,$phone,$email,$pword);
	
	
	$msg = "Hello $fullname ,you have successfully created an account with FindRejiApp. Your email used to login is: $email and your password is: $pword";
	$username = "mobileapp";
	$password = "foobar";
	$smsc = "smscMTN";
	$sender = "FindRejiApp";

	$msg= preg_replace('/\s+/', '%20', $msg);
								
	$url = 'http://52.89.116.249:13013/cgi-bin/sendsms?username='.$username.'&password='.$password.'&to='.$phone.'&from='.$sender.'&smsc='.$smsc.'&text='.$msg.'';
  
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        // Set so curl_exec returns the result instead of outputting it.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

        // Get the response and close the channel.
        
			// if ($response == 0)
			// {
		    // $response_array['status'] = 'success';  
			echo '{"result":1,"message":"';
			$response = curl_exec($ch);
			// echo json_encode($response_array);
			echo '"}';
			// }			
			// else 
			// {
				// echo '{"result":0,"message":"';
				 // $response_array['status'] = 'error';  
			// echo json_encode($response_array);
			
				curl_close($ch);
				// echo '"}';
			// }
			
	  
}

function bookhotel(){
	
	$review=$_REQUEST['review'];
	$checkin = $_REQUEST['checkin'];
	$checkout= $_REQUEST['checkout'];
	$rate=$_REQUEST['rate'];
	
	$new = new users();
	$check = $new->addhotelbooking($review,$checkin,$checkout,3);
	
	if ($check){
		echo '{"result":1,"message":"Added booking"}';
	}
	else
	{		echo '{"result":0,"message":"Error adding booking"}';
}
}


function atmuse(){

	$review=$_REQUEST['review'];
	$request=$_REQUEST['request'];
	$rate=$_REQUEST['rate'];
	
	$new = new users();
	$check = $new->atm($review,$request,$rate);
	
	if ($check){
		echo '{"result":1,"message":"Added booking"}';
	}
	else
	{		echo '{"result":0,"message":"Error adding booking"}';
}
}


function food(){

	$review=$_REQUEST['review'];
	$rate=$_REQUEST['rate'];
	
	$new = new users();
	$check = $new->orderfood($review,$rate);
	
	if ($check==true){
		echo '{"result":1,"message":"Added booking"}';
	}
	else
	{		echo '{"result":0,"message":"Error adding booking"}';
}
}

function fuel(){
	$review=$_REQUEST['review'];
	$rate=$_REQUEST['rate'];
	
	$new = new users();
	$check = $new->fueldetails($review,$rate);
	
	if ($check){
		echo '{"result":1,"message":"Added booking"}';
	}
	else
	{		echo '{"result":0,"message":"Error adding booking"}';
}
}



?>



