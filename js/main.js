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

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            if (validateInputs()) {
                const formData = new FormData(contactForm);
                
                try {
                    const response = await fetch('process_form.php', {
                        method: 'POST',
                        body: formData
                    });

                    const result = await response.json();
                    
                    if (result.success) {
                        alert('Form submitted successfully!');
                        contactForm.reset();
                    } else {
                        alert(result.message || 'Something went wrong');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
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