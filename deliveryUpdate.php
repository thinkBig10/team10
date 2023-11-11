<?php

$url = "delivery.php";
header("Location: $url");
#$mysqli = mysqli_connect("localhost:3307", "team10", "team10", "team10");
include "./dbConnection.php";
if (mysqli_connect_errno()) {
    echo "" . mysqli_connect_error();
    exit();
} else {
    $orderID = $_POST["orderID"];
    $status = $_POST["deliveryStatus"];

    $sql = "update deliveries set status = ? where orderID = ?";

    if ($stmt = mysqli_prepare($mysqli, $sql)) {

        mysqli_stmt_bind_param($stmt, "si", $status, $orderID);
        mysqli_stmt_execute($stmt);
        echo "update good";
    } else {
        echo "" . mysqli_error($mysqli);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);
    
}


?>