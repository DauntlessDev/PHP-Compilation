<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grade.css">
    <title>Grade Ranking Program</title>
</head>
<body>

<?php
         
         // define variables and set to empty values
         $name = $grade = $rank = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $grade = test_input($_POST["grade"]);
            $rank;
            switch ($grade) {
                case in_array($grade, range(93,100)):
                    $rank = 'A';
                    break;
                case in_array($grade, range(90,92)):
                    $rank = 'A-';
                    break;
                case in_array($grade, range(87,89)):
                    $rank = 'B+';
                    break;
                case in_array($grade, range(83,86)):
                    $rank = 'B';
                    break;
                case in_array($grade, range(80,82)):
                    $rank = 'B-';
                    break;
                case in_array($grade, range(77,79)):
                    $rank = 'C+';
                    break;
                case in_array($grade, range(73,76)):
                    $rank = 'C';
                    break;
                case in_array($grade, range(70,72)):
                    $rank = 'C-';
                    break;
                case in_array($grade, range(67,69)):
                    $rank = 'D+';
                    break;
                case in_array($grade, range(63,66)):
                    $rank = 'D';
                    break;
                case in_array($grade, range(60,62)):
                    $rank = 'D-';
                    echo $rank;
                    break;
                case in_array($grade, range(0,59)):
                    $rank = 'F';
                    break;
                default:
                    echo 'invalid grade';
        }
        }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }



      ?>

    <div class="form-wrapper">
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="grade">Grade:</label>
            <input type="number" id="grade" name="grade"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php 
        echo "
        <div class='table-wrapper'>
            <div class ='rectangle'>
                Name: " . $name . "
            </div>
            <div class='inline-div'>
            <div class ='box'>
                Grade: " . $grade . "
            </div>
            <div class ='box'>
                Rank: " . $rank . "
            </div>
            <div>
        </div>
        "
    ?>

    
</body>
</html>