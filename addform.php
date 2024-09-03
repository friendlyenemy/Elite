<?php 
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Registration Form Example</title>

    <meta name="author" content="Codeconvey" />
    <!-- Student Registration Form CSS -->
    <link rel="stylesheet" href="css/formstyle.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	
</head>
<body>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="index.php" title="Back to page">Back to Page</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Add Movie</h1>
                <p>A form to add movie</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
   <!-- Start Student Registration Form -->
                      <form method="post" action="addform.php" class="reg-form">
        <p class="helper-text">* denotes a required field</p>
        
        <div class="field-row">
            <label class="form-label" for="id">ID</label>
            <input type="text" name="id"  class="field text-field first-name-field" required>
            <span class="message"></span>
        </div>
        
        <div class="field-row">
            <label class="form-label" for="name">Movie Name</label>
            <input type="text" name="movieName"  class="field text-field first-name-field" required>
            <span class="message"></span>
        </div>
        
        <div class="field-row">
            <label class="form-label" for="info">Movie Info</label>
            <input type="text" name="movieInfo"  class="field text-field first-name-field" required>
            <span class="message"></span>
        </div>
                            
        
        <div class="field-row">
            <label class="form-label" for="direct">Director</label>
            <input type="text" name="director" class="field text-field tel-field" required>
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="caste">Caste</label>
            <input type="text" name="caste" class="field text-field tel-field" required>
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="quality">Quality</label>
            <input type="text" name="quality" class="field text-field tel-field" required>
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="lang">Language</label>
            <input type="text" name="language" class="field text-field tel-field" required>
            <span class="message"></span>
        </div>


                          
        <!-- <div class="field-row">
            <label class="form-label" for="tel">Address</label>
            <input type="address" id="address" class="field text-field address-field" required>
            <span class="message"></span>
        </div> -->

        
        <div class="field-row">
            <label class="form-label" for="low">480p Link</label>
            <input type="text"  name="low" class="field text-field hs-field" required>
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="medium">720p Link</label>
            <input type="text"   name="medium" class="field text-field hs-field" required>
            <span class="message"></span>
        </div>
                          
        <div class="field-row">
            <label class="form-label" for="high">1080p Link</label>
            <input type="text"  name="high" class="field text-field email-field">
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="high">Thumbnail Image</label>
            <input type="file"  name="thumbnail" class="field text-field email-field">
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="high">1st Image</label>
            <input type="file"  name="image1" class="field text-field email-field">
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="high">2nd Image</label>
            <input type="file"  name="image2" class="field text-field email-field">
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="high">3rd Image</label>
            <input type="file"  name="image3" class="field text-field email-field">
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="high">4th Image</label>
            <input type="file"  name="image4" class="field text-field email-field">
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="high">Trailer Link</label>
            <input type="text"  name="trailer" class="field text-field email-field">
            <span class="message"></span>
        </div>
        
    
        <div class="field-row">
            <label class="form-label"></label>
            <input class="form-button" type="Submit" value="Submit" name="submit">
        </div>

    </form>
   <!-- End Student Registration Form -->
                  
    		
           
    		</div>
		</div>
    </div>
</section>
    <?php
    if(isset($_POST['submit'])){

        extract($_POST);
        $thumbnail_path = 'images/'.$thumbnail;
        $img1_path = 'images/'.$image1;
        $img2_path = 'images/'.$image2;
        $img3_path = 'images/'.$image3;
        $img4_path = 'images/'.$image4;
        
        $res = mysqli_query($conn, 
        "INSERT INTO `movies`(`id`, `name`, `info`, `director`, `caste`, `quality`, `lang`, `low`, `medium`, `high`, `thumbnail`, `image1`, `image2`, `image3`, `image4`, `trailer`) 
        VALUES ('$id','$movieName','$movieInfo','$director','$caste','$quality','$language','$low','$medium','$high', '$thumbnail_path', '$img1_path', '$img2_path', '$img3_path', '$img4_path', '$trailer')");
    }
    ?>

	</body>
</html>