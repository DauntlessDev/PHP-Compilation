<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="names.css">
    <title>AppDevL Act4 #2 - Names</title>
</head>

    <?php 
        $names = array("chrisa","chezka", "heart", "jona", "kyla", "karla", "moira", "han", "merla", "zisha", "ryza", "miam", "laly", "cristal", "dianne", "franz","georga","jazel", "hiesta", "oria");

        function createRows($string1) {
            
            $vowels = array("a", "e", "i", "o", "u");

            echo "<tr><td>" . $string1 . "</td>";
            echo "<td>" . strlen($string1) . "</td>";
            echo "<td>" . ucfirst($string1) . "</td>";
            echo "<td>" . str_replace($vowels, "@", $string1) . "</td>";
            echo "<td>" . strpos($string1,"a") . "</td>";
            echo "<td>" . strrev($string1) . "</td></tr>";

        }
    ?>
<body>
    
    <table style="width:700px">
    <tr >
        <th colspan='6'>
            List of Names
        </th>
    </tr>

    <?php 
        foreach ($names as $name){
            createRows($name);
        }
    ?>

    </table>
</body>
</html>