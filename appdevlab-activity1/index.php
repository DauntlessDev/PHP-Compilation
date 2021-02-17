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
    <link rel="stylesheet" href="styles.css" />
    <title>Brave Leuterio's Resume</title>
  </head>
  <body>
    <!--Feature Section-->
    <div class="feature">
      <div class="feature-main">
        <div class="featuretext__border">
          <div class="feature__header">
            <div class="feature__header__info">
              <img alt="mail" src="assets/images/email.png" />
              <p><?php echo EMAIL ?></p>
            </div>
            <div class="feature__header__info">
              <img alt="github" src="assets/images/github.png" />
              <p><?php echo GITHUB ?></p>
            </div>
          </div>
          <div class="featuretext">
            <p><?php echo 'Hello' ?></p>
            <h1><?php echo 'I\'m Brave' ?></h1>
            <h4><?php echo 'a freelance software Designer & Developer' ?></h4>

            <div class="feature__hire-me"><?php echo 'Hire Me' ?></div>
          </div>
        </div>
        <div class="feature__profile">
          <img
            id="feature__profile-image"
            alt="profile"
            src="assets/images/profile3.jpg"
          />
        </div>
      </div>

      <div class="feature__overlap__container">
        <img alt="stack" src="assets/images/all-stack.png" id="feature-stack" />
      </div>
    </div>
    <div class="main-container">
      <div class="main-wrapper">
        <div class="body__leftcontainer">
          <h5><?php echo'Profile' ?></h5>
        </div>

        <!-- Profile -->

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

        <!-- Projects -->

        <div class="body__leftcontainer">
          <h5><?php echo 'Projects' ?></h5>
        </div>

        <div class="main-details">
          <div class="sub-details">
            <h6><?php echo 'Tinkler' ?></h6>
            <p><?php echo 'A production-level social media app for android and ios, where the
              users can post status, stories and message friends.' ?>
            </p>
            <p class="sub-details__tech">
              <?php echo 'Technologies: Firebase, Flutter, Dart, Stacked, Mockito, & Cloud Firestore' ?>
            </p>
          </div>

          <div class="sub-details">
            <h6><?php echo 'Bizz' ?></h6>
            <p>
            <?php echo 'A production level e-commerce app with minimalistic design that
              focuses on selling clothing and shoe products.' ?>
            </p>
            <p class="sub-details__tech">
            <?php echo 'Technologies: Firebase, Flutter, Dart, Stacked, Cloud Firestore, &
              Stripe' ?>
            </p>
          </div>

          <div class="sub-details">
            <h6><?php echo 'Flickify' ?></h6>
            <p>
            <?php echo 'A music website where users can use their spotify account to login
              and search/check albums and music.' ?> 
            </p>
            <p class="sub-details__tech">
            <?php echo 'Technologies: Firebase, JavaScript, Spotify-API, React, Hooks,
              Redux, Jest, & Material-UI' ?>
            </p>
          </div>

          <div class="sub-details">
            <h6><?php echo 'Rio' ?></h6>
            <p>
            <?php echo 'A entertainment website inspired from netflix, which includes list
              of movies, series and documentaries.' ?>
            </p>
            <p class="sub-details__tech">
            <?php echo 'Technologies: Firebase, React, JavaScript, Context, Hooks, SCSS,
              Normalize.css,  & Jest' ?>
            </p>
            <div class="body-break"></div>
            <p>
              <i>
              <?php echo 'For more projects, please visit my github account:
                github.com/DauntlessDev' ?></i
              >
            </p>
          </div>
        </div>

        <!-- Education -->

        <div class="body__leftcontainer">
          <h5><?php echo 'Education' ?></h5>
          <h3><?php echo 'Aug 2018 - Present' ?></h3>
        </div>

        <div class="main-details">
          <div class="sub-details">
            <h6><?php echo 'FEU Institute of Technology' ?></h6>
            <p>
            <?php echo 'Bachelor of Science in Computer Science with Specialization in
              Software Engineering' ?> 
            </p>
            <li><?php echo 'Top Performing Student' ?></li>
            <li><?php echo 'Academic Scholar' ?></li>
            <li><?php echo 'Previous Student Leader' ?></li>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
