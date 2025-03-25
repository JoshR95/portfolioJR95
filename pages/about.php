<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me | Portfolio</title>
    <meta name="description" content="Get to know Josh Rickards - a passionate web developer skilled in HTML, CSS, JavaScript, PHP, and more. Learn about my background, technical skills, and interests.">
    
    <link rel="icon" type="image/x-icon" href="../images/initals_favicon_2.ico">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/application.css">
    <link rel="stylesheet" href="../images/icomoon-main/style.css">

  </head>

  <body>

    <?php require_once '../includes/nav_about.php'; ?> 

    <div class="main-container">
      <header>
        <div class="container hero-container hero-container-about">
          <!-- <picture class="about-picture-wrapper">
            <source 
              media="(min-width: 1200px)"
              srcset="../images/me_12_main.jpg">
            <source 
              media="(min-width: 768px)"
              srcset="../images/me_12_mobile.jpg">
            <source 
              srcset="../images/me_12_mobile.jpg">
            <img 
              class="about-picture" 
              src="../images/me_12_main.jpg" 
              alt="image of josh rickards skiing">
          </picture> -->
          <div class="hero-title about-title">
              <h1>ABOUT ME</h1>
          </div>
          <a href="#about-text" class="hero-scroll about-me-scroll">
            <strong><p>SCROLL DOWN</p></strong>
            <strong><span class="icon-arrow-down"></span></strong>
          </a>
      </header>

      <main>
        <div class="container about-text-container">
          <div id="about-text">
            <h2>Im Josh</h2>
            <p>I am a trainee web developer with knowledge of HTML, CSS, SASS, javaScript, SQL, PHP, Laravel and Python.</p>
            <p>
              I am fully committed to the philosophy of being a life long learner. I am passionate about expanding my knowledge and adding to the ever evolving world of web development.
              With a keen eye for detail and a strong problem-solving mindset, I enjoy building intuitive, user-friendly websites and applications.
            </p>
            <p>My other interests include :</p>
            <ul>
              <li>Gaming</li>
              <li>Skiing</li>
              <li>Keeping Fit</li>
            </ul>
            <a href="#" class=" about-bottom-scroll">
              <p>BACK TO THE TOP</p>
              <span class="icon-arrow-up2"></span>
            </a>
          </div>
        </div>
      </main>
    </div>
    

    <?php include_once '../includes/footer.php'; ?>
    <script src="../js/main.js"></script>
  </body>

</html>