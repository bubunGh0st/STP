<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {       
  animationEnabled: true,
  title: {
    text: ""
  },
  axisY:{
    minimum: 1,
    maximum: 72
  },
  dataPointWidth: 15,
  data: [{
    type: "column",
    dataPoints: [
      { label:"Readings", x: 10, y: 10 },
      { label:"Revision", x: 20, y: 22 },
      { label:"Assignments", x: 30, y: 11 },
      { label:"PP1", x: 40, y: 5 },
      { label:"PP2", x: 50, y: 4 },
      { label:"PP4", x: 60, y: 7 },
      { label:"PP3", x: 70, y: 22 },
      { label:"PP5", x: 80, y: 11 },
      { label:"PPx", x: 90, y: 11 },
      { label:"PP12", x: 100, y: 11 },
      { label:"AA", x: 110, y: 11 },
      { label:"AAA", x: 120, y: 11 },
      { label:"AA1A", x: 130, y: 11 }
    ]
  }]
});
chart.render();

var xSnapDistance = chart.axisX[0].convertPixelToValue(chart.get("dataPointWidth")) / 2;
var ySnapDistance = 3;

var xValue, yValue;

var mouseDown = false;
var selected = null;
var changeCursor = false;

var timerId = null;

function getPosition(e) {
  var parentOffset = $("#chartContainer > .canvasjs-chart-container").offset();           
  var relX = e.pageX - parentOffset.left;
  var relY = e.pageY - parentOffset.top;
  xValue = Math.round(chart.axisX[0].convertPixelToValue(relX));
  yValue = Math.round(chart.axisY[0].convertPixelToValue(relY));
}

function searchDataPoint() {
  var dps = chart.data[0].dataPoints;
  for(var i = 0; i < dps.length; i++ ) {
    if( (xValue >= dps[i].x - xSnapDistance && xValue <= dps[i].x + xSnapDistance) && (yValue >= dps[i].y - ySnapDistance && yValue <= dps[i].y + ySnapDistance) ) 
    {
      if(mouseDown) {
        selected = i;
        break;
      } else {
        changeCursor = true;
        break; 
      }
    } else {
      selected = null;
      changeCursor = false;
    }
  }
}

jQuery("#chartContainer > .canvasjs-chart-container").on({
  mousedown: function(e) {
    mouseDown = true;
    getPosition(e);  
    searchDataPoint();
    oldValue = yValue;
  },
  mousemove: function(e) {
    getPosition(e);
    if(mouseDown) {
      clearTimeout(timerId);
      timerId = setTimeout(function(){
        if(selected != null) {
          chart.data[0].dataPoints[selected].y = yValue;
          chart.render();
        }   
      }, 0);
    }
    else {
      searchDataPoint();
      if(changeCursor) {
        chart.data[0].set("cursor", "n-resize");
      } else {
        chart.data[0].set("cursor", "default");
      }
    }
  },
  mouseup: function(e) {
    if(selected != null) {
      chart.data[0].dataPoints[selected].y = yValue;
      chart.render();
      mouseDown = false;
      newValue = yValue;
      testAjax(chart.data[0].dataPoints[selected].label,newValue);
    }
  }
});

}

function testAjax(taskid,amount) {
    $.post("<?php echo(site_url('dashboard/testAjax'));?>",
    {
        taskid: taskid,
        amount: amount
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
}
</script>

  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Example Bar Chart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bar-chart"></i> Incoming Tasks</div>
        <div class="card-body">
          <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>  
          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          <!--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div> 
      <!-- Icon Cards-->
      <div class="card mb-3 text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-exclamation-triangle"></i>
          </div>
          <div class="mr-5">2 Critical Tasks!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Tasks</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>

    </div>
  </div>
     