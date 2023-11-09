<?php
session_start();
$mysqli = mysqli_connect("localhost:43306", "team10", "team10", "team10");

if (mysqli_connect_errno()) {
    printf("Connect failed");
} else {
    if (isset($_POST["ID"]) && isset($_POST["Password"])) {
        $employeeID = $_POST["ID"];
        $password = $_POST["Password"];
        if ($employeeID == "" || $password == "") {
            echo '<script> alert("Please enter both ID and Password."); history.back(); </script>';
        } else {  
            $sql = "SELECT password, department, name FROM employees WHERE employeeID=?";
            if ($stmt = mysqli_prepare($mysqli, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $employeeID);
                if (mysqli_stmt_execute($stmt)) {
                    $result = mysqli_stmt_get_result($stmt);
                    if ($row = mysqli_fetch_assoc($result)) {
                        $storedPassword = $row['password'];
                        if ($password == $storedPassword) { // Compare plaintext passwords
                            // Passwords match, store user info in session
                            $_SESSION['employeeID'] = $employeeID;
                            $_SESSION['password'] = $password;
                            $_SESSION['department'] = $row['department'];
                            $_SESSION['name'] = $row['name'];

                            // Redirect to index.php
                            header("Location: index.php");
                            exit();
                        } else {
                            echo "<script>alert('Incorrect ID or Password. Please check.'); history.back();</script>";
                        }
                    } else {
                        echo "<script>alert('User not found. Please check ID.'); history.back();</script>";
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    echo "<script>alert('Database error. Please try again later.'); history.back();</script>";
                }
            }
        }
    }
    
    
  mysqli_close($mysqli);
}
?>
