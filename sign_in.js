document.querySelector('form').addEventListener('submit', auth);

function auth(event) {
   event.preventDefault(); // prevent the form from submitting normally
   var username = document.getElementById('username').value;
   var email = document.getElementById('email').value;
   var password = document.getElementById('password').value;
   var confirmpassword = document.getElementById('confirmpassword').value;

   fetch('sign_in.php', {
     method: 'POST',
     body: new URLSearchParams({
       username: username,
       email: email,
       password: password,
       confirmpasswprd: confirmpassword
     })
 })
   .then(function(response) {
     if (response.ok) {
       alert('Sign-up successful!');
       window.location.assign('index.php');
     } else {
       alert('Sign-up unsuscessful!');
     }
   })
   .catch(function(error) {
     console.log(error);
     alert('Error submitting form.');
   });
}

function verifyPassword() {  
    var pw = document.getElementById("password").value;  
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