    <!-- Loader -->
    <div class="loader" id="loader-fade">
        <div class="dot-container">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" />
                </filter>
            </defs>
        </svg>
    </div>
    <!-- Loader ends -->

    <!-- Header start -->
    <?php if ((isset($_SESSION['shop']))) : ?>
        <section class="top-header cursor-light">
            <div class="row no-gutters">
                <div class="col-6 col-lg-4">
                    <div class="slider-icons">
                        <ul class="slider-social banner-social d-flex">
                            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-facebook-f"></i> </a></li>
                            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-twitter"></i> </a></li>
                            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i> </a></li>
                            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-instagram"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-4 d-flex align-items-center justify-content-end justify-content-lg-center">
                    <a class="menu_bars menu-bars-setting sidemenu_toggle link mr-3 mr-lg-0">
                        <div class="menu-lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "fot")) : ?>
                        <a href="tel:+36706315068" class="btn-setting link btn-hvr-up btn-hvr-whatsapp color-white mr-lg-4 d-none d-lg-inline-block"><i class="fab fa-whatsapp"></i> +36706315068</a>
                    <?php endif ?>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "dunakeszi")) : ?>
                        <a href="tel:+36706314672" class="btn-setting link btn-hvr-up btn-hvr-whatsapp color-white mr-lg-4 d-none d-lg-inline-block"><i class="fab fa-whatsapp"></i> +36706314672</a>
                    <?php endif ?>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "igbdunakeszi")) : ?>
                        <a href="tel:+36708842082" class="btn-setting link btn-hvr-up btn-hvr-whatsapp color-white mr-lg-4 d-none d-lg-inline-block"><i class="fab fa-whatsapp"></i> +36708842082</a>
                    <?php endif ?>
                </div>
            </div>
        </section>
        <header class="cursor-light">
            <nav class="navbar navbar-top-default navbar-expand-lg nav-three-circles bottom-nav nav-box-shadow no-animation">
                <div class="container-fluid">
                    <a class="logo ml-lg-1" href="javascript:void(0)">
                        <?php if ($_SESSION["shop"] == "fot") : ?>
                            <img src="karaKrisz/img/logofull.png" class="logo-default logo-default--formating" alt="logo" title="Logo">
                        <?php endif ?>
                        <?php if ($_SESSION["shop"] == "dunakeszi") : ?>
                            <img src="karaKrisz/img/logofull.png" class="logo-default logo-default--formating" alt="logo" title="Logo">
                        <?php endif ?>
                        <?php if ($_SESSION["shop"] == "igbdunakeszi") : ?>
                            <img src="karaKrisz/img/logoigb.jpg" class="logo-default" alt="logo" title="Logo">
                        <?php endif ?>
                    </a>
                    <div class="collapse navbar-collapse d-none d-lg-block">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item"> <a href="#home" class="scroll nav-link link">R??lunk</a></li>
                            <li class="nav-item"> <a href="#about" class="scroll nav-link link">Kv??z</a></li>
                            <li class="nav-item"> <a href="#work" class="scroll nav-link link">Gall??ria</a></li>
                            <li class="nav-item"> <a href="#pricing" class="scroll nav-link link">Csomagok</a></li>
                            <li class="nav-item"> <a href="#clients" class="scroll nav-link link">??zleteink</a></li>
                            <li class="nav-item"> <a href="#blog" class="scroll nav-link link">Szerviz</a></li>
                            <li class="nav-item"> <a href="#contact" class="scroll nav-link link">Kapcsolat</a></li>
                        </ul>
                    </div>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "fot")) : ?>
                        <a href="tel:+36706315068" class="btn-setting link btn-hvr-up btn-hvr-whatsapp color-white mr-lg-4 d-none d-lg-inline-block"><i class="fab fa-whatsapp"></i> +36706315068</a>
                    <?php endif ?>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "dunakeszi")) : ?>
                        <a href="tel:+36706314672" class="btn-setting link btn-hvr-up btn-hvr-whatsapp color-white mr-lg-4 d-none d-lg-inline-block"><i class="fab fa-whatsapp"></i> +36706314672</a>
                    <?php endif ?>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "igbdunakeszi")) : ?>
                        <a href="tel:+36708842082" class="btn-setting link btn-hvr-up btn-hvr-whatsapp color-white mr-lg-4 d-none d-lg-inline-block"><i class="fab fa-whatsapp"></i> +36708842082</a>
                    <?php endif ?>
                    <!-- side menu open button -->
                    <div class="menu-btn">
                        <a class="menu_bars menu-bars-setting animated-wrap sidemenu_toggle">
                            <div class="menu-lines animated-element">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <!-- Side Menu -->
                </div>
            </nav>
        <?php endif ?>
        <!-- side menu open button -->
        <!--    <a class="menu_bars menu-bars-setting animated-wrap sidemenu_toggle d-lg-inline-block d-none">-->
        <!--        <div class="menu-lines animated-element">-->
        <!--            <span></span>-->
        <!--            <span></span>-->
        <!--            <span></span>-->
        <!--        </div>-->
        <!--    </a>-->
        <!-- Side Menu -->
        <div class="side-menu center">
            <div class="quarter-circle">
                <div class="menu_bars2 active" id="btn_sideNavClose">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="inner-wrapper justify-content-center">
                <div class="col-md-12 text-center">
                    <a href="javascript:void(0)" class="logo-full mb-4">
                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "fot")) : ?>
                            <img src="karaKrisz/img/logoigb.jpg" class="tp-caption__img link" alt="logo">
                        <?php endif ?>
                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "dunakeszi")) : ?>
                            <img src="karaKrisz/img/logofull.png" class="tp-caption__img link tp-caption__img--width-formating" alt="logo">
                        <?php endif ?>
                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "igbdunakeszi")) : ?>
                            <img src="karaKrisz/img/logofull.png" class="tp-caption__img tp-caption__img--width-formating link" alt="logo">
                        <?php endif ?>
                    </a>
                </div>
                <nav class="side-nav m-0">
                    <ul class="navbar-nav flex-lg-row">
                        <li class="nav-item"> <a href="#home" class="scroll nav-link link">R??lunk</a></li>
                        <li class="nav-item"> <a href="#about" class="scroll nav-link link">Kv??z</a></li>
                        <li class="nav-item"> <a href="#work" class="scroll nav-link link">Gall??ria</a></li>
                        <li class="nav-item"> <a href="#pricing" class="scroll nav-link link">Csomagok</a></li>
                        <li class="nav-item"> <a href="#clients" class="scroll nav-link link">??zleteink</a></li>
                        <li class="nav-item"> <a href="#blog" class="scroll nav-link link">Szerviz</a></li>
                        <li class="nav-item"> <a href="#contact" class="scroll nav-link link">Kapcsolat</a></li>
                    </ul>
                </nav>

                <div class="side-footer text-white w-100">
                    <ul class="social-icons-simple">
                        <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-facebook-f color-white"></i> </a> </li>
                        <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-instagram color-white"></i> </a> </li>
                        <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-twitter color-white"></i> </a> </li>
                    </ul>
                    <p class="text-white">&copy; 2020 karaKrisz. Minden jog fenttarva</p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!--Side Menu-->
        </header>
        <!-- Header end -->