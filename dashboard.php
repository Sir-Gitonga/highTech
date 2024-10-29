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
    <title>iTech SkilLab Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="user-photo"><?php echo htmlspecialchars($userInitials); ?></div>
                <h3 class="user-name"><?php echo htmlspecialchars($_SESSION['user_fullname']); ?></h3>
                <p class="user-email"><?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                <button class="view-profile-btn">View Profile</button>
            </div>
            <nav class="sidebar-menu">
                <div class="menu-item active" data-section="dashboard">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </div>
                <div class="menu-item" data-section="courses">
                    <i class="fas fa-book"></i>
                    <span>Courses</span>
                </div>
                <div class="menu-item" data-section="schedule">
                    <i class="fas fa-calendar"></i>
                    <span>Schedule</span>
                </div>
                <div class="menu-item" data-section="progress">
                    <i class="fas fa-chart-line"></i>
                    <span>Progress</span>
                </div>
                <div class="menu-item" data-section="achievements">
                    <i class="fas fa-trophy"></i>
                    <span>Achievements</span>
                </div>
                <div class="menu-item" data-section="settings">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </div>
                <div class="menu-item" data-section="help">
                    <i class="fas fa-question-circle"></i>
                    <span>Help & Support</span>
                </div>
                <div class="menu-item" data-section="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </div>
            </nav>
        </aside>
        <main class="main-content">
            <header class="topbar">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <h2>iTech SkilLab</h2>
                <div class="search-bar">
                    <input type="text" placeholder="Search courses, tutorials...">
                </div>
                <div class="topbar-icons">
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-envelope"></i>
                    <span><i class="fas fa-user"></i></span>
                </div>
            </header>
            <div class="content">
                <div id="persistent-content">
                    <h1>Welcome back, <span><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>!</h1>
                    <div class="weekly-challenge">
                        <h2>Weekly Challenge: Build a React Component</h2>
                        <div class="challenge-details">
                            <p>Create a reusable button component with customizable styles</p>
                        </div>
                    </div>
                </div>
                
                <div id="section-content">
                    <!-- Dashboard Content -->
                    <div class="section-content" id="dashboard-content">
                        <div class="quick-stats">
                            <div class="stat-card1">
                                <h3>15</h3>
                                <p>Courses Completed</p>
                            </div>
                            <div class="stat-card2">
                                <h3>87%</h3>
                                <p>Average Score</p>
                            </div>
                            <div class="stat-card3">
                                <h3>250</h3>
                                <p>Coding Hours</p>
                            </div>
                            <div class="stat-card4">
                                <h3>5</h3>
                                <p>Active Projects</p>
                            </div>
                        </div>
                        <div class="dashboard-cards">
                            <div class="card">
                                <h2>Current Course</h2>
                                <p>Advanced Machine Learning</p>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 60%;"></div>
                                </div>
                                <p>Progress: 60%</p>
                            </div>
                            <div class="card">
                                <h2>Upcoming Deadlines</h2>
                                <ul>
                                    <li>Project submission: 3 days left</li>
                                    <li>Quiz on Neural Networks: 5 days left</li>
                                    <li>Peer Review: 1 week left</li>
                                </ul>
                            </div>
                            <div class="card">
                                <h2>Recommended Courses</h2>
                                <ul>
                                    <li>Introduction to Frontend WebDesign</li>
                                    <li>Graphical Design </li>
                                    <li>UI/UX Design Principles</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dashboard-cards">
                            <div class="card">
                                <h2>Achievements</h2>
                                <ul class="achievement-list">
                                    <li>Completed Advanced Python Course</li>
                                    <li>Solved 50 Coding Challenges</li>
                                    <li>Top 10% in Machine Learning Quiz</li>
                                    <li>Contributed to Open Source Project</li>
                                </ul>
                            </div>
                            <div class="card">
                                <h2>Certificates</h2>
                                <ul class="certificate-list">
                                    <li>Data Science Fundamentals</li>
                                    <li>Web Development Bootcamp</li>
                                    <li>Artificial Intelligence Essentials</li>
                                    <li>Cloud Computing Fundamentals</li>
                                </ul>
                            </div>
                            <div class="card">
                                <h2>My Favorites</h2>
                                <ul class="favorite-list">
                                    <li>Machine Learning Algorithms</li>
                                    <li>Advanced JavaScript Techniques</li>
                                    <li>Cloud Computing Fundamentals</li>
                                    <li>Mobile App Development</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Courses Content -->
                    <div class="section-content" id="courses-content" style="display: none;">
                        <h2>Your Courses</h2>
                        <!---collect from the Courses user enrollment--->
                    </div>

                    <!-- Schedule Content -->
                    <div class="section-content" id="schedule-content" style="display: none;">
                        <h2>Your Schedule</h2>
                        <div class="schedule-list">
                            <div class="schedule-item">
                                <h3>Monday, 10:00 AM</h3>
                                <p>Machine Learning Live Session</p>
                            </div>
                            <div class="schedule-item">
                                <h3>Wednesday, 2:00 PM</h3>
                                <p>Web Development Workshop</p>
                            </div>
                            <div class="schedule-item">
                                <h3>Friday, 11:00 AM</h3>
                                <p>Data Structures Q&A</p>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Content -->
                    <div class="section-content" id="progress-content" style="display: none;">
                        <h2>Your Progress</h2>
                        <!--a graph that shows the progress with respect to the enrolled courses-->
                    </div>
                    <!-- Settings Content -->
                    <div class="section-content" id="settings-content" style="display: none;">
                        <h2>Settings</h2>
                        <div class="settings-container">
                            <!-- Profile Settings Section -->
                            <div class="settings-section">
                                <h3>Profile Settings</h3>
                                <form action="update_profile.php" method="POST" enctype="multipart/form-data" class="settings-form">
                                    <div class="profile-image-section">
                                        <div class="current-profile-image">
                                            <?php 
                                            if (isset($_SESSION['profile_image']) && !empty($_SESSION['profile_image'])) {
                                                echo '<img src="uploads/profile/' . htmlspecialchars($_SESSION['profile_image']) . '" alt="Profile Picture">';
                                            } else {
                                                echo '<div class="user-photo">' . htmlspecialchars($userInitials) . '</div>';
                                            }
                                            ?>
                                        </div>
                                        <div class="profile-image-upload">
                                            <label for="profile_image" class="custom-file-upload">
                                                <i class="fas fa-camera"></i> Change Profile Picture
                                            </label>
                                            <input type="file" id="profile_image" name="profile_image" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="fullname">Full Name:</label>
                                        <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($_SESSION['user_fullname']);?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['user_name']);?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['user_email']);?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="bio">Bio:</label>
                                        <textarea id="bio" name="bio" rows="3"><?php echo isset($_SESSION['user_bio']) ? htmlspecialchars($_SESSION['user_bio']) : ''; ?></textarea>
                                    </div>

                                    <button type="submit" name="update_profile" class="save-button">Save Profile Changes</button>
                                </form>
                            </div>

                            <!-- Account Settings Section -->
                            <div class="settings-section">
                                <h3>Account Settings</h3>
                                <form action="update_account.php" method="POST" class="settings-form">
                                    <div class="form-group">
                                        <label for="current_password">Current Password:</label>
                                        <input type="password" id="current_password" name="current_password">
                                    </div>

                                    <div class="form-group">
                                        <label for="new_password">New Password:</label>
                                        <input type="password" id="new_password" name="new_password">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password">Confirm New Password:</label>
                                        <input type="password" id="confirm_password" name="confirm_password">
                                    </div>

                                    <div class="notification-preferences">
                                        <h4>Notification Preferences</h4>
                                        <div class="checkbox-group">
                                            <input type="checkbox" id="email_notifications" name="email_notifications" checked>
                                            <label for="email_notifications">Email Notifications</label>
                                        </div>
                                        <div class="checkbox-group">
                                            <input type="checkbox" id="course_updates" name="course_updates" checked>
                                            <label for="course_updates">Course Updates</label>
                                        </div>
                                        <div class="checkbox-group">
                                            <input type="checkbox" id="achievement_alerts" name="achievement_alerts" checked>
                                            <label for="achievement_alerts">Achievement Alerts</label>
                                        </div>
                                    </div>

                                    <button type="submit" name="update_account" class="save-button">Save Account Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- Achievements Content -->
                    <div class="section-content" id="achievements-content" style="display: none;">
                        <h2>Your Achievements</h2>
                        <div class="achievement-list">
                            <div class="achievement-item">
                                <i class="fas fa-trophy"></i>
                                <h3>Python Master</h3>
                                <p>Completed Advanced Python Course</p>
                            </div>
                            <div class="achievement-item">
                                <i class="fas fa-code"></i>
                                <h3>Code Warrior</h3>
                                <p>Solved 50 Coding Challenges</p>
                            </div>
                            <div class="achievement-item">
                                <i class="fas fa-brain"></i>
                                <h3>AI Enthusiast</h3>
                                <p>Top 10% in Machine Learning Quiz</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile-overlay">
                        <div class="profile-content">
                            <i class="fas fa-times close-profile"></i>
                            <h2>User Profile</h2>
                            <div class="profile-info">
                                <div class="profile-photo"><div class="user-photo"><?php echo htmlspecialchars($userInitials); ?></div></div>
                                <div class="profile-details">
                                    <p><strong>Name:</strong> John Doe</p>
                                    <p><strong>Email:</strong> john@example.com</p>
                                    <p><strong>Role:</strong> Student</p>
                                    <p><strong>Joined:</strong> January 15, 2024</p>
                                    <p><strong>Courses Completed:</strong> 15</p>
                                    <p><strong>Current Course:</strong> Advanced Machine Learning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <button class="mode-switch" aria-label="Toggle dark/light mode">
        <i class="fas fa-moon"></i>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            const modeSwitch = document.querySelector('.mode-switch');
            const body = document.body;
            const menuItems = document.querySelectorAll('.menu-item');
            const sectionContents = document.querySelectorAll('.section-content');

            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });

            modeSwitch.addEventListener('click', function() {
                body.classList.toggle('dark-mode');
                const icon = modeSwitch.querySelector('i');
                icon.classList.toggle('fa-moon');
                icon.classList.toggle('fa-sun');
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnMenuToggle = menuToggle.contains(event.target);

                if (!isClickInsideSidebar && !isClickOnMenuToggle && window.innerWidth <= 768) {
                    sidebar.classList.remove('active');
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    sidebar.classList.remove('active');
                }
            });

            // Handle navigation
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    const sectionId = this.dataset.section + '-content';
                    sectionContents.forEach(section => {
                        section.style.display = section.id === sectionId ? 'block' : 'none';
                    });
                    menuItems.forEach(menuItem => menuItem.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Existing JavaScript...

            const viewProfileBtn = document.querySelector('.view-profile-btn');
            const profileOverlay = document.querySelector('.profile-overlay');
            const closeProfile = document.querySelector('.close-profile');

            viewProfileBtn.addEventListener('click', function() {
                profileOverlay.style.display = 'flex';
            });

            closeProfile.addEventListener('click', function() {
                profileOverlay.style.display = 'none';
            });

            // Close profile when clicking outside the profile content
            profileOverlay.addEventListener('click', function(event) {
                if (event.target === profileOverlay) {
                    profileOverlay.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>