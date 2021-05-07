<?php 
if ($_GET['id']) {
    $id = $_GET['id'];
    $query = "SELECT * FROM trips WHERE id = {$id}";
    $result = mysqli_query($connect, $query);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $imagename = ''; //if image is stored as file
        $imagelink = ''; //if image is stored as URL
        if(strlen($data['picture']) < 18) // check if image is stored as file or as URL
            {
                $imagename = $data['picture'];
                $image = 'pictures/'.$data['picture'];
                } else {
                $image = $data['picture'];
                $imagelink = $data['picture'];
            }
            $locationName = $data["locationName"];
            $price = $data["price"];
            $description = $data["description"];
            $longitude = $data["longitude"];
            $latitude = $data["latitude"];
    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}
?>