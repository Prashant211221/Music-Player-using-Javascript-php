document.querySelector('form').addEventListener('submit', auth);

function auth(event) {
   event.preventDefault(); // prevent the form from submitting normally
   var name = document.getElementById('name').value;
   var email = document.getElementById('email').value;
   var pass1 = document.getElementById('pass1').value;
   var pass2 = document.getElementById('pass2').value;

   fetch('signup.php', {
     method: 'POST',
     body: new URLSearchParams({
       name: name,
       email: email,
       pass1: pass1,
       pass2: pass2
     })
 })
   .then(function(response) {
     if (response.ok) {
       alert('Sign-up successful!');
       window.location.assign('index.html');
     } else {
       alert('Error submitting form.');
     }
   })
   .catch(function(error) {
     console.log(error);
     alert('Error submitting form.');
   });
}

function verifyPassword() {  
    var pw = document.getElementById("pass").value;  
    //check empty password field  
    if(pw == "") {  
       document.getElementById("message").innerHTML = "**Fill the password please!";  
       return false;  
    }  
     
   //minimum password length validation  
    if(pw.length < 8) {  
       document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
       return false;  
    }  
    
  //maximum length of password validation  
    if(pw.length > 15) {  
       document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
       return false;  
    } else {  
       alert("Password is correct");  
    }  
}

function onSignIn(googleUser) {
   var profile = googleUser.getBasicProfile();
   console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
   console.log('Name: ' + profile.getName());
   console.log('Image URL: ' + profile.getImageUrl());
   console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
 }

 function signOut() {
   var auth2 = gapi.auth2.getAuthInstance();
   auth2.signOut().then(function () {
     console.log('User signed out.');
   });
 }
 