<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
      if (title != 'Action' && title != 'Status'){
        $(this).html( '<input type="text" placeholder="Search '+title+'" class="container-fluid"/>' );
      }else{
        $(this).html( '&nbsp;' );
      }
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
} );
</script>

<style>
tfoot {
    display: table-header-group;
}
  #modal-add-course .modal-content{
    width: 150%;
  }
  #modal-add-course{
    width: 1450px;
  }

</style>

  <div class="content-wrapper">
    <div class="container-fluid">

     <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-graduation-cap"></i> Courses
          <button data-toggle="modal" data-target="#modal-add-course" class="btn btn btn-primary float-right"><i class="fa fa-plus"></i> Add Course</button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="x" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Site</th>
                  <!-- <th>Status</th> -->
                  <th>Action</th>
                </tr>
              </thead>
              <!-- <tfoot> 
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Site</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot> -->
              <tbody>
                <tr>
                  <td>IT7351</td>
                  <td>Project</td>
                  <td>WelTec Petone</td>
                  <!-- <td><i class="fa fa-check text-primary"></i></td> -->
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-course"><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>IT6256</td>
                  <td>Logical Database Design</td>
                  <td>WelTec Petone</td>
                  <!-- <td>&nbsp;</td> -->
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-course"><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>IT7320</td>
                  <td>Software Dev & Testing</td>
                  <td>WelTec Petone</td>
                  <!-- <td>&nbsp;</td> -->
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-course"><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>ACCY115</td>
                  <td>Accounting Fundamental</td>
                  <td>Vic Uni Lambton Quay</td>
                  <!-- <td>&nbsp;</td> -->
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-course"><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>ACCY111</td>
                  <td>Accounting</td>
                  <td>Vic Uni Lambton Quay</td>
                  <!-- <td><i class="fa fa-check text-primary"></i></td> -->
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-course"><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>BA1212</td>
                  <td>Business Fundamental</td>
                  <td>WelTec Wellington</td>
                  <!-- <td>&nbsp;</td> -->
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-course"><i class="fa fa-trash"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
   
    <!-- Modal -->
    <div class="modal fade" id="modal-remove-course" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this course?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-trash"></i> Remove</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-add-course" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Select Courses</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
             <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Site</th>
                  <!--<th>Status</th>-->
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Site</th>
                  <!--<th>Status</th>-->
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>IT7351</td>
                  <td>Project</td>
                  <td>WelTec Petone</td>
                 <!-- <td><i class="fa fa-check text-primary"></i></td>-->
                  <td><input type="checkbox" name=""></td>
                </tr>
                <tr>
                  <td>IT6256</td>
                  <td>Logical Database Design</td>
                  <td>WelTec Petone</td>
                  <td><input type="checkbox" name=""></td>
                </tr>
                <tr>
                  <td>IT7320</td>
                  <td>Software Dev & Testing</td>
                  <td>WelTec Petone</td>
                  <td><input type="checkbox" name=""></td>
                </tr>
                <tr>
                  <td>ACCY115</td>
                  <td>Accounting Fundamental</td>
                  <td>Vic Uni Lambton Quay</td>
                  <td><input type="checkbox" name=""></td>
                </tr>
                <tr>
                  <td>ACCY111</td>
                  <td>Accounting</td>
                  <td>Vic Uni Lambton Quay</td>
                  <!-- <td><i class="fa fa-check text-primary"></i></td> -->
                  <td><input type="checkbox" name=""></td>
                </tr>
                <tr>
                  <td>BA1212</td>
                  <td>Business Fundamental</td>
                  <td>WelTec Wellington</td>
                  <td><input type="checkbox" name=""></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
            <button class="btn btn-primary" type="button" data-dismiss="modal"><i class="fa fa-plus"></i> Add</button>
          </div>
        </div>
      </div>
    </div>