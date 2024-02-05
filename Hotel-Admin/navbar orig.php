 <!-- ======= Styles ====== -->
 <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/nav_style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
            <li style="text-align: center;">
            <a href="#">
        <div>
            <img src="/adventours/assets/imgs/5.png" alt="logo" height="200px" width="200px" 
            style="display: block; margin: 0 auto;">
        </div>
    </a>
</li> 
                

                <li>
                    <a href="/adventours/dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/adventours/pages/user/userprofile.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="/adventours/contents.php">
                        <span class="icon">
                            <ion-icon name="create"></ion-icon>
                        </span>
                        <span class="title">Contents</span>
                    </a>
                </li>

                <li>
                    <a href="/adventours/bookings.php">
                        <span class="icon">
                            <ion-icon name="book"></ion-icon>
                        </span>
                        <span class="title">Bookings</span>
                    </a>
                </li>

                <li>
                    <a href="/adventours/notification.php">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="title">Notification</span>
                    </a>
                </li>

                <li>
                    <a href="help.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="page-header">  
                    <div class="pagetitle">
                    <div class="submenu">
                        <?php if (isset($pageTitle) && $pageTitle === "USER MANAGEMENT"): ?>
                            <p>USER MANAGEMENT</p>

                        <?php elseif (isset($pageTitle) && $pageTitle === "BOOKINGS"): ?>
                            <p>BOOKINGS</p>
                            
                        <?php else: ?> 
                        <p><?php echo isset($pageTitle) ? $pageTitle : "DASHBOARD"; ?></p> 
                        <?php endif; ?> 
                        <!-- Repeat the above structure for other page titles and subpages -->
                    </div>
                    </div>

                    <div class="profile">
                    <i class="fa-solid fa-user" style="color: white;"></i><p>ADMINISTRATOR</p><i class="fa-solid fa-caret-down" style="color: white;"></i>
                    <div class="profile-menu">
                        <ul>
                            <li>My Profile</li>
                            <li>Settings</li>
                            <li>Logout</li>
                        </ul>
                    </div>
                    </div>
                </div>

            </div>

           
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function changeSubpageTitle(subpageTitle) {
            $('#subpageTitle').text(subpageTitle);
        }
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>