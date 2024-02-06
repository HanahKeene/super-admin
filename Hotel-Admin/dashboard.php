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
        
            <!-- =============== PIE CHART ================ -->

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
      chartArea: { left: 10, top: 40, width: '90%', height: '90%', bottom:'20'} // Adjusted the chartArea
      ,titleTextStyle: { // Added to control title style
      fontSize: 16,  // Adjust font size (optional)
      fontWeight: 'bold',  // Make title bold
      padding: 8,
      textAlign: 'right', // Align text to the right
      marginLeft: '20px' // Add margin to the left to move it a little to the right
  }
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
</head>
<body>
  <div id="piechart" style="width: 100%; max-width: 300px; height: 220px; margin-left: 15px; margin-right: -5px; margin-top: 10px;">
  </div>

      <!-- =============== TABLE ================ -->

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
    margin-top: -210px; /* Add some margin for spacing */
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


<?php
// Function to generate a calendar for a specific month and year
function generateCalendar($month, $year) {
    $firstDayOfMonth = strtotime("$year-$month-01");
    $daysInMonth = date('t', $firstDayOfMonth);
    $startDayOfWeek = date('w', $firstDayOfMonth);

    echo '<div class="calendar-wrapper">';
    echo '<table>';
    echo '<tr><th colspan="7">' . date('F Y', $firstDayOfMonth) . '</th></tr>';
    echo '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>';
    echo '<tr>';

    // Fill in blank cells before the first day of the month
    for ($i = 0; $i < $startDayOfWeek; $i++) {
        echo '<td></td>';
    }

    // Fill in the days of the month
    for ($day = 1; $day <= $daysInMonth; $day++) {
        echo '<td>' . $day . '</td>';
        if (($startDayOfWeek + $day) % 7 == 0) {
            echo '</tr><tr>';
        }
    }

    // Fill in blank cells after the last day of the month
    $lastDayOfWeek = ($startDayOfWeek + $daysInMonth) % 7;
    if ($lastDayOfWeek != 0) {
        for ($i = $lastDayOfWeek; $i < 7; $i++) {
            echo '<td></td>';
        }
    }

    echo '</tr>';
    echo '</table>';
    echo '</div>';
}

// Process the previous and next arrows
if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
} else {
    // Default to the current month and year
    $month = date('n');
    $year = date('Y');
}

// Display the calendar
generateCalendar($month, $year);
?>


<div class="arrow-container">
    <!-- Add navigation arrows with Font Awesome icons -->
    <a href="?month=<?php echo ($month == 1) ? 12 : $month - 1; ?>&year=<?php echo ($month == 1) ? $year - 1 : $year; ?>"><i class="fas fa-chevron-left arrow-icon"></i></a>
    <a href="?month=<?php echo ($month == 12) ? 1 : $month + 1; ?>&year=<?php echo ($month == 12) ? $year + 1 : $year; ?>"><i class="fas fa-chevron-right arrow-icon"></i></a>
</div>


</body>
</html>