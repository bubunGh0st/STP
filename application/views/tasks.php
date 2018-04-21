<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <script type="text/javascript" src="<?php echo(base_url());?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo(base_url());?>js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
  <!-- Page level plugin JavaScript-->
  <script src="<?php echo(base_url());?>vendor2/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo(base_url());?>vendor2/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for this page-->
  <script src="<?php echo(base_url());?>js/sb-admin-datatables.min.js"></script>
  
<script>
$(document).ready(function() {
  // Setup - add a text input to each footer cell
  $('#dataTable tfoot th').each( function () {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" class="container-fluid"/>' );
  } );

  // DataTable
  var table = $('#dataTable').DataTable();

  // Apply the search
  table.columns().every( function () {
      var that = this;

      $( 'input', this.footer() ).on( 'keyup change', function () {
          if ( that.search() !== this.value ) {
              that
                  .search( this.value )
                  .draw();
          }
      } );
  } );

   $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});

   $("#modal-add-task").find("button[type='submit']").click(function() {
      testAjax();
  });
} );

function testAjax() {
    $.post("<?php echo(site_url('Tasks/testAjax'));?>",
    {
        taskName: $("#modal-add-task").find("#taskName").val()
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
        $("#dataTable").load("#dataTable");
    });
}
    
</script>

<style>
  tfoot {
    display: table-header-group;
  }
  .clear{
    clear: both;
  }.btn-50-left{
    float:left !important;
    width: 50% !important;
    margin: 0 !important;
    border-bottom-right-radius: 0; 
    border-top-right-radius: 0; 
  }.btn-50-right{
    float:right!important;
    width: 50% !important;
    margin: 0 !important;
    border-bottom-left-radius: 0; 
    border-top-left-radius: 0; 
  }
</style>

  <div class="content-wrapper">
    <div class="container-fluid">

     <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-tasks"></i> Tasks
          <button data-toggle="modal" data-target="#modal-add-task" class="btn btn btn-primary float-right"><i class="fa fa-plus"></i> Add Task</button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tasks</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tasks</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Personal Project 1</td>
                  <td>
                    <button data-toggle="modal" data-target="#modal-edit-task" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                    <button data-toggle="modal" data-target="#modal-delete-task" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Deep Cleaning Bathroom</td>
                  <td>
                    <button data-toggle="modal" data-target="#modal-edit-task" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                    <button data-toggle="modal" data-target="#modal-delete-task" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Personal Project 2</td>
                  <td>
                    <button data-toggle="modal" data-target="#modal-edit-task" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                    <button data-toggle="modal" data-target="#modal-delete-task" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Some Task</td>
                  <td>
                    <button data-toggle="modal" data-target="#modal-edit-task" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                    <button data-toggle="modal" data-target="#modal-delete-task" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Packing for Vacation</td>
                  <td>
                    <button data-toggle="modal" data-target="#modal-edit-task" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                    <button data-toggle="modal" data-target="#modal-delete-task" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
   
    <!-- Modal -->
    <div class="modal fade" id="modal-edit-task" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4>Deep Cleaning Bathroom</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label>Task Name</label>
                <input type="text" class="form-control" id="name" placeholder="Task Name" value="Deep Cleaning Bathroom">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" id="description" placeholder="Description">I have to deep clean bathroom some time in this month...</textarea>
              </div>
              <div class="form-group">
                <label>Due</label>
                <div class="clear"></div>
                <input type="text" value="2012-03-31 15:45" readonly class="form_datetime form-control">
                <div class="clear"></div>
              </div>
              <div class="form-group">
                <label>Hours to Complete</label>
                <input type="number" class="form-control" id="hour" placeholder="Hours to Complete" value="2">
              </div>
              <!--
              <div class="form-group">
                <label>Progress <output id="amount" name="amount" for="rangeInput">20</output>%</label>
                <input type="range" id="rangeInput" class="form-control" name="rangeInput" min="0" max="100" value="20" oninput="amount.value=rangeInput.value">  
                
              </div> 
              --> 
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Update Tasks</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <i class="fa fa-remove"></i> Cancel
            </button>
            
          </div>
        </div>
      </div>
    </div>

     <!-- Modal -->
    <div class="modal fade" id="modal-add-task" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4>Add New Task</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label>Task Name</label>
                <input type="text" class="form-control" id="taskName" placeholder="Task Name">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" id="description" placeholder="Description"></textarea>
              </div>
              <div class="form-group">
                <label>Due</label>
                <div class="clear"></div>
                <input type="text" readonly class="form_datetime form-control">
                <div class="clear"></div>
              </div>
              <div class="form-group">
                <label>Hours to Complete</label>
                <input type="number" class="form-control" id="hour" placeholder="Hours to Complete">
              </div>
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Add Tasks</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <i class="fa fa-remove"></i> Cancel
            </button>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-delete-task" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this task?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-trash"></i> Delete</button>
          </div>
        </div>
      </div>
    </div>