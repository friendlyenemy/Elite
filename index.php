<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/navstyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Home</title>
    
</head>
<body>
    <nav>
        <ul>
            <li class="logo"><a href="index.php"><img id="im" src="./img/elite-logo1.png" alt="" height="50px" width="90px"></a></li>
            <li class="btn"><span class="fas fa-bars"></span></li>
            <div class="items">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="addform.php">Add Movie</a></li>         
            </div>
            <li class="search-icon">
                <input type="search" placeholder="Search" id="myInput" onkeyup="searchfun()">
                <label class="icon" onclick="search()">
                    <span class="fas fa-search"></span>
                </label>
            </li>
        </ul>
    </nav>

    <div class="product">
        <div class="product-container">
        
           <?php
                require './config.php';
                $sql = "SELECT `id`, `name`, `thumbnail` FROM `movies`;";
                if(isset($_REQUEST['getId'])){
                    $txt=$_REQUEST['getId'];
                    $sql="SELECT `id`,`name`, `thumbnail` FROM `movies` WHERE `name` LIKE '%{$txt}%'";
                }
                $res=mysqli_query($conn,$sql);
                if (mysqli_num_rows($res)>0) {
                    while ($row=mysqli_fetch_assoc(($res))) {
        
            ?>
                   <div class="product-item">
                        <div class="product-img">
                            <img src="<?php echo $row["thumbnail"]; ?>" alt="game image">
                            <div>
                               <button type="button" data-id="<?php echo $row["id"]; ?>" onclick="showDetails(this)" class="add-btn">Download</button>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href="#" class="book-title"><?php echo $row["name"]; ?> </a>
                        </div>
                    </div>
            <?php
                    }
                }
                mysqli_close($conn);
           ?>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.btn').click(function(){
                $('.items').toggleClass("show");
            });
        });

        $('nav ul li.btn span').click(function () {
            $('nav ul div.items').toggleClass("show");
            $('nav ul li.btn span').toggleClass("show");    
        });        
    </script>

<script src="script2.js"></script>

</body>
</html>