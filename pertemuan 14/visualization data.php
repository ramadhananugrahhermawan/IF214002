<!doctype html>

<?php
	// including FusionCharts PHP wrapper
	include("chart.php");

	// establishing DB connection
	$host= "localhost";
	// add values for below variables according to your system
 	$dbuser="root";	
  $dbpwd="";
  $dbname="tokoonline";



	// connection string (mysqli_connect() is native PHP method for Mysql
  $dbconn=mysqli_connect("localhost", "root", "", "tokoonline");

	// validating DB connection
  if(!$dbconn) {
		exit("There was an error establishing database connection");
	}

?>

<html>
   <head>
      <title>Data Produk</title>

      <!-- including style and font css -->
      <link href='https://fonts.googleapis.com/css?family=Merriweather:300' rel='stylesheet' type='text/css'>
      <style>
      	* {
      		margin: 0;
      		padding: 0;
      		background-color: #FAF6F3;
      	}
      </style>
nama , harga
      <!-- FusionCharts core package JS files -->
      <script src="https://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
      <script src="https://static.fusioncharts.com/code/latest/fusioncharts.charts.js"></script>
      <script src="https://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js"></script>
   </head>
   <body>

<?php

  $result = mysqli_query($dbconn, "select nama  ,  harga , detail from produk ; ") or exit("Error with quering database");

  if ($result) {

  // creating an associative array to store the chart attributes
	$arrData = array(
        "chart" => array(
          	// caption and sub-caption customization
            "caption"=> "Data Produk",
          	"captionFontSize"=> "24",
            "captionFontColor"=> "#4D394B",
            "captionPadding"=> "20",

            // font and text size customization
            "baseFont"=> "Merriweather, sans-serif",
            "baseFontColor"=> "#ABA39D",
            "outCnvBaseColor"=> "#ABA39D",
            "baseFontSize"=> "15",
            "outCnvBaseFontSize"=> "15",

            // div line customization
            "divLineColor"=> "#ABA39D",
            "divLineAlpha"=> "22",
            "numDivLines"=> "5",

            // y-axis scale customization
            "yAxisMinValue"=> "0",
            "yAxisMaxValue"=> "10",

            // tool-tip customization
            "toolTipBorderColor"=> "#ABA8B7",
            "toolTipBgColor"=> "#F5F3F1",
            "toolTipPadding"=> "13",
            "toolTipAlpha"=> "50",
            "toolTipBorderThickness"=> "2",
            "toolTipBorderAlpha"=> "30",
            "toolTipColor"=> "#4D394B",
            "plotToolText"=> "<div style='text-align: center; line-height: 1.5;'>\$label<br>\$value harga<div>",


            // other customizations
            "theme"=> "fint",
            "paletteColors"=> "#7B5A85",
            "showBorder"=> "0",
      			"bgColor"=> "#FAF6F3",
            "canvasBgColor"=> "#FAF6F3",
            "bgAlpha"=> "100",
            "showValues"=> "0",
            "formatNumberScale"=> "0",
            "plotSpacePercent"=> "33",
            "showcanvasborder"=> "0",
            "showPlotBorder"=> "0"
          )
    );

	$arrData["data"] = array();

	// iterating over each data and pushing it into $arrData array
	while($row = mysqli_fetch_array($result)) {
		array_push($arrData["data"], array(
			"label" => $row["nama"],
			"value" => $row["harga"]
			)
		);
	}

  $jsonEncodedData = json_encode($arrData);

	// creating FusionCharts instance
	$mysqliChart = new FusionCharts("column2d", "topMedalChart" , '100%', '450', "mysqli-chart", "json", $jsonEncodedData);

  // FusionCharts render method
  $mysqliChart->render();

	// closing database connection
  mysqli_close($dbconn);

  }

?>
 	<!-- creating chart container -->
 	<center><div id="mysqli-chart">A beautiful chart is on its way!</div></center>
   </body>
</html>