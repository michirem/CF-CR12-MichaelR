<?php
include_once 'actions/db_connect.php';
include_once 'actions/showitems.php';
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
    <title>Delete Trip</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-evenly py-5">
            <div class="mt-3 mb-3">
                <h1>Element to be deleted</h1>
                <?php echo showItem($image, $locationName, $price, $id);?>
                <h3 class="mb-4">Do you really want to delete this trip?</h3>
                <form action ="actions/a_delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <button class="btn btn-primary" type="submit">Yes</button>
                    <a href="main.php" class="btn btn-danger">No</a>
                </form>
            </div>
        </div>
    </div>
    <?php
        include_once 'components/footer.php';
    ?>
    <!-- Bootstrap 5 JS bundle  -->
    <?php include_once 'components/bootjs.php';?>
    <script src="js/jokes.js"></script>
</body>
</html>