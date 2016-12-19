<?php
include_once("http://localhost/IseeYou/admin/userdb/adb.php");
	//include_once("http://52.89.116.249/~rejoice.hormeku/IseeYou/admin/userdb/adb.php");

class users extends adb{
	function users(){
	}

	function addusers($uname,$fullname,$phone,$email,$pword){	
		$strQuery="insert into people set    uname='$uname', 
											fullname='$fullname',
											phone='$phone', 
											email='$email', 
											pword='$pword'";
				
		return $this->query($strQuery);				
	}
	
	
	function addhotelbooking($review,$checkin,$checkout,$rate){
				$strQuery="INSERT INTO bookings set review='$review',
													checkin='$checkin', 
													checkout='$checkout',
													rate = '$rate'";
	
		return $this->query($strQuery);		
	}
	
	function atm($review,$request,$rate){
$strQuery="INSERT INTO atmorders set review='$review',
									request='$request', 
									rate = '$rate'";
	
		return $this->query($strQuery);	
}


function orderfood($review,$rate){
$strQuery="INSERT INTO foodorder set review='$review',
									rate = '$rate'";
	
		return $this->query($strQuery);	
}

function fueldetails($review,$rate){
$strQuery="INSERT INTO fuel set review='$review',
									rate = '$rate'";
	
		return $this->query($strQuery);	
}

function userview(){
	$strQuery = "SELECT * from users";
			return $this->query($strQuery);	

}

function foodview(){
	$strQuery = "SELECT * from food";
			return $this->query($strQuery);	

}
function atm(){
	$strQuery = "SELECT * from atmorders";
			return $this->query($strQuery);	

}
function fuel(){
	$strQuery = "SELECT * from fuel";
			return $this->query($strQuery);	

}
function bookingsview(){
	$strQuery = "SELECT * from bookings";
			return $this->query($strQuery);	

}
}
// $obj = new users();
// $obj -> addusers('re','je','233548586497','re@gmail.com','jay');
?>