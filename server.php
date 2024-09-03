<?php
    require 'config.php';

    if(isset($_REQUEST['getId'])){
        $txt=$_REQUEST['getId'];
        $sql="SELECT `game_id` FROM `games` WHERE `game_name` LIKE '%{$txt}%'";
        if(mysqli_num_rows(mysqli_query($conn,$sql))>0){
            $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
            echo $row['game_id'];
        }
        else{
            echo mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>