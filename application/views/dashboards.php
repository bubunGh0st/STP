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

  <div class="content-wrapper">
    <div class="container-fluid">

     <!-- Example DataTables Card-->
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bar-chart"></i> Incoming Tasks</div>
        <div class="card-body">
          <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>  
          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>  
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div> 
      
    </div>
   
   