<?php

  include '../include/header.php';

?>

        <div id="alert_sucess_message" class="alert alert-success collapse" role="alert">                  
            Message has been deleted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!--load messages table -->
        <div id="loadMessagesTable"></div>          
<?php

  // include footer file
  include '../include/footer.php';

?>

<script type="text/javascript">
        
    $(document).ready(function(){
      
      $('#loadMessagesTable').load("messages/messagesTable.php");
      
    });

  function addMessage(id){
    $.ajax({
      type:"POST",
      data:"id=" + id,
      url:"../process/messages/getMessageData.php",
      success:function(r){
        data=jQuery.parseJSON(r); 
        $('#id').val(data['id']);
        $('#name').text(data['name']);  
        $('#phone').text(data['phone']);
        $('#email').text(data['email']);
        $('#subject').text(data['subject']);
        $('#message').text(data['message']);
        $('#send_date').text(data['send_date']);     
      }
    });
  }
        
  function deleteMessage(id){

  var r =  confirm("Are you sure want to delete this message?");

  if (r == true) {
    $.ajax({
    type:"POST",
    data:"idUser=" + idUser, 
    url:"../process/messages/deleteMessage.php",
    success:function(r){
      if(r==1){
        $('#loadMessagesTable').load("messages/messagesTable.php"); 
        $("#alert_sucess_message").show();       
        }else{
          alert("Message could not be deleled.");
          }
        }
      });
    } else {
      $("#alert_sucess_message").hide();
    }
  }

</script>
