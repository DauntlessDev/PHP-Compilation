<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="number_two.css">
    <title>#2 Cookies</title>
</head>
<body>

        <div class="output">
            <h1>Personal Information Result</h1>
            <div class='inner'>
                <img src="./images/patrick.png" alt="patrick">
                <?php 
                    $fname ="";
                    $mname ="";
                    $lname ="";
                    
                    $birth = "March 17 1984";
                    $address = "Bikini Bottom";
                    

                    if(isset($_POST['reset'])) { 
                        setcookie("fname", "Patrick", time()+ 10);
                        setcookie("mname", "Overomica", time()+ 20);
                        setcookie("lname", "Star", time()+ 30);
                        setcookie("setcheck", "set");
                    } 


                    if (!isset($_COOKIE['setcheck'])){
                        setcookie("fname", "Patrick", time()+ 10);
                        setcookie("mname", "Overomica", time()+ 20);
                        setcookie("lname", "Star", time()+ 30);
                        setcookie("setcheck", "set");
                    }
                    
                    if (isset($_COOKIE['fname'])) {
                        $fname = $_COOKIE['fname'];
                    }
                    if (isset($_COOKIE['mname'])) {
                        $mname = $_COOKIE['mname'];
                    }
                    if (isset($_COOKIE['lname'])) {
                        $lname = $_COOKIE['lname'];
                    }

                    
                    echo "
                        <p><b>First name:</b> $fname</p><br><br>
                        <p><b>Middle name:</b> $mname</p><br><br>
                        <p><b>Last name:</b> $lname</p><br><br>
                        <p><b>Date of Birth:</b> $birth</p><br><br>
                        <p><b>Address:</b> $address</p><br><br>
                    ";
                    
                    

                ?>
                <form method="post"> 
                    <input type="submit" name="reset" value="Reset Cookies"/> 
                </form> 
                <p class="note">Note:To set the cookie again,<b> click this button and then refresh the page.</b> (Reload it through resending the link and not by reloading button (because if you do, it will reset again the cookies))</p>
            </div>
        </div>
    </div>


</body>
</html>