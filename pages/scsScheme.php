<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCS Scheme | Portfolio</title>
    <meta name="description" content="Learn about my journey through the Scion Coalition Scheme at Netmatters - an intensive web development training program. View my progress and Treehouse achievements.">
    
    <link rel="icon" type="image/x-icon" href="../images/initals_favicon_2.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
    <link rel="stylesheet" href="../css/application.css">
    <link rel="stylesheet" href="../images/icomoon-main/style.css">
  </head>

  <body>
    <?php require_once '../includes/nav_scsScheme.php'; ?>
     
    <header>
        <div class="main-container scs-scheme-main-container container">
          <!-- <div class="scs-scheme">
            <div class="scs-scheme-element scs-left-element">
              <h2>Introduction to Scion Coalition Scheme</h2>
              <p>
                The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the 
                opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete 
                training within six to nine months. The course is intensive and therefore the level of learning achieved is extensive in a short space of 
                time.
              </p>
            </div>
            <div class="scs-scheme-element scs-right-element">
              <h2>About Netmatters</h2>
              <ul>
                <li>- Established in 2008</li>
                <li>- Norfolk's leading technology company</li>
                <li>- Winner of the Princess Royal Training Award</li>
                <li>- Winner of EDP Skills of Tomorrow Award</li>
                <li>- 80+ staff, 2 locations across Norfolk</li>
                <li>- Digital Marketing, Website & Software development & IT Support</li>
                <li>- Broad spectrum of clients, working nationwide</li>
                <li>- Operate to strict company values</li>
              </ul>
            </div>
            <div class="scs-scheme-element scs-left-element">
              <h2>Treehouse</h2>
              <p>
                Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development,
                data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've 
                covered in certain areas.
                <br>
                <a href="https://teamtreehouse.com/profiles/joshrickards" target="_blank">> View Treehouse Profile <</a>
              </p>
            </div> 
          </div>-->
          <div class="carousel">
              <div class="carousel-slide">
                  <div class="slide-content">
                      <h3>Introduction to Scion Coalition Scheme</h3>
                      <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete training within six to nine months.</p>
                  </div>
              </div>
              <div class="carousel-slide">
                  <div class="slide-content">
                      <h3>About Netmatters</h3>
                      <p>Established in 2008<br>
                      Norfolk's leading technology company<br>
                      Winner of the Princess Royal Training Award<br>
                      80+ staff, 2 locations across Norfolk</p>
                  </div>
              </div>
              <div class="carousel-slide">
                  <div class="slide-content">
                      <h3>Treehouse</h3>
                      <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress.</p>
                  </div>
              </div>
          </div>
        </div>
    </header>

    <?php include_once '../includes/footer.php'; ?>
    
    <!-- Essential libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/particles.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>