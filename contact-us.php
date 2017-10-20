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
          <?php include('menu.php'); ?>
        </div>
      </header> 

      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-map-marker-circle icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Contact Us</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Contact Us
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
        <!-- Page Footer-->
        <!--Section Contact Info-->
        <section class="bg-lighter section-66">
          <div class="shell-wide">
            <div class="range range-xs-center text-sm-left">
              <div class="cell-xs-10 cell-sm-8 cell-md-12">
                <div class="range range-xs-center">
                  <div class="cell-xs-6 cell-md-3 cell-xl-2">
                    <div class="unit unit-spacing-xs unit-sm unit-sm-horizontal">
                      <div class="unit-left"><span class="icon icon-xs mdi mdi-phone text-primary" style="font-size: 26px;"></span></div>
                      <div class="unit-body">
                        <h6>Phone</h6>
                        <div class="p"><a class="reveal-block" href="callto:1-800-1234-567">(230)405 1300</a><a class="reveal-block" href="callto:1-800-6547-987">1-800-6547-987</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xs-6 cell-md-3 cell-xl-2 offset-top-50 offset-xs-top-0">
                    <div class="unit unit-spacing-xs unit-sm unit-sm-horizontal">
                      <div class="unit-left"><span class="icon icon-xs mdi mdi-email-open text-primary" style="font-size: 26px;"></span></div>
                      <div class="unit-body">
                        <h6>E-mail</h6>
                        <div class="p"><a class="reveal-block" href="mailto:info@demolink.org">info@abcdrive.info</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xs-6 cell-md-3 cell-xl-2 offset-top-50 offset-md-top-0">
                    <div class="unit unit-spacing-xs unit-sm unit-sm-horizontal">
                      <div class="unit-left"><span class="icon icon-xs mdi mdi-map text-primary" style="font-size: 26px;"></span></div>
                      <div class="unit-body">
                        <h6>Address</h6>
                        <address class="contact-info">2nd Floor, ABC CENTRE, Military Road,Port Louis, Mauritius</address>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xs-6 cell-md-3 cell-xl-2 offset-top-50 offset-md-top-0">
                    <div class="unit unit-spacing-xs unit-sm unit-sm-horizontal">
                      <div class="unit-left"><span class="icon icon-xs mdi mdi-timelapse text-primary" style="font-size: 26px;"></span></div>
                      <div class="unit-body">
                        <h6>Opening Hours</h6>
                        <div>
                          <p>9:00 – 16:00 Mon – Fri</p>
                        </div>
                        <p class="offset-top-0">9:00 – 12:00 Sat</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section Get In Touch-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h2 class="text-bold">Get In Touch</h2>
            <hr class="divider bg-mantis">
            <div class="offset-sm-top-66">
              <div class="range range-xs-center">
                <div class="cell-xs-10 cell-md-8">
                  <!-- RD Mailform-->
                  <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-contact-us.php">
                    <div class="range range-xs-center">
                      <div class="cell-sm-6">
                        <div class="form-group">
                          <label class="form-label" for="git-3-mailform-first-name">Name *</label>
                          <input class="form-control bg-white" id="git-3-mailform-first-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-group">
                          <label class="form-label" for="git-3-mailform-email">E-mail *</label>
                          <input class="form-control bg-white" id="git-3-mailform-email" type="text" name="email" data-constraints="@Required @Email">
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-30">
                          <label class="form-label" for="git-3-mailform-last-name">ABC Drive Card Number</label>
                          <input class="form-control bg-white" id="git-3-mailform-last-name" type="text" name="cardnumber">
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-30">
                          <label class="form-label" for="git-3-mailform-phone">Subject *</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="subject" data-constraints="@Required">
                        </div>
                      </div>
                      
                      <div class="cell-sm-12">
                        <div class="form-group offset-sm-top-30">
                          <label class="form-label" for="git-3-mailform-message">Message *</label>
                          <textarea class="form-control bg-white" id="git-3-mailform-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="offset-top-24 text-center">
                      <button class="btn btn-primary" type="submit">send message</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <!-- RD Google Map-->
          <div class="rd-google-map">
            <div class="rd-google-map__model" id="rd-google-map" data-zoom="14" data-x="57.50779355" data-y="-20.15266207" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;administrative.locality&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;saturation&quot;:&quot;-65&quot;},{&quot;lightness&quot;:&quot;45&quot;},{&quot;gamma&quot;:&quot;1.78&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit.line&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:&quot;-33&quot;},{&quot;lightness&quot;:&quot;22&quot;},{&quot;gamma&quot;:&quot;2.08&quot;}]},{&quot;featureType&quot;:&quot;transit.station.airport&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;gamma&quot;:&quot;2.08&quot;},{&quot;hue&quot;:&quot;#ffa200&quot;}]},{&quot;featureType&quot;:&quot;transit.station.airport&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit.station.rail&quot;,&quot;elementType&quot;:&quot;labels.text&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit.station.rail&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;saturation&quot;:&quot;-55&quot;},{&quot;lightness&quot;:&quot;-2&quot;},{&quot;gamma&quot;:&quot;1.88&quot;},{&quot;hue&quot;:&quot;#ffab00&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#bbd9e5&quot;},{&quot;visibility&quot;:&quot;simplified&quot;}]}]"></div>
            <ul class="rd-google-map__locations">
              <li data-x="57.50779355" data-y="-20.15266207">
                <p>ABC CENTRE, Military Road, Port Louis</p>
              </li>
            </ul>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Default footer-->
      <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark">
        <div class="shell">
          <div class="range range-sm-center text-lg-left">
            <div class="cell-sm-8 cell-md-12">
              <div class="range range-xs-center">
                <div class="cell-xs-7 text-xs-left cell-md-4 cell-lg-3 cell-lg-push-4">
                  <h6 class="text-uppercase text-spacing-60">Latest news</h6>
                        <!-- Post Widget-->
                        <article class="post widget-post text-left text-picton-blue"><a href="blog-classic-single-post.html">
                            <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                              <div class="unit-body">
                                <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                                  <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                </div>
                                <div class="post-title">
                                  <h6 class="text-regular">Let’s Change the world</h6>
                                </div>
                              </div>
                            </div></a></article>
                        <!-- Post Widget-->
                        <article class="post widget-post text-left text-picton-blue"><a href="blog-classic-single-post.html">
                            <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                              <div class="unit-body">
                                <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                                  <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                </div>
                                <div class="post-title">
                                  <h6 class="text-regular">The meaning of Web Design</h6>
                                </div>
                              </div>
                            </div></a></article>
                        <!-- Post Widget-->
                        <article class="post widget-post text-left text-picton-blue"><a href="blog-classic-single-post.html">
                            <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                              <div class="unit-body">
                                <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                                  <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                </div>
                                <div class="post-title">
                                  <h6 class="text-regular">Get Started with TemplateMonster</h6>
                                </div>
                              </div>
                            </div></a></article>
                </div>
                <div class="cell-xs-5 offset-top-41 offset-xs-top-0 text-xs-left cell-md-3 cell-lg-2 cell-lg-push-3">
                  <h6 class="text-uppercase text-spacing-60">Useful Links</h6>
                  <div class="reveal-block">
                    <div class="reveal-inline-block">
                      <ul class="list list-marked">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="clients.html">Clients</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="cell-xs-12 offset-top-41 cell-md-5 offset-md-top-0 text-md-left cell-lg-4 cell-lg-push-2">
                  <h6 class="text-uppercase text-spacing-60">Newsletter</h6>
                  <p>Keep up with our always upcoming  product features  and technologies. Enter your e-mail and subscribe to  our newsletter.</p>
                  <div class="offset-top-30">
                          <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                            <div class="form-group">
                              <div class="input-group input-group-sm"><span class="input-group-addon"><span class="input-group-icon mdi mdi-email"></span></span>
                                <input class="form-control" placeholder="Type your E-Mail" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-btn">
                                  <button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span>
                              </div>
                            </div>
                            <div class="form-output" id="form-subscribe-footer"></div>
                          </form>
                  </div>
                </div>
                <div class="cell-xs-12 offset-top-66 cell-lg-3 cell-lg-push-1 offset-lg-top-0">
                  <!-- Footer brand-->
                  <div class="footer-brand"><a href="index.html"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images/intense/logo-light.png' alt=''/></a></div>
                  <p class="text-darker offset-top-4">Feel the power of future</p>
                        <ul class="list-inline">
                          <li><a class="icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li><a class="icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li><a class="icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li><a class="icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shell offset-top-50">
          <p class="small text-darker">Intense &copy; <span id="copyright-year"></span> . <a href="privacy.html">Privacy Policy</a>
            <!-- {%FOOTER_LINK}-->
          </p>
        </div>
      </footer>
    </div>
    <!-- Global RD Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
   

      <!-- Home Intro footer-->
      <?php include('footer.php'); ?>


  </body>
</html>