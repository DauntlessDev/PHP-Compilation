<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="feature">
      <div class="feature-main">
        <div class="featuretext__border">
          <div class="feature__header">
            <div class="feature__header__info">
              <img alt="mail" src="images/resume/email.png" />
              <p><?php echo EMAIL ?></p>
            </div>
            <div class="feature__header__info">
              <img alt="github" src="images/resume/github.png" />
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
            src="images/resume/profile3.jpg"
          />
        </div>
      </div>

      <div class="feature__overlap__container">
        <img alt="stack" src="images/resume/all-stack.png" id="feature-stack" />
      </div>
    </div>
</body>
</html>