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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    
    <!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->

    <link rel="stylesheet" href="./css/application.css">
    <link rel="stylesheet" href="./images/icomoon-main/style.css">


  </head>

  <body>

    <?php require_once 'includes/nav_home.php'; ?> 

    <div class="main-container">
      <header>
        
        <div class="container hero-container">
          <div id="particles-js"></div>
          <div class="hero-title main-title">
              <h1 >HELLO, IM <span class="header-text-highlight">JOSH</span></h1>
              <h2 id="typewriter">I'm a Web Developer</h2>
          </div>
          <div class="hero-scroll-container">
            <a href="#about-me-main" class="hero-scroll">
              <p><span class="icon-arrow-down"></span>learn about me<span class="icon-arrow-down"></span></p>
            </a>
          </div>
        </div>
      </header>

      <main>
        
        <div id="about-me-main">
          <div class="about-me-main-text">
            <div id="about-text">
              <div class="about-text-header">
                <img class="me-icon" src="images/me-coding-looking-right.png">
                <h2>Im <span class="about-text-highlight">Josh</span></h2>
              </div>
              <p>I am a trainee web developer with knowledge of HTML, CSS, SASS, javaScript, SQL, PHP, Laravel and Python.</p>
              <p>
                I am fully committed to the philosophy of being a life long learner. I am passionate about expanding my knowledge and adding to the ever evolving world of web development.
                With a keen eye for detail and a strong problem-solving mindset, I enjoy building intuitive, user-friendly websites and applications.
              </p>
            </div>
            <div class="about-me-scroll-container">
              <div class="about-me-scroll-button">
                  <a href="#portfolio" class="hero-scroll">
                    <p><span class="icon-arrow-down"></span>explore my projects<span class="icon-arrow-down"></span></p>
                  </a>
              </div>
            </div>
          </div>
          <div class="language-logos-container">
            <div class="about-me-lang-rows">
              <div class="tooltip-container">
                <img src="./images/jsLogo.png">
                <span class="tooltip">JavaScript</span>
              </div>
              <div class="tooltip-container">
                <img src="./images/htmlLogo.png">
                <span class="tooltip">HTML5</span>
              </div>
            </div>
            <div class="about-me-lang-rows">
              <div class="tooltip-container">
                <img src="./images/cssLogo.png">
                <span class="tooltip">CSS3</span>
              </div>
              <div class="tooltip-container">
                <img src="./images/gitLogo2.png">
                <span class="tooltip">Git</span>
              </div>
              <div class="tooltip-container">
                <img src="./images/sassLogo.png">
                <span class="tooltip">Sass</span>
              </div>
            </div>
            <div class="about-me-lang-rows">
              <div class="tooltip-container">
                <img src="./images/phpLogo2.png">
                <span class="tooltip">PHP</span>
              </div>
              <div class="tooltip-container">
                <img src="./images/laravelLogo.png">
                <span class="tooltip">Laravel</span>
              </div>
            </div>
          </div>
        </div>
        <!--PORTFOLIO-->
        <div id="portfolio" class="container">
          <h2>MY PROJECTS</h2>
          <!-- Project Details Modal -->
          <div id="projectDetailsModal" class="project-details-modal">
            <div class="modal-content">
              <span class="close-modal">&times;</span>
              <div class="modal-header">
                <h3 id="modalProjectTitle"></h3>
              </div>
              <div class="modal-body">
                <div class="project-description">
                  <p id="modalProjectDescription"></p>
                </div>
                <div class="project-technologies">
                  <h4>Technologies Used</h4>
                  <p id="modalProjectTechnologies"></p>
                </div>
                <div class="project-features">
                  <h4>Key Features</h4>
                  <ul id="modalProjectFeatures"></ul>
                </div>
              </div>
            </div>
          </div>
          <div class="portfolio-grid">
            <div class="project-item">
              <img class="project-image" src="./images/netmatters-homepage.png" alt="Netmatters homepage project image">
              <div class="hover-tag">hover for details</div>
              <div class="project-on-hover">
                <div class="project-title">
                  <h3>NETMATTERS HOMEPAGE</h3>
                </div>
                <!-- <p class="project-content-flip-text">
                  This project recreates Netmatters homepage using HTML, CSS, SASS, javaScript and PHP.
                </p>
                <p class="project-content-flip-text">
                  The projects makes use of javaScript to add dynamic animations on the page such as the pop out sidemenu. This project also uses PHP to make us of include partials for things such as
                  the header, footer and nav. I have also implemented a dynamic news section where content is pulled from a MySQL database and rendered using PHP, allowing for easy content management and updates.
                </p> -->
                <div class="project-languages">
                  <div class="tooltip-container">
                    <img src="./images/htmlLogo.png">
                    <span class="tooltip">HTML5</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/cssLogo.png">
                    <span class="tooltip">CSS3</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/sassLogo.png">
                    <span class="tooltip">Sass</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/gitLogo2.png">
                    <span class="tooltip">Git</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/jsLogo.png">
                    <span class="tooltip">JavaScript</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/phpLogo2.png">
                    <span class="tooltip">PHP</span>
                  </div>
                </div>
                <div class="project-links">
                  <a href="http://netmatters.joshua-rickards.netmatters-scs.co.uk/" target="_blank">
                    <p><span>View project</span></p>
                  </a>
                  <a href="https://github.com/JoshR95/netmatters_website" target="_blank">
                    <p><span>View code</span></p>
                  </a>
                  <a href="#" onclick="openProjectDetails('netmatters'); return false;">
                    <p><span>Project details</span></p>
                  </a>
                </div>
              </div>
            </div>
            <div class="project-item">
              <img src="./images/js-array-project.png" alt="random image generator project image">
              <div class="hover-tag">hover for details</div>
              <div class="project-on-hover">
                <div class="project-title">
                  <h3>RANDOM PICTURE GENERATOR</h3>
                </div>
                <!-- <p class="project-content-flip-text">
                  This project creates a random image and adds to collections. It uses HTML, CSS, SASS AND JS
                </p>
                <p class="project-content-flip-text">
                  The project makes use of an API to recieve the random images. It uses JS to added these images to a collection stored in local storage,
                  it then displays the collection for the associated email address. I also have email validation using regex validation.
                </p> -->
                <div class="project-languages">
                  <div class="tooltip-container">
                    <img src="./images/htmlLogo.png">
                    <span class="tooltip">HTML5</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/cssLogo.png">
                    <span class="tooltip">CSS3</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/sassLogo.png">
                    <span class="tooltip">Sass</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/gitLogo2.png">
                    <span class="tooltip">Git</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/jsLogo.png">
                    <span class="tooltip">JavaScript</span>
                  </div>
                </div>
                <div class="project-links">
                  <a href="http://netmatters.joshua-rickards.netmatters-scs.co.uk/" target="_blank">
                    <p><span>View project</span></p>
                  </a>
                  <a href="https://github.com/JoshR95/netmatters_website" target="_blank">
                    <p><span>View code</span></p>
                  </a>
                  <a href="#" onclick="openProjectDetails('random-picture'); return false;">
                    <p><span>Project details</span></p>
                  </a>
                </div>
              </div>
            </div>

            <div class="project-item">
              <img src="./images/laravel_admin_assessment.png" alt="laravel admin assessment project image">
              <div class="hover-tag">hover for details</div>
              <div class="project-on-hover">
                <div class="project-title">
                  <h3>ADMIN MANAGEMENT SYSTEM</h3>
                </div>
                <!-- <p class="project-content-flip-text">
                  This project is an admin management system that enables companies to manage their organizational structure and employee information through a secure, user-friendly interface.
                </p>
                <p class="project-content-flip-text">
                  It uses laravel, PHP, HTML and CSS. It handles user authentication with a secure log in. It allows maintenance of a database of company records with full CRUD operations.
                  It uses a SQLite database for efficient data storage and retrieval. It Implements Blade for dynamic content rendering. It also Utilizes Tailwind CSS for modern, responsive styling.
                </p> -->
                <div class="project-languages">
                  <div class="tooltip-container">
                    <img src="./images/htmlLogo.png">
                    <span class="tooltip">HTML5</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/cssLogo.png">
                    <span class="tooltip">CSS3</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/sassLogo.png">
                    <span class="tooltip">Sass</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/gitLogo2.png">
                    <span class="tooltip">Git</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/jsLogo.png">
                    <span class="tooltip">JavaScript</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/phpLogo2.png">
                    <span class="tooltip">PHP</span>
                  </div>
                  <div class="tooltip-container">
                    <img src="./images/laravelLogo.png">
                    <span class="tooltip">Laravel</span>
                  </div>
                </div>
                <div class="project-links">
                  <a href="http://netmatters.joshua-rickards.netmatters-scs.co.uk/" target="_blank">
                    <p><span>View project</span></p>
                  </a>
                  <a href="https://github.com/JoshR95/netmatters_website" target="_blank">
                    <p><span>View code</span></p>
                  </a>
                  <a href="#" onclick="openProjectDetails('admin-system'); return false;">
                    <p><span>Project details</span></p>
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
            </div > -->
          </div>
          <div class="portfolio-scroll-container">
            <div class="portfolio-scroll-button">
                <a href="#contact-me" class="hero-scroll">
                  <p><span class="icon-arrow-down"></span>get in contact<span class="icon-arrow-down"></span></p>
                </a>
            </div>
          </div>
        </div>

        <!--CONTACT ME-->
        <div id="contact-me" class="container">
          <h2>GET IN CONTACT</h2>
          <p class="contact-me-sub-heading">If you'd like to contact me please use the form below </p>
          <!-- <span class="icon-arrow-down"></span> -->

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
            <div id="form-message-box" class="form-message-box" style="display:none; margin-top:10px;"></div>
            <div>
              <button id="contact-submit-box" class="contact-me-submit" type="submit">Submit</button>
            </div>
            
          </form>
          <div class="contact-scroll-container">
            <div class="contact-scroll-button">
                <a href="#" class="hero-scroll">
                  <p><span class="icon-arrow-up2"></span>back to the top<span class="icon-arrow-up2"></span></p>
                </a>
            </div>
          </div>
        </div>
      </main>
    </div>
    

    <?php include_once 'includes/footer.php'; ?>
    <script src="./js/particles.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/projectDetails.js"></script>

  </body>

</html>