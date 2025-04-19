<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Swastha Kendra - Health Packages</title>
    <link rel="icon" href="Images/Logo.png" type="image/x-icon">
    <script src="Landing_Page.js" defer></script>
    <link rel="stylesheet" href="HealthPackages.css">
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

        <section id="health-packages" class="content">
            <h1 >Our Health Packages</h1>
            <p >At Hamro Swastha Kendra, we offer comprehensive health packages to meet the unique needs of individuals and families. Each package is tailored to ensure optimal health and early detection of potential health concerns.</p>
        
            <div class="packages-container">
                <div class="package-card">
                    <img src="Images\basic_health_checkup.jpg" alt="Basic Health Checkup">
                    <div class="package-info">
                        <h2>Basic Health Checkup</h2>
                        <p>This package includes essential tests such as blood pressure, blood sugar, cholesterol levels, and general physician consultation to assess your overall health condition.</p>
                        <p><strong>Price:</strong> Rs. 2,000</p>
                        <button class="button" onclick="window.location.href='BookAnAppointment.html'">Book Now</button>
                    </div>
                </div>
        
                <div class="package-card">
                    <img src="Images\illnesscare.jpg" alt="Comprehensive Health Checkup">
                    <div class="package-info">
                        <h2>Comprehensive Health Checkup</h2>
                        <p>In addition to the Basic Health Checkup, this package includes liver function tests, kidney function tests, chest X-ray, and an ECG to provide a thorough assessment of your internal health.</p>
                        <p><strong>Price:</strong> Rs. 5,000</p>
                        <button class="button" onclick="window.location.href='BookAnAppointment.html'">Book Now</button>
                    </div>
                </div>
        
                <div class="package-card">
                    <img src="Images\familycheckup.jpg" alt="Family Health Package">
                    <div class="package-info">
                        <h2>Family Health Package</h2>
                        <p>Designed for the entire family, this package includes preventive health checks for adults and pediatric checkups for children, ensuring the health of all family members.</p>
                        <p><strong>Price:</strong> Rs. 10,000</p>
                        <button class="button" onclick="window.location.href='BookAnAppointment.html'">Book Now</button>
                    </div>
                </div>
        
                <div class="package-card">
                    <img src="Images\doctorTreating.jpg" alt="Senior Citizen Health Package">
                    <div class="package-info">
                        <h2>Senior Citizen Health Package</h2>
                        <p>Specially crafted for senior citizens, this package includes bone density scans, eye checkups, and cardiac health evaluations to maintain a high quality of life for the elderly.</p>
                        <p><strong>Price:</strong> Rs. 3,500</p>
                        <button class="button" onclick="window.location.href='BookAnAppointment.html'">Book Now</button>
                    </div>
                </div>

                <div class="package-card">
                    <img src="Images\familycheckup.jpg" alt="Women's Wellness Package">
                    <div class="package-info">
                        <h2>Women's Wellness Package</h2>
                        <p>Designed for women’s health, this package includes gynecological consultation, breast cancer screening, bone density tests, and hormone level checks.</p>
                        <p><strong>Price:</strong> Rs. 4,500</p>
                        <button class="button" onclick="window.location.href='BookAnAppointment.html'">Book Now</button>
                    </div>
                </div>
                
                <div class="package-card">
                    <img src="Images\diabeties.jpg" alt="Diabetes Care Package">
                    <div class="package-info">
                        <h2>Diabetes Care Package</h2>
                        <p>Specifically for diabetic patients, this package includes HbA1c tests, kidney function tests, retina checkups, and a diet consultation for better diabetes management.</p>
                        <p><strong>Price:</strong> Rs. 3,200</p>
                        <button class="button" onclick="window.location.href='BookAnAppointment.html'">Book Now</button>
                    </div>
                </div>
                
            </div>

        </section>
        

       
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
