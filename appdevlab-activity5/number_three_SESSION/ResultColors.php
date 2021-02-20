<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="session_colors.css">
    <title>#3 Result</title>
</head>
<body>
    <div class="output">
        <h1>Your Favorite Colors Result</h1>
        <div class='inner'>
            <?php 

                if (isset($_SESSION['color1'])){
                    // session_start();
                    $colors1 = $_SESSION["color1"];
                    $colors2 = $_SESSION["color2"];
                    $colors3 = $_SESSION["color3"];
                    $colors4 = $_SESSION["color4"];
                    $colors5 = $_SESSION["color5"];

                    echo "
                    <p><b>My Favorite Color 1:</b> $colors1</p><br><br>
                    <p><b>My Favorite Color 2:</b> $colors2</p><br><br>
                    <p><b>My Favorite Color 3:</b> $colors3</p><br><br>
                    <p><b>My Favorite Color 4:</b> $colors4</p><br><br>
                    <p><b>My Favorite Color 5:</b> $colors5</p><br><br>
                    ";
                }else {
                    echo "Favorite colors not set.";
                }
                
            ?>
            <br><br><br>
            <a href="FavoriteColor.php">Go to Form</a>
        </div>
        
    </div>
</body>
</html>