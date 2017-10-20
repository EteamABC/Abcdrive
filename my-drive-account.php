<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">
  <?php include('header.php'); ?>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default rd-navbar-light" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.html"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images\abcdrive\Logo\abc-drive-logo-01.jpg' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="index.html"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images\abcdrive\Logo\abc-drive-logo-01.jpg' alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form class="form-search rd-search" action="search-results.html" method="GET">
                        <div class="form-group">
                          <label class="form-label form-search-label form-label-sm" for="rd-navbar-form-search-widget">Search</label>
                          <input class="form-search-input input-sm form-control #{inputClass}" id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="form-search-submit" type="submit"><span class="mdi mdi-magnify"></span></button>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="index.php"><span>Home</span></a>
                        <ul class="rd-navbar-dropdown"> 
                        </ul>
                      </li>

                      <li><a href="#"><span>About Us</span><span class="rd-navbar-label text-middle label-custom label-danger label-xs-custom label-rounded-custom label"></span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="about-us.php"><span class="text-middle">About Us</span><span class="rd-navbar-label label-custom label-danger label-xs-custom label-rounded-custom label"></span></a>
                          </li>
                          <li><a href="faq.php"><span class="text-middle">FAQ's</span></a>  
                          </li>
                          <li><a href="#"><span class="text-middle">How it works</span></a> 
                          </li> 
                        </ul>
                      </li>

                      <li><a href="#"><span>Offerings</span></a>
                        <div class="rd-navbar-megamenu">
                          <div class="row">
                            <ul class="col-lg-3">
                              <li><a href="404.html"><span class="rd-navbar-icon mdi mdi-bullhorn"></span><span class="text-middle">404 Page</span></a></li>
                              <li><a href="503.html"><span class="rd-navbar-icon mdi mdi-bullhorn"></span><span class="text-middle">503 Page</span></a></li>
                              <li><a href="about-us.html"><span class="rd-navbar-icon mdi mdi-account-multiple"></span><span class="text-middle">About Us</span></a></li>
                              <li><a href="about-us-variant-2.html"><span class="rd-navbar-icon mdi mdi-account-multiple"></span><span class="text-middle">About Us v2</span></a></li>
                              <li><a href="about-me.html"><span class="rd-navbar-icon mdi mdi-account-convert"></span><span class="text-middle">About Me</span></a></li>
                              <li><a href="about-me-variant-2.html"><span class="rd-navbar-icon mdi mdi-account-convert"></span><span class="text-middle">About Me v2</span></a></li>
                              <li><a href="services.html"><span class="rd-navbar-icon mdi mdi-folder-outline"></span><span class="text-middle">Services</span></a></li>
                              <li><a href="our-team.html"><span class="rd-navbar-icon mdi mdi-account-switch"></span><span class="text-middle">Our Team</span></a></li>
                            </ul>
                            <ul class="col-lg-3">
                              <li><a href="our-team-variant-2.html"><span class="rd-navbar-icon mdi mdi-account-switch"></span><span class="text-middle">Our Team v2</span></a></li>
                              <li><a href="team-member.html"><span class="rd-navbar-icon mdi mdi-account-box-outline"></span><span class="text-middle">Team Member</span></a></li>
                              <li><a href="team-member-variant-2.html"><span class="rd-navbar-icon mdi mdi-account-box-outline"></span><span class="text-middle">Team Member v2</span></a></li>
                              <li><a href="careers.html"><span class="rd-navbar-icon mdi mdi-account-check"></span><span class="text-middle">Careers</span></a></li>
                              <li><a href="categories.html"><span class="rd-navbar-icon mdi mdi-filter-variant"></span><span class="text-middle">Categories</span></a></li>
                              <li><a href="faq.html"><span class="rd-navbar-icon mdi mdi-help-circle"></span><span class="text-middle">Faq</span></a></li>
                              <li><a href="faq-variant-2.html"><span class="rd-navbar-icon mdi mdi-help-circle"></span><span class="text-middle">Faq v2</span></a></li>
                              <li><a href="faq-variant-3.html"><span class="rd-navbar-icon mdi mdi-help-circle"></span><span class="text-middle">Faq v3</span></a></li>
                              <li><a href="faq-variant-4.html"><span class="rd-navbar-icon mdi mdi-help-circle"></span><span class="text-middle">Faq v4</span></a></li>
                            </ul>
                            <ul class="col-lg-3">
                              <li><a href="contact-me.html"><span class="rd-navbar-icon mdi mdi-contact-mail"></span><span class="text-middle">Contact Me</span></a></li>
                              <li><a href="contact-us.html"><span class="rd-navbar-icon mdi mdi-map-marker-circle"></span><span class="text-middle">Contact Us</span></a></li>
                              <li><a href="contact-us-variant-2.html"><span class="rd-navbar-icon mdi mdi-map-marker-circle"></span><span class="text-middle">Contact Us v2</span></a></li>
                              <li><a href="get-in-touch.html"><span class="rd-navbar-icon mdi mdi-map-marker-circle"></span><span class="text-middle">Get In Touch</span></a></li>
                              <li><a href="contact-us-variant-3.html"><span class="rd-navbar-icon mdi mdi-map-marker-circle"></span><span class="text-middle">Contact Us v3</span></a></li>
                              <li><a href="sitemap.html"><span class="rd-navbar-icon mdi mdi-sitemap"></span><span class="text-middle">Sitemap</span></a></li>
                              <li><a href="coming-soon.html"><span class="rd-navbar-icon mdi mdi-clock-fast"></span><span class="text-middle">Coming Soon</span></a></li>
                              <li><a href="search-results.html"><span class="rd-navbar-icon mdi mdi-magnify"></span><span class="text-middle">Search Results</span></a></li>
                              <li><a href="login.html"><span class="rd-navbar-icon mdi mdi-login"></span><span class="text-middle">Login</span></a></li>
                            </ul>
                            <ul class="col-lg-3">
                              <li><a href="register.html"><span class="rd-navbar-icon mdi mdi-account-multiple-outline"></span><span class="text-middle">Register</span></a></li>
                              <li><a href="register-login.html"><span class="rd-navbar-icon mdi mdi-account-multiple-outline"></span><span class="text-middle">Login / Register</span></a></li>
                              <li><a href="pricing.html"><span class="rd-navbar-icon mdi mdi-certificate"></span><span class="text-middle">Pricing</span></a></li>
                              <li><a href="make-an-appointment.html"><span class="rd-navbar-icon mdi mdi-calendar-clock"></span><span class="text-middle">Appointment</span></a></li>
                              <li><a href="make-an-appointment-variant-2.html"><span class="rd-navbar-icon mdi mdi-calendar-clock"></span><span class="text-middle">Appointment v2</span></a></li>
                              <li><a href="maintenance.html"><span class="rd-navbar-icon mdi mdi-wrench"></span><span class="text-middle">Maintenance</span></a></li>
                              <li><a href="clients.html"><span class="rd-navbar-icon mdi mdi-wrench"></span><span class="text-middle">Clients</span></a></li>
                              <li><a href="under-construction.html"><span class="rd-navbar-icon mdi mdi-worker"></span><span class="text-middle">Under Construction</span></a></li>
                              <li><a href="privacy.html"><span class="rd-navbar-icon mdi mdi-file-outline"></span><span class="text-middle">Privacy Policy</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li><a href="portfolio-grid-3-columns.html"><span>Rewards</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="Rewards.php"><span class="text-middle">Merchandise Rewards</span></a>
                            
                          </li>
                          <li><a href="#"><span class="text-middle">Grid Layout</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="portfolio-grid-3-columns.html"><span class="text-middle">Horizontal</span></a>
                              </li>
                              <li><a href="portfolio-grid-3-columns-vertical.html"><span class="text-middle">Vertical</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><span class="text-middle">Masonry Layout</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="portfolio-masonry-3-columns.html"><span class="text-middle">Horizontal</span></a>
                              </li>
                              <li><a href="portfolio-masonry-3-columns-vertical.html"><span class="text-middle">Vertical</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><span class="text-middle">Wide Layout</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="portfolio-wide-3-columns.html"><span class="text-middle">Horizontal</span></a>
                              </li>
                              <li><a href="portfolio-wide-3-columns-vertical.html"><span class="text-middle">Vertical</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><span class="text-middle">Fullwidth Layout</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="portfolio-fullwidth-3-columns.html"><span class="text-middle">3 Columns</span></a>
                              </li>
                              <li><a href="portfolio-fullwidth-4-columns.html"><span class="text-middle">4 Columns</span></a>
                              </li>
                              <li><a href="portfolio-fullwidth-5-columns.html"><span class="text-middle">5 Columns</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="portfolio-fullscreen-3-columns.html"><span class="text-middle">Fullscreen Layout</span></a>
                          </li>
                          <li><a href="#"><span class="text-middle">Custom Effects</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="portfolio-classic-effect.html"><span class="text-middle">Classic Effect</span></a>
                              </li>
                              <li><a href="portfolio-zoe-effect.html"><span class="text-middle">Zoe Effect</span></a>
                              </li>
                              <li><a href="portfolio-winston-effect.html"><span class="text-middle">Winston Effect</span></a>
                              </li>
                              <li><a href="portfolio-josip-effect.html"><span class="text-middle">Josip Effect</span></a>
                              </li>
                              <li><a href="portfolio-janes-effect.html"><span class="text-middle">Janes Effect</span></a>
                              </li>
                              <li><a href="portfolio-apollo-effect.html"><span class="text-middle">Apollo Effect</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><span class="text-middle">Single Project</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="portfolio-single-project-default.html"><span class="text-middle">Default</span></a>
                              </li>
                              <li><a href="portfolio-single-project-variant-2.html"><span class="text-middle">Variant 2</span></a>
                              </li>
                              <li><a href="portfolio-single-project-variant-3.html"><span class="text-middle">Variant 3</span></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li><a href="blog-default-left-sidebar.html"><span>My Account</span></a>
                        <ul class="rd-navbar-dropdown">

                          <li><a href="login.php"><span class="text-middle">Login</span></a> 
                          <li><a href="#"><span class="text-middle">Registration Form</span></a>
                          <li><a href="user-data.php"><span class="text-middle">User Data</span></a> 
                            
                          </li>
                        </ul>
                      </li>

                      <li><a href="shop-grid-left-sidebar.html"><span>Shop</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#"><span class="text-middle">Grid View</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="shop-grid-no-sidebar.html"><span class="text-middle">No Sidebar</span></a>
                              </li>
                              <li><a href="shop-grid-left-sidebar.html"><span class="text-middle">Left Sidebar</span></a>
                              </li>
                              <li><a href="shop-grid-right-sidebar.html"><span class="text-middle">Right Sidebar</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><span class="text-middle">List View</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="shop-list-no-sidebar.html"><span class="text-middle">No Sidebar</span></a>
                              </li>
                              <li><a href="shop-list-left-sidebar.html"><span class="text-middle">Left Sidebar</span></a>
                              </li>
                              <li><a href="shop-list-right-sidebar.html"><span class="text-middle">Right Sidebar</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="#"><span class="text-middle">Single Product</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="shop-single-product-no-sidebar.html"><span class="text-middle">No Sidebar</span></a>
                              </li>
                              <li><a href="shop-single-product-left-sidebar.html"><span class="text-middle">Left Sidebar</span></a>
                              </li>
                              <li><a href="shop-single-product-right-sidebar.html"><span class="text-middle">Right Sidebar</span></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="shop-cart.html"><span class="text-middle">Cart View</span></a>
                          </li>
                          <li><a href="shop-checkout.html"><span class="text-middle">Checkout</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="shop-checkout.html"><span class="text-middle">Default</span></a>
                              </li>
                              <li><a href="shop-checkout-variant-2.html"><span class="text-middle">Variant 2</span></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="contact-us.php"><span>Contact Us</span></a>
                      </li>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#"><span></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                    </div>
                    <!--button(type="submit").rd-navbar-search-form-submit.mdi.mdi-magnify-->
                  </form>
                  <!--div.rd-navbar-live-search-results-->
                  <!--button(data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-inner, .rd-navbar-live-search-results").rd-navbar-search-toggle-->
                  <!--  span-->
                </div>
                <!--RD Navbar shop-->
                <div class="rd-navbar-cart-wrap"><a class="rd-navbar-cart mdi" href="#" data-rd-navbar-toggle=".rd-navbar-cart-dropdown"><span></span></a>
                  <div class="rd-navbar-cart-dropdown">
                    <ul class="rd-navbar-list-products">
                      <li>
                        <div class="rd-navbar-product-image"><img src="images/shop/product-01-60x60.png" alt=""/></div>
                        <div class="rd-navbar-product-caption">
                          <h6 class="rd-navbar-product-title"><a href="shop-single-product-left-sidebar.html">Fashion model new</a></h6>
                          <p class="rd-navbar-product-price">$129.99</p>
                        </div><a class="mdi mdi-window-close rd-navbar-product-remove" href="#"></a>
                      </li>
                      <li>
                        <div class="rd-navbar-product-image"><img src="images/shop/product-01-60x60-3.png" alt=""/></div>
                        <div class="rd-navbar-product-caption">
                          <h6 class="rd-navbar-product-title"><a href="shop-single-product-left-sidebar.html">Fashion model new 2</a></h6>
                          <p class="rd-navbar-product-price">$69.99</p>
                        </div><a class="mdi mdi-window-close rd-navbar-product-remove" href="#"></a>
                      </li>
                    </ul>
                    <div class="rd-navbar-cart-total">
                      <h6 class="rd-navbar-cart-total-title">Cart subtotal</h6><span class="rd-navbar-cart-total-price">$199.98</span>
                    </div>
                    <div class="text-center"><a class="btn btn-rect btn-sm btn-primary btn-icon btn-icon-left" href="shop-cart.html"><span class="icon mdi mdi-lock"></span>Go to checkout</a></div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-account-convert icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">My Drive Account</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>My Drive Account
                </li>
              </ul>
            </div>
          </div>
        </div>
        <svg class="svg-triangle-bottom" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <lineargradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#{startColor};stop-opacity:1;"></stop>
              <stop offset="100%" style="stop-color:#{endColor};stop-opacity:1;"></stop>
            </lineargradient>
          </defs>
          <polyline points="0,0 60,0 29,29" fill="url(##{id})"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!-- Who i Am-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>John Smith</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center offset-top-20">
              <div class="cell-sm-9 cell-md-6">
                        <!-- Member Block Type-2-->
                        <div class="center-block"><img class="img-circle" src="images/users/user-eugene-newman-140x140.jpg" alt=""></div>
                        <h4>Welcome, <br/> to your DRIVE account</h4>
                        <p>I am a jack of all trades when it comes to web design, app development and content marketing. With 12 years of experience I am proud to be called a web designer.</p>
                <ul class="list-inline list-inline-lg list-inline-dashed list-inline-dashed-wide list-inline-picton-blue">
                  <li class="big"><a class="text-bold text-uppercase fa-facebook-f" href="#"><span class="veil reveal-md-inline-block">Facebook</span></a></li>
                  <li class="big"><a class="text-bold text-uppercase fa-twitter" href="#"><span class="veil reveal-md-inline-block">Update data</span></a></li>
                  <li class="big"><a class="text-bold text-uppercase fa-instagram" href="#"><span class="veil reveal-md-inline-block">Change my password</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-- What i Do-->
        <section class="section-98 section-sm-110 context-dark" style="background: #191919 url(images/index-09.png);">
          <div class="shell">
            <h1>What it Does?</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center offset-top-0">
              <div class="cell-sm-10">
                <p>My Drive Account enables you to change your account details, view your current and past voucher status and statement of account.</p>
              </div>
            </div>
            <div class="range range-sm-center offset-top-66">
              <div class="cell-sm-8 cell-md-12">
                <div class="range">
                  <div class="cell-sm-6 cell-md-3">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.87" data-gradient="#5aba67, #78c157" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Your Available Points</h4>
                  </div>
                  <div class="offset-top-41 cell-sm-6 offset-sm-top-0 cell-md-3">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.75" data-gradient="#f5bf2f, #f3a43d" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Sketch 3</h4>
                  </div>
                  <div class="offset-top-41 cell-sm-6 cell-md-3 offset-md-top-0">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.42" data-gradient="#64aae1, #79ccf2" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Coding</h4>
                  </div>
                  <div class="offset-top-41 cell-sm-6 cell-md-3 offset-md-top-0">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.65" data-gradient="#f54b0f, #e50a0a" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Development</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- My Works-->
        <section class="section-98 section-sm-110">
          
        </section>
        <!-- What Clients Say?-->
        <section class="context-dark bg-gray-base">
                  <!-- RD Parallax-->
                  <div class="rd-parallax" data-on="false" data-md-on="true">
                    <div class="rd-parallax-layer" data-speed="0.35" data-type="media" data-url="images/backgrounds/background-14-1920x651.jpg"></div>
                    <div class="rd-parallax-layer" data-speed="0" data-type="html">
                      <div class="shell section-98 section-sm-110">
                        <h1>What Clients Say?</h1>
                        <hr class="divider bg-mantis">
                        <div class="range offset-top-50">
                                  <!-- Testimonials Slider-->
                                  <div class="owl-carousel owl-carousel-default veil-md-owl-dots veil-owl-nav reveal-md-owl-nav inset-left-7p inset-right-7p" data-items="1" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-kira-force-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">The support service is really excellent at all levels, from first contact to more difficult IT actions. I feel safe and guaranteed regarding the purchase of this template. Thanks a lot!</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Kira Force</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Marketing, at theme.co</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-diana-russo-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">The themes are beautiful But what really makes the difference is the customer service. Both pre and post sales support is second to none. Very fast, friendly and competent. I can only recommend this service.</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Diana Russo</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Freelance UX/UI designer</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-alex-merphy-80x80.jpg" alt="Alex Merphy">
                                        <p class="quote-body offset-top-34">I am glad I’ve purchased a template from TemplateMonster. Extraordinary customer service, always available, perfect care and knowledge of the technicians. Essential if you are not an expert programmer. In any case highly recommended. Congratulations!</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Alex Merphy</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Freelance Developer</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-amanda-smith-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">We have purchased several themes and contacted support once, the case had to be passed to technical support but it was resolved within the day. Very fast responses and excellent templates to choose from. Would highly recommend.</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Amanda Smith</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Sales, at themes.com</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-sam-cole-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">Amazing Support and friendly technicians. I have bothered the team on countless occasions and they have never once seemed perturbed or annoyed by me. Thanks so much!</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Sam Cole</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Founder, at YourTax.com</span></p>
                                      </blockquote>
                                    </div>
                                  </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
      </main>
      <!-- Page Footers-->
      <!-- Default footer-->
      <?php include('footer.php'); ?>
   
  </body>
</html>