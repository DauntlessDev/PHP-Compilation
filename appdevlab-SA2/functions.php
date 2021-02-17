<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="functions.css">
    <title>#5 Function Table</title>
</head>
<body>
    <?php 
        $string = htmlspecialchars(" an online guide to html form <input> tag ");
    ?>
    <table>
        <tr class="headers">
            <td>No.</td>
            <td>Description</td>
            <td>Output</td>
        </tr>
        <tr>
            <td>1.</td>
            <td>Original value of $string</td>
            <?php echo "<td>*". $string . "*</td>"?>
        </tr>
        <tr>
            <td>2.</td>
            <td>Number of characters</td>
            <?php echo "<td>*". strlen($string). "*</td>"?>
        </tr>
        <tr>
            <td>3.</td>
            <td>Number of words</td>
            <?php echo "<td>*".str_word_count($string) . "*</td>"?>
        </tr>
        <tr class='rowbreak'></tr>
        <tr>
            <td>4.</td>
            <td>First character to uppercase</td>
            <?php echo "<td>*". ucfirst($string) . "*</td>"?>
        </tr>
        <tr>
            <td>5.</td>
            <td>First character of each word to uppercase</td>
            <?php echo "<td>*". ucwords($string) . "*</td>"?>
        </tr>
        <tr>
            <td>6.</td>
            <td>To lowercase</td>
            <?php echo "<td>*". strtolower($string) . "*</td>"?>
        </tr>
        <tr>
            <td>7.</td>
            <td>To uppercase</td>
            <?php echo "<td>*". strtoupper($string) . "*</td>"?>
        </tr>
        <tr class='rowbreak'></tr>
        <tr>
            <td>8.</td>
            <td>Without leading spaces</td>
            <?php echo "<td>*". ltrim($string) . "*</td>"?>
        </tr>
        <tr>
            <td>9.</td>
            <td>Without trailing spaces</td>
            <?php echo "<td>*". rtrim($string) . "*</td>"?>
        </tr>
        <tr>
            <td>10.</td>
            <td>Without leading and trailing spaces</td>
            <?php echo "<td>*". trim($string) . "*</td>"?>
        </tr>
        <tr class='rowbreak'></tr>
        <tr>
            <td>11.</td>
            <td>MD5 value of $string</td>
            <?php echo "<td>*". md5($string) . "*</td>"?>
        </tr>
        <tr>
            <td>12.</td>
            <td>Base64 value of $string</td>
            <?php echo "<td>*". base64_encode($string) . "*</td>"?>
        </tr>
        <tr class='rowbreak'></tr>
        <tr>
            <td>13.</td>
            <td>First 16 characters</td>
            <?php echo "<td>*". substr($string, 0, 16) . "*</td>"?>
        </tr>
        <tr>
            <td>14.</td>
            <td>Last 4 characters</td>
            <?php echo "<td>*". substr($string, -4) . "*</td>"?>
        </tr>
        <tr>
            <td>15.</td>
            <td>4 characters strarting from the 20'th Position</td>
            <?php echo "<td>*". substr($string, 20, 4) . "*</td>"?>
        </tr>
        <tr class='rowbreak'></tr>
        <tr>
            <td>16.</td>
            <td>Position of the "guide"</td>
            <td>
            <?php
             var_dump(strpos($string, 'guide')) ?>
            </td>
        </tr>
        <tr>
            <td>17.</td>
            <td>Position of the word "UE"</td>
            <td>
            <?php var_dump(strpos($string, 'UE')) ?>
            </td>
        </tr>
        <tr class='rowbreak'></tr>
        <tr>
            <td>18.</td>
            <td>"HTML" word in uppercase</td>
            <?php echo "<td>*". substr($string, 0, 20) . strtoupper(substr($string, 20, 4)) . substr($string, 24) . "*</td>"?>
        </tr>
        <tr>
            <td>19.</td>
            <td>"&lt;INPUT&gt;" word in uppercase</td>
            <?php echo "<td>*". substr($string, 0, 30) . strtoupper(substr($string, 30, 10)) . substr($string, 40) .  "*</td>"?>
        </tr>
        <tr class='rowbreak'></tr>
        <tr>
            <td>20.</td>
            <td>Strings converted to array</td>
            <?php 

            $string_array = explode(" ", trim($string));
            echo "<td>";
            foreach ($string_array as $string_indiv){
                echo "*" . $string_indiv . "* <br>";
            }

            echo "</td>";
            ?>
        </tr>
    </table>
</body>
</html>