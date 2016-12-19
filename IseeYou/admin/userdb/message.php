
<?php
// define variables and set to empty values

include_once("users.php");

//include_once("http://52.89.116.249/~rejoice.hormeku/IseeYou/admin/userdb/users.php");

if(isset($_REQUEST['cmd'])){
$cmd=$_REQUEST['cmd'];
switch($cmd){
	case 1:
	usersreport();
	break;
	case 2:
	bookings();
	break;
	case 3:
	atm();
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

function usersreport(){
	
	
	$new = new users();
	$check = $new->userview();
		$row=$new->fetch();

	
while($row==true){
			echo"<tr  width='100%'>
				<td >{$row['uid']}</td>
				<td >{$row['uname']}</td>
				<td >{$row['fullname']}</td>
				<td >{$row['phone']}</td><td>
				<td >{$row['email']}</td><td>
				</tr>";
			$row=$new->fetch();
	}

}


function food(){
	
	
	$new = new users();
	$check = $new->food();
		$row=$new->fetch();

	
while($row==true){
			echo"<tr  width='100%'>
				<td >{$row['food_id']}</td>
				<td >{$row['review']}</td>
				<td >{$row['rate']}</td>
				
				</tr>";
			$row=$new->fetch();
	}

}

function atm(){
	
	
	$new = new users();
	$check = $new->atm();
		$row=$new->fetch();

	
while($row==true){
			echo"<tr  width='100%'>
				<td >{$row['order_id']}</td>
				<td >{$row['review']}</td>
				<td >{$row['request']}</td>
				<td >{$row['rate']}</td><td>
				</tr>";
			$row=$new->fetch();
	}

}

function bookings(){
	
	
	$new = new users();
	$check = $new->bookingsview();
		$row=$new->fetch();

	
while($row==true){
			echo"<tr  width='100%'>
				<td >{$row['booking_id']}</td>
				<td >{$row['review']}</td>
				<td >{$row['checkin']}</td>
				<td >{$row['checkout']}</td><td>
				<td >{$row['rate']}</td><td>
				</tr>";
			$row=$new->fetch();
	}

}

function fuel(){
	
	
	$new = new users();
	$check = $new->fuel();
		$row=$new->fetch();

	
while($row==true){
			echo"<tr  width='100%'>
				<td >{$row['fuel_id']}</td>
				<td >{$row['review']}</td>
				<td >{$row['rate']}</td>
				
				</tr>";
			$row=$new->fetch();
	}

}

?>



