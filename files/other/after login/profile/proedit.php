<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Edit Profile</title>
      <link rel="stylesheet" href="../../../bootstrap/css important/bootstrap.min.css"/>

      
      <style>
         body {
         font-family: Arial, sans-serif;
         background-color: #f4f9f4;
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .profile-container {
         border: 1px solid #ccc;
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         max-width: 800px;
         width: 100%;
         background-color: #f8f9fa;
         }
         .profile-container h2 {
         margin-bottom: 20px;
         text-align: center;
         color: #333;
         }
  
         .profile-container .profile-info {
         margin-bottom: 10px;
         }
         .profile-container .profile-info label {
         font-weight: bold;
         color: #333;
         }
         .profile-container input[type="text"],
         .profile-container input[type="email"],
         .profile-container input[type="select"],
         .profile-container input[type="password"]{
         width: 100%;
         padding: 8px;
         margin-top: 2px;
         margin-bottom: 10px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
         }
         .button {
         background-color: green;
         color: white;
         padding: 10px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         width: 50px;
         }
      </style>
   </head>
   <body>
        <div class="py-5 profile-container">
        <h2>Edit Profile</h2>
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
 
         $sql="SELECT * FROM user WHERE username='{$user_id}';";
 
         $res=mysqli_query($connect,$sql);
         
         $user = mysqli_fetch_assoc($res);

         ?>
          <form id="profileForm" method="post" action="">
            <div class="profile-info">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" class="form-control" name="firstName" value="<?php echo $user['f_name']; ?>" required />
            </div>
            <div class="profile-info">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" value="<?php echo $user['l_name']; ?>" required />
            </div>
            <div class="profile-info">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required />
            </div>
            <button type="submit" value="Save Changes" class="btn btn-success" id="sub" name="submit">Save Changes</button>
            <a href="profile.php" class="btn btn-secondary ms-4 ">Close</a>

            <a type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger ms-4">Delete Your Account</a>
        </form>
        

        <div class="mx-auto">
         <div class="modal fade" id="delete"  role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">

                  <div class="modal-body">
                     <p>If you delete your account, also delete your all uploaded galleries and responses ! </p>
                    <form action="" method="post">
                    <input type="password"  name="pw" placeholder="Enter Your Correct Password" required>
                    <br>
                        <button type="submit" value="Delete account" class="btn btn-danger mt-4"  name="delete">Delete Anyway</button>
                        <button type="button" class="btn btn-secondary ms-4 mt-4 " data-dismiss="modal">Close</button>
                    </form> 
                   </div>
                </div>
            </div>
         </div>
        </div>

         <?php 
         if (isset($_POST['submit'])) {
                $fname=$_POST['firstName'];
                $lname=$_POST['lastName'];
                $email=$_POST['email'];
                
                $sql2="UPDATE user SET f_name='{$fname}', l_name='{$lname}', email='{$email}' WHERE username='$user_id';";
                $res2=mysqli_query($connect,$sql2);

                if($res2){
                    echo "<script> 
                            alert('Your Profile is updated !');
                            window.location.href='profile.php';
                        </script>";
                }
        }


        if(isset($_POST['delete'])){

            $password=$_POST['pw'];
            
            $sql3="SELECT password FROM user WHERE username = '$user_id';";
            $result = mysqli_query($connect, $sql3);
            $array3 = mysqli_fetch_assoc($result);
            $stored_pw = $array3['password'];

            if($stored_pw===$password){
                $sql4="DELETE FROM response WHERE username='$user_id';";
                $sql5="DELETE FROM gallery WHERE username='$user_id';";
                $sql6="DELETE FROM user WHERE username='$user_id';";

                $result1=mysqli_query($connect,$sql4);
                $result2=mysqli_query($connect,$sql5);
                $result3=mysqli_query($connect,$sql6);

                if($result3){
                    echo "<script> 
                            alert('Your Account is deleted !');
                            window.location.href='../../../index.html';
                        </script>";
                }
            }
            else{
                echo "<script> 
                            alert('Password is invalid !');
                        </script>";
            }


        }
         
         mysqli_close($connect);
         ?>   
        </div>
      

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>