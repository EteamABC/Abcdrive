<?php include 'bat/includes/config.php'; ?>

          <nav class="rd-navbar rd-navbar-default rd-navbar-light" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.php"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images\abcdrive\Logo\abc-drive-logo-01.jpg' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="index.php"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images/intense/logo-light.png' alt=''/></a></div>
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
                      <li><a href="#"><span>Rewards</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="Rewards.php"><span class="text-middle">Merchandise Rewards</span></a>
                          </li>

                          <li><a href="service-rewards.php"><span class="text-middle">Service Rewards</span></a>
                          </li>
                          
                        
                          <li><a href="#"><span class="text-middle">External Rewards</span></a>
                          </li>
                          </ul>
                          </li>
                          

                      <li><a href="#"><span>My Account</span></a>
                        <ul class="rd-navbar-dropdown">

                          <?php if (empty($_SESSION['username'])) { ?>
                            <li><a href="login.php"><span class="text-middle">Login</span></a> 
                          <?php } else { ?>
                            <li><a href="logout.php"><span class="text-middle">Logout</span></a>
                          <?php } ?>
                          <li><a href="registration-form.php"><span class="text-middle">Registration Form</span></a>
                          <li><a href="my-drive-account.php"><span class="text-middle">My Drive Account</span></a> 
                            
                          </li>
                        </ul>
                      </li>

                      
                      <li><a href="contact-us.php"><span>Contact Us</span></a>
                      </li>
                    
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#"><span></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                    </div>
                    <!--button(type="submit").rd-navbar-search-form-submit.mdi.mdi-magnify-->
                  </form>
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
                <!--RD Navbar shop-->
                
              
              </div>
            </div>
          </nav>