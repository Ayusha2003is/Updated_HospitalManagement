
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Swastha Kendra</title>
    <link rel="icon" href="Images/Logo.png" type="image/x-icon">
    <script src="Learn-more.js" defer></script>
    <link rel="stylesheet" href="learn-more.css">
    
</head>
<body>
    <div class="container">
        <div id="navig">
            <a href="Landing_Page.html">
                <img src="Images/Logo(nav).png" alt="Logo Of Hospital">
            </a>
    
            <div id="nav-item">
               <ul>
                    <li><a href="Landing_Page.php">About Us</a></li>
                    <li><a href="ConsultUs.php">Know Your Doctors</a></li>
                    <li><a href="BookAnAppointment.php">Book an Appointment</a></li>
                    <li><a href="HealthPackages.php">Health Packages</a></li>
                </ul>
            </div>
    
            <div class="search-container">
                <input type="text" placeholder="Search..." class="search-bar" aria-label="Search">
                <a href="#SEARCH" class="button" aria-label="Search button">Search</a>
                <a href="Login.php" class="button" aria-label="Login page">Login</a>
            </div>
        </div>

            <div class="slideshow-container">
                
              <div id ="Heading">
                <h1>Get to Know Us Better</h1></div>
                <div class="mySlides fade">
                    <img src="Images/group1.jpg" style="width:100%">
                </div>
              
                <div class="mySlides fade">
                    <img src="Images/group2.jpg" style="width:100%">
                </div>
              
                <div class="mySlides fade">
                    <img src="Images/group3.jpg" style="width:100%">
                </div>
            
                <div class="mySlides fade">
                    <img src="Images/group4.jpg" style="width:100%">
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>

            <div class="content">
                <div class="info">
                    <h2>🩺 Get to Know Us Better</h2>
                    <p>At Hamro Swastha Kendra, we believe that quality healthcare should be accessible, compassionate, and tailored to you. Our journey is built on a foundation of patient-first values, ensuring that every step of your health journey is smooth, transparent, and convenient.</p>
            
                    <h3>🔹 Who We Are:</h3>
                    <p>A dedicated team of experienced medical professionals, technology experts, and compassionate staff committed to making healthcare simpler and more personal.</p>
            
                    <h3>🔹 What Drives Us:</h3>
                    <p>Your well-being is our top priority. We strive to offer affordable, patient-centered care that goes beyond just treatment—focusing on prevention, wellness, and personalized solutions.</p>
            
                    <h3>🔹 Why Choose Hamro Swastha Kendra?</h3>
                    <ul>
                        <li> Compassionate care delivered by trusted experts</li>
                        <li> Seamless digital solutions for appointments, prescriptions, and payments</li>
                        <li> Comprehensive services designed to fit your lifestyle</li>
                        <li> Transparent processes with no hidden surprises</li>
                    </ul>
            
                    <p>Join us on a journey where healthcare meets convenience, empathy, and innovation. Together, let’s make your health a priority—because at Hamro Swastha Kendra, you’re more than just a patient, you’re family. </p>
                </div>
            </div>
            
            
</body>


<footer>
    <div id="hospital_logo">
        <a href="Landing_Page.html">
            <img src="Images/Logo.png" alt="Hospital Logo">
        </a>
        <p>Paknajol, Thamel, Nepal</p>
        <p><strong>Email:</strong> HamroSwasthaKendra@gmail.com</p>
        <p><strong>Phone:</strong> +98888888888888</p>
        <p><strong>Fax:</strong> +99999999999</p>
        <p><strong>Helicopter & Air Ambulance:</strong> +977-9801285000</p>
    
        <div class="social-media">
            <p style="color:#2582A1;">Follow Us</p>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">LinkedIn</a></li>
            </ul>
        </div>
    </div>
    
    <div class="footer-links">
        <div class="column">
            <p class="heading">Overview</p>
            <ul>
                <li>Medical Technology</li>
                <li>Specialties</li>
                <li>Team</li>
                <li>Quality & Safety</li>
                <li>Testimonials</li>
            </ul>
        </div>
        <div class="column">
            <p class="heading">Resources</p>
            <ul>
                <li>Health Professionals</li>
                <li>International Students</li>
                <li>Nursing Journal</li>
                <li>COVID-19 Resources</li>
                <li>Downloads</li>
            </ul>
        </div>
        <div class="column">
            <p class="heading">Patient Info</p>
            <ul>
                <li>Visitor Information</li>
                <li>Health Info</li>
            </ul>
        </div>
    </div>

    <div class="newsletter">
        <form>
            <label for="email" style=" color:#2582A1; font:bolder;">Subscribe to Our Newsletter:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
        </form>
    </div>

    <div class="privacy">
        <ul>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/terms-of-use">Terms of Use</a></li>
        </ul>
    </div>
</footer>
</html>
