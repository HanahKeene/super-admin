<?php 

include 'navbar.php';
$pageTitle = "DASHBOARD";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=10, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="dashboard">
        <div class="greetings">
            <p>Good morning, <b> Trixie Soriano!</b></p>
        </div>
</div>
        <div class="total-counts">
            <div class="users-box">
                <p>Active Reservation</p>
                <p class="count">200</p>
            </div>
            <div class="bookings-box">
                <p> Rooms Available</p>
                <p class="count">200</p>
            </div>
            <div class="packages-box">
                <p>Expected Arrival</p>
                <p class="count">200</p>
            </div> 
            <div class="departure-box">
                <p>Expected Departure</p>
                <p class="count">200</p>
            </div> 
        </div>
        
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Sector', 'Percentage'],
      ['Occupied Room', 50.00],
      ['Available Room', 10.00],
      ['VIP Room', 7.00]
    ]);

    var options = {
      title: 'Room Status',
      colors: ['#5E3FBE', '#E5DAFB', '#F4F0FD'],
      textStyle: { color: 'black' },
      chartArea: { left: 10, top: 30, width: '90%', height: '90%' } // Adjusted the chartArea
      ,titleTextStyle: { // Added to control title style
        fontSize: 16,  // Adjust font size (optional)
        fontWeight: 'bold',  // Make title bold
        padding: 8  // Add padding around the title (optional)
      }
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
</head>
<body>
  <div id="piechart" style="width: 100%; max-width: 300px; height: 210px; margin-left: 15px; margin-right: -5px; margin-top: 10px;">
  </div>

  <style>
        table {
            border-collapse: collapse;
            width: 50%; /* Adjust the width as needed */
            float: right;
            margin-top: 10px; /* Add some margin for spacing */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<style>
  table {
    border-collapse: collapse;
    width: 50%; /* Adjust the width as needed */
    float: left;
    margin-top: -213px; /* Add some margin for spacing */
    margin-left: 380px; /* Adjust the value as needed */
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
/* Add the table title style */
caption {
    font-size: 16;
    font-weight: bold;
    padding: 8px;
  text-align: left; /* Add this line to align left */
  }
</style>

<table>
  <caption>Current Status</caption>
  <tr>
    <th></th>
    <th>Room</th>
    <th>Pax</th>
  </tr>
  <tr>
    <td>Start Of The Day</td>
    <td>5</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Arrivals</td>
    <td>8</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Departure</td>
    <td>12</td>
    <td>5</td>
  </tr>
</table>

</body>
</html>