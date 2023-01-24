<?php $services = json_decode(file_get_contents('data/services.json'),true);?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
     <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-5dd389a1-56a7-4554-acc8-68c41a4bcab6"></div> 
    <style>
      .elfsight-app-5dd389a1-56a7-4554-acc8-68c41a4bcab6 a{
        display: none !important; 
      }
      .iujTWj{
        bottom: 0 !important;
      }
    </style>
    <div class="footer-newsletter">
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <img loading="lazy" src="assets/img/logo 2.webp" alt="" style="max-height: 64px;    display: block;    margin-bottom: 24px;">
            <p>
              711 Executive Blvd # W, 
 <br>
 Valley Cottage, NY 10989<br>
              United States <br><br>
              <strong>Phone:</strong> (845) 268-9100<br>
              <strong>Email:</strong> info@fsiinteriors.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Navigation</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $path!=='/' ? '/':''; ?>#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $path!=='/' ? '/':''; ?>#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $path!=='/' ? '/':''; ?>#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/gallery.php">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/projects.php">Projects</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://fivestarinteriors.herokuapp.com">Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $path!=='/' ? '/':''; ?>#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            <?php
        foreach ($services as $item) {
        ?>

<li><i class="bx bx-chevron-right"></i> <a href="service.php?s=<?php echo  urlencode(trim($item['name'])); ?>"><?php echo $item['name'];?></a></li>
        <?php } ?>

            
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p></p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>FSI Interiors Inc</span></strong>. All Rights Reserved
      </div>
      <div class="credits">Powered By <a href="https://wiederand.co">Wieder & Co</a> 
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/noframework.waypoints.min.js" integrity="sha512-lzIDzaYCox5oeC0ymj6ho5fRdMrCYkhHfVEm3fySZStdwG85y9SxTcIFYYEUiW1KYbkfiInVFkGofRlYlkHgLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://unpkg.com/typeit@8.0.7/dist/index.umd.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>