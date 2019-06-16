
<?php 
 
require_once "../../classes/connection.php";

      $c = new Connect();
      $connection = $c->connection();

      $sql="SELECT id,
                  name,
                  email,
                  subject
                  FROM messages";
      $result = mysqli_query($connection, $sql);

?>
  <!-- Data Card-->
  <div class="card mb-3"> 
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-condensed table-bordered" id="dataTable">
          <thead class="p-3 mb-2 bg-danger text-white font-weight-bold">
            <tr>
              <td>No.</td>
              <td>Name</td>
              <td>E-mail</td>
              <td>Subject</td>
              <td>Actions</td>
            </tr>
          </thead>
          <tfoot class="p-3 mb-2 bg-secondary text-white font-weight-bold">
            <tr>
              <td>No.</td>
              <td>Name</td>
              <td>E-mail</td>
              <td>Subject</td>
              <td>Actions</td>
            </tr>
          </tfoot>
          <tbody >
            <?php 
            while ($row = mysqli_fetch_row($result)) {
              ?>
              <tr >
                <td class="text-center"><?php echo $row[0] ?></td>
                <td class="text-center""><?php echo $row[1] ?></td>
                <td class="text-center""><?php echo $row[2] ?></td>
                <td class="text-center""><?php echo $row[3] ?></td>
                <td class="text-center"">
                  <span class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalView" data-toggle="tooltip" data-placement="bottom" title="View" onclick="addMessage('<?php echo $row[0]; ?>')">
                    <span class="fa fas fa-eye"></span>
                  </span>

                  <span class="btn btn-danger btn-xs data-toggle="tooltip" data-placement="bottom" title="Delete"" onclick="deleteMessage('<?php echo $row[0]; ?>')">
                    <span class="fa fa-trash"></span>
                  </span>
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

