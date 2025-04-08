<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>On Demand Office Services</title>
    <link rel="stylesheet" href="index2.css" />
    <link rel="icon" href="./images_webp/logo-png.webp" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap");
    </style>
  </head>
  <body id="wrapper">
    <header class="header">
      <div class="overlay">
        <div class="header-inner">
          <h1 class="company-name">
            <a href="index.html">On Demand Office Services Inc</a>
          </h1>
          <nav class="nav">
            <ul>
              <li><a href="index.html">Home</a></li>
              <!-- <li><a href="services.html">Services</a></li> -->
              <!-- <li><a href="about.html">About</a></li> -->
              <li><a id="nav-contact-button" href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="tagline">
          <p>
            Managing <span style="font-style: italic">your</span><br />
            business needs.
          </p>
        </div>
      </div>
      <img src="./images_webp/dunedin-oranges.webp" alt="Header Background" />
    </header>
    <div class="tagline2">
      <p>
        Take Control of Your Finances—Stress-Free, Efficient, and Affordable!
      </p>
    </div>
    <div class="intro">
      <!-- <p>
        Running a small business is demanding—you wear multiple hats, juggle
        endless responsibilities, and strive to keep everything running
        smoothly. But let’s be honest—bookkeeping can be a time-consuming
        headache, pulling you away from what truly matters:
        <span style="font-weight: 550">growing your business.</span>
      </p>
      <p>
        <br>At <span style="font-weight: 500">On Demand Office Services</span>, we offer seamless, reliable, and
        affordable bookkeeping solutions tailored specifically for small
        business owners like you. <br><br>Say goodbye to financial confusion and hello
        to clarity, control, and confidence.
      </p> -->
      <p>
        <br>Seamless, reliable, and affordable bookkeeping solutions tailored specifically for small business owners.
      </p>
    </div>
    
    <!-- Why Choose Us Section -->
    <div class="whyus_header">
      <p>
        Why Choose Us?
      </p>
    </div>
    <section class="whychooseus">
      <div class="whychooseus-container">
        <div class="whychooseus-item">
          <img src="./images_webp/accuracy_icon.webp" alt="Accuracy Icon" />
          <div class="whychooseus-text">
            <h3>Accurate &amp;<br>Up-to-Date Books</h3>
            <p>Make informed decisions with reliable records.</p>
          </div>
        </div>
        <div class="whychooseus-item">
          <img src="./images_webp/customize_icon.webp" alt="Solutions Icon" />
          <div class="whychooseus-text">
            <h3>Custom-Tailored Solutions</h3>
            <p>Flexible services that scale with your business.</p>
          </div>
        </div>
        <div class="whychooseus-item">
          <img src="./images_webp/tax_icon.webp" alt="Tax Ready Icon" />
          <div class="whychooseus-text">
            <h3>Tax-Ready Financials</h3>
            <p>Organized records for stress-free tax filing.</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Our Services Section (Grid Layout) -->
    <div class="ourservices_header">
      <p>
        Our Services
      </p>
    </div>
    <section class="ourservices">
      <div class="ourservices-container">
        <div class="service-item">
          <img src="./images_webp/payroll_icon.webp" alt="Payroll Assistance Icon" />
          <p>Payroll Assistance</p>
        </div>
        <div class="service-item">
          <img src="./images_webp/user.webp" alt="Tax Ready Icon" />
          <p>Managing Books with QuickBooks Online</p>
        </div>
        <div class="service-item">
          <img src="./images_webp/budgeting.webp" alt="Tax Ready Icon" />
          <p>Budgeting &amp; Cash Flow Management</p>
        </div>
        <div class="service-item">
          <img src="./images_webp/budget.webp" alt="Tax Ready Icon" />
          <p>Expense Tracking &amp; Reconciliation</p>
        </div>
        <div class="service-item">
          <img src="./images_webp/tax_icon.webp" alt="Tax Ready Icon" />
          <p>Tax Preparation Support</p>
        </div>
      </div>
      <a href="#contact"><button class="cta-button"><p>Learn More About Our Services</p></button></a>
    </section>
    
    <!-- Who We Serve Section (Horizontal Section with Icons) -->
    <div class="whoweserve_header">
      <p>
        Who We Serve
      </p>
    </div>
    <section class="whoweserve">
      <div class="whoweserve-container">
        <div class="whoweserve-item">
          <img src="./images_webp/storefront.webp" alt="Retail Icon" />
          <p>Retail &amp; E-commerce</p>
        </div>
        <div class="whoweserve-item">
          <img src="./images_webp/professional-services.webp" alt="Professional Services Icon" />
          <p>Professional Services<br />(Lawyers, Therapists, etc.)</p>
        </div>
        <div class="whoweserve-item">
          <img src="./images_webp/home.webp" alt="Home-Based Icon" />
          <p>Home-Based &amp; Online Businesses</p>
        </div>
        <div class="whoweserve-item">
          <img src="./images_webp/engineer.webp" alt="Contractors Icon" />
          <p>Contractors &amp; Tradespeople</p>
        </div>
        <div class="whoweserve-item">
          <img src="./images_webp/room-service.webp" alt="Restaurants Icon" />
          <p>Restaurants &amp; Hospitality</p>
        </div>
      </div>
      <a href="#contact"><button class="cta-button">See How We Can Help Your Business</button></a>
    </section>
    
    <!-- Client Benefits Section (Two Column Layout) -->
    <div class="clientbenefits_header">
      <p>
        Client Benefits
      </p>
    </div>
    <section class="clientbenefits">
      <div class="clientbenefits-container">
        <div class="benefits-text">
          <ul>
            <li>&centerdot; More Time to Grow Your Business &centerdot;</li>
            <li>&centerdot; Improved Cash Flow &amp; Budgeting &centerdot;</li>
            <li>&centerdot; Reduced Tax Liabilities &centerdot;</li>
            <li>&centerdot; Peace of Mind &centerdot;</li>
          </ul>
        </div>
        <div class="benefits-image">
          <img src="./images_webp/GettyImages-1357264500-1024x683.jpg" alt="Client Benefits Image" />
        </div>
      </div>
    </section>
    
    <!-- Pricing Section -->
    <div class="pricing_header">
      <p>
        Pricing
      </p>
    </div>
    <section class="pricing">
      <p>Contact us to schedule a meeting and receive a free pricing estimate tailored to your business.</p>
      <a href="#contact"><button class="cta-button">Contact Us</button></a>
    </section>
    
    <!-- Testimonials Section -->
    <div class="testimonials_header">
      <p>
        Testimonials
      </p>
    </div>
    <section class="testimonials">
      <div class="testimonial-slider">
        <div class="testimonial-slide active">
          <p>"They completely transformed our bookkeeping—highly recommend!"</p>
          <span>– Devin, Retail</span>
        </div>
        <div class="testimonial-slide">
          <p>"Professional, efficient, and supportive. Our financial stress is gone."</p>
          <span>– Cristina, Professional Services</span>
        </div>
        <div class="testimonial-slide">
          <p>"Our tax-ready financials make tax season a breeze every year."</p>
          <span>– Alex, Contractor</span>
        </div>
      </div>
      <!-- Slider controls -->
      <button class="slider-prev">Prev</button>
      <button class="slider-next">Next</button>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="contact">
      <h2>Get Started Today—Let’s Talk!</h2>
      <div class="contact-info">
        <p style="font-size: xx-large;"><strong>Debbie Trauner</strong></p>
        <p>Email: dtrauner@gmail.com</p>
        <p>Phone: 727-669-7311</p>
      </div>
      <form class="contact-form" action="https://api.web3forms.com/submit" method="POST">
        <input type="hidden" name="access_key" value="891019dc-f82b-4ca5-9776-2f5413b5a153">
        <input type="hidden" name="from_name" value="OnDemandOfficeServices">
        <input type="hidden" name="subject" value="New Message from Potential Client">

        <input type="text" name="name" placeholder="Name" autocomplete="given-name" required />
        <input type="email" name="email" placeholder="Email" autocomplete="email" required />
        <input type="text" name="businesstype" placeholder="Business Type" autocomplete="company business" required />
        <textarea type="text" name="message" placeholder="Message" autocomplete="off" required></textarea>

        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
        <button type="submit" class="cta-button">Send Message</button>
      </form>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
      <nav class="footer-nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <!-- <li><a href="services.html">Services</a></li>
          <li><a href="about.html">About</a></li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <div class="footer-contact">
        <p>Email: dtrauner@gmail.com</p>
        <p>Phone: 727-669-7311</p>
      </div>
      <p style="font-size: small;">On Demand Office Services Inc &copy; 2025</p>
    </footer>
    
    <!-- Minimal JS for testimonials slider -->
    <script>
      const slides = document.querySelectorAll('.testimonial-slide');
      let currentSlide = 0;
      document.querySelector('.slider-next').addEventListener('click', () => {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
      });
      document.querySelector('.slider-prev').addEventListener('click', () => {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
      });
    </script>
  </body>
</html>