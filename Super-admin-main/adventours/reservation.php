

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <link rel="stylesheet" href="assets/css/hover.css">
    <?php require_once './headers.php' ?>
</head>
<body>
  <?php 

$pageTitle = "RESERVATION";
include 'navbar.php';

?>
    <div class="dashboard">
    </div>
  <div class="travelers">Travelers</div>
  <div class="hotels">Hotels</div>
  <div class="restaurants">Restaurants</div>
  <script>
        // Change title
        (() => {
            let state = !0;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'Reservation';
                state = !state;
            }
            changeTitle();
            setInterval(() => {
                changeTitle()
            }, 1000)
        })();
    </script>
</body>
</html>