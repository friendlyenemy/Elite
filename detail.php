<?php

  require 'config.php';
  if(isset($_REQUEST['id'])){

  }
  $id=$_REQUEST['id'];
  $sql = "SELECT * FROM `movies` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {    
    $row = mysqli_fetch_array($result);
    extract($row);

?>

    <!DOCTYPE html>
    <html>

    <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Product Card/Page</title>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='css/detailstyle.css'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'
        integrity='sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=='
        crossorigin='anonymous' />
      <script src='https://code.jquery.com/jquery-3.4.1.js'></script>
    </head>

    <body>
      <nav>
        <ul>
          <li class='logo'><a href='index.php'><img id='im' src='./img/elite-logo1.png' alt='' height='50px' width='90px'></a></li>
          <li class='btn'><span class='fas fa-bars' style='color: antiquewhite;'></span></li>
          <div class='items'>
            <li><a href='index.php'>Home</a></li>
            <li><a href='About.html'>About</a></li>
          </div>

          <li class='search-icon'>
            <input type='search' id='myInput' placeholder='Search'>
            <label class='icon' onclick='search()'>
              <span class='fas fa-search'></span>
            </label>
          </li>
        </ul>
      </nav>



      <div class='card-wrapper'>
        <div class='card'>
          <!-- card left -->
          
          <div class='trailer'>
            <iframe width="560" height="315" src="<?= $trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div> 
          
          <div class='product-imgs'>
            <div class='img-display'>
              <div class='img-showcase'>
                <img src='<?php echo $row["image1"]; ?>' alt='image'>
                <img src='<?php echo $row["image2"]; ?>' alt='image'>
                <img src='<?php echo $row["image3"]; ?>' alt='image'>
                <img src='<?php echo $row["image3"]; ?>' alt='image'>
              </div>
            </div>
            <div class='img-select'>
              <div class='img-item'>
                <a href='#' data-id='1'>
                  <img src='<?php echo $row["image1"]; ?>' alt='image'>
                </a>
              </div>
              <div class='img-item'>
                <a href='#' data-id='2'>
                  <img src='<?php echo $row["image2"]; ?>' alt='image'>
                </a>
              </div>
              <div class='img-item'>
                <a href='#' data-id='3'>
                  <img src='<?php echo $row["image3"]; ?>' alt='image'>
                </a>
              </div>
              <div class='img-item'>
                <a href='#' data-id='4'>
                  <img src='<?php echo $row["image4"]; ?>' alt='image'>
                </a>
              </div>
              </div>
          </div>
            
          <div class='product-content'>
            <h2 class='product-title'>
              <?= $name ?>
            </h2>

            <div class='product-detail'>
              <h2>About this Movie: </h2>
              <p style='text-align:justify;'>
                <?= $info ?>
              </p>
              <h3>Movie Details: </h3>
              <ul>
                <li>Caste: <span>
                    <?= $caste ?>
                  </span></li>
                <li>Quality: <span>
                    <?= $quality ?>
                  </span></li>
                <li>Director: <span>
                    <?= $director ?>
                  </span></li>
                <li>Language: <span>
                    <?= $lang ?>
                  </span></li>
              </ul>
            </div>


            <div class='purchase-info'>
              <a href='<?= $low ?>'>
                <button type='button' class='btn'>DOWNLOAD 480p</button>
              </a><br>
              <!-- <div class='purchase-info'> -->
              <a href='<?= $medium ?>' download>
                <button type='button' class='btn'>DOWNLOAD 720p</button>
              </a><br>
               <!-- </div> -->
              <!-- <div class='purchase-info'> -->
              <a href='<?= $high ?>' download>
                <button type='button' class='btn'>DOWNLOAD 1080p</button>
              </a><br>
            </div>
            
            
            <!-- <div class='trailer'>
            <iframe width="560" height="315" src="<?= $trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
           -->
          </div>
          
        </div>
      
      </div>

      <script>
        $(document).ready(function () {
          $('.btn').click(function () {
            $('.items').toggleClass('show');
          });
        });
        $('nav ul li.btn span').click(function () {
          $('nav ul div.items').toggleClass('hide');
          $('nav ul li.btn span').toggleClass('show');


        });
      </script>
      <script src='script.js'></script>

    </body>

    </html>
<?php
    } else {
    echo "Database khaaali hai Bhai ";
    }
    

?>