<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fibo.css">
    <title>Fibo Sequence</title>
</head>
<body>
    <div class="wrapper">
        <h1> Fibonnaci Sequence </h1>

        
        <div class="form-wrapper">
            <form method="POST">
                <label for="input">Input Length Value:</label>
                <input class="inputnum" type="number" id="input" name="input"><br><br>
                <input class="submit" type="submit" value="Submit">
            </form>
            <br><br>
        </div>
        
        <?php  
        
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $num = $n1 = 0;  
            $n2 = 1;  

            $input = test_input($_POST["input"]);
            
            echo "<h3>Fibonacci Series Simulation (n = $input) </h3> \n";  
            if ($input == 1 ){

                echo '<div class="number">'.$n1.'</div>';
            }
            elseif ($input == 2 ){
                echo '<div class="number">'.$n1.'</div>';
                echo '<div class="number">'.$n2.' </div>';  
            }
            elseif ($input >= 3 ){

                echo '<div class="number">'.$n1.'</div>';
                echo '<div class="number">'.$n2.' </div>';  
                while ($num < ($input - 2) ) {  
                    $n3 = $n2 + $n1;  
                    echo '<div class="number">'.$n3.'</div>';  
                    $n1 = $n2;  
                    $n2 = $n3;  
                    $num = $num + 1;  
                }
            } else {
                echo '<p>Please input a valid positive number.</p>';
            }
        }
    ?>  
    </div>
</body>
</html>