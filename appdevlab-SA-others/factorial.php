<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="factorial.css">
    <title>Factorial Simulation</title>
</head>
<body>
    <h1> Factorial Simulation</h1>

         
    <div class="form-wrapper">
        <form method="POST">
            <label for="input">Input Value:</label>
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
            $input = test_input($_POST["input"]);

            if( $input >= 0){

                function factorial ($num)  {  
                    if($num <= 1)    {   return 1;  }  
                    else   {   return $num * factorial($num - 1);  }  
                }  
    
                echo "<div class='result'>".$input."! is equal to " .factorial($input)."</div>"; 
            }else {
                echo '<div class=\'result\'>Please enter a non-negative number.</div>';
            }
             

        }
    ?>  
</body>
</html>