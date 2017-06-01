
<!DOCTYPE html>
<html lang="en">

<head>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/BlogPHP/css/style.css">
<link rel="stylesheet" type="text/css" href="/BlogPHP/css/aboutme.css">
<link rel="stylesheet" type="text/css" href="/BlogPHP/css/upload.css">
<link rel="stylesheet" type="text/css" href="/BlogPHP/css/image_upload_font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- social media wall -->



<title>Blog Name - About Me</title>
</head>

<body></body>
  
<!-- Top NavBar -->
<?php include('layout/topnavs/topnav_aboutme.php');?>
<!-- End Top NavBar -->
 
<div class="container-fluid text-center">    
<div class="row content">


<!-- Main Container -->
<div class="col-sm-10 susie text-left color-susie main_container">

    
<!-- video container --> 
<div class="video">
<div class="video-container">

<iframe>
<a width="560" height="315" src="https://www.youtube.com/embed/ADkCiRZMZkg"frameborder="0" allowfullscreen</a>
                
</iframe>
      
</div>
</div>

<!-- Upload image function--> 
<div class="image-upload">
<div class="container">
 <body>
       
    <form 
        action="upload.php" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
        <input type="submit"<button type="button" class="btn btn-info"><i value="glyphicon glyphicon-search" name="submit"></i></button>
        <!-- Display Image -->
        <iframe name="resultFrame" width="500" height="300"></iframe>
</form>
        
 </body>
</div>
</div>
<!-- end of upload image function -->

<!-- User Bio text box -->      
<div class="bio_textbox container" class="">
    
    <title><strong>Bio </strong></title>
    
 <h1 style="margin:auto;color:#9A26B2;font-size: 18pt;font: fantasy, monospace;
     font-family: fantasy,monospace;"><strong>Tell us about yourself:</strong></h1>

<!-- bio form DOUBLE CHECK THIS WITH TEAM trying to change buttons  -->
<form>          
    <label class="Bio" style="color:#9A26B2; font-size: 18pt;font: fantasy, monospace;font-family:fantasy,monospace;">BIO:</label>
      
    <input type="text" id="text" style="color:#9A26B2;font-size: 18pt;font: fantasy, monospace;
    font-family: fantasy,monospace;"
            name="Bio" class="bio_textbox" id="Bio" placeholder="Type Here">
            <a href="#" class="btn btn-info" role="button">
            <input type="submit" class="btn btn-info"value="Submit Button"></a>          
</form>

 <!-- Form Submission -->
            <form class="Bio" method="post" 
                  action="<?php include('AboutMe\validate_bio_form');?>">
            </form> 
 </div>



<!-- Social Media Feed -->


<!-- Social Media Icons -->
<div class="Social Media Buttons container">
   
<nav>
        <ul>
           <body>
          <h2 class= "Style Social Media Buttons"</h2>
          <a href="https://www.facebook.com/reylofans/" <img class="fa fa-facebook"/><image  onclick=""/></button></a>
          <a href="https://twitter.com/starwars?lang=en-gb" <img class="fa fa-twitter"/><image onclick=""></button></a>
          <a href="https://youtu.be/6U0B3XDDak8" <img class="fa fa-youtube"/><button onclick=""/></button></a>
          <a href="https://www.instagram.com/starwars/?hl=en" <img class="fa fa-instagram"/><button onclick=""></button></a>
      
            </body>
            <a href="css/AboutMe.css" target="_parent"></a>
        </ul>
</nav>
</div>
<!-- end of social media icons -->

<!-- Right Sidebar -->
<?php include('layout/sidenav_right.php'); ?>
<!-- End Right Sidebar -->


<!-- Footer --> 
<?php include('layout/footer.php'); ?>
<!-- End Footer -->
<!-- Susie double check style container-->

</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="responsiveslides.min.js"></script>

</body>
</html>
