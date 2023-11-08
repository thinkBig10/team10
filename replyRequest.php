<?php
$url = "qna.php";
header("Location: $url");
$mysqli = mysqli_connect("localhost:3306", "team10", "team10", "team10");
if ($mysqli) {
    $todayDate = date("Y-m-d");

    // 사용자로부터 입력 받은 데이터
    $id = $_POST["idField"];
    $reComment = $_POST["field"];

    // 데이터 유효성 검사 및 SQL 삽입 방지
    $reComment = mysqli_real_escape_string($mysqli, $reComment);

    // 사용자로부터 입력 받은 데이터를 사용하여 SQL 쿼리 생성
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



<!-- if (isset($_GET['data'])) {
          $receivedData = $_GET['data'];
        } ;

        
        //echo $receivedData . $todayDate;


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // 폼이 제출되었을 때
          $field = $_POST["field"];
        
          $mysqli = mysqli_connect("localhost:3306", "team10", "team10", "team10");
          if($mysqli) {
            $field = mysqli_real_escape_string($mysqli, $field);
            $sql = "insert into replyqna (qnaID, employeeID, date, comment) VALUES ($receivedData, 'minji123', '$todayDate', '$field')";
            $res = mysqli_query($mysqli,$sql);
          }
          else{
            exit();
          }
        
        } -->