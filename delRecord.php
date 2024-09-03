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
                <li><a href="" title="Back to page">Back to Page</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Add Movie</h1>
                <p>A form to enter a Movie</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
   <!-- Start Student Registration Form -->
                      <form method="post" action="delRecord.php" class="reg-form">
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
             
          $res = mysqli_query($conn, "DELETE FROM `movies` WHERE `name`='$movieName'");
        }
     ?>


    <!-- Analytics -->

	</body>
</html>