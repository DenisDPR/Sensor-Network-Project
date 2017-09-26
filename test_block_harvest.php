<!doctype html >
<html lang="en" >
<head>
<title> MIKAMI_NCC </title>
<meta charset="utf-8"
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<!--<link href="style.css" rel="stylesheet" type="text/css" /> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" > </script>
<!-- Load the AJAX API -->
<script type="text/javascript" src="https://www.google.com/jsapi" > </script>
<script type="text/javascript" >
    /* Initialization of Google Charts API */
    google.load(
      "visualization",
      "1",
      {
        packages: [ "corechart","bar"],
        callback: function() {
          getData( {
            url: 'ForBlockA.php',
            targetDivId: 'chart_div1',
            chartOptions: {
              //title: 'BLOCK HARVEST',
              titleTextStyle : {color: 'blue', fontSize: 25, fontName: 'Arial', bold:'true'},
              width:1400,
              height:600,
              gridlines:'none',
              explorer: {
                actions: ["dragToZoom", "rightClickToReset"],
                axis: 'horizontal',
                keepInBounds: true,
                maxZoomOut: 1,
                maxZoomIn: 0.05,
                colors: ['#D44E41'],
              },
              //explorer: { axis : "horizontal" , keepInBounds : true},

              //explorer: {axis: 'horizontal',keepInBounds: true},
              backgroundColor: '#BFE6F6',
            //  explorer: {actions: ["dragToZoom", "rightClickToReset"]},
              //curveType: 'function',
              hAxis:{
                title: '',
                titleFontSize:25
              },
              vAxis:{
                title: '温度 (℃)',
                pointSize: 10,
                titleFontSize:25,
                dataOpacity: 0.3
              }
            }
          } )
        }
      }
    );



    google.load(
      "visualization",
      "1",
      {
        packages: [ "corechart","bar" ],
        callback: function() {
          getData( {
            url: 'ForBlockB.php',
            targetDivId: 'chart_div2',
            chartOptions: {
              title: 'BLOCK HARVEST',
              titleTextStyle : {color: 'blue', fontSize: 25, fontName: 'Arial', bold:'true'},
              width:1400,
              height:600,
              //gridlines:'none',
              explorer: {axis: 'horizontal',keepInBounds: true},
              backgroundColor: '#BFE6F6',
              explorer: {actions: ["dragToZoom", "rightClickToReset"]},
              //curveType: 'function',
              hAxis:{
                title: '',
                titleFontSize:25
              },
              vAxis:{
                title: '温度 (℃)',
                pointSize: 10,
                titleFontSize:25,
                dataOpacity: 0.3
              }
            }
          } )
        }
      }
    );

    google.load(
      "visualization",
      "1",
      {
        packages: [ "corechart","bar"],
        callback: function() {
          getData( {
            url: 'ForBlockC.php',
            targetDivId: 'chart_div3',
            chartOptions: {
              title: 'BLOCK HARVEST',
              titleTextStyle : {color: 'blue', fontSize: 25, fontName: 'Arial', bold:'true'},
              width:1400,
              height:600,
              //gridlines:'none',
              explorer: {axis: 'horizontal',keepInBounds: true},
              backgroundColor: '#BFE6F6',
              explorer: {actions: ["dragToZoom", "rightClickToReset"]},
              //curveType: 'function',
              hAxis:{
                title: '',
                titleFontSize:25
              },
              vAxis:{
                title: '温度 (℃)',
                pointSize: 10,
                titleFontSize:25,
                dataOpacity: 0.3
              }
            }
          } )
        }
      }
    );

    google.load(
      "visualization",
      "1",
      {
        packages: [ "corechart","bar"],
        callback: function() {
          getData( {
            url: 'ForBlockD.php',
            targetDivId: 'chart_div4',
            chartOptions: {
              title: 'BLOCK HARVEST',
              titleTextStyle : {color: 'blue', fontSize: 25, fontName: 'Arial', bold:'true'},
              width:1400,
              height:600,
              //gridlines:'none',
              explorer: {axis: 'horizontal',keepInBounds: true},
              backgroundColor: '#BFE6F6',
              explorer: {actions: ["dragToZoom", "rightClickToReset"]},
              //curveType: 'function',
              hAxis:{
                title: '',
                titleFontSize:25
              },
              vAxis:{
                title: '温度 (℃)',
                pointSize: 10,
                titleFontSize:25,
                dataOpacity: 0.3
              }
            }
          } )
        }
      }
    );

    google.load(
      "visualization",
      "1",
      {
        packages: [ "corechart","bar"],
        callback: function() {
          getData( {
            url: 'ForBlockE.php',
            targetDivId: 'chart_div5',
            chartOptions: {
              title: 'BLOCK HARVEST',
              titleTextStyle : {color: 'blue', fontSize: 25, fontName: 'Arial', bold:'true'},
              width:1400,
              height:600,
              //gridlines:'none',
              explorer: {axis: 'horizontal',keepInBounds: true},
              backgroundColor: '#BFE6F6',
              explorer: {actions: ["dragToZoom", "rightClickToReset"]},
              //curveType: 'function',
              hAxis:{
                title: '',
                titleFontSize:25
              },
              vAxis:{
                title: '温度 (℃)',
                pointSize: 10,
                titleFontSize:25,
                dataOpacity: 0.3
              }
            }
          } )
        }
      }
    );

    google.load(
      "visualization",
      "1",
      {
        packages: [ "corechart","bar"],
        callback: function() {
          getData( {
            url: 'ForBlockF.php',
            targetDivId: 'chart_div6',
            chartOptions: {
              title: 'BLOCK HARVEST',
              titleTextStyle : {color: 'blue', fontSize: 25, fontName: 'Arial', bold:'true'},
              width:1400,
              height:600,
              //gridlines:'none',
              explorer: {axis: 'horizontal',keepInBounds: true},
              backgroundColor: '#BFE6F6',
              explorer: {actions: ["dragToZoom", "rightClickToReset"]},
              //curveType: 'function',
              hAxis:{
                title: '',
                titleFontSize:25
              },
              vAxis:{
                title: '温度 (℃)',
                pointSize: 10,
                titleFontSize:25,
                dataOpacity: 0.3
              }
            }
          } )
        }
      }
    );

    /* Get data from the database */
    function getData( options ) {
      jQuery.ajax( {
          url: options.url,
          type: 'GET',
          dataType: 'json',
          cache: false
      } ).done( function ( data ) {
        drawGraph( data, options.targetDivId, options.chartOptions );
      } );
    }

    function drawGraph( data, targetDiv, chatOptions ) {
        for( var i = data.length; i > 0; i-- ) {
            data[i] = data[i - 1];
        }
        //console.log( data );
        data[0] = [ '日付', 'Grade A','Grade B','Loss' ];
        console.log( data );
        var chartData1 = google.visualization.arrayToDataTable( data );
        var chart = new google.charts.Bar( document.getElementById( targetDiv ) );
        chart.draw( chartData1, chatOptions );
    }

</script>
</head>
<body>
  <div>
      <h1 style="text-align: center; color: #6d63f9;  margin-left: 200px" id="chart_title">TOGUCHI FARM HARVEST</h1>
      <p style="text-align: left; color: blue; Green; margin-left: 300px" id="chart_source">
      </p>
  <div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#chart_div1" data-toggle="tab">BLOCK A</a></li>
    <li><a href="#chart_div2" data-toggle="tab">BLOCK B</a></li>
    <li><a href="#chart_div3" data-toggle="tab">BLOCK C</a></li>
    <li><a href="#chart_div4" data-toggle="tab">BLOCK D</a></li>
    <li><a href="#chart_div4" data-toggle="tab">BLOCK E</a></li>
    <li><a href="#chart_div6" data-toggle="tab">BLOCK F</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="chart_div1">
    </div>
    <div class="tab-pane" id="chart_div2">
    </div>
    <div class="tab-pane" id="chart_div3">
    </div>
    <div class="tab-pane" id="chart_div4">
    </div>
    <div class="tab-pane" id="chart_div5">
    </div>
    <div class="tab-pane" id="chart_div6">
    </div>
  </div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
