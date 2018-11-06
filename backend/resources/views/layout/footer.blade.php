<!-- Footer -->
    <footer class="bg-dark u-content-space-top pb-4" role="footer">
      <div class="container-fluid">
        <div class="px-md-3">
          <!-- Social Sharing -->
          <div class="text-center">
          <h2 class="h5 font-weight-light text-white mb-4">Mang đến cho các bạn những trận đấu hay nhất hoàn toàn miễn phí. Chia sẻ để bạn bè cùng xem.</h2>

            <div class="d-flex justify-content-center">
              <!-- Facebook Share -->
              <div class="mr-3 mb-2 mb-md-0">
                <div class="fb-share-button demo-faceook-share"
                     data-href="http://facebook.com/htmlstream"
                     data-layout="button"
                     data-size="large"
                     data-mobile-iframe="true">
                  <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a>
                </div>
              </div>
              <!-- End Facebook Share -->

              <!-- Google Plus -->
              <div class="mr-3 mb-2 mb-md-0">
                <div class="g-plus" data-action="share" data-annotation="bubble" data-height="52"></div>
              </div>
              <!-- End Google Plus -->

              <!-- Tweet -->
              <div class="mr-3">
                <a href="https://twitter.com/intent/tweet" class="twitter-share-button" data-size="large" data-text="Stream UI Kit is beautiful Open Source Bootstrap 4 UI Kit under MIT license." data-hashtags="StreamUIKit, Bootstrap, Freebies" data-related="htmlstream, freebies, bootstrap">@htmlstream</a>
              </div>
              <!-- End Tweet -->
            </div>
          </div>
          <!-- End Social Sharing -->

          <hr class="u-opacity-1 mb-4">
        </div>

        <!-- Copyright and Social Icons -->
        <div class="row px-md-3">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white">&copy; 2018 <a class="text-white" href="{{ asset('/') }}">CuongBongDa</a>. All Rights Reserved.</small>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a class="text-white" target="_blank" href="https://www.facebook.com/htmlstream">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                <a class="text-white" target="_blank" href="https://www.instagram.com/htmlstream">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                <a class="text-white" target="_blank" href="https://twitter.com/htmlstream">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                <a class="text-white" target="_blank" href="https://dribbble.com/htmlstream">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Copyright and Social Icons -->
      </div>
    </footer>
    <!-- End Footer -->

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

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