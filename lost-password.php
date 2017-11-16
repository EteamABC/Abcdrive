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

      <!-- Page Content-->
      <main class="page-content">
        <!-- Contact Us-->
        <section class="section-98 section-md-110 text-lg-left">
          <div class="shell">
            <div class="range range-xs-center range-xs-center">
              <div class="cell-lg-4">
                <h3 class="text-uppercase text-bold">How to Find us</h3>
                <hr class="divider hr-lg-left-0 bg-mantis">
                <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit Intense in one of our comfortable offices.</p>
                <address class="contact-info offset-top-50">
                  <p class="h6 text-uppercase text-bold text-picton-blue letter-space-none offset-top-none">Intense Office 1</p>
                  <p>9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.</p>
                  <dl class="offset-top-0">
                    <dt>Telephone</dt>
                    <dd><a href="callto:#">+1 800 603 6035</a></dd>
                  </dl>
                  <dl>
                    <dt>E-mail:</dt>
                    <dd><a href="mailto:#">mail@demolink.org</a></dd>
                  </dl>
                </address>
                <address class="contact-info offset-top-50">
                  <p class="h6 text-uppercase text-bold text-picton-blue letter-space-none">Intense Office 2</p>
                  <p>9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45.</p>
                  <dl class="offset-top-0">
                    <dt>Telephone</dt>
                    <dd><a href="callto:#">+1 800 559 6580</a></dd>
                  </dl>
                  <dl>
                    <dt>E-mail:</dt>
                    <dd><a href="mailto:#">mail@demolink.org</a></dd>
                  </dl>
                </address>
              </div>
              <div class="cell-sm-8 offset-top-66 offset-lg-top-0">
                <h3 class="text-uppercase text-bold">Get in touch</h3>
                <hr class="divider hr-lg-left-0 bg-mantis">
                <!-- RD Mailform-->
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="lost-password" method="post" action="bat/rd-lost-password.php">

                  <?php

                  if (!empty($_SESSION['username'])) {

                    $mysqli = new mysqli('localhost', 'root', '', 'abcdrive_wp662');
                      $sql = 'SELECT * FROM wp9o_users WHERE user_login = '.$_SESSION['username'].'';
                      $result = mysqli_query ($mysqli, $sql) or die (mysqli_error ());
                      while ($row = mysqli_fetch_array ($result)){

                  ?>


                  <div class="range">
                    <div class="cell-sm-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-name">Card Number:</label>
                        <input class="form-control input-sm" id="contact-us-name" type="text" name="cardnumber" value="<?php echo $row['user_login']; ?>" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-20 offset-lg-top-0">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Registered Email Address:</label>
                        <input class="form-control input-sm" id="contact-us-email" type="email" name="email" value="<?php echo $row['user_email']; ?>" data-constraints="@Required @Email">
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-20 offset-lg-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Your New Password:</label>
                        <input class="form-control input-sm" id="contact-us-email" type="password" name="newpass" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-md-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside rd-input-label focus not-empty" for="rd-mailform-select">New Hint Question *:</label>
                        <select class="form-control select2-hidden-accessible input-sm" name="hint1" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true" data-constraints="@Required">
                          <option value="" selected="selected">---</option>
                          <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                          <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                          <option value="What is your favorite movie?">What is your favorite movie?</option>
                          <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                          <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                          <option value="In what town was your first job?">In what town was your first job?</option>
                          <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-top-20 offset-lg-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Answer:</label>
                        <input class="form-control input-sm" id="contact-us-email" type="email" name="answer1" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-md-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside rd-input-label focus not-empty" for="rd-mailform-select">New Hint Question *:</label>
                        <select class="form-control select2-hidden-accessible input-sm" name="hint2" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true" data-constraints="@Required">
                          <option value="" selected="selected">---</option>
                          <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                          <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                          <option value="What is your favorite movie?">What is your favorite movie?</option>
                          <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                          <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                          <option value="In what town was your first job?">In what town was your first job?</option>
                          <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-top-20 offset-lg-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Answer:</label>
                        <input class="form-control input-sm" id="contact-us-email" type="email" name="answer2" data-constraints="@Required">
                      </div>
                    </div>
                  </div>

                  <?php 
                      }
                    } else {
                  ?>

                  <div class="range">
                    <div class="cell-sm-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-name">Card Number:</label>
                        <input class="form-control input-sm" id="contact-us-name" type="text" name="cardnumber" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-20 offset-lg-top-0">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Registered Email Address:</label>
                        <input class="form-control input-sm" id="contact-us-email" type="email" name="email" data-constraints="@Required @Email">
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-20 offset-lg-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Your New Password:</label>
                        <input class="form-control input-sm" id="contact-us-password" type="password" name="newpass" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-md-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside rd-input-label focus not-empty" for="rd-mailform-select">New Hint Question *:</label>
                        <select class="form-control select2-hidden-accessible input-sm" name="hint1" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true" data-constraints="@Required">
                          <option value="" selected="selected">---</option>
                          <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                          <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                          <option value="What is your favorite movie?">What is your favorite movie?</option>
                          <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                          <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                          <option value="In what town was your first job?">In what town was your first job?</option>
                          <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-top-20 offset-lg-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Answer:</label>
                        <input class="form-control input-sm" id="contact-us-email" type="email" name="answer1" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-md-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside rd-input-label focus not-empty" for="rd-mailform-select">New Hint Question *:</label>
                        <select class="form-control select2-hidden-accessible input-sm" name="hint2" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true" data-constraints="@Required">
                          <option value="" selected="selected">---</option>
                          <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                          <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                          <option value="What is your favorite movie?">What is your favorite movie?</option>
                          <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                          <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                          <option value="In what town was your first job?">In what town was your first job?</option>
                          <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-12 offset-top-20 offset-lg-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-us-email">Answer:</label>
                        <input class="form-control input-sm" id="contact-us-email" type="email" name="answer2" data-constraints="@Required">
                      </div>
                    </div>
                  </div>

                  <?php
                    }
                  ?>

                  <div class="group-sm text-center text-lg-left offset-top-30">
                    <button class="btn btn-primary" type="submit">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

      </main>
      <!-- Page Footers-->

      <!-- Home Intro footer-->
      <?php include('footer.php'); ?>

    <!-- JavaScript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>