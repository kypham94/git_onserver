<!DOCTYPE html>
<html lang="vn" class="no-js">
  <!-- Head -->
  <head>
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="truc tiep bong da, xem bong da, link bong da,xem khong giat,xem bong da khong lag, xem bong da hd, @yield('kw')">
    <meta name="description" content="@yield('des')">
    <meta name="author" content="duduatv.live">
    <base href="{{ asset('/') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,700" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.min.css">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-6662668396400898"
     data-ad-slot="9557607621"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!-- Demo Custome Code (demo page only) -->
    <style type="text/css">
      /* Button Spaces*/
      .demo-btn-space .btn,
      .demo-progress-space .progress {
        margin-bottom: 10px;
      }

      /* About Section */
      .demo-about-section {
        position: relative;
        padding-top: 6.25rem;
      }

      @media (min-width: 991px) {
        .demo-about-section {
          margin-top: -50px;
          padding-top: 0;
        }
      }

      /* Download Section */
      .demo-download-section {
        position: relative;
        z-index: 1;
        margin: -60px 0;
      }

      /* Google Fonts */
      .demo-fonts-box {
        padding: 30px;
        line-height: 2;
        letter-spacing: 2px;
      }

      .demo-fonts-box__item {
        line-height: 1;
      }
      .demo-fonts-box__item-xs {
        line-height: 1;
        font-size: 30px;
      }
      .demo-fonts-box__item-xl {
        line-height: 1;
        font-size: 90px;
      }
    </style>
    <!-- End Demo Custome Code (demo page only) -->
  </head>
  <!-- End Head -->

  <body style="padding-top:100px" id="js-home">
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="297478337684308"
  logged_in_greeting="Liên hệ với Cuồng Bóng đá Fanpage để được hỗ trợ?"
  logged_out_greeting="Liên hệ với Cuồng Bóng đá Fanpage để được hỗ trợ?">
</div>
  	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=211634082734241&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
  	<!-- Header -->
    <header role="header">
      <!-- Navbar -->
      

        <!-- Navbar Dark -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="{{ asset('/') }}">
              <img src="assets/img/logo.png" alt="Stream UI Kit" style="width: 100px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav ml-auto mr-sm-2 mt-2 mt-lg-0">
                <li class="nav-item active mr-3">
                  <a class="nav-link" href="{{ asset('/') }}">Trang chủ</a>
                </li>
                <li class="nav-item mr-3">
                  <a class="nav-link" target="blank" href="http://cuongbongdatv.com">Tin tức bóng đá</a>
                </li>
                <div class="fb-like" data-href="https://www.facebook.com/cuongbongdachannel/" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar Dark -->
      <!-- End Navbar -->
    </header>

    @yield('content')
    <div class="row">
      <div class="container">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-format="autorelaxed"
           data-ad-client="ca-pub-6662668396400898"
           data-ad-slot="7743287793"></ins>
      <script>
           (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark u-content-space-top pb-4" role="footer">
      <div class="container-fluid">
        <div class="px-md-3">
          <!-- Social Sharing -->
          <div class="text-center">
          <h2 class="h5 font-weight-light text-white mb-4">ĐuĐưaTV hân hạnh mang đến cho các bạn những trận đấu hay nhất hoàn toàn miễn phí.</h2>
          </div>
          <!-- End Social Sharing -->

          <hr class="u-opacity-1 mb-4">
        </div>

        <!-- Copyright and Social Icons -->
        <div class="row px-md-3">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white">&copy; 2018 <a class="text-white" href="{{ asset('/') }}">CuongBongDa</a>. All Rights Reserved.</small>
          </div>
        </div>
        <!-- End Copyright and Social Icons -->
      </div>
    </footer>
    <!-- End Footer -->

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
   

    <!-- Components Vendor  -->
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery.parallax.js"></script>

    <!-- Theme Settings and Calls -->
    <script src="assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="assets/js/vendors/parallax.js"></script>
    <!-- END JAVASCRIPTS -->

    <!-- Demo Code Only -->
    <script>
      // Font Toggle
      $(document).on('ready', function () {
        $('.js-font-change-btn').click(function() {
          $('.js-font-change-btn__icon').toggleClass('fa-toggle-on');
          $('.js-font-content').toggleClass('u-font-accent');
          $('.js-font-content__chnage1').toggleClass('d-none');
          $('.js-font-content__chnage2').toggleClass('d-inline-block');
        });
      });
      // End Font Toggle

      // Facebook Like
      window.fbAsyncInit = function () {
        // init the FB JS SDK
        FB.init({
          appId: '1972702999621713',
          status: true,
          xfbml: true,
          version: 'v2.3'
        });
        if (typeof gaSocialTracking != 'undefined') gaSocialTracking.trackFacebook();
        setTimeout(function () {
          if (typeof window.fbCallback == 'function') {
            window.fbCallback();
          }
        }, 3000); // to make sure FB was loaded
      };
      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      // Facebook Like

      // Twitter Follow
      window.twttr = (function (d, s, id) {
        var t, js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
        return window.twttr || (t = {
          _e: [], ready: function (f) {
            t._e.push(f)
          }
        });
      }(document, "script", "twitter-wjs"));
      twttr.ready(function (twttr) {
        twttr.events.bind('tweet', function (event) {
          if (typeof gaSocialTracking != 'undefined') gaSocialTracking.trackTwitter();
        });
      });
      // Twitter Follow
    </script>
    <!-- End Demo Code Only -->

    <!-- Github and Google Plus Buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- End Github and Google Plus Buttons -->
</body>
  <!-- End Body -->
</html>
