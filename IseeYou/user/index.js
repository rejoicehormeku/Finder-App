function registerUserComplete(xhr,status){
	// alert("here");
				var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "index.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				return;
				}			
			}
			
			
function Register(){
var uname=$("#username").val();
var fname=$("#fname").val();
var email=$("#email").val();
var phone=$("#phone").val();
var password=$("#password").val();
var passwordagain=$("#password-again").val();
//var dataString="http://localhost/IseeYou/user/userdb/message.php?cmd=1&uname="+uname+"&fname="+fname+"&email="+email+"&phone="+phone+"&password="+password;
var dataString="http://52.89.116.249/~rejoice.hormeku/IseeYou/user/userdb/message.php?cmd=1&uname="+uname+"&fname="+fname+"&email="+email+"&phone="+phone+"&password="+password;
//alert(dataString);
 //prompt('user has logged in', dataString);
			

$.ajax(dataString, 
		{async:true,
		 complete:registerUserComplete
		}
		);
		// prompt("url",dataString);
	
}

function fuelComplete(xhr,status){
						var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "dashboard.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				window.location.href = "fuelorder.html";
				return;
				}	
}
			
function Fuel(){
var review= $("#review").val();
var rate=$("#rating").val();
var dataString="http://52.89.116.249/~rejoice.hormeku/IseeYou/user/userdb/message.php?cmd=4&review="+review+"&rate="+rate;
///alert(dataString);
 prompt('user has logged in', dataString);
			

$.ajax(dataString, 
		{async:true,
		 complete:fuelComplete
		}
		);
	
}

function ATMRequestComplete(xhr,status){
				var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "dashboard.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				window.location.href = "checkatm.html";
				return;
				}		
}
			
function ATMRequest(){
var review= document.getElementById("review");
var request=document.getElementById("request");;
var rate=document.getElementById("rating");
var dataString="http://52.89.116.249/~rejoice.hormeku/IseeYou/user/userdb/message.php?cmd=4&review="+review+"&request="+request+"&rate="+rate;
//alert(dataString);
// prompt('user has logged in', dataString);
			

$.ajax(dataString, 
		{async:true,
		 complete:ATMRequestComplete
		}
		);
	
}

function bookHotelComplete(xhr,status){
	var log = $.parseJSON(xhr.responseText);
				// alert("here now");
				if(log.result==1){
				window.location.href = "dashboard.html";
				// alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				window.location.href = "bookhotel.html";
				return;
				}				
}
			

function Bookhotel(){
var review= $("#write").val();
var checkin=$("#checkin").val();
var checkout=$("#checkout").val();
var rate=$("#rating").val()
var dataString = "http://52.89.116.249/~rejoice.hormeku/IseeYou/user/userdb/message.php?cmd=2&review="+review+"&checkin="+checkin+"&checkout="+checkout+"&rate="+rate;
//alert(dataString);
 //prompt('user has logged in', dataString);
			

$.ajax(dataString, 
		{async:true,
		 complete:bookHotelComplete
		}
		);
	
}


function FoodComplete(xhr,status){
				var log = $.parseJSON(xhr.responseText);
				 //alert("here now");
				if(log.result==1){
				window.location.href = "dashboard.html";
				 //alert("worked");
				return;
				}
				
				else{				
				alert("failed");
				window.location.href = "orderfood.html";
				return;
				}			
}
			
			
function Food(){
var review= $("#review").val();
var rate=$("#rating").val();
var dataString="http://52.89.116.249/~rejoice.hormeku/IseeYou/user/userdb/message.php?cmd=4&review="+review+"&rate="+3;
//alert(dataString);
 //prompt('user has logged in', dataString);
			

$.ajax(dataString, 
		{async:true,
		 complete:FoodComplete
		}
		);
			//prompt("url",dataString);

}

(function() {

$(document).ready(function() {
document.getElementById("createContact").addEventListener("click", createContact);

function createContact() {
   var myContact = navigator.contacts.create({"displayName": "Test User"});
   myContact.save(contactSuccess, contactError);
    
   function contactSuccess() {
      alert("Contact is saved!");
   }
	
   function contactError(message) {
      alert('Failed because: ' + message);
   }
	
}

function deleteContact() {

   var options = new ContactFindOptions();
   options.filter = "Test User";
   options.multiple = false;
   fields = ["displayName"];

   navigator.contacts.find(fields, contactfindSuccess, contactfindError, options);

   function contactfindSuccess(contacts) {

      var contact = contacts[0];
      contact.remove(contactRemoveSuccess, contactRemoveError);

      function contactRemoveSuccess(contact) {
         alert("Contact Deleted");
      }

      function contactRemoveError(message) {
         alert('Failed because: ' + message);
      }
   }

   function contactfindError(message) {
      alert('Failed because: ' + message);
   }
	
}

  });



});

