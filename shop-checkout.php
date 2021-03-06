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
          <?php 
            //check if already logged in move to home page
            if( empty($_SESSION['username']) ){ header('Location: login-rewards.php'); } 
          ?>
        </div>
      </header>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-lock-open-outline icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Checkout</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Home</a></li>
                <li>Checkout
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
        <!-- Shop Checkout-->

        <section class="section-98 section-sm-110">
           <div class="shell">
              <h2 class="text-bold">Redeem Vouchers</h2>
              <hr class="divider bg-mantis">
              <div class="offset-sm-top-66">
                 <div class="range range-xs-center">
                    <div class="cell-xs-10 cell-md-8">

                        <?php

                        $code = $_GET['idv'];

                          $mysqli = new mysqli('localhost', 'root', '', 'abcdrive_wp662');
                            $sql = 'SELECT * FROM wp9o_users WHERE user_login = '.$_SESSION['username'].'';
                            $sql1 = 'SELECT * FROM rewards WHERE code = "'.$code.'" ';
                            $result1 = mysqli_query ($mysqli, $sql1) or die('Error: ' . mysqli_error($mysqli));
                            $result = mysqli_query ($mysqli, $sql) or die (mysqli_error ());
                            while ($row = mysqli_fetch_array ($result)){

                              while ($row1 = mysqli_fetch_array ($result1)){

                        ?>
                       <!-- RD Mailform-->
                       <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="voucher-request" method="post" action="bat/rd-voucher-request.php">
                          <div class="range range-xs-center">
                             <div class="cell-sm-6">
                                <div class="form-group">
                                   <label class="form-label" for="git-3-mailform-first-name">Card Number</label>
                                   <input class="form-control bg-white" id="git-3-mailform-first-name" type="text" name="cardnumber" value="<?php echo $row['user_login']; ?>" data-constraints="@Required">
                                </div>
                             </div>
                             <div class="cell-sm-6">
                                <div class="form-group">
                                   <label class="form-label" for="git-3-mailform-last-name">Member</label>
                                   <input class="form-control bg-white" id="git-3-mailform-last-name" type="text" name="name" value="<?php echo $row['display_name']; ?>" data-constraints="@Required">
                                </div>
                             </div>
                             <div class="cell-sm-6">
                                <div class="form-group offset-sm-top-30">
                                   <label class="form-label" for="git-3-mailform-phone">Registered Email Address</label>
                                   <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="memberemail" value="<?php echo $row['user_email']; ?>" data-constraints="@Required @Email">
                                </div>
                             </div>
                             <div class="cell-sm-6">
                                <div class="form-group offset-sm-top-30">
                                   <label class="form-label" for="git-3-mailform-email">Selected Voucher</label>
                                   <input class="form-control bg-white" id="git-3-mailform-email" type="text" name="vouchername" value="<?php echo strtoupper($row1['title']); ?>" data-constraints="@Required">
                                   <input class="form-control bg-white" id="git-3-mailform-email" type="hidden" name="vouchercode" value="<?php echo $row1['code']; ?>">
                                </div>
                             </div>

                              <div class="offset-top-34 text-center text-lg-right">
                                <button class="btn btn-icon btn-icon-left btn-primary" type="submit">Place Order</button>
                              </div>
                          </div>
                       </form>

                       <?php
                        }
                      }
                       ?>
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