<header>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">

                <div class="logo">
                    <a href="/" title="Home" rel="home" class="navbar-brand">
                        <img src="{{ asset('themes/custom/peernetics/logo.svg') }}" alt="Home"
                            class="img-fluid d-inline-block align-top" />
                    </a>
                </div>
                <div id="block-navigation" class="block block-blockgroup block-block-groupnavigation header-right">

                    <a class="toggle" href="#">
                        <span></span>
                    </a>
                    <nav role="navigation" aria-labelledby="block-mainnavigation-menu" id="block-mainnavigation"
                        class="block block-menu navigation menu--main navbar navbar-expand-lg">

                        <h2 class="visually-hidden" id="block-mainnavigation-menu">Main navigation</h2>
                        <div class="container-fluid" id="main-nav">
                            <ul class="clearfix d-flex navbar-nav">
                                <li class="nav-item menu-item--expanded dropdown">
                                    <a href="{{ asset('index.html') }}"
                                        class="nav-link dropdown-toggle nav-link--indexphp- is-active"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true"
                                        data-drupal-link-system-path="&lt;front&gt;">Company</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item">
                                            <a href="{{ asset('about') }}" class="nav-link--indexphp-about-peernetics"
                                                data-drupal-link-system-path="node/9">About us</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ asset('roadmap') }}" class="nav-link--indexphp-roadmap"
                                                data-drupal-link-system-path="node/10">Roadmap</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ asset('partners') }}"
                                                class="nav-link--indexphp-backers-and-partners"
                                                data-drupal-link-system-path="node/39">Partners</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="nav-item menu-item--expanded dropdown">
                                    <a href=""
                                        class="nav-link dropdown-toggle nav-link--indexphp-cryptocurrency-payment-gateway"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true"
                                        data-drupal-link-system-path="node/1">Products</a>

                                    <ul class="dropdown-menu" style="margin-top: -24px; ">
                                        <li class="dropdown-item">
                                            <a href="https://loyaltyclub.peernetics.io/"
                                                class="nav-link--indexphp-loyalty-club"
                                                data-drupal-link-system-path="node/21">Loyalty Club</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{route('gaming-club')}}"
                                                class="nav-link--indexphp-merchant-marketing-service"
                                                data-drupal-link-system-path="node/2">Gaming Club</a>
                                        </li>
                                        {{-- <li class="dropdown-item">
                                            <a href="{{asset('merchant-marketing-service')}}"
                                                class="nav-link--indexphp-merchant-marketing-service"
                                                data-drupal-link-system-path="node/2"></a>
                                        </li> --}}

                                        {{-- <li class="dropdown-item">
                                            <a href="{{ asset('cryptocurrency-payment-gateway') }}"
                                                class="nav-link--indexphp-cryptocurrency-payment-gateway"
                                                data-drupal-link-system-path="node/1">Payment Gateway</a>
                                        </li> --}}

                                    </ul>

                                </li>


                                <li class="nav-item menu-item--expanded dropdown">
                                    <a href="" class="nav-link dropdown-toggle nav-link--indexphp-pns-token"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true"
                                        data-drupal-link-system-path="node/8">Token</a>
                                    <ul class="dropdown-menu"  style="top: 120px;">
                                        <li class="dropdown-item">
                                            <a href="{{ asset('pns-token') }}" class="nav-link--indexphp-pns-token"
                                                data-drupal-link-system-path="node/8">PNS Token</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ asset('loyalty-program') }}"
                                                class="nav-link--indexphp-loyalty-program"
                                                data-drupal-link-system-path="node/3">Loyalty Program</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ asset('merchant-program') }}"
                                                class="nav-link--indexphp-merchant-program"
                                                data-drupal-link-system-path="node/13">Merchant Program</a>
                                        </li>
                                        {{-- <li class="dropdown-item ">
                                            <a href="{{ asset('ico') }}" class="nav-link--indexphp-ico"
                                                data-drupal-link-system-path="node/14">ICO</a>
                                        </li> --}}
                                    </ul>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('news') }}" class="nav-link nav-link--indexphp-news"
                                        data-drupal-link-system-path="node/7">News</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('contact-us') }}" class="nav-link nav-link--indexphp-contact-us"
                                        data-drupal-link-system-path="node/15">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <nav role="navigation" aria-labelledby="block-useraccountmenu-menu" id="block-useraccountmenu"
                        class="block block-menu navigation menu--account authentication-wrap">

                        <h2 class="visually-hidden" id="block-useraccountmenu-menu">User account menu</h2>


                        <div class="clearfix nav">
                            <div class="authentication-wrap">
                                <a href="https://loyaltyclub.peernetics.io/login">Sign In<img
                                        src="{{ asset('themes/custom/peernetics/images/Login.svg') }}" alt="Login"></a>
                            </div>

                        </div>

                    </nav>

                </div>


            </div>
        </div>
    </div>
</header>
