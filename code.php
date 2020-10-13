it is better to take bar chart to represent report to display faculaty to display that in graph so i am taking barchart


Assume that variable 
$yes1,$yes2....$yes5 contain count(id) from model where perticular question 1,2...5 that has yes in database. 
$no1,$no2....$no5 contain count(id) from model where perticular question 1,2...5 that has no in database.

this is for view file attach this script code 
<script>
  $(function () {
    
    //--------------
    //- AREA CHART -
    //--------------

    var areaChartData = {
      labels  : ['1','2','3','4','5'],
      datasets: [
		{
          label               : 'YES',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $yes1;?>,<?php echo $yes2;?>,<?php echo $yes3;?>,<?php echo $yes4;?>,<?php echo $yes5;?>]
        },
        {
          label               : 'No',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $no1;?>,<?php echo $no2;?>,<?php echo $no3;?>,<?php echo $no4;?>,<?php echo $no5;?>]
        },
        
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }  
  })
</script>
