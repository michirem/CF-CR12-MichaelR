<?php

include_once 'actions/db_connect.php';
include_once 'actions/a_select.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS bundle  -->
    <?php include_once 'components/bootcss.php';?>
    <title>Details <?php echo $locationName ?></title>
</head>
<body>
    <header>
        <?php
            include_once 'components/navigation.php';
        ?>
    </header>
    <h1 class="text-center my-3"><?php echo $locationName ?></h1>
    <div class="d-flex justify-content-center align-items-center mb-2" style="background-image: url(<?php echo $image ?>); height: 80vh; background-size: contain; background-repeat: no-repeat; background-position: center;">
    </div>
    <div class="container">
        <div class="class=d-flex flex-column align-items-center py-2">
            <table class='table'>
                <tr>
                    <th>Description</th>
                    <td><?php echo $description ?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><?php echo $price ?> €</td>
                </tr>
            </table>
            <div id="map" style="height: 500px;"></div>
            <div class="d-flex justify-content-center my-3">
                <a href="main.php" class='btn btn-dark'>Back</a>
            </div>
        </div>
    </div>
    <?php
        include_once 'components/footer.php';
    ?>
    <!-- Bootstrap 5 JS bundle  -->
    <?php include_once 'components/bootjs.php';?>
    <script>
    var map;
    function initMap() {
        var location = {
            lat: <?php echo $longitude ?>,
            lng: <?php echo $latitude ?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 8
        });
        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    <script src="js/jokes.js"></script>
</body>
</html>