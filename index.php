<?php get_header(); ?> 
<!--Header -->
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong><?php bloginfo('name'); ?></strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"><?php bloginfo('description'); ?></p>
            <a class="btn btn-main btn-xl sr-button js-scroll-trigger" href="#about">Let's Begin</a>
            <!--sr button triggers animation-->
          </div>
        </div>
      </div>
    </header>

    <!--About Section -->
    <section class="bg-prime" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white text-uppercase"><strong>About Me</strong></h2>
            <hr class="light my-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photoMay092017.jpg" alt="About Akeea" class="images img-responsive portrait mb-3 sr-button">
            <p class="text-faded mb-4">
                I am a front-end web developer and designer based in Minnesota with a strong speciality in HTML5, CSS3, JavaScript, and Bootstrap, as well as UI Design, Wireframing, Adobe Photoshop, 
                and Adobe Illustrator. With an associates degree in Computer Software Development and a certificate in Web Design from 
                Minneapolis Community and Technical College, I am currently volunteering at CoderDojo Twin Cites teaching 
                programming languages such as HTML5, CSS3, Javascript, and Python. In addition, I've obtained a
                certification in <a href="https://courses.edx.org/certificates/ef74d973b94f4e9fa8913fcad0140633" class="fta-custom">HTML5.0x: HTML5 and CSS Fundamentals</a> from edx.org in December 2018.
                When I'm not doing volunteer work, I design, develop, and modify various sites and applications.
                This personal website that I put together demonstrates my overall progress of what I've learned so far both in school and at work.
                I'm confident that I can use my skills and experience towards an organization 
                that provides and encourages career growth.
            </p>
          </div>
        </div>
      </div>
        <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                  <a class="btn btn-light btn-xl sr-button js-scroll-trigger" href="#skillset">Learn More!</a>
              </div>
            </div>
          </div>
    </section>

    <!--Skill Set Section -->
    <section id="skillset">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><strong>Skill Set</strong></h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-pencil-alt skill-icon mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Design Tools</h3>
              <ul>
                <li class="text-muted mb-0">Adobe Illustrator</li>
                <li class="text-muted mb-0">Adobe Photoshop</li>
                <li class="text-muted mb-0">Wireframing</li>
                <li class="text-muted mb-0">UI Design</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code skill-icon mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Programming Languages</h3>
              <ul>
                <li class="text-muted mb-0">HTML5</li>
                <li class="text-muted mb-0">CSS3</li>
                <li class="text-muted mb-0">JavaScript</li>
                <li class="text-muted mb-0">Python</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-wrench skill-icon mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Developer Tools</h3>
              <ul>
                <li class="text-muted mb-0">Bootstrap</li>
                <li class="text-muted mb-0">Chrome Developer Tools</li>
                <li class="text-muted mb-0">Visual Studio Code</li>
                <li class="text-muted mb-0">Sublime Text</li>
                <li class="text-muted mb-0">Github</li>
              </ul>
            </div>
          </div>
        </div>
      <!--<div class="container">
            <div class="col-lg-12 text-center">
                <h4 class="mb-4" id="skill-header">To see more on my skills and experience, download my resume here!</h4>
                <a class="btn btn-main btn-xl sr-button" id="skill-button" href="#">My Resume</a>
      </div>-->
        </div>
    </section>

    <!--Portfolio Section -->
    <section class="bg-prime text-white" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase"><strong>Portfolio</strong></h2>
              <hr class="light my-4">
            </div>
          </div>
        </div>
        <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center step info">
              <div class="service-box mt-5 mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gutenbergMedia.jpg" alt="Screenshot" class="images img-responsive mb-3 sr-button">
                  <h3 class="mb-3">Gutenberg Media</h3>
                  <ul>
                    <li>Languages used: HTML5, CSS3</li>
                    <li>Tools: UI Design, Wireframing, Illustrator, Chrome Developer Tools, Github</li>
                  </ul>
                  <p>
                    Gutenberg Media is a responsive site created using only HTML5 and CSS3 without the use
                    of JavaScript, and any other framework libraries. This demonstrates my understanding 
                    of website layout and creating such sites using media queries in CSS. 
                    For the purpose of this demonstration, the contact form has been disabled.
                  </p>
                  <a class="btn btn-light portfolio-btn1 btn-xl sr-button" href="https://github.com/akeeawhite/gutenbergmedia">View Source Code</a>
                  <a class="btn btn-light portfolio-btn2 btn-xl sr-button js-scroll-trigger" href="#page-top">View Site</a>
              </div>
            </div>
            <div class="col-lg-6 text-center step info">
              <div class="service-box mt-5 mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/viralvalley.jpg" alt="Screenshot" class="images img-responsive mb-3 sr-button">
                  <h3 class="mb-3">Viral Valley</h3>
                  <ul>
                    <li>Languages used: HTML5, CSS3, JavaScript (JQuery)</li>
                    <li>Tools: UI Design, Wireframing, Illustrator, YouTube API (v3), Visual Studio Code, Bootstrap, Chrome Developer Tools, Github</li>
                 </ul>
                  <p>
                    Viral Valley is a web application that uses the YouTube API (v3) to find the top 5 most 
                    watched videos from any keyword you type in. This site demonstrates my understanding 
                    of JavaScript and the best way to apply that knowledge into this app.
                    The site dynamically changes on submit, cross-browser tested, and is fully responsive. 
                  </p>
                  <a class="btn btn-light portfolio-btn1 btn-xl sr-button" href="https://github.com/akeeawhite/viralvalley/tree/stableversion">View Source Code</a>
                  <a class="btn btn-light portfolio-btn2 btn-xl sr-button js-scroll-trigger" href="#page-top">View Site</a>
              </div>
            </div>
            <div class="col-lg-6 text-center step info">
              <div class="service-box mt-5 mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/img/beadBazaar_Index.jpg" alt="Screenshot" class="images img-responsive mb-3 sr-button">
                <h3 class="mb-3">Bead Bazaar</h3>
                <ul>
                  <li>Languages used: HTML5, CSS3, JavaScript</li>
                  <li>Tools: UI Design, Photoshop, Sublime Text, Visual Studio Code, Bootstrap</li>
               </ul>
                <p>
                  An updated version of a class project for a web development course in college.
                  The main goal of this site is to demonstrate familiarity with bootstrap, 
                  and ultiziting it for a multipage site,as well as create a clean organize 
                  layout though out the site. This site uses Carousel Bootstrap plugin for the frontpage.
                </p>
                <a class="btn btn-light portfolio-btn1 btn-xl sr-button" href="https://github.com/akeeawhite/beadbazaar">View Source Code</a>
                <a class="btn btn-light portfolio-btn2 btn-xl sr-button js-scroll-trigger" id="portfolio-btn" href="#page-top">View Site</a>
              </div>
            </div>
            <div class="col-lg-6 text-center step info">
              <div class="service-box mt-5 mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/animeClub.jpg" alt="Screenshot" class="images img-responsive mb-3 sr-button">
                  <h3 class="mb-3">MCTC Anime Club</h3>
                  <ul>
                    <li>Languages used: HTML5, CSS3, JavaScript</li>
                    <li>Tools: UI Design, Photoshop, Sublime Text, Visual Studio Code, Bootstrap, Chrome Developer Tools</li>
                 </ul>
                  <p>
                    An unofficial one page website of MCTC Anime Club.
                    The main goal of this site is to demonstrate familiarity with bootstrap, 
                    as well as create a clean organize layout though out the site.
                    Images are used with permission. This site utilizes Lightbox JavaScript library
                    tool for the images.
                  </p>
                  <a class="btn btn-light portfolio-btn1 btn-xl sr-button" href="https://github.com/akeeawhite/animeclub">View Source Code</a>
                  <a class="btn btn-light portfolio-btn2 btn-xl sr-button js-scroll-trigger" href="#page-top">View Site</a>
              </div>
            </div>
            
          </div>
        </div>
      </section>

    <!--Connect Section -->
    <section id="connect">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-uppercase"><strong>Let's Connect!</strong></h2>
            <hr class="my-4">
            <p class="mb-5">Interested in my work and like to work with me in staring your next project? 
              That's great! If you're an innovative company that's looking for a reliable intern or 
              entry level front-end web developer, I'd love to hear from you as well.
              Contact me via social media and by email and I will get back to you as soon as possible.
              Thank You!
            </p>
            <a href="https://www.linkedin.com/in/akeeawhite"><i class="fab fa-linkedin-in fa-3x mb-3 sr-contact-1 connect text-custom"></i></a>
            <a href="https://github.com/akeeawhite"><i class="fab fa-github fa-3x mb-3 sr-contact-1 connect text-custom"></i></a>
            <a href="https://codepen.io/akeeawhite"><i class="fab fa-codepen fa-3x mb-3 sr-contact-1 connect text-custom"></i></a>
            <a href="https://twitter.com/akeeawhite"><i class="fab fa-twitter fa-3x mb-3 sr-contact-1 connect text-custom"></i></a>
            <a href="mailto:akeeawhite@gmail.com"><i class="fas fa-envelope fa-3x mb-3 sr-contact-1 connect text-custom"></i></a>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?> 