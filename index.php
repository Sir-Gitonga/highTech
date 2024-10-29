<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home brigisoftech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
</head>

    <div class="top-bar">
        <div class="contact-infom">
            <span class="phone"><i class="fas fa-phone-alt"></i> +254 110 848 885</span>
            <span class="email"><i class="fas fa-envelope"></i> info@gitonga.com</span>
            <span class="hours"><i class="fas fa-clock"></i> Mon-Fri 9am-6pm</span>
        </div>
        <div class="social-icons">
            <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="animated-bg">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <header id="main-header"> 
        <div class="logo">
            <a href="index.php"><img src="logo.png" alt="Gitonga Tech Studio"></a>
        </div>
        <h2>HighTech Quantum</h2>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown">
                  <button class="dropbtn">Go To Platforms <i class="fa fa-caret-down"></i></button>
                  <div class="dropdown-content">
                    <a href="signup.php"><i class="fa fa-graduation-cap"></i> HighTech Lab</a>
                    <a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> HighTech Dashboard</a>
                  </div>
                </li>
            </ul>
        </nav>
        <div class="hamburger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>

<body>
    <div class="welcome-slideshow">
        <div class="slide fade">
          <img src="slide2.jpg" alt="Welcome to Gitonga Tech Studio">
          <div class="content">
            <div class="text">
              <h2>Welcome to HighTech Quantum</h2>
              <p>Where innovation meets excellence</p>
            </div>
            <div class="containr">
              <h3>Our Vision</h3>
              <p>To be the leading tech innovator, shaping the digital landscape and empowering businesses worldwide.</p>
              <a href="about.html" class="learn-more">
                <span>Learn More</span>
                <svg viewBox="0 0 24 24" width="24" height="24">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        
        <div class="slide fade">
          <img src="it.jpg" alt="Discover Our Services">
          <div class="content">
            <div class="text">
              <h2>Discover Our World-Class Services</h2>
              <p>Tailored solutions for your digital needs</p>
            </div>
            <div class="containr">
              <h3>Our Mission</h3>
              <p>To deliver cutting-edge technology solutions that drive growth, efficiency, and innovation for our clients.</p>
              <a href="about.html" class="learn-more">
                <span>Learn More</span>
                <svg viewBox="0 0 24 24" width="24" height="24">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        
        <div class="slide fade">
          <img src="slide3.jpg" alt="Let's Create Together">
          <div class="content">
            <div class="text">
              <h2>Let's Create Something Amazing Together</h2>
              <p>Your vision, our expertise</p>
            </div>
            <div class="containr">
              <h3>Our Commitment</h3>
              <p>To foster creativity, embrace challenges, and deliver exceptional results that exceed expectations.</p>
              <a href="about.html" class="learn-more">
                <span>Learn More</span>
                <svg viewBox="0 0 24 24" width="24" height="24">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
      
      
      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>

<!-- about us section -->
    <section id="about-preview">
      <div class="container">
          <h2 class="section-title">About HighTech Quantum</h2>
          <div class="about-content">
              <div class="about-image">
                  <img src="about2.png" alt="HighTech Quantum team focused on work">
              </div>
              <div class="about-text">
                  <p>Welcome to HighTech Quantum! We're your partners in digital innovation, offering a diverse range of tech services tailored to propel your business forward. Our passionate team crafts bespoke solutions that not only streamline your operations but ignite growth and success.</p>
                  <p>At HighTech Quantum, we believe in the power of technology to transform businesses. Let us help you navigate the digital landscape and unlock your full potential.</p>
              </div>
              <div class="core-values">
                  <h3>Our Core Values</h3>
                  <div class="value-grid">
                      <div class="value-item">
                          <i class="fas fa-lightbulb"></i>
                          <span>Innovation</span>
                      </div>
                      <div class="value-item">
                          <i class="fas fa-users"></i>
                          <span>Collaboration</span>
                      </div>
                      <div class="value-item">
                          <i class="fas fa-chart-line"></i>
                          <span>Excellence</span>
                      </div>
                      <div class="value-item">
                          <i class="fas fa-hands-helping"></i>
                          <span>Client-Centric</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="cta-container">
            <a href="about.html" class="btn">Get to Know Us <i class="fas fa-arrow-right"></i></a>
          </div>
      </div>
  </section>

