<?php
$mysqli = mysqli_connect("localhost", "team10", "team10", "team10");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_begin_transaction($mysqli);

if(isset($_POST["couponID"])) {
    $couponID = $_POST["couponID"];
    $query = "DELETE FROM coupons WHERE couponID = $couponID";
    $result = mysqli_query($mysqli, $query);
}

if($result) {
    //commit
    mysqli_commit($mysqli);
} else {
    //rollback
    mysqli_rollback($mysqli);
}

mysqli_close($mysqli);
?>
