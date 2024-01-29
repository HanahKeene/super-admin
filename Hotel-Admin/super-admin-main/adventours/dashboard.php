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
        <div class="announcement">
            <div class="icon">
                <i class="fa-solid fa-bullhorn"></i>
            </div>
            <div class="announcement-txt">
                <marquee>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vel numquam blanditiis amet labore optio, assumenda eaque sint incidunt ex, magnam animi tempore sequi hic minus distinctio atque nemo at. </marquee>
            </div>
            <div class="announce-btn">
                <button id="myBtn">NEW ANNOUNCEMENT</button>
                <!-- The Modal -->
                <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add New Announcement</h2>
                </div>
                <div class="modal-body">
                    <input type="text">
                </div>
                </div>
            </div>
        </div>
</div>
        <div class="total-counts">
            <div class="users-box">
                <p>Users</p>
                <p class="count">200</p>
            </div>
            <div class="bookings-box">
                <p>Bookings</p>
                <p class="count">200</p>
            </div>
            <div class="packages-box">
                <p>Packages</p>
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
      ['VIP Room', 5.00]
    ]);

    var options = {
      title: 'Room Status',
      colors: ['#5E3FBE', '#E5DAFB', '#F4F0FD'] // Example color scheme
    }; // Removed pieHole property
    textstyle: { color: 'black'};
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>