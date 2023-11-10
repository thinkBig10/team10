<?php
$url = "qna.php";
header("Location: $url");
include "./dbConnection.php";
if ($mysqli) {
    // 보영이 코드 받고 세션 활성화 시키기
    session_start();
    $employeeID = $_SESSION['employeeID'];
    $todayDate = date("Y-m-d");
    // 사용자로부터 입력 받은 데이터
    $id = $_POST["idField"];
    $reComment = $_POST["field"];
    $reComment = mysqli_real_escape_string($mysqli, $reComment);
    $sql = "INSERT INTO replyqna (qnaID, employeeID, date, comment) VALUES ('$id', 'XYZ8901234', '$todayDate', '$reComment')";

    $res = mysqli_query($mysqli, $sql);

    if ($res === TRUE) {
        echo "A record has been inserted";
    } else {
        echo "A record has not been inserted: " . mysqli_error($mysqli);
    }
} else {
    echo "Database connection failed.";
    exit();
}
?>
