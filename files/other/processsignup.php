<?php require_once("connect.php"); ?>

<?php 

if(isset($_POST['submit'])){
    $f_name=$_POST['f_name'];
    $username=$_POST['username'];
    $l_name=$_POST['l_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $password=$_POST['password'];

    $checkusername="SELECT * FROM user WHERE username='$username';";

    $check=mysqli_query($connect,$checkusername);
    $fetcharray=mysqli_fetch_assoc($check);



    if($fetcharray==NULL){

        $password=$_POST['password'];
        $cpassword=$_POST['confirmPassword'];

        $counter=0;
        if(strlen($password)>=8){
            $counter+=1;
            for($i=0; $i<strlen($password); $i++){
                if($password[$i]>='A' && $password[$i]<='Z'){
                    $counter+=1;
                    break;
                }
            }
            for($i=0; $i<strlen($password); $i++){
                if($password[$i]>='a' && $password[$i]<='z'){
                    $counter+=1;
                    break;
                }
            }
            for($i=0; $i<strlen($password); $i++){
                if($password[$i]==='!' || $password[$i]==='@' || $password[$i]==='#' || $password[$i]==='$' || $password[$i]==='%' || 
                $password[$i]==='^' || $password[$i]==='&' || $password[$i]==='*' || $password[$i]==='(' || $password[$i]===')' ||
                $password[$i]==='?' || $password[$i]==='>' || $password[$i]==='<' || $password[$i]===':' || $password[$i]===';' ||
                $password[$i]==='[' || $password[$i]===']' || $password[$i]==='{' || $password[$i]==='-' || $password[$i]==='+' || 
                $password[$i]==='=' || $password[$i]==='~' || $password[$i]==='`' || $password[$i]==='/' || $password[$i]==='.' || 
                $password[$i]===',' || $password[$i]==='|'){

                    $counter+=1;
                    break;
                }
            }
            
        } 
        if($password===$cpassword){
            if(strlen($password)>=8){
                if($counter===4){
                    $insert="INSERT INTO user (username,email,f_name,l_name,gender,country,password) VALUES ('{$username}','{$email}'
                    ,'{$f_name}','{$l_name}','{$gender}','{$country}','{$password}');";
            
                    $q1=mysqli_query($connect,$insert);
            
                    if($q1){
                        echo '<script>alert("Successfully Signed Up !");
                        window.location.href=" login.html";
                        </script>';
                        
                    }   
                }else{
                        echo "<script>
                        alert('Password must have special characters, uppercase and lowercase letters.');
                        </script>";
                    }
            }else{
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

    }else{
        echo '<script>alert("Username is Not Avilable. click back and try another username !");</script>';
    }
}



?>

<?php mysqli_close($connect); ?>