<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password-Here</title>
    <link rel="stylesheet" href="../../../bootstrap/css important/bootstrap.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            margin: 10px 0 5px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            background-color: green;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .login-container button:disabled {
            background-color: #ccc;
        }
        .login-container .signup-link {
            margin-top: 10px;
            display: block;
            text-align: center;
        }

    </style>
</head>
<body style="background-color: #f4f9f4">
    <div class="border-2 login-container border-dark-subtle">
        <h4 style="text-align: center"><b>Change Your Password</b></h4>
        <form id="pwchangeform" method="post">
            <label for="cpassword">Enter Current Password</label>
            <input
                type="text"
                id="cpassword"
                class="mt-2 form-control"
                placeholder="Current Password"
                name="currentPassword"
                required
            />
            <span id="currentStrength" class="error"></span>
            <label for="password">New Password</label>
            <input
                class="form-control"
                type="password"
                id="password"
                name="password"
                placeholder="Enter Password"
                required
            />
            <span id="passwordStrength" class="error"></span>
            <label for="confirmPassword">Re-enter Password</label>
            <input
                class="form-control"
                type="password"
                id="confirmPassword"
                name="confirmPassword"
                placeholder="Confirm Your Password"
                required
            />
            <span id="passwordCheck" class="error"></span>
            <br />
            <button type="submit" id="loginButton" name='submit'>Change Password</button>
        </form>
    </div>

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

        if(isset($_POST["submit"])){
            $cpw = $_POST['currentPassword'];
            $pw=$_POST['password'];
            $npw = $_POST['confirmPassword'];

            // Fetch current password from the database based on username
            $select1 = "SELECT password FROM user WHERE username = '$username';";
            $result1 = mysqli_query($connect, $select1);
            $array1 = mysqli_fetch_assoc($result1);
            $currentpw = $array1['password'];

            // Check if the entered current password matches the password in the database
            if ($cpw === $currentpw) {
                // Proceed with password change
                $counter=0;
                if(strlen($npw)>=8){
                    $counter+=1;
                    for($i=0; $i<strlen($npw); $i++){
                        if($npw[$i]>='A' && $npw[$i]<='Z'){
                            $counter+=1;
                            break;
                        }
                    }
                    for($i=0; $i<strlen($npw); $i++){
                        if($npw[$i]>='a' && $npw[$i]<='z'){
                            $counter+=1;
                            break;
                        }
                    }
                    for($i=0; $i<strlen($npw); $i++){
                        if($npw[$i]==='!' || $npw[$i]==='@' || $npw[$i]==='#' || $npw[$i]==='$' || $npw[$i]==='%' || 
                        $npw[$i]==='^' || $npw[$i]==='&' || $npw[$i]==='*' || $npw[$i]==='(' || $npw[$i]===')' ||
                        $npw[$i]==='?' || $npw[$i]==='>' || $npw[$i]==='<' || $npw[$i]===':' || $npw[$i]===';' ||
                        $npw[$i]==='[' || $npw[$i]===']' || $npw[$i]==='{' || $npw[$i]==='-' || $npw[$i]==='+' || 
                        $npw[$i]==='=' || $npw[$i]==='~' || $npw[$i]==='`' || $npw[$i]==='/' || $npw[$i]==='.' || 
                        $npw[$i]===',' || $npw[$i]==='|'){

                            $counter+=1;
                            break;
                        }
                    }
                    
            } 
            if($npw===$pw){
                if(strlen($npw)>=8){
                    if($counter===4){
                        if($npw!==$currentpw){
                            $sql="UPDATE user SET password='{$npw}' WHERE username='$username';";
                            $result=mysqli_query($connect,$sql);
                            if($result){
                                echo "<script>
                                alert('Password is successfully changed');
                                window.location.href='profile.php';
                                </script>";
                            }
                        }
                        else{
                            echo "<script>
                            alert('New Password and Old password is same !.');
                            </script>";
                        }
                    }
                    else{
                        echo "<script>
                        alert('Password must have special characters, uppercase and lowercase letters.');
                        </script>";
                    }
                }
                else{
                    echo "<script>
                    alert('Password must be 8 or more characters.');
                    </script>";
                }
            }
            else{
                echo "<script>
                    alert('Two passwords do not match.');
                    </script>";
            }
        }
        else {
            // Display error message if current password doesn't match
            echo "<script>
                    alert('Current password is incorrect.');
                </script>";
        }
    }

        mysqli_close($connect);
    ?>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
