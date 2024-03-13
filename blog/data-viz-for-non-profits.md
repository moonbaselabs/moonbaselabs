---
title: Data Visualizations to Communicate impact
description: Moving from Tableau to web-first data viz.
date: 2024-03-13
image: /img/blog/an-ode-to-the-patron-saint-of-the-internet.jpg
author: Ted Kriwiel
---

As the founder of a nonprofit and a technology company, its fun whenever those two worlds collide. As I was preparing for a presentation about fEight Oaks last week, I wanted to incorporate some data visualizations into the work. Line charts are a remarkable way to convey a message. My presentation was built around two data visualizations. I thought it would be a fun exercise to demonstrate how I would build those visualizations and also how they can be weaved into a message to inspire.



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div id="chart_container" style="width: 750px; margin: auto; border: 1px solid #ccc; padding: 5%">
    <div id="chart_title" style="text-align: center; font-size: 28px; font-weight: bold;">
        Educational Attainment of Ghanaian Women
    </div>
    <div id="chart_subtitle" style="text-align: center; font-size: 16px;">
        The percentage of women who have completed each education level.
    </div>
    <div id="area_chart_div" style="height: 650px; padding: 5%">
    </div>
    <div id="source" style="text-align: right; margin: auto; font-size: 14px;">
        Data provided by UNESCO Institute of Statistics (UIS)
    </div>
</div>


<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.DataTable();
        data.addColumn('string', 'Education Level');
        data.addColumn('number', 'Total Population (%)');
        data.addColumn({type: 'string', role: 'annotation'});

        data.addRows([
            ['Primary', .499, '50%'],
            ['Lower Secondary', .377, '38%'],
            ['Upper Secondary', .112, '11%'],
            ['Tertiary', .021, '2%']
    ]);

    var options = {
      annotations: {
        alwaysOutside: true,
        stemLength: 40,
        textStyle: {
            fontSize: 24, 
            auraColor: 'none',
            fontName: 'Barlow',
            bold: true,
            color: '#f8fafc'
        }
      },
      hAxis: {
        title: 'Education Level',
        titleTextStyle: {color: '#f8fafc', fontSize: 20, fontName: 'Barlow'},
        textStyle: {color: '#f8fafc', fontSize: 14, fontName: 'Barlow'}
      },
      vAxis: {
        minValue: 0,
        format: 'percent',
        textStyle: {color: '#f8fafc', fontSize: 14, fontName: 'Barlow'},
        gridlines: {color: '#a0aec0', minSpacing: 150},
        baseline: {color: '#f8fafc'},
        minorGridlines: {color: 'transparent'}
      },
      legend: 'none',
      chartArea: {
        left: '10%', 
        right: '5%', 
        top: '3%', 
        bottom: '10%'
      },
      backgroundColor: 'transparent',
      colors: ['#93C5FD'],
      lineWidth: 5,
      curveType: 'function',
      pointSize: 15,
      pointsVisible: true
    };

    var chart = new google.visualization.LineChart(document.getElementById('area_chart_div'));
    chart.draw(data, options);
  }
</script>
