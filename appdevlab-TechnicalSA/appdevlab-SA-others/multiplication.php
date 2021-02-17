<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="multiplication.css">
    <title>Multiplication Table</title>
</head>
<body>
    
</body>
</html>

<h1>Multiplication Table</h1>

<?php
echo "<table >";
    $isEven = false;
	for ($row=0; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=0; $col <= 10; $col++) { 
           $p = $col * $row;
           if($isEven){
            echo "<td class='even'>$p</td> \n";
            $isEven = false;
           }else{
            echo "<td class='odd'>$p</td> \n";
            $isEven = true;
           }
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>