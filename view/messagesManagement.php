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
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <section id="contact" class="py-3">
    <div class="container">
        <div id="loadUsersTable"></div>
    </div>
  </section>




<!-- Modal -->
<div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                <div class="row">
                  <div class="col-md-4" >
                    <strong>First Name:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewFirstname">Enmanuel</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Last Name:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewLastname">Gavilan</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>E-mail:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewEmail">enmanuelga@gmail.com</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Subject:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewSubject">Testing this thing</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Message: </strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewMessage">That is, you'd like to know the word count for a website without having to actually count all the words on the page by hand. Website Word Count is a tool which will do exactly that for you. It's a website word counter created specifically so you can find out the number of words on any page on the Internet.</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Sent Date</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewSubject">2019-06-20 10:21:21</div>                    
                  </div>
                </div> 



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>









        <!-- User Detail Modal -->
        <div class="modal fade" id="modalView2" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Message Details</h5>          
              </div>
              <div class="modal-body">
                <div class="modal-body">



                <div class="row">
                  <div class="col-md-4" >
                    <strong>First Name:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewFirstname">Enmanuel</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Last Name:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewLastname">Gavilan</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>E-mail:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewEmail">enmanuelga@gmail.com</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Subject:</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewSubject">Testing this thing</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Message: </strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewMessage">That is, you'd like to know the word count for a website without having to actually count all the words on the page by hand. Website Word Count is a tool which will do exactly that for you. It's a website word counter created specifically so you can find out the number of words on any page on the Internet.</div>                    
                  </div>
                  <div class="col-md-4" >
                    <strong>Sent Date</strong>
                  </div>
                  <div class="col-md-8">
                    <div id="viewSubject">2019-06-20 10:21:21</div>                    
                  </div>
                </div> 







                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End User Detail Modal -->
         

  <!-- FOOTER -->
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
<?php

  // include footer file
  include '../include/footer.php';

?>
  <script>
  $(function() {
      // Get the current year for the copyright
      $('#year').text(new Date().getFullYear());

      $('#loadUsersTable').load('contacts/contactsTable.php');


















  });
  </script>
</body>

</html>