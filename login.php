
        <?php

include 'bat/includes/config.php';

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: index.php'); } 

//process login form if submitted
if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if($user->login($username,$password)){ 
    $_SESSION['username'] = $username;
    header('Location: my-drive-account.php');
    exit;
  
  } else {
    $error[] = 'Wrong username or password or your account has not been activated.';
  }

}//end if submit

        
        ?>

<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">
  <head>
    <!-- Site Title-->
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template html">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,700,900%7CYesteryear">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Content-->
      <main class="page-content bg-shark-radio">
        <div class="one-page">
          <div class="one-page-header">
            <!--Navbar Brand-->
            <div class="rd-navbar-brand"><a href="index.html"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images/intense/logo-light.png' alt=''/></a></div>
          </div>
          <!-- Login-->
          <section>
            <div class="shell">
              <div class="range">
                <div class="section-110 section-cover range range-xs-center range-xs-middle">
                  <div class="cell-xs-8 cell-sm-6 cell-md-4">
                    <div class="panel section-34 section-sm-41 inset-left-20 inset-right-20 inset-sm-left-20 inset-sm-right-20 inset-lg-left-30 inset-lg-right-30 bg-white shadow-drop-md">
                                <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default mdi mdi-account-multiple-outline"></span>
                                <div>
                                  <div class="offset-top-24 text-darker big text-bold">Login to your account</div>
                                  <p class="text-extra-small text-dark offset-top-4">Enter your credentials below</p>

                                  <?php
                                //check for any errors
                                if(isset($error)){
                                  foreach($error as $error){
                                    echo '<p class="text-extra-small text-dark offset-top-4" style="color:#e50a0a;">'.$error.'</p>';
                                  }
                                }

                                if(isset($_GET['action'])){

                                  //check the action
                                  switch ($_GET['action']) {
                                    case 'active':
                                      echo '<p class="text-extra-small text-dark offset-top-4" style="color:#009900;">Your account is now active you may now log in.</p>';
                                      break;
                                    case 'reset':
                                      echo '<p class="text-extra-small text-dark offset-top-4" style="color:#009900;">Please check your inbox for a reset link.</p>';
                                      break;
                                    case 'resetAccount':
                                      echo '<p class="text-extra-small text-dark offset-top-4" style="color:#009900;">Password changed, you may now login.</p>';
                                      break;
                                  }

                                }

                                
                                ?>


                                </div>
                      <!-- RD Mailform-->
                      <form class="text-left offset-top-30" data-form-output="form-output-global" data-form-type="login" method="post" action="#">
                        <div class="form-group">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-account-outline"></span></span>
                            <input class="form-control" id="login-your-login" placeholder="Your Login" type="text" name="username">
                          </div>
                        </div>
                        <div class="form-group offset-top-20">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-lock-open-outline"></span></span>
                            <input class="form-control" id="login-your-password" placeholder="Your Password" type="password" name="password" data-constraints="@Required">
                          </div>
                        </div>
                        <button class="btn btn-sm btn-icon btn-block btn-primary offset-top-20" type="submit" name="submit">Sign In <span class="icon mdi mdi-arrow-right-bold-circle-outline"></span></button>
                      </form>
                      <div class="offset-top-30 text-sm-left text-dark text-extra-small"><a class="text-picton-blue" href="#">Forgot your password?</a>
                        <div class="offset-top-0">Haven’t an account? <a class="text-picton-blue" href="#{cfg.nav.pages.submenu.register.href}">Sign up here</a>.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="one-page-footer">
            <p class="small" style="color: rgba(255,255,255, 0.3);">Intense &copy; <span id="copyright-year"></span> . <a href="privacy.html">Privacy Policy</a></p>
          </div>
        </div>
      </main>
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
    <!-- JavaScript-->
    <script src="js/core.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
  </body>
</html>
