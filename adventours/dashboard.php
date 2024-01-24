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
        <div class="hotel">
            <div class="header">
                <div class="label">
                    <p>Hotel- Active Reservation </p>
                </div>
                <div class="search">
                        <input type="text" placeholder="&#xf002; Search for reservation id or name">
                </div>
                <div class="add-btn">
                    <button>ADD RESERVATION</button>
                </div>
            </div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Restaurant</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
            </table>
        </div>
        <div class="hotel">
            <div class="header">
                <div class="label">
                    <p>Restaurant - Active Reservation </p>
                </div>
                <div class="search">
                        <input type="text" placeholder="&#xf002; Search for reservation id or name">
                </div>
                <div class="add-btn">
                    <button>ADD RESERVATION</button>
                </div>
            </div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Restaurant</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
            </table>
        </div>
        </div>
        <div class="hotel">
            <div class="header">
                <div class="label">
                    <p>Restaurant - Active Reservation </p>
                </div>
                <div class="search">
                        <input type="text" placeholder="&#xf002; Search for reservation id or name">
                </div>
                <div class="add-btn">
                    <button>ADD RESERVATION</button>
                </div>
            </div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Restaurant</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
            </table>
        </div>
    </div>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    </script>

</body>
</html>