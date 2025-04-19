<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Swastha Kendra - Dental Services</title>
    <link rel="icon" href="Images/Logo.png" type="image/x-icon">
    <script src="Landing_Page.js" defer></script>
    <link rel="stylesheet" href="Pediatric.css">
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
    

    <section class="child-healthcare">
        <div class="content">
            <h2>Why Dental Health is Important?</h2>
            <p>
                Maintaining good oral hygiene is essential for overall health. Regular dental visits help detect potential problems early and prevent long-term oral health issues. Good dental habits not only keep your teeth and gums healthy but also contribute to your overall well-being.
            </p>
            <h3>Routine dental check-ups provide:</h3>
            <br>
            <ul>
                <li><strong>Early detection of dental issues:</strong> Identify cavities, gum disease, and other oral health concerns before they become severe.</li>
                <li><strong>Teeth cleaning:</strong> Prevent plaque build-up and reduce the risk of tooth decay and gum disease.</li>
                <li><strong>Personalized oral care advice:</strong> Receive tips on brushing, flossing, and other habits for better dental hygiene.</li>
                <li><strong>Preventive treatments:</strong> Such as fluoride treatments and dental sealants to protect your teeth from cavities.</li>
            </ul>
        </div>
        
        <img src="Images\Dental1.jpg" alt="Dentist with patient" class="child-image">
    </section>
    

    <!-- Hero Section (Matching Structure) -->
    <section class="hero">
        <div class="hero-content">
            <h1>Dental Services</h1>
            <p>From routine cleanings to cosmetic procedures, we provide a wide range of dental services to help you maintain a healthy, beautiful smile.</p>
            <p>Whether you're in need of a check-up, teeth whitening, or orthodontic treatment, our dedicated team is here to provide you with personalized care.</p>
            <p>At Hamro Swastha Kendra, your dental health is our priority. We aim to deliver the best care with cutting-edge technology and expert professionals.</p>
        </div>
        <img src="Images/dentistconsultingpatient.jpg" alt="Dentist consulting a patient" class="hero-image">
    </section>

    <!-- What We Offer Section (Matching Structure) -->
    <section class="services">
        <h2>What We Offer</h2>
        <div class="service-cards">
            <div class="card">
                <img src="Images/routinedental.jpg" alt="Routine Dental Checkup">
                <h3>Routine Dental Checkups</h3>
                <p>Regular visits to prevent dental problems and maintain healthy teeth and gums.</p>
            </div>
            <div class="card">
                <img src="Images/teeth.jpg" alt="Cosmetic Dentistry">
                <h3>Cosmetic Dentistry</h3>
                <p>Teeth whitening, veneers, and smile makeovers to enhance your appearance.</p>
            </div>
            <div class="card">
                <img src="Images/cosmeticdentist.jpg" alt="Orthodontics">
                <h3>Orthodontics</h3>
                <p>Braces and Invisalign to straighten teeth and improve bite.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section (Matching Structure) -->
    <section class="why-choose">
        <h2>Why Choose Our Dental Services?</h2>
        <ul>
            <li>Comprehensive care from experienced and caring professionals.</li>
            <li>Personalized treatment plans tailored to your unique needs.</li>
            <li>Comfortable and welcoming environment for all patients.</li>
            <li>State-of-the-art technology for accurate diagnosis and treatments.</li>
        </ul>
        <a href="BookAnAppointment.html" class="appointment-btn">Book an Appointment</a>
    </section>

    </div>
    </div>

    <!-- Footer (Same as Pediatrician) -->
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
