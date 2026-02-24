<?php
session_start(); // Start the session
include '../../connect.php'; // Include database connection script

if (isset($_SESSION['user_id'])) {
    $username = $_SESSION['user_id'];
} else {
    echo "<script>
            alert('Please login first.');
            window.location.href = '../../login.html';
        </script>";
    exit;
}
if (isset($_POST['submit'])) {

    $response = $_POST['comment'];
    $gid = $_POST['gallery_id'];


    $sql2 = "INSERT INTO response (response, username, g_id) VALUES ('$response', '$username', '$gid');";
    $connection=mysqli_query($connect,$sql2);
    if ($connection){
            echo '<script>alert("Your response is added!");
            window.location.href="../gallery.php"</script>';
    } else {
            echo '<script>alert("Your response is Not-added!");</script>';
    }
          
}

mysqli_close($connect)
?>