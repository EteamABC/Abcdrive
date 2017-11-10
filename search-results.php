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
          <?php include 'menu.php'; ?>
        </div>
        <!-- Classic Breadcrumbs-->
        <section class="breadcrumb-classic">
          <div class="shell section-34 section-sm-50">
            <div class="range range-lg-middle">
              <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-magnify icon icon-white"></span></div>
              <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                <h2><span class="big">Search Results</span></h2>
              </div>
              <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                <ul class="list-inline list-inline-dashed p">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Pages</a></li>
                  <li>Search Results
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
      </header>
      <main class="page-content section-98 section-sm-124">
        <div class="shell">
          <!-- RD Search Form-->
          <form class="form-search rd-search" action="search-results.php" method="GET">
            <div class="form-group">
              <label class="form-label form-search-label form-label-sm" for="search-results">Search</label>
              <input class="form-search-input input-sm form-control #{inputClass}" id="search-results" type="text" name="s" autocomplete="off"/>
            </div>
            <button class="form-search-submit" type="submit"><span class="mdi mdi-magnify"></span></button>
          </form>
          <div class="rd-search-results offset-top-66">
            <!-- Page Footers-->
          </div>
        </div>
      </main>
      <!-- Default footer-->
      <?php include('footer.php'); ?>
  </body>
</html>