<!DOCTYPE html>
<html lang="en">
<head>
      <!--Favicon -->
      <title>Gallery-Share Your Experience With Us</title>
      <link rel="icon" type="image/x-icon" href="imgs/imp/logo.png">
      <meta charset="UTF-8">
      <meta name="description" content="Touroopi tour packege">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="Ashen , Buddini">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Customized Bootstrap Stylesheet -->

      <link href="bootstrap/css important/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
      <link rel="'stylesheet" href="../src/output.css">
    <style>
        .text-gray-500 {
         color: gray;
         }
         /* Default styles */
         .ps-87px {
         margin-left: 0;
         }
         .align-s{
         margin-left: 150px;
         }
        iframe {
            width: 100%;
            height: 200px;
        }
        .modal-body p {
            text-align: justify;
        }
    </style>
</head>
<body>

<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!--Navigation Bar-->
 <nav class="max-h-20 navbar navbar-expand-lg " style="background-color: #dbf2e1;" id="navbar">
         <map name="logo">
            <area shape="circle" coords="448,437,899,451" name="logo" href="https://www.youtube.com/@touroopi" target="_blank">
         </map>
         <img src="imgs/imp/logo.png" alt="Touroopi Logo" usemap="#logo" width="85px" height="85px" class="px-2 py-2 ms-4">
         <a href="index.html" class="navbar-brand ps-3" style="font-size: 50px; color: #14c543; font-family: Georgia, 'Times New Roman', Times, serif;"><b>Touroopi</b></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav1">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-center" id="nav1" >
            <ul class="mx-auto navbar-nav">
               <li class="nav-item">
                  <a href="index.html" class="nav-link ps-5 " style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Home</a>
               </li>
               <li class="nav-item">
                  <a href="about.html" class="nav-link ps-4" style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">About</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle ps-4" href="destinations.html"  style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">
                  Destinations
                  </a>
                  <ul class="dropdown-menu dropdown-content" >
                     <li><a href="destinations.html#sec1" class="block px-4 py-2 "style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Asia</a></li>
                     <li><a href="destinations.html#sec2" class="block px-4 py-2 " style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Africa</a></li>
                     <li><a href="destinations.html#sec3" class="block px-4 py-2 "style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Europe</a></li>
                     <li><a href="destinations.html#sec4" class="block px-4 py-2 "style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">North America</a></li>
                     <li><a href="destinations.html#sec5" class="block px-4 py-2 "style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">South America</a></li>
                     <li><a href="destinations.html#sec6" class="block px-4 py-2 "style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Australia</a></li>
                     <li><a href="destinations.html#sec7" class="block px-4 py-2" style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Middle Easet And Balkans</a></li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link active ps-4" style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Gallery</a>
               </li>
               <li class="nav-item">
                  <a href="Contact Us.html" class="nav-link ps-4" style="font-size: 18px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" onmouseover="OmOver(this)" onmouseout="OmOut(this)">Contact Us</a>
               </li>
            </ul>
            <!-- Profile Icon -->
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a href="profile/profile.php" class="nav-link me-4">
                  <img src="imgs/profile/profile.jpg" alt="Profile Icon" width="40px" height="40px" class="rounded-circle" title="Go-to profile">
                  </a>
               </li>
            </ul>
         </div>
      </nav>
      <section class="py-16 bg-gray-100" style="background-image: url(imgs/another/hot-air-balloons-5630493.jpg);
         background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
         <div class="container mx-auto">
            <h1 class="mb-8 text-4xl font-bold" style="text-align: center; color: #fff; font-size: 60px; text-align: center;">
               Upload Your Experience With Us !
            </h1>
         </div>
      </section>
      <br><br>

      <div class="mx-auto">
            <button type="button" class="btn btn-success align-s" role="button" data-toggle="modal" data-target="#gallery">
               Post a Gallery</a>
         
      </div>
      <!--Create Modal-->
      <div class="modal fade" id="gallery" tabindex="-1" aria-labelledby="gallery" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Upload Your Gallery Here..</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
      <form id="uploadpost" action="gallery/gallery.php" method="post">
         
      <div class="form-group">
      <label for="photo" class="col-form-label">Google map iframe :</label>
      <a type="button" data-toggle="modal" data-target="#maplink" style="color: black;"><b>Howto Get iframe</b></a>
      <input type="text" id="photo" name="map" class="form-control" placeholder="paste your destination's map" required>
      
      </div>
      <div class="form-group">
      <label for="name" class="col-form-label">Title of your gallery :</label>
      <input type="text" class="form-control" id="name" name="title" placeholder="Colombo citylife" required>
      </div>
      <div class="form-group">
      <label for="message" class="col-form-label">Write Your Experience (As paragraphs):</label>
      <textarea  class="form-control" id="message" rows="3" name="text" required placeholder="Text Contents"></textarea>
      </div>
      <button type="button" class="mt-2 btn btn-danger" data-dismiss="modal">Close</button>
      <button type="submit" class="mt-2 btn btn-success ms-3" id="submit">Post Your gallery</button>
      </form>
      </div>
      </div>
      </div>
      </div>
      <h1 class="mb-8 text-4xl font-bold ms-5" style="text-align: center;">Best Galleries</h1>
      <div class="container my-4">
         <!-- First Card Deck -->

      <?php require_once("../connect.php"); ?>
      <?php 

      // Fetch data from the gallery table
      $sql = "SELECT g_id, maplink, title, content, username, date FROM gallery";
      $result = mysqli_query($connect,$sql);

      // Generate HTML
      if ($result) {
         $count = 0;
         echo '<div class="container my-4">';
         
         while ($row = mysqli_fetch_assoc($result)) {
            if ($count % 4 == 0) {
                  if ($count > 0) {
                     echo '</div>';
                  }
                  echo '<div class="mb-4 card-deck">';
            }

            $username = $row['username'];
            $map = $row['maplink'];
            $title = $row['title'];
            $content = $row['content'];
            $id = $row['g_id'];
            $date = $row['date'];

            $strcontent = strval($content);
            $str = "";
            $dot = "......";
            $content_length = strlen($strcontent);
            $limit = min(30, $content_length); // Ensure we do not exceed the content length

            for ($i = 0; $i < $limit; $i++) {
                  $str .= $strcontent[$i];
            }
            $sample = $str . $dot;

            echo '<div class="overflow-hidden transition-all duration-300 transform bg-white rounded-md shadow-md card-deck card hover:scale-105">
                     ' . $map . '
                     <div class="card-body">
                        <h3 class="card-title"><b>' . $title . '</b></h3>
                        <p class="card-text">' . $sample . '</p>
                        <a data-toggle="modal" data-target="#modal' . $id . '" class="mt-2 btn btn-danger">Go-to Content</a>
                     </div>
                     <div class="card-footer">
                        <span class="badge badge-pill badge-info" id="posted_date">' . $date . '</span>
                        <br><br><span id="user">' . $username . '</span>
                     </div>
                  </div>

                  <div class="mx-auto">
                     <div class="modal fade" id="modal' . $id . '"  role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                 '.$map.'
                                    <h4 class="modal-title"><strong>' . $title . '</strong></h4>
                                 </div>
                                 <div class="modal-body">
                                    <p style="text-align: justify;">' . $content . '</p>
                                    <br><br>
                                 
                                    
                                    <!-- Response Section -->

                                    <form method="post" action="gallery/post_responce.php">
                                    
                                          <input type="hidden" name="gallery_id" value="' . $id . '">

                                          <div class="form-group">
                                             <label for="comment">Your response:(You Cannot delete tour response after submited.)</label>
                                             <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                                          </div>
                                          <button type="submit" name="submit" class="btn btn-success">Submit your response</button>
                                    </form>
                                    
                                    <!-- Display responses -->
                                    <h5>Responses:</h5>';
                                    
                                    // Fetch comments for this gallery
                                    $sql3 = "SELECT * FROM response WHERE g_id = '$id'";
                                    $result3 = mysqli_query($connect,$sql3);
                                    
                                    if ($result3) {
                                       $x=0;
                                       while ($row3 = mysqli_fetch_assoc($result3)) {
                                          $x+=1;
                                          echo '<p><strong>' . $row3['username'] . ':</strong> ' . $row3['response'].'  ' .$row3['date']. '</p>';
                                       }
                                          
                                    } 
                                    if($x==0){
                                       echo 'No Responses yet.';
                                    }
                                    
                                    echo '
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>';

            $count++;
         }

         if ($count % 4 != 0) {
            echo '</div>';
         }

         echo '</div>';
      } else {
         echo "No results found.";
      }

      mysqli_close($connect);
      ?>

