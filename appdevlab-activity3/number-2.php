<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="number-1.css">
    <title>#2 Array Math (Built in Funcs)</title>
</head>
<body>
    <?php 

        $numbers = array(1,2,3,4,5,6,7,8,9,10);
      
      
    
    ?>
    <table style="width:700px">
    <tr >
      <th colspan='2'>Arraylist: 
          <?php foreach($numbers as $number){
              echo $number . " " ;
          }
          ?> 
          
        </th>
    </tr>
    <tr>
        <td>Addition</td>
        <td>
            <?php 
                echo array_sum($numbers);
            ?>
        </td>
    </tr>
    <tr>
        <td>Substraction</td>
        <td>
            <?php 
                $subtraction_result = 0;
                foreach($numbers as $number){
                     $index = array_search($number, $numbers);
                    if ($index == 0 ){
                        $subtraction_result = $number;
                    }else{
                        $subtraction_result -=  $number;
                    }
                }
                echo $subtraction_result;
            ?>
        </td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td>
            <?php 
                $subtraction_result = 0;
                foreach($numbers as $number){
                     $index = array_search($number, $numbers);
                    if ($index == 0 ){
                        $subtraction_result = $number;
                    }else{
                        $subtraction_result *=  $number;
                    }
                }
                echo $subtraction_result;
            ?>
        </td>
    </tr>
    <tr>
        <td>Division</td>
        <td>
            <?php 
                $subtraction_result = 0;
                foreach($numbers as $number){
                     $index = array_search($number, $numbers);
                    if ($index == 0 ){
                        $subtraction_result = $number;
                    }else{
                        $subtraction_result /=  $number;
                    }
                }
                echo $subtraction_result;
            ?>
        </td>
    </tr>
    </table>
</body>
</html>