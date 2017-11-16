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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-help-circle icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">FAQ's</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Home</a></li>
                <li>FAQ's
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
        <!-- Faq Variant 2-->
        <section class="section-66 section-sm-top-110 section-lg-bottom-0">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-lg-6"><img class="veil reveal-lg-inline-block" src="images\abcdrive\People\woman-2.png" width="470" height="770" alt=""></div>
              <div class="cell-sm-9 cell-lg-6 offset-top-0">
                <h1 class="text-darker text-lg-left">General Questions</h1>
                <hr class="divider bg-mantis hr-lg-left-0">
                <div class="offset-top-41 offset-lg-top-66">
                          <!-- Bootstrap Accordion-->
                          <div class="panel-group accordion offset-top-0" role="tablist" aria-multiselectable="true" id="#{accordionId}">
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="#{tabObject[i].headerId}">
                                <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="q1" href="#faq1" aria-expanded="true">How can i apply for an ABC DRIVE Card?</a></div>
                              </div>
                              <div class="panel-collapse collapse" role="tabpanel" aria-labelledby="q1" id="faq1">
                                <div class="panel-body">There are two ways to apply for an ABC Drive Card. You can either fill the online registration form available on our website www.abcdrive.info or alternatively, complete a manual registration form available at our outlets.
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="#{tabObject[i].headerId}">
                                <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="q2" href="#faq2" aria-expanded="true">How long will it take to receive my ABC Drive Card?</a></div>
                              </div>
                              <div class="panel-collapse collapse" role="tabpanel" aria-labelledby="q2" id="faq2">
                                <div class="panel-body">Your ABC Drive Card should be with you within 10 days. If you applied more than two weeks ago and you're concerned about the whereabouts of your card, then give us a call on 405 1300, Monday to Friday: 9am to 4pm and Saturday: 9am to 12pm. Closed on Sundays and Public holidays.
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="#{tabObject[i].headerId}">
                                <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="q3" href="#faq3" aria-expanded="true">How do i change my details?</a></div>
                              </div>
                              <div class="panel-collapse collapse" role="tabpanel" aria-labelledby="q3" id="faq3">
                                <div class="panel-body">To update your details, login to your ABC Drive Account, click on ‘My Account’ and then ‘Update My Data’. Or, you can give us a call on 405 1300 from Monday to Friday between office hours. Updating your data is important as it enables you to continue receiving  your statement and vouchers.
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="#{tabObject[i].headerId}">
                                <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="q4" href="#faq4" aria-expanded="true">I’ve lost/damaged my ABC Drive Card – how can I get replacement?</a></div>
                              </div>
                              <div class="panel-collapse collapse" role="tabpanel" aria-labelledby="q4" id="faq4">
                                <div class="panel-body">Go to ABC Drive, log on to your account, at the bottom of the page, click on ‘Lost Your card’ and then fill in your details. You can also contact us on 405 1300 from Monday to Friday between 9am and 4pm and Saturday 9am to 1pm. Closed on Sundays and Public holidays. Please note that the first replacement is free of charge and subsequent replacements will be charged at 1000 points.
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="#{tabObject[i].headerId}">
                                <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="q5" href="#faq5" aria-expanded="true">I am missing points. Where are they?</a></div>
                              </div>
                              <div class="panel-collapse collapse" role="tabpanel" aria-labelledby="q5" id="faq5">
                                <div class="panel-body">We at ABC Drive, together with our Promoters, try to process all points as quickly as possible. It may happen that points take a bit longer to be added to your account. You should allow a few days for your points to appear in your account. If your points are still missing, please call us on 405 1300 from Monday to Friday between 9am and 4pm and Saturday: 9am to 12pm. Closed on Sundays & Public holidays.
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="#{tabObject[i].headerId}">
                                <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="q6" href="#faq6" aria-expanded="true">Where are my rewards order?</a></div>
                              </div>
                              <div class="panel-collapse collapse" role="tabpanel" aria-labelledby="q6" id="faq6">
                                <div class="panel-body">For rewards orders, we will send you a voucher by post and instructions on how and where to collect your merchandise within 5 working days of receiving your order. Rewards orders sent by email will be sent to your registered email address within 2 hours of receiving your order, unless otherwise stated – please note this may take longer due to additional security checks. This email will come from ABC Drive and can sometimes land in your junk/spam folder, so please check there too. If you cannot find your email, please give us a call on 405 1300, Monday to Friday: 9am to 4pm.
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="#{tabObject[i].headerId}">
                                <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="q7" href="#faq7" aria-expanded="true">My Reward Vouchers are due to expire. Can they be reissued with a new date or exchanged into something else?</a></div>
                              </div>
                              <div class="panel-collapse collapse" role="tabpanel" aria-labelledby="q7" id="faq7">
                                <div class="panel-body">Sorry. Unused, expired and redeemed voucher or vouchers cannot be refunded, reissued or exchanged.
                                </div>
                               </div>
                               </div>
                               
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- First Workout - Free-->
        <section class="section-66 context-dark bg-blue-gray">
          <div class="shell">
            <h2>If you have a question please contact us</h2><a class="btn btn-default btn-icon btn-icon-left offset-top-20" href="contact-us.html"><span class="icon mdi mdi-email-outline"></span>Contact Us</a>
          </div>
        </section>
      </main>
      <!-- Page Footers-->
      <!-- Default footer-->
      <?php include('footer.php'); ?>
  </body>
</html>