<!-- Button trigger modal -->
      <!-- Modal -->
      <div class="mx-auto">
      <div class="modal fade" id="cookies" tabindex="-1" role="dialog" aria-labelledby="cookiesTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLongTitle"><strong>Cookies</strong></h4>
               </div>
               <div class="modal-body">
                  <h1 style="font-size: 30px; "><b>Cookie Policy for Touroopi</b></h1>
                  <br>
                  <p>This is the Cookie Policy for Touroopi, accessible from Touroopi.com</p>
                  <br>
                  <p><strong>What Are Cookies</strong></p>
                  <br>
                  <p>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.</p>
                  <p><strong><br>How We Use Cookies</strong></p>
                  <br>
                  <p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>
                  <p><strong><br>Disabling Cookies</strong></p>
                  <br>
                  <p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies. This Cookies Policy was created with the help of the <a href="https://www.cookiepolicygenerator.com/cookie-policy-generator/">Cookies Policy Generator</a>.</p>
                  <p><strong><br>The Cookies We Set</strong></p>
                  <br>
                  <ul>
                     <li>
                        <p><br><strong>Account related cookies</strong></p>
                        <br>
                        <p>If you create an account with us then we will use cookies for the management of the signup process and general administration. These cookies will usually be deleted when you log out however in some cases they may remain afterwards to remember your site preferences when logged out.</p>
                     </li>
                     <li>
                        <p><br><strong>related cookies</strong> </p>
                        <br>
                        <p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having to log in every single time you visit a new page. These cookies are typically removed or cleared when you log out to ensure that you can only access restricted features and areas when logged in.</p>
                     </li>
                  </ul>
                  <p><strong><br>Third Party Cookies</strong></p>
                  <br>
                  <p>In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p>
                  <ul>
                     <li>
                        <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content.</p>
                        <br>
                        <p>For more information on Google Analytics cookies, see the official Google Analytics page.</p>
                     </li>
                     <li>
                        <p>From time to time we test new features and make subtle changes to the way that the site is delivered. When we are still testing new features these cookies may be used to ensure that you receive a consistent experience whilst on the site whilst ensuring we understand which optimisations our users appreciate the most.</p>
                        <br>
                     </li>
                     <li>
                        <p>The Google AdSense service we use to serve advertising uses a DoubleClick cookie to serve more relevant ads across the web and limit the number of times that a given ad is shown to you.</p>
                        <br>
                        <p>For more information on Google AdSense see the official Google AdSense privacy FAQ.</p>
                     </li>
                     <li>
                        <p>We also use social media buttons and/or plugins on this site that allow you to connect with your social network in various ways. For these to work the following social media sites including; {List the social networks whose features you have integrated with your site?:12}, will set cookies through our site which may be used to enhance your profile on their site or contribute to the data they hold for various purposes outlined in their respective privacy policies.</p>
                        <br>
                     </li>
                  </ul>
                  <p><strong>More Information</strong></p>
                  <p>Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p>
                  <p>For more general information on cookies, please read <a href="https://www.cookiepolicygenerator.com/sample-cookies-policy/">the Cookies Policy article</a>.</p>
                  <p>However if you are still looking for more information then you can contact us through one of our preferred contact methods:</p>
                  <ul>
                     <li>Email: touroopi1@gmail.com</li>
                  </ul>
                  <br><br>
                  <p>As is common practice with almost all professional websites, this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it, and why we sometimes need to store these cookies...</p>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Map iframe create Modal-->
      <div class="mx-auto">
         <div class="modal fade" id="maplink" tabindex="-1" role="dialog" aria-labelledby="cookiesTitle" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title" id="exampleModalLongTitle"><strong>To Get Map link : Please Follow These steps</strong></h4>
                  </div>
                  <div class="modal-body">
                     <p>1. Goto Google map </p><br>
                     <p>2. Search Your destination on the search bar </p><br>
                     <p>3. Click share </p><br>
                     <p>4. Click 'Embed a map' </p><br>
                     <p>5. Copy HTML and paste here </p><br>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
    </div>
