<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Digit Looping</title>
</head>
<body>
    <?php 
        for($num1 = 0; $num1 <= 9; ++$num1) {
            for($num2 = 0; $num2 <= 9; ++$num2) {
                echo $num1 . $num2 . ', ';
            };
        };
        // you can also use foreach + range, but it is slower
    ?>
</body>
</html>
