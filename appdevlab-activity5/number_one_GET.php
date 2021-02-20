<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="number_one.css">
    <title>#1 - Get</title>
</head>
<body>
    <div class="allwrap">
        <div class="wrapper">
            <h1>Personal Information Form [GET]</h1>
            <div class="inner">
                <form method="GET">
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname" class="field-input"><br><br>
                    <label for="mname">Middle name:</label>
                    <input type="text" id="mname" name="mname" class="field-input"><br><br>
                    <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname" class="field-input"><br><br>
                    <label for="birth">Date of Birth:</label>
                    <input type="text" id="birth" name="birth" class="field-input"><br><br>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" class="field-input"><br><br>
                    <input type="submit" value="Submit" name="submit" class="submit-button">
                </form>
            </div>
        </div>

        <div class="output">
            <h1>Personal Information Result</h1>
            <div class='inner'>
                <?php 

                    if (isset($_GET['submit'])){
                        $fname = $_GET['fname'];
                        $mname = $_GET['mname'];
                        $lname = $_GET['lname'];
                        $birth = $_GET['birth'];
                        $address = $_GET['address'];

                        echo "
                            <p><b>First name:</b> $fname</p><br><br>
                            <p><b>Middle name:</b> $mname</p><br><br>
                            <p><b>Last name:</b> $lname</p><br><br>
                            <p><b>Date of Birth:</b> $birth</p><br><br>
                            <p><b>Address:</b> $address</p><br><br>
                        ";
                    }
                ?>
            </div>
        </div>
    </div>


</body>
</html>