</div></div>
      <!-- Footer Content -->
      <footer class="py-6 text-white" style="background-color: rgb(80, 237, 132);">
         <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
               <div class="mb-4 md:mb-0">
                  <a style="color: black;" href="../../other/pp.html">&copy; 2024 Touroopi. All rights reserved.</a>
               </div>
               <div class="flex flex-col items-center mb-4 md:mb-0 md:flex-row">
                  <a href="https://mail.google.com/mail/u/4/" target="_blank" class="mt-2 md:mb-0 md:mr-4" style="color: black;">Gmail Account: touroopi1@gmail.com</a>
                  <div class="flex items-center">
                     <span class="mt-2 mr-4" style="color: black;">Follow Us On</span>
                     <a href="https://www.youtube.com/results?search_query=touroopi" class="mt-2 mr-2 hover:text-gray-400" target="_blank">
                     <img src="imgs/icons/youtube.png" width="25" height="25" alt="YouTube">
                     </a>
                     <a href="https://web.facebook.com/people/Touroopi-media/100083408651046/?ref=page_internal" class="mt-2 mr-2 hover:text-gray-400" target="_blank">
                     <img src="imgs/icons/fb.png" width="25" height="25" alt="Facebook">
                     </a>
                     <a href="https://www.tiktok.com/@touroopi?_d=secCgYIASAHKAESPgo8VXbiBOrlBoEXI1pr6xmiE2Vf6oo6otVIPHjFqZlVfSe8BG8tSB%2F4%2FDJ9o0NNXuDBaP2%2BaKfUOkTUyUAjGgA%3D&_r=1&language=en&sec_uid=MS4wLjABAAAATvqm-KruZw5nTkuobWSzSgiW-Fpe-Or2uK3u6N7jU7FrpdXSxgZVNmrUF1sZoSaK&sec_user_id=MS4wLjABAAAATvqm-KruZw5nTkuobWSzSgiW-Fpe-Or2uK3u6N7jU7FrpdXSxgZVNmrUF1sZoSaK&share_app_id=1233&share_author_id=7116848282169410566&share_link_id=4e56cb21-b589-436c-b353-d94d70e137d5&source=h5_m&timestamp=1657561319&u_code=e2h7c7fb3a6576&user_id=7116848282169410566&utm_campaign=client_share&utm_medium=android&utm_source=copy"
                        class="mt-2 mr-2 hover:text-gray-400" target="_blank">
                     <img src="imgs/icons/tiktok.png" width="18" height="18" alt="TikTok">
                     </a>
                  </div>
               </div>
               <div class="flex items-center">
                  <!-- Button trigger modal -->
                  <a type="button" data-toggle="modal" data-target="#cookies" style="color: black;">Cookies</a>
                  <a href="#" class="hover:text-gray-400 ms-4" style="color: black;">FAQs</a>
               </div>
            </div>
         </div>
      </footer>
      <!--Mouse Over and Out Customize-->
      <script>
         /*function OmOver(){
           document.getElementById('nav1').style.color='blue';
         }
         
         function OmOut(){
           document.getElementById('nav1').style.color='black';
         }*/
         
           function OmOver(x) {
               x.style.color = "blue";
           }
         
           function OmOut(x) {
               x.style.color = "";
           }
         
         var submit=document.getElementById('sub');
         var form=document.getElementById('uploadpost');
         
         /*form.addEventListener("submit" , function(e){
         e.preventDefault();
         alert("Your galley is Posted");
         window.location.href='gallery.html';
         });*/
         
      </script>
      <script src="bootstrap/js important/bootstrap.bundle.js"></script>
      <!-- jQuery and Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
