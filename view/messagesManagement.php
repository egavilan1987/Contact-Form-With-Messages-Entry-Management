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
  <title>Messages Entry Management</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="messagesManagement.php" class="navbar-brand">Messages Entry Management</a>
    </div>
  </nav>

  <section id="contact" class="py-3">
    <div class="container">
        <div id="alert_sucess_message" class="alert alert-success collapse" role="alert">                  
            Message has been deleted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="loadMessagesTable"></div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Message Details
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <strong>First Name:
              </strong>
            </div>
            <div class="col-md-8">
              <div id="firstname">
              </div>
            </div>
            <div class="col-md-4">
              <strong>Last Name:
              </strong>
            </div>
            <div class="col-md-8">
              <div id="lastname">
              </div>
            </div>
            <div class="col-md-4">
              <strong>E-mail:
              </strong>
            </div>
            <div class="col-md-8">
              <div id="email">
              </div>
            </div>
            <div class="col-md-4">
              <strong>Phone:
              </strong>
            </div>
            <div class="col-md-8">
              <div id="phone">
              </div>
            </div>
            <div class="col-md-4">
              <strong>Subject:
              </strong>
            </div>
            <div class="col-md-8">
              <div id="subject">
              </div>
            </div>
            <div class="col-md-4">
              <strong>Message: 
              </strong>
            </div>
            <div class="col-md-8">
              <div id="message">
              </div>
            </div>
            <div class="col-md-4">
              <strong>Sent Date
              </strong>
            </div>
            <div class="col-md-8">
              <div id="sentDate">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--End User Detail Modal -->

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> 

</body>

</html>

  <script type="text/javascript">
  $(document).ready(function(){

  // Get the current year for the copyright
  $('#year').text(new Date().getFullYear());

  $('#loadMessagesTable').load('contacts/contactsTable.php');

  });

  function addMessage(contact_id) {
      $.ajax({
          type: "POST",
          data: "contact_id=" + contact_id,
          url: "../process/contacts/getMessageData.php",
          success: function(r) {
              data = jQuery.parseJSON(r);              
              $('#contact_id').text(data['contact_id']);
              $('#firstname').text(data['firstname']);
              $('#lastname').text(data['lastname']);
              $('#email').text(data['email']);
              $('#phone').text(data['phone']);
              $('#subject').text(data['subject']);
              $('#message').text(data['message']);
              $('#sentDate').text(data['sentDate']);
          }
      });
  }

  function deleteMessage(contact_id) {

      var answer = confirm("Are you sure want to delete this message?");

      if (answer == true) {
          $.ajax({
              type: "POST",
              data: "contact_id=" + contact_id,
              url: "../process/contacts/deleteMessage.php",
              success: function(r) {
                  if (r == 1) {
                      $('#loadMessagesTable').load('contacts/contactsTable.php');
                      $("#alert_sucess_message").show();
                  } else {
                      alert("Message could not be deleled.");
                  }
              }
          });
      } else {
          $("#alert_sucess_message").hide();
      }
  }

  </script>
