
<html>
    <?php
        require_once realpath(__DIR__ . "/vendor/autoload.php");
        use Dotenv\Dotenv;
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        //include('inc/loadenv.php');
        include('inc/connection.php');
    ?>
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
            <div id="middle">

                <div class="hidden-xs breadcrumb-container">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>Our Offices</li>
                        </ul>
                    </div>
                </div>

                <div class="section top">
                    <div class="page-head">
                        <div class="container">
                            <h1>Our Offices</h1>
                        </div>
                    </div>
                </div>

                <div class="office-addresses">
                    <div class="service-list container">
                        <div class="row office-address-row">
                            <div class="address-content">
                                <div class="block address address-cambridge">
                                    <div class="image">
                                        <a href="#" target="_blank">
                                            <img src="assets/images/Contact/cambridge.jpg" alt="placeholder" class="img-full">
                                        </a>
                                    </div>
                                    <div class="address-content-cambridge">
                                        <p class="h2"><a href="#">Cambridge Office</a></p>
                                        <p class="p">
                                            Unit 1.31,
                                            <br>
                                            St John's Innovation Centre,
                                            <br>
                                            Cowley Road,
                                            Milton,
                                            <br>
                                            Cambridge,
                                            <br>
                                            CB4 0WS
                                        </p>
                                        <div class="tel"><a href="#">XXXXX XX XX XX</a></div>
                                        <div class="view-more"><a href="#" class="btn btn-web">View More</a></div>
                                    </div>
                                    <div class="map"></div>
                                </div>
                            </div>
                            <div class="address-content">
                                <div class="block address address-wymondham">
                                    <div class="image">
                                        <a href="#" target="_blank">
                                            <img src="assets/images/Contact/wymondham.jpg" alt="placeholder" class="img-full">
                                        </a>
                                    </div>
                                    <div class="address-content-wymondham">
                                    <p class="h2"><a href="#">Wymondham Office</a></p>
                                        <p class="p">
                                            Unit 15,
                                            <br>
                                            Penfold Drive,
                                            <br>
                                            Gateway 11 Business Park,
                                            <br>
                                            Wymondham, Norfolk
                                            <br>
                                            NR18 0WZ
                                        </p>
                                        <div class="tel"><a href="#">XXXXX XX XX XX</a></div>
                                        <div class="view-more"><a href="#" class="btn btn-web">View More</a></div>
                                    </div>
                                    <div class="map"></div>
                                </div>
                            </div>
                            <div class="address-content">
                                <div class="block address address-yarmouth">
                                    <div class="image">
                                        <a href="#" target="_blank">
                                            <img src="assets/images/Contact/yarmouth-2.jpg" alt="placeholder" class="img-full">
                                        </a>
                                    </div>
                                    <div class="address-content-yarmouth">
                                    <p class="h2"><a href="#">Great Yarmouth Office</a></p>
                                        <p class="p">
                                            Suite F23,
                                            <br>
                                            Beacon Innovation Centre,
                                            <br>
                                            Beacon Park, Gorleston,
                                            <br>
                                            Great Yarmouth, Norfolk
                                            <br>
                                            NR31 7RA
                                        </p>
                                        <div class="tel"><a href="#">XXXXX XX XX XX</a></div>
                                        <div class="view-more"><a href="#" class="btn btn-web">View More</a></div>
                                    </div>
                                    <div class="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section bottom container">

                    <div class="row">

                        <div class="form-details">

                            <div>
                                <div class="form-details-container">
                                    <p>
                                        <strong>Email us on:</strong>
                                        <br>
                                    </p>
                                    <p>
                                        <a href="#" class="h3 text-web">sales@netmatters.com</a>
                                    </p>
                                    <p>
                                        <strong>Business Hours:</strong>
                                    </p>
                                    <p>
                                        <strong>Monday &minus; Friday 07:00 &minus; 18:00&nbsp;</strong>
                                    </p>
                                </div>
                            </div>

                            <div>
                                <div class="form-details-container">
                                    <div class="sub-container">
                                        <div class="accordion out-of-hours">
                                            <div class="question out-of-hours">
                                                <h4>
                                                    <a href="#">
                                                        <p class="question-text">
                                                            Out of Hours IT Support 
                                                            <em class="icon-arrow-down2"></em>
                                                        </p>
                                                    </a>
                                                </h4>
                                                <div class="answer initiallyHidden">
                                                    <p>
                                                        Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.
                                                    </p>
                                                    <p>
                                                        <strong>Monday &minus; Friday 18:00 &minus; 22:00</strong>
                                                        <strong>Saturday 08:00 &minus; 16:00</strong>
                                                    </p>
                                                    <p>
                                                        To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-content">
                            <form id="contact-form">
                                <div class="row">
                                    <div class="form-content-field">
                                        <div class="form-content-field--group">
                                            <label for="name" class="required">
                                                Your Name
                                            </label>
                                            <input class="form-control" name="name" type="text" value id="name">
                                        </div>
                                    </div>
                                    <div class="form-content-field">
                                        <div class="form-content-field--group">
                                            <label for="company">
                                                Company Name
                                            </label>
                                            <input class="form-control" name="company" type="text" value id="company">
                                        </div>
                                    </div>
                                    <div class="form-content-field">
                                        <div class="form-content-field--group">
                                            <label for="email" class="required">
                                                Your Email
                                            </label>
                                            <input class="form-control" name="email" type="email" value id="email">
                                        </div>
                                    </div>
                                    <div class="form-content-field">
                                        <div class="form-content-field--group">
                                            <label for="telephone" class="required">
                                                Your Telephone Number
                                            </label>
                                            <input class="form-control" name="telephone" type="text" value id="telephone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-content-field--group">
                                    <label for="message" class="required">
                                        Message
                                    </label>
                                    <textarea class="form-control" name="message" cols="50" rows="10" id="message" maxlength="1000">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                                </div>
                                <div class="form-content-field--group">
                                    <label class="Pretty-checkbox">
                                        <span class="media">
                                            <span class="media-left checkbox-left">
                                                <span class="button">
                                                    <span class="checkbox-action">
                                                        <input type="checkbox" checked>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="media-body">
                                                Please tick this box if you wish to receive marketing information from us. Please see our 
                                                <a href="#" target="_blank">Privacy Policy</a>
                                                 for more information on how we keep your data safe.
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-content-field--group form-label recaptcha-terms">
                                    <span>
                                        This site is protected by reCAPTCHA and the Google 
                                        <a href="#">Privacy Policy</a>
                                        and
                                        <a href="#">Terms of Service</a>
                                        apply.
                                    </span>
                                </div>
                                <div class="action-block">
                                    <button class="btn btn-form">Send Enquiry</button>
                                    <small class="helper-text">
                                        <span class="text-danger">
                                            *
                                        </span>
                                        Fields Required
                                    </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                include('inc/footer.php');
            ?>
        </div>

        <?php
        include('inc/sidebar.php');
        ?>
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/slick/slick.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/contact-form.js"></script>
    </body>
</html>