<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../bootstrap/css important/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            background-color: white;
        }
        .profile-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .profile-container img {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .profile-container .profile-info {
            margin-bottom: 10px;
        }
        .profile-container .profile-info label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>User Profile</h2>


        <?php
        session_start(); // Start the session
        include '../../connect.php'; // Include database connection script

        // Check if user ID is set in session
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
        } else {
            echo "<script>
                    alert('Please login first.');
                    window.location.href = '../../login.html';
                  </script>";
            exit;
        }

        $sql="SELECT * FROM user WHERE username='$user_id'";

        $res=mysqli_query($connect,$sql);
        
        $user = mysqli_fetch_assoc($res);

        mysqli_close($connect);
        ?>
        <div class="profile-info">
            <label for="firstName">First Name:</label>
            <span id="firstName"><?php echo $user['f_name']; ?></span>
        </div>
        <div class="profile-info">
            <label for="lastName">Last Name:</label>
            <span id="lastName"><?php echo $user['l_name']; ?></span>
        </div>
        <div class="profile-info">
            <label for="email">Email:</label>
            <span id="email"><?php echo $user['email']; ?></span>
        </div>
        <div class="profile-info">
            <label for="username">Username:</label>
            <span id="username"><?php echo $user['username']; ?></span>
        </div>
        <div class="profile-info">
            <label for="gender">Gender:</label>
            <span id="gender"><?php echo $user['gender']; ?></span>
        </div>
        <div class="profile-info">
            <label for="country">Country:</label>
            <span id="country"><?php echo $user['country']; ?></span>
        </div>

        <a href="proedit.php" class="mt-4 btn btn-success btn-sm" role="button">Edit your profile</a>
        <a href="changepassword.php" class="mt-4 btn btn-success btn-sm ms-4" role="button">Change your password</a>
        <a href="../../../index.html" class="mt-4 btn btn-danger btn-sm ms-4" role="button">Sign Out</a>
       
    </div>
</body>
</html>
