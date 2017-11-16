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
              <h2><span class="big">Service Rewards</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Home</a></li>
                <li><a href="service-rewards.php">Rewards</a></li>
                <li><a href="service-rewards.php">Service Rewards</a></li>
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
                      
                      <div class="toolbar-shop-pager"><span class="toolbar-shop-current text-mantis">1-5 of 15</span>
                        <div class="form-group">
                          <label>Show:</label>
                          <select class="form-control select-filter toolbar-shop-pager-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity">
                            <option>5</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                          </select>
                        </div>
                      </div>
                    </div>
          
      <?php

        $record_per_page = 5;
        $page = '';
        if(isset($_GET["page"]))
        {
         $page = $_GET["page"];
        }
        else
        {
         $page = 1;
        }

        $start_from = ($page-1)*$record_per_page;

        $mysqli = new mysqli('localhost', 'root', '', 'abcdrive_wp662');
          $sql = "SELECT * FROM rewards WHERE categories = 'service' LIMIT $start_from, $record_per_page";
          $result = mysqli_query ($mysqli, $sql) or die (mysqli_error ());
          while ($row = mysqli_fetch_array ($result)){

            echo $row['content'];

          }

      ?>

          
         
                   
          
          <div class="offset-top-66">

            <!-- Bootstrap Pagination-->
            <nav>
              <ul class="pagination pagination-sm">
            <?php
              $page_query = "SELECT * FROM rewards WHERE categories = 'service'";
              $page_result = mysqli_query($mysqli, $page_query);
              $total_records = mysqli_num_rows($page_result);
              $total_pages = ceil($total_records/$record_per_page);
              $start_loop = $page;
              $difference = $total_pages - $page;
              if($difference <= 5)
              {
               $start_loop = $total_pages - 2;
              }
              $end_loop = $start_loop + 2;
              if($page > 1)
              {
               echo '<li><a href="service-rewards.php?page='.($page - 1).'" aria-label="Previous"><span class="mdi mdi-chevron-double-left" aria-hidden="true"></span></a></li>';
               //echo "<a href='pagination.php?page=".($page - 1)."'><<</a>";
              }
              for($i=1; $i<=$end_loop; $i++)
              {     
                    $active = '';
                    if(isset($_GET['page']) && $i == $_GET['page'])
                    {
                        $active = 'class="active"';        
                    }
               echo '<li '.$active.'><a href="service-rewards.php?page='.$i.'">'.$i.'</a></li>';
              }
              if($page <= $end_loop)
              {
               echo '<li><a href="service-rewards.php?page='.$total_pages.'" aria-label="Next"><span class="mdi mdi-chevron-double-right" aria-hidden="true"></span></a></li>';
               //echo "<a href='pagination.php?page=".$total_pages."'>Last</a>";
              }
            ?>
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