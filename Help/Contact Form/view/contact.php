<?php

  include '../include/header.php';

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->

    <title>Contact</title>
</head>
<body>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white"></i> Contact us.
                    </div>
                    <div class="card-body">
                        <form id="frmRegister">
                            <div id="alert_error_message" class="alert alert-danger collapse" role="alert">
                              <i class="fa fa-exclamation-triangle"></i>
                              <strong>Alert!</strong> Please check in on some of the fields below.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                               </button>
                            </div>
                            <div id="alert_sucess_message" class="alert alert-success " role="alert">                  
                               Your message was sent successfully. We will get back to you soon.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" maxlength="50">
                                <div id="name_error_message" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone" maxlength="50">
                                <div id="phone_error_message" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                                <div id="email_error_message" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Enter subject" maxlength="30">
                                <div id="subject_error_message" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" placeholder="Enter message" rows="6" maxlength="200"></textarea>
                                <span class="help-block">
                                    <p id="characterLeft" class="help-block ">You have reached the limit</p>
                                    <p id="message_error_message" class="text-danger"></p>
                                </span>
                                
                            </div>
                            <div class="mx-auto">
                                <button type="button" id="btnSubmit" class="btn btn-primary text-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>

<?php

  // include footer file
  include '../include/footer.php';

?>

<script>

$(document).ready(function(){
 
    $('#characterLeft').text('200 characters left');
    
    $('#message').keydown(function () {
        var max = 200;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    }); 
    
    
  $("#name").focusout(function() {
      check_name();
    });
    
  $("#phone").focusout(function() {
      check_phone();
    });
    
  $("#email").focusout(function() {
    check_email();
  });
  
  $("#subject").focusout(function() {
      check_subject();
    });
    
  $("#message").focusout(function() {
      check_message();
    });
    
function check_name() {
        
    var name_length = $("#name").val().length;
    
    if( $.trim( $('#name').val() ) == '' ){
      $("#name_error_message").html("Input is blank!");
      $("#name_error_message").show();
      error_name = true;
      $("#name").addClass("is-invalid");
      }else if(name_length < 5 || name_length > 50) {
      $("#name_error_message").html("Should be between 5-50 characters");
      $("#name_error_message").show();
      error_name = true;
      $("#name").addClass("is-invalid");
      }else{
      $("#name_error_message").hide();
      $("#name").removeClass("is-invalid");
    }
  }
 
function check_phone() {
        
    var phone_length = $("#phone").val().length;
    
    if( $.trim( $('#phone').val() ) == '' ){
      $("#phone_error_message").html("Input is blank!");
      $("#phone_error_message").show();
      error_phone = true;
      $("#phone").addClass("is-invalid");
      }else if(phone_length < 7 || phone_length > 80) {
      $("#phone_error_message").html("Should be 7 or 10 characters");
      $("#phone_error_message").show();
      error_phone = true;
      $("#phone").addClass("is-invalid");
      }else{
      $("#phone_error_message").hide();
      $("#phone").removeClass("is-invalid");
    }
  }
  
function check_email() {
    
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    var email_length = $("#email").val().length;
    
    if( $.trim( $('#email').val() ) == '' ){
      $("#email_error_message").html("Input is blank!");
      $("#email_error_message").show();
      error_email = true;
      $("#email").addClass("is-invalid");
      }else if(!(pattern.test($("#email").val()))) {
      $("#email_error_message").html("Invalid email address");
      $("#email_error_message").show();
      error_email = true;
      $("#email").addClass("is-invalid");
      } else {
      $("#email_error_message").hide();
      $("#email").removeClass("is-invalid");
      }  
  }
  
function check_subject() {
        
    var subject_length = $("#subject").val().length;
    
    if( $.trim( $('#subject').val() ) == '' ){
      $("#subject_error_message").html("Input is blank!");
      $("#subject_error_message").show();
      error_subject = true;
      $("#subject").addClass("is-invalid");
      }else if(subject_length < 5 || subject_length > 50) {
      $("#subject_error_message").html("Should be between 5-30 characters");
      $("#subject_error_message").show();
      error_subject = true;
      $("#subject").addClass("is-invalid");
      }else{
      $("#subject_error_message").hide();
      $("#subject").removeClass("is-invalid");
    }
  }
  
function check_message() {
        
    var message_length = $("#message").val().length;
    
    if( $.trim( $('#message').val() ) == '' ){
      $("#message_error_message").html("Input is blank!");
      $("#message_error_message").show();
      error_message = true;
      $("#message").addClass("is-invalid");
      }else if(message_length < 5 || message_length > 200) {
      $("#message_error_message").html("Should be between 5-200 characters");
      $("#message_error_message").show();
      error_message = true;
      $("#message").addClass("is-invalid");
      }else{
      $("#message_error_message").hide();
      $("#message").removeClass("is-invalid");
    }
  }

$('#btnSubmit').click(function(){

        error_name = false;
        error_phone = false;
        error_email = false;
        error_subject = false;
        error_message = false;
        
        check_name();
        check_phone();
        check_email();
        check_subject();
        check_message();

   
 if(error_name == false && error_email == false && error_subject == false && error_message == false) { 
 
    data=$('#frmRegister').serialize();
    
    $.ajax({
      type:"POST",
      data:data,
      url:"../process/messages/addMessage.php",
      success:function(r){
      if(r==1){
        $("#alert_sucess_message").show();
        $("#alert_error_message").hide();
        $('#frmRegister')[0].reset();
        }else{
        $("#alert_sucess_message").hide();
        $("#alert_error_message").show();
        }
      }
    });
    return false; 
    }else{
        $("#alert_sucess_message").hide();
        $("#alert_error_message").show();
        return false; 
    }
  });

});


</script>
