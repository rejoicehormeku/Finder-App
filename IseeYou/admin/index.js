function bookingComplete(xhr,status){
	// alert("here");
				var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "viewreports.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				return;
				}			
			}
			
			
function Booking(){
var dataString="http://localhost/IseeYou/admin/userdb/message.php?cmd=1";
//alert(dataString);
 //prompt('user has logged in', dataString);
			$.ajax(dataString, 
		{
			async:true,
		 complete:bookingComplete
		}
		);
		// prompt("url",dataString);
	
}

function foodComplete(xhr,status){
	// alert("here");
				var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "viewreports.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				return;
				}			
			}
			
			
function Food(){
//var dataString="http://localhost/IseeYou/admin/userdb/message.php?cmd=4";
//alert(dataString);
 //prompt('user has logged in', dataString);
			

$.ajax("userdb/message.php?cmd=4", 
		{async:true,
		 complete:foodComplete
		}
		);
		// prompt("url",dataString);
	
}
function FuelComplete(xhr,status){
	// alert("here");
				var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "viewreports.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				return;
				}			
			}
			
			
function Fuel(){
//var dataString="http://localhost/IseeYou/admin/userdb/message.php?cmd=5";
//alert(dataString);
 //prompt('user has logged in', dataString);
			

$.ajax("userdb/message.php?cmd=5", 
		{async:true,
		 complete:reportingComplete
		}
		);
		// prompt("url",dataString);
	
}
function ATMComplete(xhr,status){
	// alert("here");
				var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "viewreports.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				return;
				}			
			}
			
			
function ATM(){
//var dataString="http://localhost/IseeYou/admin/userdb/message.php?cmd=3";
//alert(dataString);
 //prompt('user has logged in', dataString);
			

$.ajax("userdb/message.php?cmd=3", 
		{async:true,
		 complete:reportingComplete
		}
		);
		// prompt("url",dataString);
	
}
function userComplete(xhr,status){
	// alert("here");
				var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "viewreports.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				return;
				}			
			}
			
			
function Users(){
//var dataString="http://localhost/IseeYou/admin/userdb/message.php?cmd=1";
//alert(dataString);
 //prompt('user has logged in', dataString);			

$.ajax("userdb/message.php?cmd=1", 
		{async:true,
		 complete:reportingComplete
		}
		);
		// prompt("url",dataString);
	
}