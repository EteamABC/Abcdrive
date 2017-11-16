<?php include 'bat/includes/config.php'; ?>

          <nav class="rd-navbar rd-navbar-default rd-navbar-light" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.php"><img style='margin-top: -5px;margin-left: -15px;' width='178' height='45' src='images\abcdrive\Logo\drive-logo.png' alt=''/></a></div>
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
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#"><span class="text-middle">Promoters</span></a>
                            <ul class="rd-navbar-dropdown">
                              <li><a href="clients.php"><span class="text-middle">Sales</span></a>
                              </li>
                              <li><a href="aftersales.php"><span class="text-middle">Aftersales</span></a>
                              </li>
                            </ul>
                          </li>

                          <li><a href="google-map.php"><span class="text-middle">Where to use card</span></a>
                          </li>
                          </ul>
                          </li>
                        
                      </li>
                      <li><a href="#"><span>Rewards</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="merchandise-rewards.php"><span class="text-middle">Merchandise Rewards</span></a>
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
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="search-results.php"><span></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.php" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                    </div>
                    <!--button(type="submit").rd-navbar-search-form-submit.mdi.mdi-magnify-->
                  </form>
                  <!--RD Navbar shop-->
                
                <!--RD Navbar shop-->
                
              
              </div>
            </div>
          </nav>