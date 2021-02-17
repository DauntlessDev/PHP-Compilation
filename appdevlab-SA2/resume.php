<?php 
  define('FULLNAME', 'Rom Braveheart P. Leuterio');
  define('GMAIL', 'romleuterio@gmail.com');
  define('GITHUB', 'DauntlessDev');
  define('EMAIL', 'RomLeuterio');
  $phone_num = '0995 138 9212';
  $address = 'Sampaloc, Manila';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="resume.css" />
    <title>#4 Brave Leuterio's Resume</title>
  </head>
  <body>
    <!--Feature Section-->
    <?php require 'resume_pages/feature.php' ?>
   
    <div class="main-container">
      <div class="main-wrapper">
        <div class="body__leftcontainer">
          <h5><?php echo'Profile' ?></h5>
        </div>

        <!-- Profile -->
        <?php include 'resume_pages/profile.php' ?>

        <!-- Projects -->
        <?php require 'resume_pages/projects.php' ?>
        
        <!-- Education -->
        <?php include 'resume_pages/education.php' ?>

        
      </div>
    </div>
  </body>
</html>
