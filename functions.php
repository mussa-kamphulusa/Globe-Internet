<?php
    
    function createHeader()
    {
        echo <<<_END
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Globe Internet Malawi | Home Page</title>
                <link type="text/css" href="../../tools/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
                <link type="text/css" href="css/style.css" rel="stylesheet" crossorigin="anonymous">
                <link type="text/css" href="../../tools/fontawesome-free-6.1.2-web/css/all.min.css" rel="stylesheet">
            </head>
            <body>

                <!-- <h1 class="text-center my-0 bg-dark text-danger" id="top">Globe Internet Limited <small id="italic"> Bringing the world closer</small></h1> -->
                <!-- Navigation -->
                <nav class="navbar navbar-expand-xl navbar-dark bg-dark border-top border-danger">

                    <!-- Navigation bar -->
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo4.png" class="img-fluid" id="site-logo" style="width: 70px;">
                        </a>

                        <!-- Navigation toggle -->
                        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#site-nav">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Side navigation -->
                        <div class="offcanvas offcanvas-end text-bg-dark" id="site-nav">
                            <div class="offcanvas-header">
                                <img src="images/logo4.png" style="width: 100px">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
                            </div>

                            <!-- Navigation menu -->
                            <div class="offcanvas-body">

                                <!-- Navigatino links -->
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about-us/index.html">About Us</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products & Services</a>
                                        <ul class="dropdown-menu collapsible-menu">
                                            <li><a class="dropdown-item" href="enterprise/index.html">Business Services</a></li>
                                            <li><a class="dropdown-item" href="residential/index.html">Individual Services</a></li>
                                            <li><a class="dropdown-item" href="value-added-services/index.html">Value Added Services</a></li>
                                            <li><a class="dropdown-item" href="category/other-products/index.html">Other Products</a></li>
                                            <li><a class="dropdown-item" href="downloads/index.html">Downloads</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="package-usage/index.html">Package Usage</a></li>
                                    <li class="nav-item"><a class="nav-link" href="coverage/index.html">Coverage</a></li>
                                    <li class="nav-item"><a class="nav-link" href="press-room/index.html">Press Room</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog/index.html">Blog</a></li>
                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Contact Us</a>
                                        <ul class="dropdown-menu collapsible-menu">
                                            <li><a class="dropdown-item" href="contact-us/index.html">Enquiries</a></li>
                                            <li><a class="dropdown-item" href="helpdesk.globemw.net">Help Desk</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="buyonline.html">Buy Online</a></li>
                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Webmail</a>
                                        <ul class="dropdown-menu collapsible-menu">
                                            <li><a class="dropdown-item" href="hiru.globenetmw.html">Hiru - MailServer</a></li>
                                            <li><a class="dropdown-item" href="manel.globenetmw.html">Manel - MailServer</a></li>
                                            <li><a class="dropdown-item" href="sigiri.globenetmw.html">Sigiri - MailServer</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Covid-19</a>
                                        <ul class="dropdown-menu collapsible-menu">
                                            <li><a class="dropdown-item" href="cashless-payments/index.html">Cashless Payment</a></li>
                                            <li><a class="dropdown-item" href="covid-19-safety-measures/index.html">Safety Measures</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Kawawa Bundles</a>
                                        <ul id="terms-conditions" class="dropdown-menu collapsible-menu">
                                            <li><a class="dropdown-item" href="terms-conditions/index.html">Terms & Conditions</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navigation search container -->
                <div class="container-fluid py-1 px-3 bg-dark">
                    <!-- Navigation search form -->
                    <form>
                        <div class="input-group my-2">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search">
                            <button type="submit" class="btn btn-outline-danger">Search</button>
                        </div>
                    </form>
                </div>
            _END;
    }

    function createFooter()
    {
        echo <<<_END
        <!-- Footer -->
        <div class="container-fluid text-bg-dark p-4 pb-2 mb-0">
            <div class="row" id="footer">
                <div class="col-sm-12 col-md text-center m-2 p-3 shadow-lg">
                    <p class="bold">FIND US</p>
                    <address>
                        Citrona House,<br>
                        (Old Uniliver offices),<br>
                        Along Tsirana Road,<br>
                        P.O. Box 5025,<br>
                        Limbe, Malawi
                    </address>
                </div>
    
                <div class="col-sm-12 col-md text-center m-2 p-3 shadow-lg">
                    <p class="bold text-center">SOCIAL MEDIA</p>
                    <div class="social-icons">
                        <!-- <a href="https://www.facebook.com/globeinternet/"><i class="social-icon fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/globemalawi"><i class="social-icon fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/globe_internet_malawi/"><i class="social-icon fab fa-instagram"></i></a> -->
                        <a href="https://www.facebook.com/globeinternet/" class="social-icon fab fa-facebook-f"></a>
                        <a href="https://twitter.com/globemalawi" class="social-icon fab fa-twitter"></a>
                        <a href="https://www.instagram.com/globe_internet_malawi/" class="social-icon fab fa-instagram"></a>
                    </div>
                </div>
    
                <div class="col-sm-12 col-md text-center m-2 p-3 shadow-lg">
                    <a class="plain" href="https://webmail.globemw.net">
                        <img src="images/glmax.png">
                        <p class="mb-0 mt-2">GlobeMW Webmail</p><span>Access Globe Webmail.</span>
                </div>
    
                <div class="col-sm-12 col-md text-center m-2 p-3 shadow-lg">
                    <a class="plain" href="https://webmail.globemw.net">
                        <img src="images/glmax.png">
                        <p class="mb-0 mt-2">GlobeMax4G Webmail</p><span>Access GlobeMax4G Webmail.</span>
                </div>
    
                <div class="col-sm-12 col-md text-center m-2 p-3 shadow-lg">
                    <a class="plain" href="helpdesk.globemw.net">
                        <img src="images/helpdesk.png">
                        <p class="mb-0 mt-2">Help Desk Get</p><span>technical support</span>
                    </a>
                </div>
    
                <div class="col-sm-12 col-md text-center m-2 p-3 shadow-lg">
                    <a class="plain" href="speedtest/index.html">
                        <img src="images/spt.png">
                        <p class="mb-0 mt-2">Speed Test</p><span>Test your internet speed.</span>
                    </a>
                </div>
            </div>
            <p id="call" class="text-center w-100 shadow-lg py-3">Call: (+265) 0996 841 044; Fax (+265) 01 841 854 | Copyrights &copy; 2023 Globe Internet Limited, Malawi</p>
        </div>
        <a id="scroll-to-top" href="#top" title="Back To Top">
            <img src="images/up.png">
        </a>
    
        <script type="text/javascript" src="../../tools/jquery-3.6.1/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="../../tools/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    
    </body>
    </html>
    _END;
    }

    createHeader();
    createFooter();
?>