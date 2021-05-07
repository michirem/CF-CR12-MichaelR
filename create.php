<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS bundle  -->
    <?php include_once 'components/bootcss.php';?>
    <title>Add Trip</title>
</head>
<body>
    <header>
        <?php
            include_once 'components/navigation.php';
        ?>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(https://images.unsplash.com/photo-1523837157348-ffbdaccfc7de?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2852&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div>
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <fieldset>
                <legend class='h2 py-4'>Add a new Trip</legend>
                <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                    <table class='table'>
                        <tr>
                            <th>Location Name</th>
                            <td><input class='form-control' type="text" name="locationName"  placeholder="Location Name" /></td>
                        </tr>
                        <tr>
                            <th>Image File Upload</th>
                            <td><input class='form-control' type="file" name="imagename"  placeholder="Picture Name" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>or</td>
                        </tr>
                        <tr>
                            <th>Image URL</th>
                            <td><input class='form-control' type="url" name="imagelink"  placeholder="Image URL" /></td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><input class='form-control' type="number" name="price"  placeholder="Price" /></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea class='form-control' type="text" name= "desc" placeholder="Max. 500 characters" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td><input class='form-control' type="text" name="longitude"  placeholder="Longitude" /></td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <td><input class='form-control' type="text" name="latitude"  placeholder="Latitude" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button class='btn btn-primary mx-2' type="submit">Insert Trip</button><a href="main.php" class='btn btn-danger mx-2'>Cancel</a></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
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