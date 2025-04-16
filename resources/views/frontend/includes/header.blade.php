<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">

<h2>Welcome to CarryCode</h2>
<p>Innovate, create, and transform ideas into reality. Your journey towards digital excellence starts here.</p>



          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <h2>At vero eos et accusamus</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>

          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="carousel-container">
            <h2>Temporibus autem quibusdam</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <!--<a href="#featured-services" class="btn-get-started">Get Started</a>-->
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
 <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
       <h1 class="board-heading">About Us</h1>
       <div class="symbol">
    <div class="moving-dot"></div>
</div>

        <p>Empowering Innovation, Driving Excellence</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    At Carrycode, we transform ideas into cutting-edge solutions. Our team is dedicated to
                    delivering excellence through innovation, precision, and a customer-first approach.
                </p>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Innovative solutions tailored for success.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Committed to quality, efficiency, and excellence.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Empowering businesses with future-ready technology.</span></li>
                </ul>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p>With a passion for technology and an unwavering commitment to excellence, we strive to push boundaries and
                   create transformative digital experiences. Join us on this journey to redefine possibilities.</p>
                <a href="/abouts" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>

        </div>

    </div>


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <style>
          body {
              background: linear-gradient(135deg, #0f172a, #1e293b); /* Dark IT theme */
              color: white;
          }
          .director-card {
              text-align: center;
              padding: 20px;
              border-radius: 12px;
              background:#085277;
              transition: transform 0.3s ease-in-out, box-shadow 0.3s;
              opacity: 0;
              border: 2px solid #4f46e5;
              box-shadow: 0 0 15px rgba(79, 70, 229, 0.5);
          }
          .director-card:hover {
              transform: translateY(-8px);
              box-shadow: 0 0 25px rgba(99, 102, 241, 0.8);
          }
          .director-card img {
    width: 260px; /* Bigger Size */
    height: 300px;
    object-fit: cover;
    padding: 5px;
    border-radius: 25%; /* Circle Shape */
  /* Attractive Border */

}

          .quote {
    font-family: inherit; /* Proper Hindi Font */
    font-size: 18px;
    line-height: 1.6;
    word-wrap: break-word;
    white-space: normal;
    display: block;
    color:white;
}

          .name {
              font-size: 20px;
              font-weight: bold;
              color: #fcffbd;
              margin-top: 10px;
          }
          .designation {
              font-size: 22px;
              color: #faf760;
          }
          @media (max-width: 768px) {
    .director-card {
        margin-bottom: 15px; /* Adds space between stacked cards */
    }
}
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    .board-heading {
        font-size: 32px;
        font-weight: 500;
     font-family: 'Poppins', sans-serif;



        background:#000080;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;

        padding-bottom: 10px;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 1.5s ease-out forwards;
        text-align: center;
        width: 100%;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .board-heading {
            font-size: 36px;
            letter-spacing: 2px;
        }
    }

    @media (max-width: 480px) {
        .board-heading {
            font-size: 28px;
            letter-spacing: 1px;
        }
    }


      .symbol {
        width: 100px;
        height: 6px;
        background: black;
        margin: 10px auto;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
    }

    /* Moving Dot */
    .moving-dot {
        width: 10px;
        height: 10px;
        background:white;
        border-radius: 50%;
        position: absolute;
        top: -2.5px;
        left: 0;
        animation: moveDot 2s linear infinite alternate;
    }

    /* Animation Keyframes */
    @keyframes moveDot {
        0% { left: 0; }
        100% { left: 90px; } /* Move till end of .symbol */
    }

    /* Section Styling */
/* Section Styling */
.services {
    background:#f1efd6 ; /* Dark Maroon Background */
    color: #fff;
    padding: 80px 0;
    text-align: center;
}

.section-title h2 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
    color:#000080 ; /* Bright Maroon Title */
}

/*.section-title p {*/
/*    font-size: 18px;*/
/*    color: #bbb;*/
/*    margin-bottom: 40px;*/
/*}*/

/* Responsive Grid Layout */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-content: center;
}

/* Service Box */
.service-box {
    background: black;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(255, 0, 0, 0.3);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    text-align: center;
    position: relative;
    overflow: hidden;
}

/* Hover Effects */
.service-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(255, 0, 0, 0.5);
}

.service-box:hover::before {
    transform: scale(1.1);
    opacity: 0.3;
}

/* Icons */
.service-box .icon {
    font-size: 50px;
    margin-bottom: 15px;
    color: #fff;
    transition: transform 0.3s ease-in-out;
}



