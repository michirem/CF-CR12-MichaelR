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
    <title>Update Request</title>
</head>
<body>
<header>
    <?php
        include_once 'components/navigation.php';
    ?>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(https://images.unsplash.com/photo-1585776245991-cf89dd7fc73a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2100&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div>
    <div class="container">
        <div class="row justify-content-evenly py-5">
            <div class="d-flex flex-column align-items-center mt-3 mb-3">
                <h1>Element to be updated</h1>
                <?php echo showItem($image, $locationName, $price, $id);?>
                <fieldset>
                <legend class='h2 py-4 text-center'>Update Trip</legend>
                <form action="actions/a_update.php" method= "post" enctype="multipart/form-data">
                    <table class='table'>
                        <tr>
                        <th>Location Name</th>
                            <td><input class='form-control' type="text" name="locationName"  placeholder="Location Name" value="<?php echo $locationName ?>"/></td>
                        </tr>
                        <tr>
                            <th>Image File Upload</th>
                            <td><input class='form-control' type="file" name="imagename"  placeholder="Picture Name"/></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>or</td>
                        </tr>
                        <tr>
                            <th>Image URL</th>
                            <td><input class='form-control' type="text" name="imagelink"  placeholder="Image URL"/></td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><input class='form-control' type="number" name="price"  placeholder="Price" value="<?php echo $price ?>"/></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea class='form-control' type="text" name= "desc" placeholder="Max. 500 characters" rows="5" value="<?php echo $description ?>"><?php echo $description ?></textarea></td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td><input class='form-control' type="text" name="longitude"  placeholder="Longitude" value="<?php echo $longitude ?>" /></td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <td><input class='form-control' type="text" name="latitude"  placeholder="Latitude" value="<?php echo $latitude ?>"/></td>
                        </tr>
                            <th></th>
                            <input type= "hidden" name= "id" value= "<?php echo $id ?>" />
                            <input type= "hidden" name= "picture" value="<?php echo $image ?>" />
                            <td><button class="btn btn-primary me-5" type= "submit">Save Changes</button><a href= "main.php" class="btn btn-danger">Back</a></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
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