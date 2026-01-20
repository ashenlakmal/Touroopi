<?php require_once("connect.php");?>
<?php
session_start(); // Start the session

$username = $_POST['username'];
$password = $_POST['password'];


// Fetch user record from the database based on the provided username
$query = "SELECT * FROM user WHERE username='$username';";
$result = mysqli_query($connect, $query);


if($result){
  
    $array = mysqli_fetch_assoc($result);
    $stored_password = $array['password'];
    
    if($password == $stored_password) {
        $_SESSION['user_id'] = $array['username'];

        echo '<script>alert("Successfully Logined !");</script>';
        header("Location: after login/index.html");
        exit();

    } else {
       
        echo '<script>alert("Username or password is invalid !");</script>';
    }
} else {
  
    echo '<script>alert("Username or password is invalid !");</script>';
}

mysqli_close($connect);
?>
