<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calendar.css">
    <title>#1 Birth Month Calendar</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="7">November</th>
        </tr>

        <?php 
            $week_day = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");

            echo "<tr class='word-day'>";
            foreach($week_day as $day){
                echo "<td>" . $day . "</td>";
            }
            echo "</tr>";

            $month_day = range(1,30);
            foreach($month_day as $counter){
                if ($counter == 11) {
                    echo "<td class='birthday'>" . $counter . "</td>";
                }else if ($counter % 7 == 1){
                    echo "<tr class='info'>";
                    echo "<td>" . $counter . "</td>";
                }else if ($counter % 7 == 0){
                    echo "<td>" . $counter . "</td>";
                    echo "</tr>";
                }else {
                    echo "<td>" . $counter . "</td>";
                }

            }
        ?>
    </table>
</body>
</html>