<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
  #myProgress {
      width: 100%;
      height: 30px;
      background-color: #999;
  }
  #myBar {
      width: 10%;
      height: 30px;
      background-color: #099;
      text-align: center; /* To center it horizontally (if you want) */
      line-height: 30px; /* To center it vertically */
      position: absolute;
      
  }#myDesc {
    position: absolute;
    width: 100%;
    height: 30px;
    text-align: center;
    color: #fff; 
  }#home .card-header{
      background-color: #099;
      color:#fff;
  }
</style>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo(base_url());?>vendor2/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo(base_url());?>vendor2/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for this page-->
  <script src="<?php echo(base_url());?>js/sb-admin-datatables.min.js"></script>
<script>
  $(document).ready(function() {
   
    move();

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

    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });

    function move() {
        var elem = document.getElementById("myBar"); 
        var width = 10;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= 50) {
                clearInterval(id);
            } else {
                width++; 
                elem.style.width = width + '%'; 
                $('#myDesc').html(width * 1 + '% [500/1000 EXP]');
            }
        }
    }


  });
</script>



  <div class="content-wrapper">
    <div class="container-fluid">

     <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-line-chart"></i> Achievements Level
          <button data-toggle="modal" data-target="#modal-achievements" class="btn btn btn-primary float-right"><i class="fa fa-trophy"></i> Achievements List</button>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <h3>Lvl. 1</h3>
            </div>
            <div class="col-sm-6 text-right">
              <h5>500 EXP to Lvl. 2</h5>
            </div>
          </div>
          <div id="myProgress">
            <div id="myBar"></div>
            <div id="myDesc">10%</div>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-flag-checkered"></i> Achievements Ranking
        </div>
        <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Level</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    Bubun Mallick
                  </td>
                  <td>
                    125
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    Prakash Kumar
                  </td>
                  <td>
                    119
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    Ravinder Singh
                  </td>
                  <td>
                    87
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    Vladislav Sokolov
                  </td>
                  <td>
                    44
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    Ryan Dj
                  </td>
                  <td>
                    21
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    Ravita Negi
                  </td>
                  <td>
                    1
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
    <div class="modal fade" id="modal-achievements" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4>Achievements List</h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home">My Achievements</a></li>
              <li>/</li>
              <li><a href="#menu1">Future Achievements</a></li>
            </ul>

            <div class="clear" style="height:10px;"></div>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">

                <div class="card mb-3">
                  <div class="card-header">
                    Hello Student!
                    <div class="float-right"><i class="fa fa-trophy"></i> 250 EXP</div>
                  </div>
                  <div class="card-body">
                    Sign up to Student Time Planner.
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    Hello Again!
                    <div class="float-right"><i class="fa fa-trophy"></i> 250 EXP</div>
                  </div>
                  <div class="card-body">
                    Sign up for 5 days in a row.
                  </div>
                </div>

              </div>
              <div id="menu1" class="tab-pane fade">
                
                <div class="card mb-3">
                  <div class="card-header">
                    Hello Again! 10X
                    <div class="float-right"><i class="fa fa-trophy"></i> 500 EXP</div>
                  </div>
                  <div class="card-body">
                    Sign up for 10 days in a row.
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    Hello Again! 20X
                    <div class="float-right"><i class="fa fa-trophy"></i> 1000 EXP</div>
                  </div>
                  <div class="card-body">
                    Sign up for 20 days in a row.
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    Reading Frenzy
                    <div class="float-right"><i class="fa fa-trophy"></i> 1000 EXP</div>
                  </div>
                  <div class="card-body">
                    Complete 5 hours of reading.
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    Reading Rampage
                    <div class="float-right"><i class="fa fa-trophy"></i> 2000 EXP</div>
                  </div>
                  <div class="card-body">
                    Complete 10 hours of reading.
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    Advanced Revision
                    <div class="float-right"><i class="fa fa-trophy"></i> 1000 EXP</div>
                  </div>
                  <div class="card-body">
                    Complete 10 hours of revision.
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    Revision Mastery
                    <div class="float-right"><i class="fa fa-trophy"></i> 2000 EXP</div>
                  </div>
                  <div class="card-body">
                    Complete 20 hours of revision.
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <i class="fa fa-remove"></i> Cancel
            </button>
            
          </div>
        </div>
      </div>
    </div>