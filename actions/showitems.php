<?php

function showItem($picture, $locationName, $price, $id)
    {
    return "<div class=\"col-16 col-md-4 col-lg-4 my-3\">
        <div class='card border-0 shadow'>
            <div style='background-image: url(".$picture."); background-repeat: no-repeat; background-size: contain; height: 350px; background-position: center;'>
            </div>
            <div class=\"card-body border-0 d-flex flex-column align-items-center\">
                <h5 class=\"card-title\">".$locationName."</h5>
                <p class=\"card-text\">Offer: ".$price." €</p>
            </div>
            <div class=\"card-body border-0 d-flex flex-row justify-content-evenly\">
                <a href='update.php?id=".$id."' class='btn btn-primary btn-sm'>Edit</a>
                <a href='delete.php?id=".$id."' class='btn btn-danger btn-sm'>Delete</a>
                <a href='details.php?id=".$id."' class='btn btn-dark btn-sm'>Details</a>
            </div>
        </div>
    </div>";
    }

?>