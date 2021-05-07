<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS bundle  -->
    <?php include_once 'components/bootcss.php';?>
    <title>Home - Mount Everest</title>
</head>
<body>
    <header>
        <?php
            include_once 'components/navigation.php';
        ?>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(https://images.unsplash.com/photo-1494783367193-149034c05e8f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
        <h1 class="text-center text-light">Adventure awaits you!</h1>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center my-3">
            <a href= "create.php" class="btn btn-primary">Add Trips</a>
        </div>
        <div class="row justify-content-evenly py-2">
            <?php
            include_once 'actions/db_connect.php';
            include_once 'actions/showitems.php';

            $query = "SELECT * FROM trips";
            $result = mysqli_query($connect, $query);
            for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);

            foreach($set as $value)
            {
                $image = '';
                if(strlen($value['picture']) < 19)
                {
                    $image = 'pictures/'.$value['picture'];
                } else
                $image = $value['picture'];
                echo showItem($image, $value['locationName'], $value['price'], $value['id']);
            }
            ?>
        </div>
    </div>
    <?php
        include_once 'components/footer.php';
    ?>
    <!-- Bootstrap 5 JS bundle  -->
    <?php include_once 'components/bootjs.php';?>
</body>
</html>