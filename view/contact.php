<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Contacts</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="../index.html" class="navbar-brand">Contacts</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="../index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Blog</a>
          </li>
          <li class="nav-item active">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Contact Us</h1>
          <p>We are always here to help you.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p>We would love to hear from you.</p>
              <h4>Address</h4>
              <p>8400 NW 25th street, suite 100, MIAMI Florida 33198</p>
              <h4>Email</h4>
              <p>egavilanmedia@gmail.com</p>
              <h4>Phone</h4>
              <p>(555) 555-5555</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-body">
              <form id="formContact">
                <h3 class="text-center">Please fill out this form to contact us</h3>
                <hr>
                <div id="alert_error_message" class="alert alert-danger collapse" role="alert">
                  <i class="fa fa-exclamation-triangle"></i>
                    Please check in on some of the fields below.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div id="alert_sucess_message" class="alert alert-success collapse" role="alert">                  
                   Your message was sent successfully. We will get to you soon.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <p class="text-danger"><i>Required *</i></p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="firstname" name="firstname" maxlength="20" placeholder="First Name *">
                      <div id="firstname_error_message" class="text-danger"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastname" name="lastname" maxlength="20" placeholder="Last Name *">
                      <div id="lastname_error_message" class="text-danger"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" name="email" maxlength="50" placeholder="Email *">
                      <div id="email_error_message" class="text-danger"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="phone" name="phone" maxlength="20" placeholder="Phone Number *">
                      <div id="phone_error_message" class="text-danger"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="subject" name="subject" maxlength="70" placeholder="Subject *">
                      <div id="subject_error_message" class="text-danger"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" id="message" name="message" maxlength="500" placeholder="Message *" rows="7"></textarea>
                      <div id="message_error_message" class="text-danger"></div>
                      <span class="help-block"><p id="characterLeft" class="help-block">You have reached the limit</p></span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="button" id="submit" class="btn btn-outline-danger btn-block">Submit</button>
                    </div>
                  </div>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <!-- footer -->
  <footer id="main-footer" class="text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
            <p>Developed by <a class="grey-text text-lighten-4" href="https://egvlnmedia.blogspot.com/" target="_blank"> EGMedia.com</a> | All Rights Reserved. &copy; 2019 </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
  $(function() {
      // Get the current year for the copyright
      $('#year').text(new Date().getFullYear());

      $('#characterLeft').text('500 characters left');
      // Count left character

      $('#message').keydown(function () {
        var max = 500;
        var len = $(this).val().length;

        if (len >= max) {
            $('#characterLeft').text('You have reached the limit.');
            $("#characterLeft").addClass("text-danger");       
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left.');
            $("#characterLeft").removeClass("text-danger");            
        }
      });

      $(document).keypress(function(e) {
        if(e.which == 13) {
          submit();
        }
      });

      $('#submit').click(function(){
        submit();
      });

      var error_firstname = false;
      var error_lastname = false;
      var error_email = false;
      var error_phone = false;
      var error_subject = false;
      var error_message = false;

      $("#firstname").focusout(function() {
          check_firstname();
      });
      $("#lastname").focusout(function() {
          check_lastname();
      });
      $("#email").focusout(function() {
          check_email();
      });
      $("#phone").focusout(function() {
          check_phone();
      });
      $("#subject").focusout(function() {
          check_subject();
      });
      $("#message").focusout(function() {
          check_message();
      });

      function check_firstname() {

          var firstname_length = $("#firstname").val().length;

          if ($.trim($('#firstname').val()) == '') {
              $("#firstname_error_message").html("Input is blank!");
              $("#firstname_error_message").show();
              error_firstname = true;
              $("#firstname").addClass("is-invalid");
          } else if (firstname_length < 2 || firstname_length > 20) {
              $("#firstname_error_message").html("Should be between 2-50 characters");
              $("#firstname_error_message").show();
              error_firstname = true;
              $("#firstname").addClass("is-invalid");
          } else {
              $("#firstname_error_message").hide();
              $("#firstname").removeClass("is-invalid");
          }
      }

      function check_lastname() {

          var lastname_length = $("#lastname").val().length;

          if ($.trim($('#lastname').val()) == '') {
              $("#lastname_error_message").html("Input is blank!");
              $("#lastname_error_message").show();
              error_lastname = true;
              $("#lastname").addClass("is-invalid");
          } else if (lastname_length < 2 || lastname_length > 20) {
              $("#lastname_error_message").html("Should be between 2-50 characters");
              $("#lastname_error_message").show();
              error_lastname = true;
              $("#lastname").addClass("is-invalid");
          } else {
              $("#lastname_error_message").hide();
              $("#lastname").removeClass("is-invalid");
          }
      }

      function check_email() {

          var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
          var email_length = $("#email").val().length;

          if ($.trim($('#email').val()) == '') {
              $("#email_error_message").html("Input is blank!");
              $("#email_error_message").show();
              error_email = true;
              $("#email").addClass("is-invalid");
          } else if (!(pattern.test($("#email").val()))) {
              $("#email_error_message").html("Invalid email address");
              $("#email_error_message").show();
              error_email = true;
              $("#email").addClass("is-invalid");
          } else {
              $("#email_error_message").hide();
              $("#email").removeClass("is-invalid");
          }
      }

    function check_phone() {

        var phone_length = $("#phone").val().length;

        if ($.trim($('#phone').val()) == '') {
            $("#phone_error_message").html("Input is blank!");
            $("#phone_error_message").show();
            error_phone = true;
            $("#phone").addClass("is-invalid");
        } else if (phone_length < 7 || phone_length > 20) {
            $("#phone_error_message").html("Should be between 7-20 characters");
            $("#phone_error_message").show();
            error_phone = true;
            $("#phone").addClass("is-invalid");
        } else {
            $("#phone_error_message").hide();
            $("#phone").removeClass("is-invalid");
        }
    }

    function check_subject() {

        var subject_length = $("#subject").val().length;

        if ($.trim($('#subject').val()) == '') {
            $("#subject_error_message").html("Input is blank!");
            $("#subject_error_message").show();
            error_subject = true;
            $("#subject").addClass("is-invalid");
        } else if (subject_length < 2 || subject_length > 70) {
            $("#subject_error_message").html("Should be between 2-70 characters");
            $("#subject_error_message").show();
            error_subject = true;
            $("#subject").addClass("is-invalid");
        } else {
            $("#subject_error_message").hide();
            $("#subject").removeClass("is-invalid");
        }
    }

    function check_message() {

        var message_length = $("#message").val().length;

        if ($.trim($('#message').val()) == '') {
            $("#message_error_message").html("Input is blank!");
            $("#message_error_message").show();
            error_message = true;
            $("#message").addClass("is-invalid");
        } else if (message_length < 5 || message_length > 500) {
            $("#message_error_message").html("Should be between 5-50 characters");
            $("#message_error_message").show();
            error_message = true;
            $("#message").addClass("is-invalid");
        } else {
            $("#message_error_message").hide();
            $("#message").removeClass("is-invalid");
        }
    }
      function submit(){

          error_firstname = false;
          error_lastname = false;
          error_email = false;
          error_phone = false;
          error_subject = false;
          error_message = false;

          check_firstname();
          check_lastname();
          check_email();
          check_phone();
          check_subject();
          check_message();

          if (error_firstname == false && error_lastname == false && error_email == false && error_phone == false && error_subject == false && error_message == false) {
              data = $('#formContact').serialize();
              $.ajax({
                  type: "POST",
                  data: data,
                  url: "../process/contacts/addMessage.php",
                  success: function(r) {
                      if (r == 1) {
                          $("#alert_sucess_message").show();
                          $("#alert_error_message").hide();
                          $('#formContact')[0].reset();
                      } else {
                          $("#alert_sucess_message").hide();
                          $("#alert_error_message").show();
                      }
                  }
              });
          } else {
              $("#alert_sucess_message").hide();
              $("#alert_error_message").show();
              return false;
          }
      }
  });
  </script>
</body>

</html>