<!-- services section -->
  <section id="services" class="services-section">
    <div class="container">
      <h2 class="section-title">Innovative Digital Solutions</h2>
      <div class="swiper-container service-carousel">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="service-item" data-service="web-design">
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Web Design</h3>
                <p>Crafting visually stunning and intuitive websites that captivate your audience.</p>
                <a href="#" class="learn-more">Explore</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item" data-service="web-development">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Building cutting-edge web applications with scalable architecture.</p>
                <a href="#" class="learn-more">Discover</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item" data-service="graphic-design">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>Graphic Design</h3>
                <p>Creating eye-catching visuals that elevate your brand identity.</p>
                <a href="#" class="learn-more">View Portfolio</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item" data-service="ecommerce">
                <div class="service-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3>E-commerce Solutions</h3>
                <p>Developing seamless online shopping experiences that drive conversions.</p>
                <a href="#" class="learn-more">Shop Now</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item" data-service="digital-marketing">
                <div class="service-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>Amplifying your online presence with data-driven marketing strategies.</p>
                <a href="#" class="learn-more">Get Started</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item" data-service="photography">
                <div class="service-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>Professional Photography</h3>
                <p>Capturing high-quality images that tell your brand's story.</p>
                <a href="#" class="learn-more">See Gallery</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-item" data-service="cyber-security">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Cyber Security</h3>
                <p>Safeguarding your digital assets with advanced protection measures.</p>
                <a href="#" class="learn-more">Secure Now</a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  
  <section id="why-choose-us" class="why-choose-us-section">
    <div class="container">
      <h2 class="section-title">Why Choose US?</h2>
      <div class="value-props">
        <div class="value-prop">
          <i class="fas fa-rocket"></i>
          <h3>Innovative Solutions</h3>
          <p>We're at the forefront of technology, delivering cutting-edge solutions that propel your business into the future.</p>
        </div>
        <div class="value-prop">
          <i class="fas fa-handshake"></i>
          <h3>Partnership Approach</h3>
          <p>We don't just work for you; we work with you. Your success is our success, and we're committed to your growth.</p>
        </div>
        <div class="value-prop">
          <i class="fas fa-users-cog"></i>
          <h3>Expert Team</h3>
          <p>Our diverse team of tech wizards brings a wealth of experience and fresh perspectives to every project.</p>
        </div>
        <div class="value-prop">
          <i class="fas fa-chart-line"></i>
          <h3>Results-Driven</h3>
          <p>We focus on delivering tangible outcomes that boost your ROI and drive your business forward.</p>
        </div>
      </div>
      <div class="cta-message">
        <h3>Ready to Transform Your Digital Presence?</h3>
        <p>Join the ranks of satisfied clients who've experienced the HighTech Quantum difference. Let's turn your digital dreams into reality.</p>
        <a href="contact.html" class="btn btn-primary">Start Your Journey</a>
      </div>
    </div>
  </section>

  <!-- Client Success Stories Section -->
  <section id="success-stories" class="success-stories-section">
    <div class="container">
      <h2 class="section-title">Client Success Stories</h2>
      <div class="story-carousel">
        <div class="story-item">
          <img src="chairman.jpg" alt="Client 1">
          <div class="story-content">
            <h3>TechStart Innovations</h3>
            <p>"HighTech Quantum transformed our online presence, resulting in a 200% increase in user engagement!"</p>
          </div>
        </div>
        <div class="story-item">
          <img src="focus.jpg" alt="Client 2">
          <div class="story-content">
            <h3>GreenLeaf Enterprises</h3>
            <p>"The e-commerce solution provided by HighTech Quantum boosted our sales by 150% in just three months."</p>
          </div>
        </div>
        <div class="story-item">
          <img src="slide3.jpg" alt="Client 3">
          <div class="story-content">
            <h3>GlobalConnect Solutions</h3>
            <p>"HighTech's cybersecurity measures have kept our data safe and our clients confident."</p>
          </div>
        </div>
      </div>
      <div class="carousel-controls">
        <button class="prev-btn">&lt;</button>
        <button class="next-btn">&gt;</button>
      </div>
    </div>
  </section>

<!-- Interactive Tech Showcase Section -->
<section id="tech-showcase" class="tech-showcase-section">
  <div class="container">
    <h2 class="section-title">Interactive Tech Showcase</h2>
    <div class="showcase-grid">
      <div class="showcase-item" data-tech="ai">
        <i class="fas fa-brain"></i>
        <h3>AI Integration</h3>
        <p>Experience how AI can revolutionize your business processes.</p>
      </div>
      <div class="showcase-item" data-tech="vr">
        <i class="fas fa-vr-cardboard"></i>
        <h3>VR Experiences</h3>
        <p>Step into the future with our immersive VR solutions.</p>
      </div>
      <div class="showcase-item" data-tech="iot">
        <i class="fas fa-network-wired"></i>
        <h3>IoT Ecosystem</h3>
        <p>See how connected devices can streamline your operations.</p>
      </div>
      <div class="showcase-item" data-tech="blockchain">
        <i class="fas fa-link"></i>
        <h3>Blockchain Solutions</h3>
        <p>Explore secure and transparent blockchain applications.</p>
      </div>
    </div>
    <div class="showcase-demo">
      <h3>Interactive Demo</h3>
      <div id="demo-content">
        <!-- Dynamic content will be loaded here based on selected showcase item -->
      </div>
    </div>
  </div>
