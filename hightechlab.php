<?php
session_start();
@include 'connect.php';

// Check if admin is NOT logged in
if (!isset( $_SESSION['user_name'])) {
    header('Location: signin.php');
    exit();
}


// Get user's full name from the database
$username = $_SESSION['user_name'];
$query = "SELECT fullName FROM hightech WHERE username = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

// Generate initials from full name
function getInitials($fullName) {
    $words = explode(" ", $fullName);
    $initials = "";
    foreach ($words as $word) {
        $initials .= strtoupper(substr($word, 0, 1));
    }
    return $initials;
}

$userInitials = isset($user['fullName']) ? getInitials($user['fullName']) : '';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTech skilLab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="htql.css">
</head>
<body>
    <header class="header">
      <img src="skill2.png" alt="">
        <div class="hamburger">&#9776;</div>
        <div class="header-title">iTech SkilLab / <span id="current-page">Home</span></div>
        <nav class="header-nav">
        <a href ="dashboard.php"><div class="user-initials"><?php echo htmlspecialchars($userInitials); ?></div></a>
            <div class="user-profile">
                <div class="user-greeting">
                  <span><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                    <i class="fas fa-chevron-down dropdown-arrow"></i>
                </div>
                <div class="user-dropdown-content">
                    <a href="dashboard.php"><i class="fas fa-user-circle"></i> My Dashboard</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="#"><i class="fas fa-folder"></i> My Projects</a>
                    <a href="#"><i class="fas fa-history"></i> Activity Log</a>
                    <a href="logout.php"><i class="fas fa-power-off"></i> Logout</a>
                </div>
            </div>
            <i class="fas fa-envelope"></i>
            <i class="fas fa-bell"></i>
        </nav>
        <div class="userR">
        <a href ="dashboard.php"><div class="user-initials"><?php echo htmlspecialchars($userInitials); ?></div></a>
        </div>
        <div class="three-dot-menu">&#8942;</div>
        <div class="mobile-dropdown">
            <a href="#"><i class="fas fa-envelope"></i> Messages</a>
            <a href="#"><i class="fas fa-bell"></i> Notifications</a>
            <a href="dashboard.php"><i class="fas fa-user-circle"></i> Dashboard</a>
            <hr>
            <a href="#"><i class="fas fa-power-off"></i> Logout</a>

        </div>
    </header>

    <nav class="sidenav">
        <div class="nav-item" data-section="home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </div>
        <div class="nav-item" data-section="programs">
            <i class="fas fa-project-diagram"></i>
            <span>Programs</span>
        </div>
        <div class="nav-item" data-section="solutions">
            <i class="fas fa-lightbulb"></i>
            <span>Solutions</span>
        </div>
        <div class="nav-item" data-section="courses">
            <i class="fas fa-graduation-cap"></i>
            <span>Courses</span>
        </div>
        <div class="nav-item" data-section="my-lab">
            <i class="fas fa-flask"></i>
            <span>My Lab</span>
        </div>
        <div class="nav-item" data-section="organizations">
            <i class="fas fa-building"></i>
            <span>Organizations</span>
        </div>
        <div class="nav-item" data-section="resources">
            <i class="fas fa-toolbox"></i>
            <span>HighTech Resources</span>
        </div>
    </nav>

   
    <main class="main-content">
         <section id="home" class="section active">
            <div style="margin: 0; padding: 0; box-sizing: border-box;">
                <div class="hero-container">
                <div class="hero-left">
                    <h1 class="welcome-text">Welcome <span class="highlight"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span></h1>
                    <p class="tagline">Easy Learning</p>
                    <p class="subtitle">Transform your future through innovative tech education</p>
                    
                    <div class="quick-links">
                    <a href="#videos" class="link-item">View your videos</a>
                    <span class="link-separator">|</span>
                    <a href="#certifications" class="link-item">Certifications</a>
                    <span class="link-separator">|</span>
                    <a href="#tutorials" class="link-item">Tutorials</a>
                    </div>
                </div>
                
                <div class="hero-right">
                    <div class="image-container">
                    <img src="hero1.png" alt="Tech Innovation" class="hero-image">
                    </div>
                </div>
                </div>
            
                <div class="container">
                <div class="stats-bar">
                    <div class="stat-item">
                        <div class="stat-content">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Expert Mentors</span>
                        </div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-content">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Success Stories</span>
                        </div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-content">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Lab Access</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-microscope fa-2x"></i>
                    </div>
                    <h3>Cutting-Edge Research Lab</h3>
                    <p>Access state-of-the-art equipment and facilities for breakthrough research in AI, quantum computing, and more.</p>
                    <ul class="feature-highlights">
                        <li><i class="fas fa-check"></i> Advanced AI Computing Clusters</li>
                        <li><i class="fas fa-check"></i> Quantum Simulation Tools</li>
                        <li><i class="fas fa-check"></i> Real-time Data Analytics</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher fa-2x"></i>
                    </div>
                    <h3>Industry-Led Learning</h3>
                    <p>Learn directly from tech giants and industry veterans through our specialized mentorship programs.</p>
                    <ul class="feature-highlights">
                        <li><i class="fas fa-check"></i> 1-on-1 Expert Mentoring</li>
                        <li><i class="fas fa-check"></i> Live Industry Projects</li>
                        <li><i class="fas fa-check"></i> Career Guidance</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h3>Innovation Hub</h3>
                    <p>Join a vibrant community of tech enthusiasts, entrepreneurs, and innovators shaping the future.</p>
                    <ul class="feature-highlights">
                        <li><i class="fas fa-check"></i> Networking Events</li>
                        <li><i class="fas fa-check"></i> Hackathons</li>
                        <li><i class="fas fa-check"></i> Tech Meetups</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket fa-2x"></i>
                    </div>
                    <h3>Startup Accelerator</h3>
                    <p>Transform your innovative ideas into successful tech startups with our comprehensive support system.</p>
                    <ul class="feature-highlights">
                        <li><i class="fas fa-check"></i> Funding Opportunities</li>
                        <li><i class="fas fa-check"></i> Business Mentoring</li>
                        <li><i class="fas fa-check"></i> Market Access</li>
                    </ul>
                </div>
            </div>

            <div class="upcoming-events">
                <h2>Upcoming at HighTech Lab</h2>
                <div class="event-cards">
                    <div class="event-card">
                        <div class="event-date">
                            <span class="day">15</span>
                            <span class="month">NOV</span>
                        </div>
                        <div class="event-details">
                            <h4>AI Innovation Summit</h4>
                            <p>Join leading AI researchers and practitioners for a day of insights and networking.</p>
                            <a href="#" class="event-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="event-card">
                        <div class="event-date">
                            <span class="day">22</span>
                            <span class="month">NOV</span>
                        </div>
                        <div class="event-details">
                            <h4>Blockchain Hackathon</h4>
                            <p>48 hours of coding, innovation, and prizes worth $10,000.</p>
                            <a href="#" class="event-link">Register Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="success-stories">
                <h2>Success Stories</h2>
                <div class="stories-carousel">
                    <div class="story-card">
                        <img src="/api/placeholder/80/80" alt="Sarah Chen" class="story-image">
                        <blockquote>"HighTech Lab transformed my career. Their AI program helped me land my dream job at Google."</blockquote>
                        <cite>- Sarah Chen, AI Engineer at Google</cite>
                    </div>
                    <div class="story-card">
                        <img src="bp." alt="Mark Rodriguez" class="story-image">
                        <blockquote>"From idea to successful startup in 8 months. The mentorship and resources here are unmatched."</blockquote>
                        <cite>- Mark Rodriguez, Founder of TechFlow</cite>
                    </div>
                </div>
            </div>

            <div class="cta-section">
                <h2>Ready to Begin Your Tech Journey?</h2>
                <p>Join thousands of innovators who are shaping the future of technology.</p>
                <div class="cta-buttons">
                    <a href="#" class="primary-cta">Start Free Trial</a>
                    <a href="#" class="secondary-cta">Schedule a Tour</a>
                </div>
            </div>
        </section>

        <section id="programs" class="section">
            <h1>Empowering the Next Generation of Tech Leaders</h1>
            <p class="intro">Discover our wide array of cutting-edge technology programs designed to propel your career in various tech domains.</p>
            <div class="card-grid">
                <div class="card">
                    <img src="aiicon.png" alt="AI icon" >
                    <h3>AI Research Program</h3>
                    <p>Dive deep into artificial intelligence and machine learning, working on real-world projects.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="cyber2.png" alt="Cybersecurity icon" >
                    <h3>Cybersecurity Initiative</h3>
                    <p>Develop skills to protect digital assets and combat cyber threats in our state-of-the-art lab.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="iot.png" alt="IoT icon" >
                    <h3>IoT Innovation Lab</h3>
                    <p>Create and test cutting-edge Internet of Things solutions with industry-leading equipment.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="block.png" alt="Blockchain icon" >
                    <h3>Blockchain Technology</h3>
                    <p>Explore the potential of blockchain and develop decentralized applications.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="web.png" alt="Web Dev icon" >
                    <h3>Full-Stack Web Development</h3>
                    <p>Master both front-end and back-end technologies to build robust, scalable web applications.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="app.png" alt="Mobile Dev icon" >
                    <h3>Mobile App Development</h3>
                    <p>Learn to create innovative mobile applications for iOS and Android platforms.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="ux2.png" alt="Graphics icon" >
                    <h3>3D Graphics and Animation</h3>
                    <p>Develop skills in 3D modeling, rendering, and animation for games and visual effects.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="card">
                    <img src="data.png" alt="Data Science icon" >
                    <h3>Data Science and Analytics</h3>
                    <p>Harness the power of big data to derive insights and drive decision-making.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>
            <div class="cta-container">
                <a href="#" class="cta-button">Apply Now</a>
                <a href="#" class="secondary-cta">Download Program Catalog</a>
            </div>
        </section>

        <section id="solutions" class="section">
            <p>Discover innovative technological solutions to address modern challenges.</p>
            <div class="card-grid">
                <div class="card">
                    <i class="fas fa-robot"></i>
                    <h3>AI-Powered Analytics</h3>
                    <p>Harness the power of AI for data-driven insights.</p>
                </div>
                <div class="card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Advanced Cybersecurity</h3>
                    <p>Protect your digital assets with our security solutions.</p>
                </div>
                <div class="card">
                    <i class="fas fa-network-wired"></i>
                    <h3>IoT Ecosystem</h3>
                    <p>Connect and optimize your devices with our IoT platform.</p>
                </div>
            </div>
        </section>

        <section id="courses" class="section">
            <p class="courses-description">Unlock your potential with our diverse range of expert-led technology courses.</p>
            <div class="courses-grid">
                <div class="course-card">
                  <div class="course-image">
                    <img src="coding.png" alt="Introduction to Coding">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Introduction to Coding</h3>
                    <p class="course-description">Learn the fundamentals of programming and build your first simple applications.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="web2.png" alt="Web Development Basics">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Web Development Basics</h3>
                    <p class="course-description">Gain a solid foundation in HTML, CSS, and JavaScript to create responsive and interactive websites.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="data2.png" alt="Database Fundamentals">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Database Fundamentals</h3>
                    <p class="course-description">Understand the principles of database management and learn to design and query databases.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="machine.png" alt="Introduction to Machine Learning">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Introduction to Machine Learning</h3>
                    <p class="course-description">Dive into the world of machine learning and learn the fundamentals of algorithms that power intelligent systems.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="advance.png" alt="Advanced Web Development">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Advanced Web Development</h3>
                    <p class="course-description">Take your web development skills to the next level and master modern technologies and frameworks.</p>
                    <div class="course-branches">
                      <a href="#" class="course-branch">Front-End Development</a>
                      <a href="#" class="course-branch">Back-End Development</a>
                      <a href="#" class="course-branch">Full-Stack Development</a>
                    </div>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="cyber.png" alt="Cybersecurity Fundamentals">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Cybersecurity Fundamentals</h3>
                    <p class="course-description">Protect your digital assets by learning the essential concepts and best practices in cybersecurity.</p>
                    <div class="course-branches">
                      <a href="#" class="course-branch">Network Security</a>
                      <a href="#" class="course-branch">Ethical Hacking</a>
                      <a href="#" class="course-branch">Incident Response</a>
                    </div>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="python.png" alt="Data Science with Python">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Data Science with Python</h3>
                    <p class="course-description">Harness the power of Python to analyze, visualize, and extract insights from complex data sets.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="block.png" alt="Blockchain Development">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Blockchain Development</h3>
                    <p class="course-description">Unlock the potential of decentralized applications and learn the fundamentals of blockchain technology.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
                <div class="course-card">
                  <div class="course-image">
                    <img src="ai2.png" alt="Artificial Intelligence and Deep Learning">
                  </div>
                  <div class="course-content">
                    <h3 class="course-title">Artificial Intelligence and Deep Learning</h3>
                    <p class="course-description">Explore the cutting edge of AI and deep learning, and learn to build advanced neural networks.</p>
                    <a href="#" class="course-link">Enroll</a>
                  </div>
                </div>
              </div>
        </section>

        <section id="my-lab" class="section">
            <div class="lab-content not-logged-in">
                <div class="welcome-container">
                    <h1 class="welcome-heading">Welcome <span><?php echo htmlspecialchars($_SESSION['user_name']); ?>! </span>to Your Future Lab Space</span></h1>
                    <img src="https://lab.waziup.io/static/media/empty-bucket.6a7d1518daf1deda37fe5935bb9e8e31.svg" alt="Empty Bucket">
                    <p class="welcome-text">You currently have no resources in your lab.
                    <br> Sign up to start your personalized tech journey!</p>
                    <div class="cta-buttons">
                        <button class="cta-button signup-btn">
                            <span class="btn-icon">
                                <i class="fas fa-user-plus"></i>
                            </span>
                            <span class="btn-text">Sign Up</span>
                        </button>
                        <button class="cta-button resources-btn">
                            <span class="btn-icon">
                                <i class="fas fa-book-open"></i>
                            </span>
                            <span class="btn-text">Explore Resources</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="lab-content logged-in">
                <!-- ... (keep the existing my-lab content) ... -->
            </div>
        </section>

        <section id="organizations" class="section">
            <h1>Organizations</h1>
            <p>Explore partner organizations and collaboration opportunities.</p>
            <!-- Add more content for Organizations section -->
        </section>

        <section id="resources" class="section">
            <h1>HighTech Resources</h1>
            <p>Access a wealth of tech resources and learning materials.</p>
            <!-- Add more content for HighTech Resources section -->
        </section>
    </main>

   <script>
    document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.nav-item');
    const currentPage = document.getElementById('current-page');
    const hamburger = document.querySelector('.hamburger');
    const threeDotsMenu = document.querySelector('.three-dot-menu');
    const sidenav = document.querySelector('.sidenav');
    const headerNav = document.querySelector('.header-nav');
    const mobileDropdown = document.querySelector('.mobile-dropdown');
    const sections = document.querySelectorAll('.section');
    const content = document.querySelector('.content');

    navItems.forEach(item => {
        item.addEventListener('click', function() {
            const sectionName = this.querySelector('span').textContent;
            const sectionId = this.getAttribute('data-section');
            currentPage.textContent = sectionName;

            // Hide all sections and show the selected one
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');

            if (window.innerWidth <= 768) {
                sidenav.classList.remove('show');
            }
        });
    });

    hamburger.addEventListener('click', function() {
        sidenav.classList.toggle('show');

        if (window.innerWidth > 768) {
            content.classList.toggle('squeezed');
        }
    });

    threeDotsMenu.addEventListener('click', function() {
        mobileDropdown.style.display = mobileDropdown.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            sidenav.classList.remove('show');
            content.classList.remove('squeezed');
            mobileDropdown.style.display = 'none';
        } else {
            headerNav.style.display = 'none';
        }
    });
});

   </script>
   
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const userProfile = document.querySelector('.user-profile');
    
    userProfile.addEventListener('click', function(e) {
        this.classList.toggle('show-dropdown');
        e.stopPropagation();
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function() {
        userProfile.classList.remove('show-dropdown');
    });

    // Prevent dropdown from closing when clicking inside it
    const dropdownContent = document.querySelector('.user-dropdown-content');
    dropdownContent.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});
</script>
</body>
</html>