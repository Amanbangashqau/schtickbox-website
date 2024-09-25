<?php $page_title = "contact"; ?>
<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Home - Schtick Box</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/royal-preload.css" />
</head>

<body class="royal_preloader">
    <div id="page" class="site">
        <?php include_once("includes/header.php");?>

        <div id="content" class="site-content custom-scontent">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Contact</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>

        <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-left">
                                <div class="ot-heading">
                                    <span>// User Data</span>
                                    <h2 class="main-heading">User Data Usage and Deletion</h2>
                                </div>
                                <div class="space-5"></div>
                                <p>The best way to delete your account is to do so through the app itself. Go to "account" and the bottom option is to delete your account. Deleting your account also deletes any data that you put into the app, we do not keep your email, phone number or files.</p>
                                <p>You can also use the form below and we'll take care of it on our end.  Please allow a few business days for this process to be completed, if using the form below you will receive an email to confirm that you want the account/data to be deleted.</p>
                                <p>Please let us know why you're leaving and how we can improve our user experience.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form id="ajax-form" name="ajax-form" action="https://templates.thememodern.com/engitech/contact.php" method="post" class="wpcf7">
                                <div class="main-form">
                                    <h2>Delete My Account</h2>
                                    <p>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="First Name *" required="">
                                    </p>
                                    <p>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Last Name *" required="">
                                    </p>
                                    <p>
                                        <label for="email"> 
                                            <span class="error" id="err-email">please enter e-mail</span>
                                            <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </label>
                                        <input type="email" name="email" id="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Email *" required="">
                                    </p>
                                    <p>
                                        <input type="text" name="phone" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Phone Number *" required="">
                                    </p>
                                    <p>
                                        <label for="message"></label>
                                        <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Let us know why you're leaving" required=""></textarea>
                                    </p>
                                    <p><button type="submit" id="send" class="form-btn">Subit Message</button></p>
                                    <div class="clear"></div>   
                                    <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                    <div class="error" id="err-state"></div>
                                </div>
                            </form>
                            <div class="clear"></div>
                            <div id="ajaxsuccess">Successfully sent!!</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="faq" class="faq-13 py-0">
                <div class="container">
                    <div class="space-50 d-none d-md-block"></div>
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 text-center">
                            <div class="ot-heading heading-13 px-xl-5">
                                <span>Report</span>
                                <h2 class="main-heading">Reporting Guidelines</h2>
                            </div>
                            <div class="space-10"></div>
                            <div class="space-1"></div>
                            <p class="text-note-13 px-xl-5">If you have received shared content through SchtickBox that you would like to report, please use the form below. </p>
                            <div class="space-30"></div>
                            <div class="space-5"></div>
                            <hr class="hr13 my-0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="contact-form-i9 cfi9-custom">
                                <form id="ajax-form" name="ajax-form" action="https://templates.thememodern.com/engitech/contact.php" method="post" class="wpcf7">
                                    <div class="form-i9">
                                        <h4>How can we help?</h4>
                                        <p>
                                            <input type="email" name="email" id="email" pattern="^.+@.+\.[a-zA-Z]{2,63}$" maxlength="250" autocomplete="off" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email" required="">
                                        </p>
                                        <p>
                                            <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name" required="">
                                        </p>
                                        <p>
                                            <input type="text" name="phone" id="phone" pattern="^[+]?([(][0-9]{1,3}[)][-]?)?([0-9][-]?){3,16}[0-9]$" maxlength="50" autocomplete="off" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Phone Number" required="">
                                        </p>
                                        <p>
                                            <input type="text" name="project" id="project" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Validation key" required="">
                                        </p>
                                        <p>
                                            <textarea>Tell us why you're reporting this content</textarea>
                                        </p>
                                        <div class="space-30"></div>
                                    
                                        <p><button type="submit" id="send" class=" form-btn">Submit</button></p>
                                        <div class="clear"></div>   
                                        <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                        <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                        <div class="error" id="err-state"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="space-50 d-none d-md-block"></div>
                    <div class="space-60"></div>
                </div>
            </section>

           

        <?php include_once("includes/footer.php");?>
   
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
        <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/header-mobile.js"></script>
    <script src="js/royal_preloader.min.js"></script>
    
</body>

</html>