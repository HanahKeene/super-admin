<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0-beta/jquery.min.js"
        integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- code inserted -->
    <!-- firebase SDK v8.6.8 -->
    <!-- version 10+ not supported -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
    <!-- code inserted -->
</head>

<body>
    <!-- 
        modified form: change log, username => email, 
        removed error unnecessary _container 
    -->
    <img src="assets/imgs/5.png">
    <form class="form" action="" method="POST">
        <div class="email">
            <input required type="text" name="email" placeholder="Email">
        </div>
        <div class="pass">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="submit">
            <input required type="submit" name="submit">
        </div>
    </form>

    <!-- code inserted -->
    <script src="../connection.js"></script>
    <script>
    $(() => {

        // return the user to the dashboard if
        // they are currently logged in

        
        if (localStorage.getItem('user_login') == 'true') {
            location.href = './dashboard.php';
        }

        // handle login function
        function handleLogin(email, password) {
            firebase.auth()
                .signInWithEmailAndPassword(email, password)
                .then((userCredential) => {
                    // Signed in
                    var user = userCredential.user;
                    localStorage.setItem('user_login', 'true');
                    localStorage.setItem('user', JSON.stringify(user));

                    Swal.fire({
                        title: "Success!",
                        text: "Login successfully",
                        icon: "success"
                    }).then(() => {
                        location.href = './dashboard.php';
                    })

                })
                .catch((error) => {
                    // login failed
                    Swal.fire({
                        title: "Error!",
                        text: "Invalid email or password",
                        icon: "error"
                    });
                });
        }


        $('form').submit(function(e) {
            e.preventDefault();
            let urlParams = new URLSearchParams($(this).serialize());
            handleLogin(urlParams.get('email'), urlParams.get('password'));
        })
    })
    </script>
    <!-- end code inserted -->

</body>

</html>