</section>

<!-- Team Spotlight Section -->
<section id="team-spotlight" class="team-spotlight-section">
  <div class="container">
    <h2 class="section-title">Meet Our Tech Pioneers</h2>
    <div class="team-grid">
      <div class="team-member">
        <div class="member-image">
          <img src="bp.jpg" alt="BrianPaul">
          <div class="member-overlay">
            <p class="member-quote">"Innovation is our compass, guiding us to transform challenges into opportunities for our clients."</p>
              <div class="member-social">
                <a href="https://www.linkedin.com/in/Brian Paul" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="https://wa.me/+254110848885" class="social-link"><i class="fab fa-whatsapp"></i></a>
                <a href="https://github.com/Catalyst254" class="social-link"><i class="fab fa-github"></i></a>
              </div>
          </div>
        </div>
        <div class="member-info">
          <h3>BrianPaul Gitonga</h3>
          <p>CEO HighTech Quantum</p>
        </div>
      </div>
      <div class="team-member">
        <div class="member-image">
          <img src="chairman.jpg" alt="Samantha Lee">
          <div class="member-overlay">
            <p class="member-quote">"In the tapestry of technology, user experience is our most vibrant thread."</p>
            <div class="member-social">
              <a href="https://www.linkedin.com/in/Brian Paul" class="social-link"><i class="fab fa-linkedin"></i></a>
              <a href="https://wa.me/+254110848885" class="social-link"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/Catalyst254" class="social-link"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
        <div class="member-info">
          <h3>Shelitah Muthii</h3>
          <p>UX Design Lead</p>
        </div>
      </div>
      <div class="team-member">
        <div class="member-image">
          <img src="slide2.jpg" alt="Michael Chen">
          <div class="member-overlay">
            <p class="member-quote">"Data is the compass, and a Data Scientist is the navigator who transforms raw information into the map that guides informed decisions"</p>
            <div class="member-social">
              <a href="https://www.linkedin.com/in/Brian Paul" class="social-link"><i class="fab fa-linkedin"></i></a>
              <a href="https://wa.me/+254110848885" class="social-link"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/Catalyst254" class="social-link"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
        <div class="member-info">
          <h3>John Mary</h3>
          <p>Data Scientist. </p>
        </div>
      </div>
      <div class="team-member">
        <div class="member-image">
          <img src="typing.jpg" alt="John Mary">
          <div class="member-overlay">
            <p class="member-quote">"The world of technology is a canvas painted by countless artists."</p>
            <div class="member-social">
              <a href="https://www.linkedin.com/in/Brian Paul" class="social-link"><i class="fab fa-linkedin"></i></a>
              <a href="https://wa.me/+254110848885" class="social-link"><i class="fab fa-whatsapp"></i></a>
              <a href="https://github.com/Catalyst254" class="social-link"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
        <div class="member-info">
          <h3>Emily Rodriguez</h3>
          <p>Cybersecurity Expert</p>
        </div>
      </div>
    </div>
    <div class="cta-message">
      <h3>Join Our Innovative Team</h3>
      <p>We're always looking for passionate tech enthusiasts to join our mission.</p>
      <a href="contact.html" class="btn btn-primary">View Openings</a>
    </div>
  </div>
