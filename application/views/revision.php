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
</style>

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
   $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  } );
</script>

  <div class="content-wrapper">
    <div class="container-fluid">

     <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-eye"></i> Revision
        </div>
        <div class="card-body">
          <div id="accordion">
            <h3>IT6256 - Revision 1&emsp;<i class="fa fa-calendar"></i> 5 Apr 2018</h3>
            <div>
              <p>
              Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
              ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
              amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
              odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
              </p>
              <i class="fa fa-clock-o"></i> <i>Approximately 20 hours to complete</i>
              <br><br>
              <form role="form">
                <div class="form-group">
                  <label>Progress <output id="amount" name="amount" for="rangeInput">20</output>%</label>
                  <input type="range" id="rangeInput" class="form-control" name="rangeInput" min="0" max="100" value="20" oninput="amount.value=rangeInput.value">  
                </div>
              </form>
              <div class="small float-right">Start on 1 Mar 2018</div>
            </div>
            <h3>IT7341 - Revision 2&emsp;<i class="fa fa-calendar"></i> 3 May 2018</h3>
            <div>
              <p>
              Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
              ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
              amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
              odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
              </p>
              <i class="fa fa-clock-o"></i> <i>Approximately 20 hours to complete</i>
              <br><br>
              <form role="form">
                <div class="form-group">
                  <label>Progress <output id="amount" name="amount" for="rangeInput">20</output>%</label>
                  <input type="range" id="rangeInput" class="form-control" name="rangeInput" min="0" max="100" value="20" oninput="amount.value=rangeInput.value">  
                </div>
              </form>
              <div class="small float-right">Start on 1 Mar 2018</div>
            </div>
           <h3>IT7320 - Revision 3&emsp;<i class="fa fa-calendar"></i> 10 Apr 2018</h3>
            <div>
              <p>
              Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
              ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
              amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
              odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
              </p>
              <i class="fa fa-clock-o"></i> <i>Approximately 20 hours to complete</i>
              <br><br>
              <form role="form">
                <div class="form-group">
                  <label>Progress <output id="amount" name="amount" for="rangeInput">20</output>%</label>
                  <input type="range" id="rangeInput" class="form-control" name="rangeInput" min="0" max="100" value="20" oninput="amount.value=rangeInput.value">  
                </div>
              </form>
              <div class="small float-right">Start on 1 Mar 2018</div>
            </div>
            <h3>IT6268 - Revision 2&emsp;<i class="fa fa-calendar"></i> 11 Apr 2018</h3>
            <div>
              <p>
              Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
              ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
              amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
              odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
              </p>
              <i class="fa fa-clock-o"></i> <i>Approximately 20 hours to complete</i>
              <br><br>
              <form role="form">
                <div class="form-group">
                  <label>Progress <output id="amount" name="amount" for="rangeInput">20</output>%</label>
                  <input type="range" id="rangeInput" class="form-control" name="rangeInput" min="0" max="100" value="20" oninput="amount.value=rangeInput.value">  
                </div>
              </form>
              <div class="small float-right">Start on 1 Mar 2018</div>
            </div>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->