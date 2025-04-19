<?php
session_start();
include("connect.php"); // Database connection

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Swastha Kendra - About Us</title>
    <link rel="icon" href="Images/Logo.png" type="image/x-icon">
    <script src="Landing_Page.js" defer></script>
    <link rel="stylesheet" href="Landing_Page.css">
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
            <input type="text" placeholder="Search..." class="search-bar">
            <a href="#SEARCH" class="button">Search</a>
            <a href="Login.php" class="button">Login</a>
        </div>
    
    </div>
    
    <div class="content">
        <div class="text-content">
            <h1>Welcome to Hamro Swastha Kendra</h1>
            <p>
                Experience healthcare like never before! Book appointments with ease, explore a variety of healthcare services, 
                and choose from exclusive packages tailored to your needs. Store your medical history online securely for instant access 
                anytime, meet your doctors beforehand to build trust, and enjoy 24/7 ambulance services for emergencies. 
                With features like prescription management, health tips, and seamless access to wellness tools, 
                we bring your health journey right to your fingertips—convenient, personalized, and stress-free!
            </p>
            <button onclick="location.href='learn-more.html'">Learn More</button>
        </div>
    
        <div id="bgimage">
            <img src="Images/HEALTHWORKER.jpg" alt="Healthcare Workers">
        </div>
    </div>

    <h1 id="Our_Services">OUR SERVICES</h1>
    <img src="Images/left-arrow.png" id="Backbtn">
        <div class="Specials">
           
            <a href="Pediatric.php">
                <img src="Images/pediatric.jpg" alt="Pediatric" class="service-image">
                <button class="service-description">Pediatric Checkups</button>
            </a>
            <a href="GeneralHealth.php">
                <img src="Images/GC.png" alt="General Health" class="service-image">
                <button class="service-description">General Health Checkups</button>
            </a>
            <a href="DentalCare.php">
                <img src="Images/Dental.png" alt="Dental Care" class="service-image">
                <button class="service-description">Dental Care</button>
            </a>
            <a href="Cardiology.php">
                <img src="Images/cardio.jpg" alt="Cardiology" class="service-image">
                <button class="service-description">Cardiology Services</button>
            </a>
            <a href="ENT.php">
                <img src="Images/ent.jpg" alt="ENT" class="service-image">
                <button class="service-description">ENT Services</button>
            </a>
            <a href="Dermatology.php">
                <img src="Images/dermatology.jpg" alt="Dermatology" class="service-image">
                <button class="service-description">Dermatology Care</button>
            </a>
            <a href="Gynecology.php">
                <img src="Images/gynecology.jpg" alt="Gynecology" class="service-image">
                <button class="service-description">Gynecology Services</button>
            </a>
            <a href="Pulmonology.php">
                <img src="Images/pulmonology.avif" alt="Pulmonology" class="service-image">
                <button class="service-description">Pulmonology</button>
            </a>
            
    </div>
    <img src="Images/right-arrow.png" id="Frontbtn">
    
    <div class="why-jeevita">
        <div class="text-content">
            <h1>WHY US?</h1>
            <p>
                We stand out by delivering compassionate, patient-centered care through our team of experienced medical professionals and state-of-the-art facilities. Our commitment to comprehensive healthcare ensures personalized treatment plans, preventive care, and advanced solutions tailored to your unique needs. With a focus on affordability, transparency, and convenience, Hamro Swastha Kendra combines expertise with empathy, making your health and well-being our top priority.
            </p>
        </div>
        <div class="image-content">
            <img src="Images/doctorTreating.jpg" alt="Doctor Treating">
        </div>
    </div>
    <div class="healthcare-section">
        <div class="healthcare-content">
            <h1>Your Healthcare, Simplified</h1>
            <hr>
            <ul>
                <li><strong>Quick Appointments:</strong> Book your slot in minutes—saving you time and effort.</li>
                <li><strong>Doctor Availability at Your Fingertips:</strong> Browse and select from a wide range of expert doctors based on your requirements.</li>
                <li><strong>Streamlined Payments:</strong> Secure, fast, and convenient payment options to make the process stress-free.</li>
                <li><strong>Personalized Experience:</strong> Tailored services to fit your healthcare needs effortlessly.</li>
                <li><strong>All-in-One Solution:</strong> From finding a doctor to post-consultation care, everything is designed for your convenience.</li>
            </ul>
        </div>
        <div class="healthcare-image">
            <img src="Images/Enquiry.jpg" alt="Healthcare Simplified">
        </div>
    </div>
    </div>
    <script src ="Landing_Page.js"></script>
</body>
<footer>
    <div id="hospital_logo">
        <a href="landing_Page.php">
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
