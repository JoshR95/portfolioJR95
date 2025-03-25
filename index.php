<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Josh Rickards | Portfolio</title>
    <meta name="description" content="Full-stack web developer portfolio showcasing responsive websites, JavaScript applications, and PHP/MySQL projects. View my work and get in touch for collaboration opportunities.">

    <link rel="icon" type="image/x-icon" href="../images/initals_favicon_2.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="./css/application.css">
    <link rel="stylesheet" href="./images/icomoon-main/style.css">


  </head>

  <body>

    <?php require_once 'includes/nav_home.php'; ?> 

    <div class="main-container">
      <header>
        
        <div class="container hero-container">
          <div id="particles-js"></div>  <!-- Add this line -->
          <div class="hero-title main-title">
              <h1 >Josh Rickards</h1>
              <h2 id="typewriter">I'm a Web Developer</h2>
          </div>
          <div class="hero-scroll-container">
            <a href="#portfolio" class="hero-scroll">
              <p>SCROLL DOWN</p>
              <span class="icon-arrow-down"></span>
            </a>
          <div>
        </div>
      </header>

      <main>
        <!--PORTFOLIO-->
        <div id="portfolio" class="container">
          <h2>MY PROJECTS</h2>
          <div class="portfolio-grid">
            <div class="project-item">
              <img src="./images/netmatters-homepage.png" alt="Netmatters homepage project image">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Netmatters Homepage</h3>
                <p class="project-content-flip-text">
                  This project recreates Netmatters homepage using HTML, CSS, SASS, javaScript and PHP.
                </p>
                <p class="project-content-flip-text">
                  The projects makes use of javaScript to add dynamic animations on the page such as the pop out sidemenu. This project also uses PHP to make us of include partials for things such as
                  the header, footer and nav. I have also implemented a dynamic news section where content is pulled from a MySQL database and rendered using PHP, allowing for easy content management and updates.
                </p>
                <div class="project-links">
                  <a href="http://netmatters.joshua-rickards.netmatters-scs.co.uk/" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="https://github.com/JoshR95/netmatters_website" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item">
              <img src="./images/js-array-project.png" alt="random image generator project image">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Random picture generator</h3>
                <p class="project-content-flip-text">
                  This project creates a random image and adds to collections. It uses HTML, CSS, SASS AND JS
                </p>
                <p class="project-content-flip-text">
                  The project makes use of an API to recieve the random images. It uses JS to added these images to a collection stored in local storage,
                  it then displays the collection for the associated email address. I also have email validation using regex validation.
                </p>
                <div class="project-links">
                  <a href="http://js-array.joshua-rickards.netmatters-scs.co.uk/" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="https://github.com/JoshR95/js-array" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item">
              <img src="./images/laravel_admin_assessment.png" alt="coming soon project image ">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Admin management system</h3>
                <p class="project-content-flip-text">
                  This project is an admin management system that enables companies to manage their organizational structure and employee information through a secure, user-friendly interface.
                </p>
                <p class="project-content-flip-text">
                  It uses laravel, PHP, HTML and CSS. It handles user authentication with a secure log in. It allows maintenance of a database of company records with full CRUD operations.
                  It uses a SQLite database for efficient data storage and retrieval. It Implements Blade for dynamic content rendering. It also Utilizes Tailwind CSS for modern, responsive styling.
                </p>
                <div class="project-links">
                  <a href="http://laravel.joshua-rickards.netmatters-scs.co.uk/login" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="https://github.com/JoshR95/laravel_nm_project" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- <div class="project-item">
              <img src="./images/coming-3605857_1920.jpg">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="project-links">
                  <a href="#" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="#" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item hidden">
              <img src="./images/coming-3605857_1920.jpg">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="project-links">
                  <a href="#" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="#" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item hidden">
              <img src="./images/coming-3605857_1920.jpg">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="project-links">
                  <a href="#" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="#" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item hidden">
              <img src="./images/coming-3605857_1920.jpg">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="project-links">
                  <a href="#" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="#" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item hidden">
              <img src="./images/coming-3605857_1920.jpg">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="project-links">
                  <a href="#" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="#" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item hidden">
              <img src="./images/coming-3605857_1920.jpg">
              <div class="hover-tag">hover for details</div>
              <div class="project-content">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="project-links">
                  <a href="#" target="_blank">
                    <span>View project</span>
                  </a>
                  <a href="#" target="_blank">
                    <span>View code</span>
                  </a>
                </div>
              </div>
            </div> -->
          </div>
        </div>

        <!--CONTACT ME-->
        <div id="contact-me" class="container">
          <h2>GET IN CONTACT</h2>
          <p>If you'd like to contact me please use the form below </p>
          <span class="icon-arrow-down"></span>

          <form id= "contact-form" class="contact-form" method="POST" action="/submit-form">
            <div class="input-control">
              <label for="fname"></label>
              <input type="text" id="fname" name="fname"  class="colored-input" placeholder="First Name">
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="lname"></label>
              <input type="text" id="lname" name="lname" class="colored-input" placeholder="Last Name">
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="email"></label>
              <input type="text" id="email" name="email" class="colored-input" placeholder="Email Address">
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="phoneNumber"></label>
              <input type="text" id="phoneNumber" name="phoneNumber" class="colored-input" placeholder="Phone Number">
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="subject"></label>
              <input type="text" id="subject" name="subject" class="colored-input" placeholder="Subject">
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="message"></label>
              <textarea id="message" name="message" class="colored-input large-input" placeholder="Message"></textarea>
              <div class="error"></div>
            </div>

            <div>
              <button id="contact-submit-box" class="contact-me-submit" type="submit">Submit</button>
            </div>
          </form>
          <a href="#" class="bottom-scroll">
            <p>BACK TO THE TOP</p>
            <span class="icon-arrow-up2"></span>
          </a>
        </div>
      </main>
    </div>
    

    <?php include_once 'includes/footer.php'; ?>
    <script src="./js/main.js"></script>
  </body>

</html>