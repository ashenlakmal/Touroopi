<?php require_once('../../connect.php'); ?>
<?php
   session_start();
   
   if (isset($_SESSION['user_id'])) {
      $username = $_SESSION['user_id'];
   } else {
      echo "<script>
              alert('Please login first.');
              window.location.href ='../login.html';
            </script>";
      exit;
   }
   
   $map=$_POST['map'];
   $title=$_POST['title'];
   $content=$_POST['text'];
   
   
         $insertgallery="INSERT INTO gallery (title,maplink,content,username) VALUES ('{$title}','{$map}'
           ,'{$content}','{$username}');";
   
           $insert=mysqli_query($connect,$insertgallery);
           
           if($insert){
               echo '<script>alert("Your Gallery is successfully uploaded !");
               window.location.href="../gallery.php"</script>';
               
               exit();
           }
   
           else{
           echo '<script>alert("Your Gallery is not uploaded!"); 
           window.location.href="../gallery.php";</script>';
           }
    
   ?>
<?php mysqli_close($connect); ?>