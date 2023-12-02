$(document).ready(function(){
   
$("button.for-logging-in").click(function(event){
 event.preventDefault();
      $("#err").empty();
      var email = $('#singinemail').val();
      var password  = $('#singinpassword').val();
      var err = "";

    $.ajax({
       type: "POST",
       url: 'login-process.php',
       dataType: "json",
       data:  { singinemail : email, singinpassword : password },
       success: function(data)
       {
          if (data.path === 'index.php') {
            window.location = 'index.php';
          }
          else if(data.error_three === 'incorrect password')
          {
            alert('Incorrect password');
          }else if(data.error_two === 'incorrect email id')
          {
            alert('Email id not found');
          }else{
              alert('incorrect credentials');
              exit();
          }
       }
   });
 });

 $("button.for-registration").click(function(event){

 event.preventDefault();
      $("#err").empty();
      var email = $('#register-email').val();
      var password  = $('#register-password').val();
      var err = "";
      alert(email+' '+password);
    $.ajax({
       type: "POST",
       url: 'small-registration.php',
       dataType: "json",
       data:  { registeremail : email, registerpassword : password },
       success: function(data)
       {
          if (data.existing_email_error === 'This email is already registred') {
            alert("This email is already registred");
          }
       }
   });
 });
 });