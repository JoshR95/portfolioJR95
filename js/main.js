///////////////////////////////////////////////////////////////////////////////////////////////////////
/// SETTING IS-ACTIVE FOR THE HAMBURGER AND DROPDOWN
///////////////////////////////////////////////////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function() {
    // this code is adding .hamburger to menu_btn
    const menu_btn = document.querySelector('.hamburger');
    const menu = document.querySelector('.links-container');
    // then im listening for a click on menu_btn(.hamburger) and changing its class with classList that can be toggled and adding is-acive
    // this is so when the hamburger is clicked it forms a J
    if (menu_btn && menu) {
        menu_btn.addEventListener('click', function () {
            menu_btn.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    /// TYPEWRITER EFFECT FOR H1
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    // this gets the element and it assigns it a variable
    const typewriter = document.getElementById('typewriter');
    if (typewriter) {
        const text = typewriter.textContent; // this returns all the text inside the element typewriter and assigns it
        const speed = 200; // how fast it types
        let i = 0; // empty variable to be counted on

        typewriter.textContent = ''; // This clears the initial text

        function typeWriter() {
            if (i < text.length) { // here were checking if the words is done yet
                typewriter.textContent += text.charAt(i); // here we add the current letter were on to typewriters (h1) content
                i++; // this increments the counter and moves us to the next character in typewriter
                setTimeout(typeWriter, speed); // this sets the timer to each letter being added
            }
        }

        typeWriter(); // this calls the function to make the text appear on load
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    /// FORM 
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        const fname = document.getElementById('fname');
        const lname = document.getElementById('lname');
        const email = document.getElementById('email');
        const phoneNumber = document.getElementById('phoneNumber');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');
        const contactSubmitBox = document.getElementById('contact-submit-box');

        // setting a success message
        const setSuccess = element => {
            // this returns the wrapper div <div class="input-control">
            const inputControl = element.parentElement;
            // this finds the error class inside the input control div where the error will be displayed
            const errorDisplay = inputControl.querySelector('.error');

            // this resets the text
            errorDisplay.innerText = '';
            // this adds .success to the container div so it can be styled with css to green to show its good
            inputControl.classList.add('success');
            inputControl.classList.remove('error');
        }

        // setting an error message
        // this is taking two parameters which we set below in validate inputs - setError(fname, 'please add a first name');
        const setError = (element, message) => {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            // instead of wiping the inner text like success it adds the message parameter we set below - 'please add a first name' etc...
            errorDisplay.innerText = message;
            // also adds error class for css styling and removes the success class
            inputControl.classList.add('error');
            inputControl.classList.remove('success');
        }

        // this checks if the email is valid
        const isValidEmail = email => {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        // Add this function for UK phone number validation
        const isValidUKPhoneNumber = phoneNumber => {
            // Remove all non-digit characters
            const cleanedNumber = phoneNumber.replace(/\D/g, '');
            
            // Regex for various UK phone number formats
            const ukPhoneRegex = /^(?:(?:(?:00|\+)44|0)(?:1[0-9]{8,9}|[23]\d{9}|7(?:[1345789]\d{8}|624\d{6})))$/;
            
            return ukPhoneRegex.test(cleanedNumber);
        }

        const validateInputs = () => {
            let isValid = true;  // Add this flag to track validation status

            // this block gets the values of all input fields, trim() removes any white space
            const fnameValue = fname.value.trim();
            const lnameValue = lname.value.trim();
            const emailValue = email.value.trim();
            const phoneNumberValue = phoneNumber.value.trim();
            const subjectValue = subject.value.trim();
            const messageValue = message.value.trim();

            // first name 
            if(fnameValue === ''){
                setError(fname, 'please add a first name');
                isValid = false;
            } else {
                setSuccess(fname);
            }

            // last name
            if(lnameValue === ''){
                setError(lname, 'please add a last name');
                isValid = false;
            } else {
                setSuccess(lname);
            }

            // email
            if(emailValue === ''){
                setError(email, 'please add a email address');
                isValid = false;
            } else if (!isValidEmail(emailValue)) {
                setError(email, 'please provide a valid email address');
                isValid = false;
            } else {
                setSuccess(email);
            }

            // phone number
            if(phoneNumberValue === ''){
                setError(phoneNumber, 'please add a valid phone number');
                isValid = false;
            } else if (!isValidUKPhoneNumber(phoneNumberValue)) {
                setError(phoneNumber, 'Please provide a valid UK phone number');
                isValid = false;
            } else {
                setSuccess(phoneNumber);
            }

            // subject 
            if(subjectValue === ''){
                setError(subject, 'please add a subject');
                isValid = false;
            } else {
                setSuccess(subject);
            }

            // message
            if(messageValue === ''){
                setError(message, 'please add a message');
                isValid = false;
            } else {
                setSuccess(message);
            }

            return isValid;  // Return whether all validations passed
        };

        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        /// FORM SUBMISSION
        ///////////////////////////////////////////////////////////////////////////////////////////////////////

        // Helper function to show messages
        function showFormMessage(message, isSuccess = true) {
            //assings the form message box in the html to formMessageBox
            const formMessageBox = document.getElementById('form-message-box');
            if (formMessageBox) {
                // here we set the content to the result from the code below, i.e showFormMessage(content)... gtes passed to the functions argument above
                formMessageBox.textContent = message;
                formMessageBox.style.display = 'block';
                // removes any previous styling
                formMessageBox.classList.remove('success-message', 'error-message');
                // adds either the success or error class to the formMessageBox, uses ternary operator which is short hand if else, if isSuccess use 'success-message'
                formMessageBox.classList.add(isSuccess ? 'success-message' : 'error-message');
                // removes the message box after 3 seconds 
                setTimeout(() => {
                    formMessageBox.style.display = 'none';
                }, 3000);
            }
        }
        // listens for submit button press and stops form from doing a reload page
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // calls validation checks and only continues if all are true
            if (validateInputs()) {
                // creates a formData object from the form to send to php
                const formData = new FormData(contactForm);
                
                // AJAX REQUEST 
                try {
                    // sends the form data to process_form using fetch
                    const response = await fetch('process_form.php', {
                        method: 'POST',
                        body: formData
                    });

                    // assigns response text from process_form
                    const text = await response.text();
                    // ** Uncomment the next line to debug raw server responses **
                    // console.log('Raw response:', text);
                    let result;

                    // trys to parse to JSON, throws a specific JSON error if it fails
                    try {
                        result = JSON.parse(text);
                    } catch (e) {
                        showFormMessage('Invalid JSON returned from server!', false);
                        return;
                    }
                    // if successful it gives the showFormMessage its string argument and true boolean to display success message
                    if (result.success) {
                        showFormMessage('Form submitted successfully!', true);
                        contactForm.reset();
                    // does the same for fail but for fail message
                    } else {
                        showFormMessage(result.message || 'Something went wrong', false);
                    }
                // throws another type of fail if the process_form fails
                } catch (error) {
                    console.error('Error:', error);
                    showFormMessage('Something went wrong. Could not process form.', false);
                }
            }
        });
    }

    ////////////////////////////////////////////////////////////////////////////////////
    /// PARTICLES.JS CONFIGURATION
    ////////////////////////////////////////////////////////////////////////////////////

    if (document.getElementById('particles-js')) {
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: '#ffffff'
                },
                opacity: {
                    value: 0.5
                },
                size: {
                    value: 3
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#ffffff',
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse'
                    }
                }
            }
        });
    }

    ////////////////////////////////////////////////////////////////////////////////
    /// SLICK CAROUSEL CONFIG
    ////////////////////////////////////////////////////////////////////////////////

    // Check if jQuery and Slick are loaded before initializing
    if (typeof jQuery !== 'undefined' && typeof $.fn.slick !== 'undefined') {
        $('.carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: true
                    }
                }
            ]
        });
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    /// PROJECT DETAILS MODAL
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    // Project data object containing details for each project
    const projectDetails = {
        'netmatters': {
            title: 'NETMATTERS HOMEPAGE',
            description: 'This project recreates Netmatters homepage using HTML, CSS, SASS, javaScript and PHP. The project makes use of javaScript to add dynamic animations on the page such as the pop out sidemenu. This project also uses PHP to make use of include partials for things such as the header, footer and nav. I have also implemented a dynamic news section where content is pulled from a MySQL database and rendered using PHP, allowing for easy content management and updates.',
            technologies: 'HTML5, CSS3, SASS, JavaScript, PHP, MySQL',
            features: [
                'Responsive design that works on all devices',
                'Dynamic news section with database integration',
                'Interactive side menu with smooth animations',
                'PHP includes for modular code structure',
                'Form validation and error handling'
            ]
        },
        'random-picture': {
            title: 'RANDOM PICTURE GENERATOR',
            description: 'This project creates a random image generator and adds to collections. It uses HTML, CSS, SASS AND JS. The project makes use of an API to receive the random images. It uses JS to add these images to a collection stored in local storage, it then displays the collection for the associated email address. I also have email validation using regex validation.',
            technologies: 'HTML5, CSS3, SASS, JavaScript',
            features: [
                'Integration with external image API',
                'Local storage for saving collections',
                'Email validation using regex',
                'Responsive design',
                'User-friendly interface'
            ]
        },
        'admin-system': {
            title: 'ADMIN MANAGEMENT SYSTEM',
            description: 'This project is an admin management system that enables companies to manage their organizational structure and employee information through a secure, user-friendly interface. It uses Laravel, PHP, HTML and CSS. It handles user authentication with a secure log in. It allows maintenance of a database of company records with full CRUD operations. It uses a SQLite database for efficient data storage and retrieval. It Implements Blade for dynamic content rendering. It also Utilizes Tailwind CSS for modern, responsive styling.',
            technologies: 'Laravel, PHP, HTML5, CSS3, JavaScript, SQLite',
            features: [
                'Secure user authentication system',
                'Full CRUD operations for company records',
                'Responsive design with Tailwind CSS',
                'Dynamic content rendering with Blade',
                'Database integration with SQLite'
            ]
        }
    };

    // Get modal elements
    const modal = document.getElementById('projectDetailsModal');
    const closeBtn = document.querySelector('.close-modal');

    // Make openProjectDetails function globally available
    window.openProjectDetails = function(projectId) {
        console.log('Opening project details for:', projectId); // Debug log
        const project = projectDetails[projectId];
        if (!project) {
            console.error('Project not found:', projectId); // Debug log
            return;
        }

        // Set modal content
        document.getElementById('modalProjectTitle').textContent = project.title;
        document.getElementById('modalProjectDescription').textContent = project.description;
        document.getElementById('modalProjectTechnologies').textContent = project.technologies;
        
        // Clear and populate features list
        const featuresList = document.getElementById('modalProjectFeatures');
        featuresList.innerHTML = '';
        project.features.forEach(feature => {
            const li = document.createElement('li');
            li.textContent = feature;
            featuresList.appendChild(li);
        });

        // Show modal
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    };

    // Function to close modal
    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Re-enable background scrolling
    }

    // Event listeners
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal && modal.style.display === 'block') {
            closeModal();
        }
    });
});

//////////////////////////////////////////////////////////////////////////
/// CODE EXAMPLES ENLARGE IMAGE
/////////////////////////////////////////////////////////////////////////

//  WE LEAVE THIS OUT OF THE DOM CONTENT LOADED SO IT CAN BE GLOBALLY ACCESSED

// This selects the element with the id of largeImage, then accesses its attributes and sets its src as the src of the image clicked
// we set this in the html to pass the clicked img's src as the parameter here.
function showLargeImage(src) {
    $('#largeImage').attr('src', src);
    // here we are accessing the element with the id of largeImageContainer and settings its display to flex so its no longer hidden
    $('#largeImageContainer').css('display', 'flex');
    // we dont need to worry about hiding it as this is done inside the html
}