<!DOCTYPE html>
<?php
  require_once realpath(__DIR__ . "/vendor/autoload.php");
  use Dotenv\Dotenv;
  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();
  include('inc/connection.php');
  include('inc/functions.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Netmatters Homepage Clone</title>
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="cookie-policy">
      <div>
        <button type="button" class="btn-cookie-settings btn" onClick="openModal()">Manage Consent</button>
        <div id="cookie-consent" class="modal fade-in">
          <div class="modal-dialogue">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Cookies Policy</h3>
              </div>
              <div class="modal-body clearfix">
                <p>
                  Our website uses cookies. This helps us provide you with a good experience on our website.
                  To see what cookies we use and what they do, and to opt-in on non-essential cookies click
                  &quot;change settings&quot;. For a detailed explanation, click on
                  <a href="#">
                    &quot;Privacy Policy&quot;
                  </a>
                  otherwise click &quot;Accept Cookies&quot; to enter.
                </p>
              </div>
              <div class="modal-footer">
                <div class="row">
                  <div class="modal-spacer modal-spacer--top">
                    <a class="btn btn-change-settings">Change Settings</a>
                  </div>
                  <div class="modal-spacer">
                    <a class="btn btn-accept-cookies">Accept Cookies</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-body">
      <!-- HEADER -->
      <?php
      include('inc/header.php');
      ?>
      <div id="banner" class="home">
          <div class="content">

            <div class="content-item">
              <div class="content-banner">
                <img alt="" class="img-banner one">       
              </div>
              <div class="banner-container container">
                <h2 class="banner-header">The East Of England's Leading Technology Company</h2>
                <p class="banner-paragraph">Performance-driven digital and technology services
                  <br>
                  with complete transparency.</p>
                <a class="btn btn-web btn-lg">
                  Why Choose Us?
                  <em class="icon-arrow-right2 pull-right">
                  </em>
                </a>
              </div> 
            </div>

            <div class="content-banner">
              <img alt="" class="img-banner two">
                <div class="banner-container container">
                    <h2 class="banner-header">Bespoke Software</h2>
                    <p class="banner-paragraph">Delivering expert bespoke software
                      <br>
                       solutions across a range of industries.
                    </p>
                  <a class="btn btn-software btn-lg">FIND OUT MORE
                    <em class="icon-arrow-right2 pull-right">
                    </em>
                  </a>
                </div>
            </div>

            <div class="content-banner">
              <img alt="" class="img-banner three">
              <div class="banner-container container">
                <h2 class="banner-header">IT Support</h2>
                <p class="banner-paragraph">
                  Fast and cost-effective IT support
                  <br>
                  services for your business.</p>
                <a class="btn btn-it btn-lg">FIND OUT MORE
                  <em class="icon-arrow-right2 pull-right">
                  </em>
                </a>
              </div>
            </div>

            <div class="content-banner">
              <img alt="" class="img-banner four">
              <div class="banner-container container">
                <h2 class="banner-header">Digital Marketing</h2>
                <p class="banner-paragraph">
                  Generating your new business through
                  <br>
                  results-driven marketing activities.
                </p>
                <a class="btn btn-digital btn-lg">FIND OUT MORE
                  <em class="icon-arrow-right2 pull-right">
                  </em>
                </a>
              </div>
            </div>

            <div class="content-banner">
              <img alt="" class="img-banner five">
              <div class="banner-container container">
                <h2 class="banner-header">Telecoms Services</h2>
                <p class="banner-paragraph">
                  A new approach to connectivity, see
                  <br>
                  how we can help your business.
                </p>
                <a class="btn btn-telecoms btn-lg">FIND OUT MORE
                  <em class="icon-arrow-right2 pull-right">
                  </em>
                </a>
              </div>
            </div>

            <div class="content-banner">
              <img alt="" class="img-banner six">
              <div class="banner-container container">
                <h2 class="banner-header">Web Design</h2>
                <p class="banner-paragraph">
                  For businesses looking to make a strong
                  <br>
                  and effective first impression.
                </p>
                <a class="btn btn-web btn-lg">FIND OUT MORE
                  <em class="icon-arrow-right2 pull-right">
                  </em>
                </a>
              </div>
            </div>

            <div class="content-banner">
              <img alt="" class="img-banner seven">
              <div class="banner-container container">
                <h2 class="banner-header">Cyber Security</h2>
                <p class="banner-paragraph">
                  Keeping businesses and their customers
                  <br>
                  sensitive information protected.
                </p>
                <a class="btn btn-security btn-lg">FIND OUT MORE
                  <em class="icon-arrow-right2 pull-right">
                  </em>
                </a>
              </div>
            </div>

          </div>
          
      </div>
      <div id="middle">
        <div class="container-section container">
          <div class="service-block">
            <div class="service-list">
              <div class="row">
                <div class="service-title">
                  <h2 class="service-title-header">
                    Our Services
                  </h2>
                  <h1 class="service-view float-right hidden-xs">
                    <a href="#">View Our Work
                      <em class="icon-arrow-right2">
                      </em>
                    </a>
                  </h1>
                </div>
                <div class="service-grid">
                  <div class="service-flex">
                    <div class="service-content-upper service-content-upper--software">
                      <a href="#" class="block software">
                        <span class="icon">
                          <span class="icon-cogs">
                          </span>
                        </span>
                        <span class="service-content-title">
                          Bespoke Software
                        </span>
                        <span class="service-content-description">
                          Bespoke software solutions for all your business needs including integrations and reporting.
                        </span>
                        <span class="service-btn-container">
                          <span class="btn btn-software">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="service-content-upper service-content-upper--it">
                      <a href="#" class="block it">
                        <span class="icon">
                          <span class="icon-display">

                          </span>
                        </span>
                        <span class="service-content-title">
                          IT Support
                        </span>
                        <span class="service-content-description">
                          Fully managed IT support and consultancy packages tailored to meet your exact business needs.
                        </span>
                        <span class="service-btn-container">
                          <span class="btn btn-it">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="service-content-upper service-content-upper--digital">
                      <a href="#" class="block digital">
                        <span class="icon">
                          <span class="icon-bar-graph">
                          </span>
                        </span>
                        <span class="service-content-title">
                          Digital Marketing
                        </span>
                        <span class="service-content-description">
                          Driven brand awareness & ROI through creative digital marketing campaigns.
                        </span>
                        <span class="service-btn-container">
                          <span class="btn btn-digital">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                  </div>

                  <div class="container-lower">
                    <div class="service-content-lower">
                      <a href="#" class="block telecoms">
                        <span class="icon">
                          <span class="icon-phone_in_talk">
                          </span>
                        </span>
                        <span class="service-content-title">
                          Telecoms Services
                        </span>
                        <span class="service-content-description">
                          Business telephony solutions including mobile and connectivity solutions
                        </span>
                        <span class="service-btn-container">
                          <span class="btn btn-telecoms">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="service-content-lower">
                      <a href="#" class="block web">
                        <span class="icon">
                          <span class="icon-embed2">
                          </span>
                        </span>
                        <span class="service-content-title">
                          Web Design
                        </span>
                        <span class="service-content-description">
                          User-centric design for businesses looking to make a lasting impression
                        </span>
                        <span class="service-btn-container">
                          <span class="btn btn-web">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="service-content-lower">
                      <a href="#" class="block security">
                        <span class="icon">
                          <span class="icon-security">
                          </span>
                        </span>
                        <span class="service-content-title">
                          Cyber Security
                        </span>
                        <span class="service-content-description">
                          Prevention, testing, consultancy &amp; breach management services.
                        </span>
                        <span class="service-btn-container">
                          <span class="btn btn-security">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="service-content-lower">
                      <a href="#" class="block dev-training">
                        <span class="icon">
                          <span class="icon-school">
                          </span>
                        </span>
                        <span class="service-content-title">
                          Developer Training
                        </span>
                        <span class="service-content-description">
                          Web design &amp; software training courses designed to secure a job in tech.
                        </span>
                        <span class="service-btn-container">
                          <span class="btn btn-dev-training">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                  </div>

                </div>
                <div class="service-view float-right visible-xs">
                  <h3 class="float-right">
                    <a href="#">
                      View Our Work
                      <em class="icon-arrow-right2">
                      </em>
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section partners">
          <div class="partner">
            <img src="assets/images/Accreditations/google-partner-bw.jpg" alt="Google Partner">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/living_wage_bw.png" alt="Living Wage Employer">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/norfolk_prohelp_bw.png" alt="Norfolk Pro Help">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/investing-in-future-growth-bw.jpg" alt="Business Awards, Investing in future growth winner">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/norfolk-carbon-charter-bw.jpg" alt="Norfolk Carbon Charter Gold">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/PPC_logo-bw.jpg" alt="Prompt Payment Code">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/princess-royal-training-bw.png" alt="Princess Royal Training">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/future-50-bw.jpg" alt="Future 50 Member">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/qms-bw.png" alt="QMS Certification">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/iso-27001-bw.png" alt="ISO Certification">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/skills-of-tomorrow-bw.jpg" alt="Skills of tomorrow">
          </div>
          <div class="partner">
            <img src="assets/images/Accreditations/cyber-essentials-grey.jpg" alt="Cyber Essentials">
          </div>
        </div>
        <div class="welcome-background">
          <div class="container section">
            <div class="row">
              <div class="welcome-content">
                <h2 class="welcome-header-2">
                  <strong>Welcome To Netmatters</strong>
                </h2>
                <p>
                  <strong>
                    Netmatters is a leading
                    <a href="#">Bespoke Software</a>,
                    <a href="#">IT Support</a>, and 
                    <a href="#">Digital Marketing</a> company based in the East of England with offices in
                    <a href="#">Cambridge</a>, 
                    <a href="#">Wymondham</a>, and 
                    <a href="#">Great Yarmouth</a>.
                  </strong>
                </p>
                <p>
                  We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.
                </p>
                <p>
                  We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.
                </p>
                <div>
                  <a href="#" target="_blank" class="btn btn-primary--inverse-1" rel="noopener noreferrer">
                    WHY CHOOSE US?
                    <em class="pull-right icon-arrow-right2">

                    </em>
                  </a>
                    &nbsp;&nbsp;
                    <a href="#" target="_blank" class="btn btn-primary--inverse-2" rel="noopener noreferrer">
                      OUR CULTURE
                      <em class="pull-right icon-arrow-right2">
                      
                      </em>
                    </a>
                </div>
              </div>
              <div class="clients">
                <h2 class="client-header-2">What Our Clients Think</h2>
                <div class="icon-star-full"></div>
                <div class="icon-star-full"></div>
                <div class="icon-star-full"></div>
                <div class="icon-star-full"></div>
                <div class="icon-star-full"></div>
                <p>
                  <span class="client-quote">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</span>
                </p>
                <p>
                  <span class="client-quote-author">
                    Eleanor Bishop, Head of Marketing - 
                    <a href="#">Ashcroft Partnership LLP</a>
                  </span>
                </p>
                <div class="btn-flexed">
                  <a href="#" target="_blank" class="btn btn-primary btn-google" rel="noopener noreferrer">
                    GOOGLE REVIEWS
                    <em class="pull-right icon-arrow-right2">
                      
                    </em>
                  </a>

                  <a href="#" target="_blank" class="btn btn-primary btn-trustpilot" rel="noopener noreferrer">
                    TRUSTPILOT REVIEWS
                    <em class="pull-right icon-arrow-right2">
                      
                    </em>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="article">
            <div class="latest-article">
              <div class="article-title">

                <div class="container">
                  <div class="container heading-container">
                    <h2 class="heading-article">
                      <strong>Latest News</strong>
                    </h2>
                    <h3 class="heading-article-more float-right hidden-xs">
                      <a href="#">
                        View All
                        <strong>
                          <em class="icon-arrow-right2"></em>
                        </strong>
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
                <div class="section container">
                  <div>
                    <div class="article-list">
                      <div class="row">
                        <div class="article-list-item">

                          <?php
                          get_news_cards(3);
                          ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="container latest-view visible-xs">
                <h3 class="float-right">
                  <a href="#">
                    View All
                    <strong>
                      <em class="icon-arrow-right2"></em>
                    </strong>
                  </a>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clients-container">
        <div class="section clients-banner">

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>Black Swan Care Group</h3>
                <p>
                  Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on
                  putting the needs of their residents first.
                </p>
                <a href="#" class="btn btn-software">
                  View Our Case Study
                  <em class="icon-arrow-right2">
                  </em>
                </a>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/black_swan_logo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box box-no-description">
                <h3>Xupes</h3>
                <p>
                  Xupes.
                </p>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/xupes_logo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>BEAT</h3>
                <p>
                  The UK's eating disorder charity founded in 1989.
                </p>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/beat_logo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box box-no-description">
                <h3>Survey Solutions</h3>
                <p>
                  Survey Solutions.
                </p>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/survey_solutions_logo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>Girl Guiding Anglia</h3>
                <p>
                  Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in
                  the UK.
                </p>
                <a href="#" class="btn btn-it">
                  View Our Case Study
                  <em class="icon-arrow-right2">
                  </em>
                </a>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/girl_guides_anglia_logo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>Sweetzy</h3>
                <p>
                  Sweetzy are an online sweets retailer, based in Wymondham.
                </p>
                <a href="#" class="btn btn-digital">
                  View Our Case Study
                  <em class="icon-arrow-right2">
                  </em>
                </a>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/sweetzy_logo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box box-no-description">
                <h3>Howes Percival</h3>
                <p>
                  Howes Percival.
                </p>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/howespercivallogo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>GDST</h3>
                <p>
                  The  
                  <a href="#">Girl&apos;s Day School Trust (GDST) </a>
                  is the UK&apos;s leading family of 25 independant girl&apos;s schools.
                </p>
                <a href="#" class="btn btn-digital">
                  View Our Case Study
                  <em class="icon-arrow-right2">
                  </em>
                </a>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/girls_day_school_trust_logob.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>Ashcroft Partnership LLP</h3>
                <p>
                  Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and
                  are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and
                  families.
                </p>
                <a href="#" class="btn btn-web">
                  View Our Case Study
                  <em class="icon-arrow-right2">
                  </em>
                </a>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>One Traveller</h3>
                <p>
                  <a href="#">One Traveller</a>
                  , founded in 2007, is a leading provider of holidays for over 50s.
                </p>
                <a href="#" class="btn btn-web">
                  View Our Case Study
                  <em class="icon-arrow-right2">
                  </em>
                </a>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/onetravellerlogo_white_figuire.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>Searles Leisure Resort</h3>
                <p>
                  Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday
                  resort for families.
                </p>
                <a href="#" class="btn btn-digital">
                  View Our Case Study
                  <em class="icon-arrow-right2">
                  </em>
                </a>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/searles_logo.jpg" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>Busseys</h3>
                <p>
                  One of the UK&apos;s leading Ford dealerships.
                </p>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/busseys_logo.png" alt="">
            </div>
          </div>

          <div class="client">
            <div class="description">
              <div class="box">
                <h3>Crane Garden Buildings</h3>
                <p>
                  Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in
                  the UK.
                </p>
                <div class="arrow">
                </div>
              </div>
            </div>
            <div class="client-image">
              <img src="assets/images/Clients/crane_logo.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <?php
        include('inc/footer.php');

      ?>
    </div>
<!-- FOOTER -->
      <?php
       include('inc/sidebar.php');
      ?>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>



    <!-- This section is wrapped in a div called container
    <div id="container">
      <div id="header">
        <header>This will contain the header, which includes the Netmatters logo, A support anchor, A contact anchor, A form for a search bar, and a Hamburger
          <div class="inner">
            <div class="container">

            </div>
          </div>
        </header>
      </div>
    </div>
    -->