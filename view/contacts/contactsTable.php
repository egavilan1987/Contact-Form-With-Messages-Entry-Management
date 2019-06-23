<?php
require_once "../../classes/connection.php";
$c = new Connect();
$connection = $c->connection();
$sql = "SELECT contact_id, firstname, lastname, email, subject, sentDate FROM tbl_contacts";
$result = mysqli_query($connection, $sql);
?>
  <!-- Messages Card-->
  <div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Messages
    </div>   
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-condensed table-bordered" id="dataTable">
          <thead class="p-3 mb-2 bg-danger text-white font-weight-bold">
            <tr>
              <td>ID</td>
              <td>Fullname</td>
              <td>E-mail</td>
              <td>Subject</td>
              <td>Date</td>
              <td>View</td>
              <td>Delete</td>
            </tr>
          </thead>
          <tfoot class="p-3 mb-2 bg-secondary text-white font-weight-bold">
            <tr>
              <td>ID</td>
              <td>Fullname</td>
              <td>E-mail</td>
              <td>Subject</td>
              <td>Date</td>
              <td>View</td>
              <td>Delete</td>
            </tr>
          </tfoot>
          <tbody >
            <?php 
                while ($row=mysqli_fetch_row($result)) {
              ?>
              <tr>
                <td class="text-center"><?php echo $row[0] ?></td>
                <td class="text-center"><?php echo $row[1] ." ". $row[2] ?></td>
                <td class="text-center"><?php echo $row[3] ?></td>
                <td class="text-center"><?php echo $row[4] ?></td>
                <td class="text-center"><?php echo $row[5] ?></td>
                <td>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modalView" data-toggle="tooltip" data-placement="bottom" title="View" onclick="addMessage('<?php echo $row[0]; ?>')">
                    <i class="fas fa-eye"></i>
                  </button>
                </td>
                <td>
                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteMessage('<?php echo $row[0]; ?>')">
                    <i class="fas fa-trash"></i>
                  </button>
                </td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div> 

<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').DataTable();
  } );
</script>