</section>
<!-- Latest Tech Insights Section -->
  <section id="tech-insights" class="tech-insights-section">
    <div class="container">
      <h2 class="section-title">Latest Tech Insights</h2>
      <div class="insights-grid">
        <article class="insight-item">
          <div class="insight-content">
            <div class="insight-image">
              <img src="ai.png" alt="The Future of AI in Business">
              <div class="insight-category">AI</div>
            </div>
            <div class="insight-text">
              <h3>The Future of AI in Business</h3>
              <p>Exploring how artificial intelligence is reshaping industries and driving innovation.</p>
              <div class="read-more-content" style="display: none;">
                <p>AI is revolutionizing business operations across various sectors. From predictive analytics to automated customer service, AI technologies are enhancing efficiency and creating new opportunities for growth. Companies that embrace AI are likely to gain a competitive edge in the rapidly evolving digital landscape.</p>
              </div>
            </div>
          </div>
          <a href="#" class="learn-more">
            <span>Read More</span>
            <svg viewBox="0 0 24 24" width="24" height="24">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </article>
        <article class="insight-item">
          <div class="insight-content">
            <div class="insight-image">
              <img src="cyber.png" alt="Cybersecurity Best Practices for 2024">
              <div class="insight-category">Security</div>
            </div>
            <div class="insight-text">
              <h3>Cybersecurity Best Practices for 2024</h3>
              <p>Stay ahead of evolving threats with our expert guide to digital security.</p>
              <div class="read-more-content" style="display: none;">
                <p>As cyber threats become more sophisticated, it's crucial to adopt robust security measures. Implement multi-factor authentication, regularly update software, and educate employees about phishing attacks. Consider adopting a zero-trust security model and investing in AI-powered threat detection systems to bolster your defenses.</p>
              </div>
            </div>
          </div>
          <a href="#" class="learn-more">
            <span>Read More</span>
            <svg viewBox="0 0 24 24" width="24" height="24">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </article>
        <article class="insight-item">
          <div class="insight-content">
            <div class="insight-image">
              <img src="ux.png" alt="Mastering UX Design for Mobile Apps">
              <div class="insight-category">UX Design</div>
            </div>
            <div class="insight-text">
              <h3>Mastering UX Design for Mobile Apps</h3>
              <p>Tips and tricks to create user-friendly mobile experiences that delight customers.</p>
              <div class="read-more-content" style="display: none;">
                <p>Effective mobile UX design prioritizes simplicity, intuitive navigation, and fast loading times. Implement gesture-based interactions, optimize for one-handed use, and ensure consistency across different device sizes. Regularly conduct user testing and iterate based on feedback to continually improve the user experience.</p>
              </div>
            </div>
          </div>
          <a href="#" class="learn-more">
            <span>Read More</span>
            <svg viewBox="0 0 24 24" width="24" height="24">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </article>
      </div>
      <div class="insights-cta">
        <a href="#blog" class="btn btn-primary">Explore Our Tech Blog</a>
      </div>
    </div>
  </section>

  <!--  Contact Us Section -->
  <section id="contact-us" class="contact-us-section">
    <div class="container">
        <h2 class="section-title">Connect with Us</h2>
        <div class="contact-content">
            <div class="contact-info">
                <h3>Digital Channels</h3>
                <p><i class="fab fa-slack"></i> Join our Slack community</p>
                <p><i class="fab fa-discord"></i> Chat on Discord</p>
                <p><i class="fab fa-github"></i> Contribute on GitHub</p>
              <div class="social-icons">
                  <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <form class="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <select name="inquiry-type">
                    <option value="" disabled selected>Select Inquiry Type</option>
                    <option value="partnership">Partnership</option>
                    <option value="support">Technical Support</option>
                    <option value="feedback">Product Feedback</option>
                </select>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!--  FAQ Section -->
<section id="faq" class="faq-section">
  <h2 class="section-title">Frequently Asked Questions</h2>
  <div class="faq-list">
    <div class="faq-item">
      <h3 class="question">What makes HighTech Quantum unique?</h3>
      <div class="answer">
        <p>At HighTech Quantum, we pride ourselves on our holistic approach to digital solutions. We combine cutting-edge technology with creative design to deliver tailored results that exceed client expectations.</p>
      </div>
    </div>
    <div class="faq-item">
      <h3 class="question">What services does HighTech Quantum offer?</h3>
      <div class="answer">
        <p>HighTech Quantum offers a wide range of digital solutions including web design, web development, graphic design, e-commerce solutions, digital marketing, professional photography, and cybersecurity services</p>
      </div>
    </div>
    <div class="faq-item">
      <h3 class="question">How long does a typical project take?</h3>
      <div class="answer">
        <p>Project timelines vary depending on the scope and complexity. We work closely with our clients to establish realistic timelines and keep them updated throughout the process.</p>
      </div>
    </div>
    <div class="faq-item">
      <h3 class="question">What industries do you specialize in?</h3>
      <div class="answer">
        <p>While we have experience across various sectors, we particularly excel in e-commerce, healthcare, education, and finance. However, our adaptable approach allows us to cater to diverse industry needs effectively.</p>
      </div>
    </div>
  </div>
</section>

<!-- New Newsletter Signup Section -->
<div id="newsletter-notification" class="newsletter-notification">
  <div class="notification-content">
    <button class="close-btn">&times;</button>
    <h3><i class="fas fa-bell"></i> Stay Updated</h3>
    <p>Subscribe to our newsletter for the latest tech insights and updates.</p>
    <form id="newsletter-form">
      <div class="input-group">
        <input type="email" name="email" placeholder="Your Email Address" required>
        <button type="submit" class="subbtn">
          <span>Subscribe</span>
          <i class="fas fa-paper-plane"></i>
        </button>
      </div>
    </form>
    <div class="newsletter-features">
      <div class="feature">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        <span>Weekly Updates</span>
      </div>
      <div class="feature">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
        <span>Exclusive Content</span>
      </div>
      <div class="feature">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        <span>Tech Trends</span>
      </div>
    </div>
  </div>
</div>

<!-- Footer Section -->
<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="index.php"><img src="logo.png.jpg" alt="HighTech QuantumLogo"></a>
                <p>Innovating for a better tomorrow</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 HighTech Quantum. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
