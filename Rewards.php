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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-shopping icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Merchandise Rewards</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Home</a></li>
                <li><a href="rewards.php">Rewards</a></li>
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
      <main class="page-content section-98 section-sm-124">
        <div class="shell">
          <!-- Shop Grid View-->
                    <div class="toolbar-shop">
                      
                      <div class="toolbar-shop-pager"><span class="toolbar-shop-current text-mantis">1-6 of 15</span>
                        <div class="form-group">
                          <label>Show:</label>
                          <select class="form-control select-filter toolbar-shop-pager-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity">
                            <option>6</option>
                            <option>12</option>
                            <option>18</option>
                            <option>24</option>
                          </select>
                        </div>
                      </div>
                    </div>

      <?php

        $mysqli = new mysqli('localhost', 'root', '', 'abcdrive_wp662');
          $sql = "SELECT * FROM rewards WHERE categories = 'merchandise'";
          $result = mysqli_query ($mysqli, $sql) or die (mysqli_error ());
          while ($row = mysqli_fetch_array ($result)){

            echo $row['content'];

      ?>


      <?php } ?>



          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images\abcdrive\Nissan\nissan-key-ring.png" alt="">
                          <!-- Product Thumnails-->
                          
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Nissan Key Ring</a></h2>
                              <!-- Product Rating-->
                              
                              <p class="product-desc">Available in metal and Red Leather</p>

                                      <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br>
                              </div>
                              <div>
                                This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>2,760 Points</span>
                              </div>
                              <div class="form-group product-number">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Redeem</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-04-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Datsun Mug</a></h2>
                              <!-- Product Rating-->
                              
                              <p class="product-desc">Datsun Mug 250ml</p>

                                      <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br></div>
                              <div>This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>2,950 Points</span>
                              </div>
                              <div class="form-group product-number">
                                
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Redeem</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images\abcdrive\Nissan\nissan-mug.png" alt="">
                          <!-- Product Thumnails-->
                          
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Nissan Mug</a></h2>
                              <!-- Product Rating-->
                              
                              <p class="product-desc">Nissan Mug 250ml</p>        

                              <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity &amp;</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br> </div>
                              <div>This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>2,950 Points</span>
                              </div>
                              <div class="form-group product-number">
                               
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Order</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images\abcdrive\Nissan\nissan-miniature-car-red.png" alt="">
                          <!-- Product Thumnails-->
                         
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Miniature Car</a></h2>
                              <!-- Product Rating-->
                             
                              <p class="product-desc">Nissan GTR</p>

                                      <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br></div>
                              <div>This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>3,860 Points</span>
                              </div>
                              <div class="form-group product-number">
                               
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Redeem</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images\abcdrive\nissan\nissan-umbrella.png" alt="">
                          <!-- Product Thumnails-->
                          <ul class="product-thumbnails"> 
                          </div>

                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Nissan Umbrella</a></h2>
                              <!-- Product Rating-->
                             
                              <p class="product-desc"></p>

                                 <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue. <br></div>
                              <div>
                                This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.
                                </div>
                            </div>
                          </div>

                              </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>Points</span>
                              </div>
                              <div class="form-group product-number">
 
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php"><span class="icon mdi mdi-cart-outline"></span>Redeem</a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images\abcdrive\nissan\nissan-cup-holder.png" alt="">
                          <!-- Product Thumnails-->
                          
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Datsun Umbrella</a></h2>
                              <!-- Product Rating-->
                              
                              <p class="product-desc">Available in Red and Black.</p>

                                    <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br></div>
                              <div>
                                This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>
                            
                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>Points</span>
                              </div>
                              <div class="form-group product-number">
                                
                                
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php"><span class="icon mdi mdi-cart-outline"></span>Redeem</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images\abcdrive\Nissan\nissan-key-ring.png" alt="">
                          <!-- Product Thumnails-->
                          
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Nissan Key Ring</a></h2>
                              <!-- Product Rating-->
                              
                              <p class="product-desc">Available in metal and Red Leather</p>

                                      <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br>
                              </div>
                              <div>
                                This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>Points</span>
                              </div>
                              <div class="form-group product-number">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Redeem</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-04-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Datsun Mug</a></h2>
                              <!-- Product Rating-->
                              
                              <p class="product-desc">Datsun Mug 250ml</p>

                                      <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br></div>
                              <div>This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>Points</span>
                              </div>
                              <div class="form-group product-number">
                                
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Redeem</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-05-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Nissan Mug</a></h2>
                              <!-- Product Rating-->
                              
                              <p class="product-desc">Nissan Mug 250ml</p>        

                              <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity &amp;</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br> </div>
                              <div>This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>Points</span>
                              </div>
                              <div class="form-group product-number">
                               
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Order</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images\abcdrive\Nissan\nissan-miniature-car-red.png" alt="">
                          <!-- Product Thumnails-->
                         
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Nissan Sales Dept</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-checkout.php">Miniature Car</a></h2>
                              <!-- Product Rating-->
                             
                              <p class="product-desc">Nissan</p>

                                      <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Learn More</li>
                              <li>Validity</li>
                              <li>Terms &amp; Conditions</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>6 Months from date of issue.<br></div>
                              <div>This voucher may only be used at ABC Automobile Companies.
                                This voucher must be used in junction with your ABC DRIVE CARD.<br>
                                Each merchandise voucher must be used in a separate transaction.<br>
                                This voucher may not be used in conjunction with other types of vouchers.<br>
                                This voucher may not be paid into any store account or bank card and is non-refundable.<br>
                                This voucher cannot be exchanged against any other merchandise after redemption.<br>
                                This voucher cannot be redeemed for cash.<br>
                                This voucher cannot be replaced if lost.<br>
                                This voucher is valid for 6 months as from the date of issue.<br>
                                Additional parts and accessories are excluded from this voucher.<br>
                                Picture of merchandise is non-contractual.<br>
                                Colour may vary.<br>
                                Subject to stock availability.</div>
                            </div>
                          </div>

                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>Points</span>
                              </div>
                              <div class="form-group product-number">
                               
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-checkout.php">Redeem</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
            <!-- Bootstrap Pagination-->
            <nav>
              <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#" aria-label="Previous"><span class="mdi mdi-chevron-double-left" aria-hidden="true"></span></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#" aria-label="Next"><span class="mdi mdi-chevron-double-right" aria-hidden="true"></span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </main>
      <!-- Page Footers-->
      <!-- Default footer-->
      <?php include('footer.php'); ?>
  </body>
</html>