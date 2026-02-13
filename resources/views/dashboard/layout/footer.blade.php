<!-- footer -->

<footer class="footer-section">
  <div class="container">
    <div class="row gy-4">

      <!-- LEFT -->
      <div class="col-lg-6">
        <img src="{{url('assets/images/logo.png')}}" class="footer-logo" alt="Kawa Music">
        <p class="footer-desc">
          Bridging folk heritage with global audiences through
          music, instruments, and cultural experiences.
        </p>

        <div class="subscribe-box-footer">
          <input type="email" placeholder="Enter your email">
          <button>Subscribe</button>
        </div>
      </div>

      <!-- CENTER -->
      <div class="col-lg-3 col-md-6">
        <h6 class="footer-title">Quick Link</h6>
        <ul class="footer-links">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('artist')}}">Artists</a></li>
          <li><a href="{{url('blog')}}">Blog</a></li>
          <li><a href="{{url('product')}}">Product</a></li>
          <li><a href="{{url('contact')}}">Contact Us</a></li>
        </ul>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-3 col-md-6">
        <h6 class="footer-title">Connect With Us</h6>

        <div class="footer-contact">
          <span>✉</span>
          <a href="mailto:{{$info->email}}">{{$info->email}}</a>
        </div>

        <div class="footer-social">
          <a href="{{$info->facebook_link}}"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="{{$info->twitter_link}}"><i class="fa-brands fa-instagram"></i></a>
          <a href="{{$info->youtube_link}}"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="{{$info->youtube_link}}"><i class="fa-brands fa-youtube"></i></a>
        </div>


      </div>
    </div>

    <hr class="footer-line">

    <!-- BOTTOM -->
    <div class="footer-bottom">
      <p>© 2026 Kawa Music. All rights reserved.</p>

      <div class="footer-policy">
        <a href="#">Privacy Policy</a>
        <a href="#">Term of services</a>
        <a href="#">Cookies Policy</a>
      </div>
    </div>
  </div>
</footer>

<!-- login pop form  -->


<script>
            document.addEventListener("DOMContentLoaded", function() {

                document.querySelectorAll('.lang-options li').forEach(function(el) {
                    el.addEventListener('click', function() {

                        var lang = this.getAttribute('data-lang');

                        var checkExist = setInterval(function() {
                            var select = document.querySelector(".goog-te-combo");

                            if (select) {
                                select.value = lang;
                                select.dispatchEvent(new Event('change'));
                                clearInterval(checkExist);
                            }
                        }, 500);

                        document.querySelector('.lang-selected').innerHTML =
                            this.innerText + ' <i class="fa-solid fa-angle-down"></i>';
                    });
                });

            });
        </script>

<!-- Bootstrap JS Bundle -->
<script src="{{url('assets/js/jquery-3.6.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{url('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/isotope-pkd-min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<!-- <script src="assets/js/aos.js" type="text/javascript"></script> -->
<script src="{{url('assets/js/custom.js')}}" type="text/javascript" defer></script>




</body>

</html>
