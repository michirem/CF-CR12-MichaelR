<?php
    include_once 'db_connect.php';
    include_once 'file_upload.php';
    include_once 'showitems.php';

    if($_POST) { // if the input that has the type submit has a value (when clicked)
        $img = '';
        $imgname = '';
        $imgupload = '';

        if($_POST["imagelink"] === "") { //check if URL was provided, if not do a file upload
            $img = file_upload($_FILES["imagename"]);
            $imgname = '../pictures/'.$img->fileName; //for immediate showcase
            $imgupload = $img->fileName; //for upload to database
        } else if ($_FILES["imagename"]["name"] === "" || $_FILES["imagename"]["size"] === 0 && $_POST["imagelink"] !== "") // if URL provided, post image URL and upload URL to database
        {
            $img = $_POST["imagelink"];
            $imgname = $img;
            $imgupload = $img;
        } else if ($_FILES["imagename"]["name"] !== "" && $_FILES["imagename"]["size"] !== 0 && $_POST["imagelink"] !== "") // if both URL and Upload are provided, an error message will show - doesn't work - can't figure why database accepts empty entry for image if set to "NOT NULL"
        {
            $class = "danger";
            $message = "Please choose only one method of adding a picture<br>";
        }
        else // if neither URL or Upload were provided, proceed with default picture from $result
        {
            $img = file_upload($_FILES["imagename"]);
            $imgname = '../pictures/'.$img->fileName;
            $imgupload = $img->fileName;
        }
    
        $locationName = $_POST["locationName"];
        $price = $_POST["price"];
        $description = $_POST["desc"];
        $longitude = $_POST["longitude"];
        $latitude = $_POST["latitude"];
        $uploadError = '';
            
        $query = "INSERT INTO trips(picture, locationName, price, description, longitude, latitude) VALUES ('$imgupload','$locationName','$price','$description','$longitude','$latitude')";
        // query that creates a new record in the table test. The values come from the form
         
        if(mysqli_query($connect, $query) == true){ // if the query runs successfully it will show a message and a link to go back to the home page.
        $class = "success";
        $message = "The entry below was successfully created:<br><br><div class=\"col-12\">
        <div class='card border-0 shadow'>
            <div style='background-image: url(".$imgname."); background-repeat: no-repeat; background-size: contain; height: 350px; background-position: center;'>
            </div>
            <div class=\"card-body border-0 d-flex flex-column align-items-center\">
                <h5 class=\"card-title\">".$locationName."</h5>
                <p class=\"card-text\">Offer: ".$price." €</p>
            </div>
            <div class=\"card-body border-0 d-flex flex-row justify-content-evenly\">
                <a href='update.php?id=' class='btn btn-primary btn-sm'>Edit</a>
                <a href='delete.php?id=' class='btn btn-danger btn-sm'>Delete</a>
                <a href='details.php?id=' class='btn btn-dark btn-sm'>Details</a>
            </div>
        </div>
    </div>"; // Preview of added item
            if($_POST["imagelink"] === ""){ // only apply if no URL was provided and an image was uploaded
            $uploadError = ($img->error !=0)? $img->ErrorMessage :'';
            }
        } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
            if($_POST["imagelink"] === ""){ // only apply if no URL was provided and an image was uploaded
            $uploadError = ($img->error !=0)? $img->ErrorMessage :'';
            }
        }
        $connect->close();
    } else {
        header("location: ../error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS bundle  -->
    <?php include_once '../components/bootcss.php';?>
    <title>Creat Trip</title>
</head>
<body>
    <header>
        <?php
            include_once '../components/navigation.php';
        ?>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(https://images.unsplash.com/photo-1523837157348-ffbdaccfc7de?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2852&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div>
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center py-5">
            <div class="mt-3 mb-3">
                <h1>Create Request</h1>
            </div>
            <div class="alert alert-<?=$class;?> d-flex flex-column align-items-center" role="alert">
                <?php echo ($message) ?? ''; ?>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../main.php' class="btn btn-primary my-2">Home</a>
                <a href='../create.php' class="btn btn-primary my-2">Add another Trip</a>
            </div>
        </div>
    </div>
    <?php
        include_once '../components/footer.php';
    ?>
    <!-- Bootstrap 5 JS bundle  -->
    <?php include_once '../components/bootjs.php';?>
</body>
</html>