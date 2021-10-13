<body id="body">

    <!--
  Start Preloader
  ==================================== -->
    <div id="preloader">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
  End Preloader
  ==================================== -->




    <!--
Fixed Navigation
==================================== -->
    <header class="navigation fixed-top">
        <div class="container">
            <!-- main nav -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- logo -->
                <a class="navbar-brand logo" href="index.html">
                    <img class="logo-default" src="<?= base_url() ?>assets/front/images/pdjember.png" alt="logo" height="75" width="75" />
                    <img class="logo-white" src="<?= base_url() ?>assets/front/images/pdjember.png" alt="logo" height="75" width="75" />
                </a>
                <!-- /logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Home
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="service.html">Services</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="team.html">Team</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="404.html">404 Page</a>
                                <a class="dropdown-item" href="blog.html">Blog Page</a>
                                <a class="dropdown-item" href="single-post.html">Blog Single Page</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn btn-primary" href="<?= base_url('User/Auth') ?>">Log In</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>