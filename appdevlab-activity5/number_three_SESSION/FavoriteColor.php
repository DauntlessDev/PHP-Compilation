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
    <title>#3 Input</title>
</head>
<body>
    <div class="allwrap">
        <div class="wrapper">
            <h1>Enter your favorite colors :D </h1>
            <div class="inner">
                <form method="POST">
                    <label for="color1">Favorite color 1:</label>
                    <input type="text" id="color1" name="color1" class="field-input"><br><br>
                    <label for="color2">Favorite color 2:</label>
                    <input type="text" id="color2" name="color2" class="field-input"><br><br>
                    <label for="color3">Favorite color 3:</label>
                    <input type="text" id="color3" name="color3" class="field-input"><br><br>
                    <label for="color4">Favorite color 4:</label>
                    <input type="text" id="color4" name="color4" class="field-input"><br><br>
                    <label for="color5">Favorite color 5:</label>
                    <input type="text" id="color5" name="color5" class="field-input"><br><br>
                    <input type="submit" value="Send Colors" name="submit" class="submit-button">
                    <a href="ResultColors.php">Go to Result</a>
                </form>
            </div>
        </div>
    </div>
    <?php 
            
        if (isset($_POST['submit'])){
            $colors1 = $_POST['color1'];
            $colors2 = $_POST['color2'];
            $colors3 = $_POST['color3'];
            $colors4 = $_POST['color4'];
            $colors5 = $_POST['color5'];

            
            $_SESSION["color1"] = $colors1;
            $_SESSION["color2"] = $colors2;
            $_SESSION["color3"] = $colors3;
            $_SESSION["color4"] = $colors4;
            $_SESSION["color5"] = $colors5;
        }
    ?>


</body>
</html>