/* Service Titles */
.service-box h4 {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
}

.service-box a {
    color: #fff;
    text-decoration: none;
}

.service-box a:hover {
    text-decoration: underline;
}

/* Descriptions */
.service-box p {
    font-size: 14px;
    opacity: 0.9;
}

/* Mobile Responsive Adjustments */
@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }

    .service-box {
        padding: 20px;
    }
}



      </style>
  </head>

 <h1 class="board-heading">Board of Directors</h1>
<div class="symbol">
    <div class="moving-dot"></div>
</div>

  <div class="container mt-5">
      <div class="row justify-content-center">

          <div class="col-md-4">
              <div class="director-card animate__animated animate__fadeInUp animate__delay-2s">
                 <img src="assets/img/mangilal.jpg" alt="Director Image">
                  <p class="quote">Technology is best when it brings people together.
Innovation is the bridge between imagination and reality.
Code is poetry, and engineers are the poets of progress."</p>
                  <p class="name">Er. Mangi Lal Prajapat</p>
                  <p class="designation"> Managing Director </p>
              </div>
          </div>
            <div class="col-md-4">
              <div class="director-card animate__animated animate__fadeInUp animate__delay-2s">
                  <img src="assets/img/ArpitParihar.jpg" alt="Director Image">्
         <p class="quote">
   Truth fosters trust, Honesty earns respect, Simplicity upholds dignity, Patience builds strength, Hard work brings progress, And discipline leads to success
</p>

           <p class="name">Er. Arpit Parihar</p>
                  <p class="designation">CEO & Founder</p>
              </div>
          </div>
          <div class="col-md-4">
              <div class="director-card animate__animated animate__fadeInUp animate__delay-2s">
  <img src="assets/img/Rakesh giri.jpg" alt="Director Image">
                  <p class="quote">The future is built by those who code it today.
Every line of code is a step toward a smarter world.
Technology doesn’t replace humans; it amplifies them."

</p>
                  <p class="name">Sh. Rakesh Giri</p>
                  <p class="designation">Chief Technology Officer</p>
              </div>
          </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
<section id="services" class="services section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
        <h1 class="board-heading">What We Offer</h1>
         <div class="symbol">
    <div class="moving-dot"></div>
</div>

        </div>

        <div class="services-grid">
            <div class="service-box" data-aos="zoom-in" data-aos-delay="100">
                <i class="bi bi-cpu icon"></i>
                <h4><a href="#">AI & Machine Learning</a></h4>
                <p>Empowering businesses with next-gen AI & deep learning models.</p>
            </div>

            <div class="service-box" data-aos="zoom-in" data-aos-delay="200">
                <i class="bi bi-cloud icon"></i>
                <h4><a href="#">Cloud Solutions</a></h4>
                <p>Seamless cloud migration and management for enterprises.</p>
            </div>

            <div class="service-box" data-aos="zoom-in" data-aos-delay="300">
                <i class="bi bi-laptop icon"></i>
                <h4><a href="#">Software Development</a></h4>
                <p>Custom software tailored to meet your unique business needs.</p>
            </div>

            <div class="service-box" data-aos="zoom-in" data-aos-delay="400">
                <i class="bi bi-shield-lock icon"></i>
                <h4><a href="#">Cybersecurity</a></h4>
                <p>Advanced security solutions to safeguard your data and systems.</p>
            </div>

            <div class="service-box" data-aos="zoom-in" data-aos-delay="500">
                <i class="bi bi-graph-up icon"></i>
                <h4><a href="#">Data Analytics</a></h4>
                <p>Extract insights from big data to drive strategic growth.</p>
            </div>

            <div class="service-box" data-aos="zoom-in" data-aos-delay="600">
                <i class="bi bi-phone icon"></i>
                <h4><a href="#">Mobile App Development</a></h4>
                <p>Creating seamless and user-friendly apps for Android & iOS.</p>
            </div>

            <div class="service-box" data-aos="zoom-in" data-aos-delay="700">
                <i class="bi bi-cart icon"></i>
                <h4><a href="#">E-Commerce Solutions</a></h4>
                <p>Building high-performance online stores with advanced features.</p>
            </div>

            <div class="service-box" data-aos="zoom-in" data-aos-delay="800">
                <i class="bi bi-megaphone icon"></i>
                <h4><a href="#">Digital Marketing</a></h4>
                <p>Boosting brand presence with SEO, PPC, and social media strategies.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>
