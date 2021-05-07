<?php 
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];

    $query = "DELETE FROM trips WHERE id = {$id}";
    if (mysqli_query($connect, $query) === true) {
        $class = "success";
        $message = "Successfully Deleted!";
    } else {
        $class = "danger";
        $message = "The entry was not deleted due to: <br>" . $connect->error;
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
    <title>Delete</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-evenly py-5">
            <div class="d-flex flex-column align-items-center mt-3 mb-3">
                <h1>Delete request response</h1>
            </div>
            <div class="alert alert-<?=$class;?> d-flex flex-column align-items-center" role="alert">
                <p><?=$message;?></p>
                <a href='../main.php' class="btn btn-success">Back</a>
            </div>
        </div>
    </div>
</body>
</html>