<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code examples | Portfolio</title>
    <meta name="description" content="Explore code examples showcasing PHP database integration, email validation, contact form handling, and SCSS mixins from Josh Rickards' web development portfolio.">
    <link rel="icon" type="image/x-icon" href="../images/initals_favicon_2.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/application.css">
    <link rel="stylesheet" href="../images/icomoon-main/style.css">

  </head>

  <body>

    <?php require_once '../includes/nav_CE.php'; ?> 
    
    <header id="moving-background">
      <div class="main-container code-example-main-container">
        <div class="code-example-title">
          <h1>CODE EXAMPLES</h1>
        </div>
        <div class="container code-example-container">
          <div class="code-example-background"></div>
            <div class="code-example-content">
              <div class="ce-image-container">
                <img src="../images/php_using_database_example.png" class="code-example-pic" onclick="showLargeImage(this.src)" alt="php code example">
                <div class="CE-click-tag">click to zoom</div>
              </div>
              <h3>PHP script that handles dynamic news articles</h3>
              <p class="ce-main-text">
                This PHP Contact Form Handler:-
              </p>
              <ul>
                <li class="ce-secondary-text">Processes articles stored in a MySQL database</li>
                <li class="ce-secondary-text">Implements secure data output using htmlspecialchars() to prevent XSS attacks</li>
                <li class="ce-secondary-text">Uses a foreach loop to efficiently render multiple articles</li>
                <li class="ce-secondary-text">Maintains consistent styling through dynamic class assignments</li>
              </ul>
              <p class="ce-main-text">
                The script serves as a bridge between a MySQL database and the frontend display, ensuring consistent article presentation while maintaining security through proper data escaping.
              </p>
            </div>
            <div class="code-example-content">
              <div class="ce-image-container">
                <!-- the onClick will call the showLargeImage function passing its own source (this.src) as an argument -->
                <img src="../images/email_validation_example.png" class="code-example-pic" onclick="showLargeImage(this.src)" alt="javaScript email validation code example">
                <div class="CE-click-tag">click to zoom</div>
              </div>
              <h3>Email validation using javaScript</h3>
              <p class="ce-main-text">
                This code handles email validation using javaScript and the use of multiple functions:
              </p>
              <ul>
                <li class="ce-secondary-text">isValidEmail(): Checks if an email is valid using regex pattern matching. It ensures the email follows standard format rules, isn't 'test@test', and isn't longer than 254 characters.</li>
                <li class="ce-secondary-text">showEmailError() and hideEmailError(): Manage the display of error messages to the user through DOM manipulation.</li>
                <li class="ce-secondary-text">validateEmail(): Main validation function that checks if an email is provided and valid, showing appropriate error messages to the user.</li>
              </ul>
            </div>
            <div class="code-example-content">
              <div class="ce-image-container">
                <img src="../images/contact_form_submission_code.png" class="code-example-pic" onclick="showLargeImage(this.src)" alt="php contact form handling code example">
                <div class="CE-click-tag">click to zoom</div>
              </div>
              <h3>PHP script that handles contact form submission</h3>
              <p class="ce-main-text">
                This PHP Contact Form Handler:
              </p>
              <ul>
                <li class="ce-secondary-text">Implements server-side data sanitization using trim() to remove unwanted whitespace</li>
                <li class="ce-secondary-text">Validates required fields (name, email, phone, message)</li>
                <li class="ce-secondary-text">Performs email format validation using PHP's built-in filter_var()</li>
                <li class="ce-secondary-text">Uses PDO for secure database interactions with prepared statements to prevent SQL injection</li>
                <li class="ce-secondary-text">Processes form submissions via POST request method</li>
                <li class="ce-secondary-text">Handles optional fields (company name, marketing preferences)</li>
                <li class="ce-secondary-text">Implements error handling with try/catch blocks</li>
                <li class="ce-secondary-text">Returns JSON responses for frontend integration</li>
                <li class="ce-secondary-text">Logs errors server-side while maintaining user privacy</li>
                <li class="ce-secondary-text">Uses parameterized queries for secure database operations</li>
              </ul>
              <p class="ce-main-text">
                The script serves as a secure bridge between a frontend contact form and a database, 
                ensuring data validation and safe storage of user submissions.
              </p>
            </div>
            <div class="code-example-content">
              <div class="ce-image-container">
                <img src="../images/mixin_example.png" class="code-example-pic" onclick="showLargeImage(this.src)" alt="Mixin code Example">
                <div class="CE-click-tag">click to zoom</div>
              </div>
              <h3>Mixin example for netmatters homepage</h3>
              <p>
                This code example shows the use of mixins in my Netmatters homepage code and how it can be used to
                reduce code repition  
              </p>
            </div>
            <!--container initally set to not display, js gives it the image clicked on and then displays on click as large image/zoomed in-->
            <!--this onClick hides the image when clicked again-->
            <div id="largeImageContainer" class="large-image-container" onclick="this.style.display='none'">
              <img id="largeImage" src="" alt="Large Image">
            </div>
        </div>
      </div>
    </header>
  

    <?php include_once '../includes/footer.php'; ?>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="./js/particles.min.js"></script>
    <script src="../js/main.js"></script>
  </body>

</html>