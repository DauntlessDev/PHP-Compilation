<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main-details">
          <div class="sub-grid">
            <div class="profile-details">
              <h6><?php echo 'Full Name:' ?></h6>
              <p><?php echo FULLNAME ?></p>
              <br>
            </div>

            <div class="profile-details">
              <h6><?php echo 'Phone:' ?></h6>
              <p><?php echo $phone_num ?></p>
              <br>
            </div>

            <div class="profile-details">
              <h6><?php echo 'Address:' ?></h6>
              <p><?php echo $address ?></p>
            </div>

            <div class="profile-details">
              <h6><?php echo 'G-Mail:' ?></h6>
              <p><?php echo GMAIL ?></p>
            </div>
          </div>
        </div>
</body>
</html>