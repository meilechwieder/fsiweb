<?php include 'includes/header.php';
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">


    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.webp)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Built on Solid Foundations</h2>
            <p class="animate__animated animate__fadeInUp">Of commitment and cutting edge solutions</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More<a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Your one stop construction solution</h2>
            <p class="animate__animated animate__fadeInUp">All interior construction services – one trusted name.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">You Can’t Beat Perfection</h2>
            <p class="animate__animated animate__fadeInUp">A well-earned five star rating</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
  
      <?php foreach($serv2 as $key => $serv) {?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 industries-secs">
          <div onclick="event.target.closest('.industries-secs').querySelector('a').click()">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo ($key+1)*100 ?>">
              <div class="icon"><img src="assets/img/icnos/<?php echo $serv['smallIcon']?>" alt=""></div>
              <h4 class="title"><?php  echo $serv['name']?></h4>
              <p class="description">
              <?php echo $serv['p'][0] ?>  
              <br><a class="readmore" href="service.php?s=<?php echo urlencode(trim($serv['name'])) ?>">Read More</a>
              </p>
            </div>
          </div>
        </div>
        <?php
      }?>

      </div>

    </div>
  </section>
  <br>
  <div class="section-title" style="padding-bottom: 2px;">
    <h3><span class="pulled">Rely on Us For:</span></h3>
  </div>
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">

            <h2 id="o-expertise"></h2>

            <ul>
              <li>

                Metal Stud Framing
              </li>
              <li> Wood Framing</li>
              <li> Drywall</li>
              <li> Decorative drywall</li>
              <li> Soundproofing solutions</li>

              <li> Energy efficient insulation</li>
              <li> Acoustical ceilings</li>
              <li> Commercial doors, skylights and windows installation</li>
            </ul>
            <div class="text-center text-lg-start">

            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img loading="lazy" src="assets/img/our expertise.jpg" class="img-fluid" style="min-width: 100%;" alt="">
        </div>
      </div>
    </div>
    <div style="padding:60px 0;"></div>
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img loading="lazy" src="assets/img/our success.jpg" class="img-fluid" style="min-width: 100%;" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">

            <h2 id="o-success"></h2>
            <div class="text-center text-lg-start">
              <ul>
                <li>Wood Framing</li>
                <li>Drywall</li>
                <li>Decorative Drywall including arches, <br>custom ceilings and more</li>
                <li>Soundproofing Solutions</li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="padding:60px 0;"></div>
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">

            <h2 id="o-reputation"></h2>
            <ul>
              <li>Luxury homes</li>
              <li>Condos and apartment buildings</li>
              <li>Office complexes</li>
              <li>Financial institutions</li>
              <li>Shopping malls</li>
              <li>Hotels, restaurants and banquet facilities</li>
              <li>Educational and religious institutions</li>

            </ul>
            <div class="text-center text-lg-start">

            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img loading="lazy" src="assets/img/our reputation.jpg" class="img-fluid" style="min-width: 100%;" alt="">
        </div>
      </div>
    </div>
    <div style="padding:60px 0;"></div>
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img loading="lazy" src="assets/img/our commitment.jpg" class="img-fluid" style="min-width: 100%;" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">

            <h2 id="o-commitment"></h2>
            <ul>
              <li>The number one trusted name <br>by homeowners and developers</li>
              <li>Unmatched sophistication and skill</li>
              <li>Employee dedication</li>
              <li>Meticulous attention to detail</li>
              <li>Quick turnaround and delivery</li>

            </ul>
            <div class="text-center text-lg-start">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class='bx bx-building-house'></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="5921" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class='bx bxs-dashboard'></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="81463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sheetrock Boards</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style=""></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="178" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->











  <?php // include 'includes/gallery.php';
  ?>








  <!-- ======= Clients Section ======= -->
  <div class="section-title" style="padding-bottom: 21px;">
    <h3><span class="pulled" style="letter-spacing: 10px; margin-bottom:21px">Trusted By</span></h3>
  </div>
  <section id="clients" class="clients section-bg">

    <div class="container" data-aos="zoom-in">

      <div class="row">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img loading="lazy" src="assets/img/clients/redcom.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img loading="lazy" src="assets/img/clients/t-mobile.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img loading="lazy" src="assets/img/clients/mc_gowan.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img loading="lazy" src="assets/img/clients/audi.png" class="img-fluid" alt="" style="max-width: 54%;"> 
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img loading="lazy" src="assets/img/clients/logo.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img loading="lazy" src="assets/img/clients/sunshine.png" class="img-fluid" alt="">
        </div>


      </div>

    </div>
  </section><!-- End Clients Section -->


  <div class="container" data-aos="fade-up">



    <!-- <div class="row">
        <?php
        foreach ($services as $item) {
        ?>
          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/service.php?s=<?php echo urlencode(trim($item['name'])); ?>">
              <div class="box">
                <img loading="lazy" src="assets/img/services/<?php echo $item['imgFileName']; ?>" class="img-fluid" alt="">
                <h3><?php echo $item['name']; ?></h3>
              </div>
            </a>
          </div>
        <?php } ?>


      </div> -->

  </div>

  <!-- ======= Features Section ======= -->
  <section id="services" class="features">
    <header class="section-header">
      <div class="section-title" style="padding-bottom: 2px;">
        <h3><span class="pulled" style="letter-spacing: 10px;">Our Services</span></h3>
      </div>
    </header>
    <br>
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row gy-4 d-flex">

        <!-- <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>Modinest</h4>
            </a>
          </li> -->
        <!-- End Tab 1 Nav -->
        <?php
        $var1 = 1;
        foreach ($services as  $item) {
        ?>
          <li class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a class="box <?php echo $var1 == 1 ? 'active show' : ''; ?>" style="cursor:pointer;display:block" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $var1; ?>">
              <!-- <div class="arrow-down-box"></div> -->
              <h3>
                 <img src="assets/img/services/<?php echo $item['imgFileName']; ?>" class="img-fluid"> 
            <span><?php echo $item['name']; ?></span>
            </h4>
            </a>
          </li><!-- End Tab 1 Nav -->




        <?php $var1++;
        } ?>

      </ul>
      <br><br>
      <div class="tab-content">
        <?php
        $var1 = 1;
        foreach ($services as  $item) {
        ?>
          <div class="tab-pane <?php echo $var1 == 1 ? 'active show' : ''; ?>" id="tab-<?php echo $var1; ?>">
            <div class="row gy-4" style="justify-content: space-between">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3><?php echo $item['name']; ?></h3>
                <?php foreach ($item['description'] as $desc) { ?>
                  <p><?php echo $desc; ?></p>
                <?php } ?>
                <ul>

                  <?php if (isset($item['listItems'])) {
                    foreach ($item['listItems'] as $desc) { ?>

                      <li><i class="bi bi-check-circle-fill"></i><?php echo $desc; ?></li>
                  <?php }
                  } ?>

                </ul>
              </div>

              <div class="col-lg-4 order-1 order-lg-2 text-center" style="max-width: 135px;" data-aos="fade-up" data-aos-delay="200">
                <img loading="lazy" src="assets/img/services/<?php echo $item['imgFileName2']; ?>" alt="" class="img-fluid">
              </div>
              <!-- <div class="brands col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200" style="margin-top: 60px;">
              <?php if (isset($item['brands'])) {
                foreach ($item['brands'] as $br) { ?>

<img style="max-width:150px;display:block;margin:auto;margin-top:20px" src="assets/img/brands/<?php echo $br; ?>">
<?php }
              } ?>
              </div> -->
            </div>

          </div><!-- End Tab Content 1 -->


        <?php $var1++;
        } ?>
      </div>

    </div>
  </section><!-- End Features Section -->











  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img loading="lazy" src="assets/img/M.png" class="testimonial-img" alt="">
              <h3>Kevin Seiter</h3>
              <h4>Real Estate Developer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                FSI is truly a blessing! I’ve been using them for 18 years and they’ve proven again and again to be
                trusted, punctual and perfect <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img loading="lazy" src="assets/img/F.png" class="testimonial-img" alt="">
              <h3>I. W.</h3>
              <h4>CEO Estate Management Services</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                As a high-end construction company servicing NY, NJ and PA, I couldn’t have done it without FSI. They
                are true professionals. They have the right teams to execute any job and tackle every challenge – big or
                small. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img loading="lazy" src="assets/img/M.png" class="testimonial-img" alt="">
              <h3>A. Spira </h3>
              <h4>Contractor</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Five Star is the way to go. The knowledge and expertise they put into each job is unbelievable. I love the
                way they review the job criteria prior to starting the work. It makes the project go so smoothly, and you
                feel you’re in the right hands. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->



        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <?php //include 'includes/projects.php'; 
  ?>





  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>F.A.Q</h2>
        <h3>Frequently Asked <span>Questions</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-10">
          <ul class="faq-list">

            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                </p>
              </div>
            </li>

          </ul>
        </div>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <!-- <h2>Contact</h2> -->
        <h3><span>Contact Us</span></h3>
        <p>Just send us your question or concern and our passionate team will be happy to help you.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>711 Executive Blvd # W, Valley Cottage, NY 10989
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>info@fsiinteriors.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>(845) 268-9100</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" data-src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCL3KRAut4ft_AfA1IvGk6uRRtjnfLevC0&q=FSI+Interiors+Inc+Valley+Cottage+NY" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>
        <script type="text/javascript">
          function load_iframes() {
            var vidDefer = document.getElementsByTagName('iframe');
            for (var i = 0; i < vidDefer.length; i++) {
              if (vidDefer[i].getAttribute('data-src')) {
                vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
              }
            }
          }
          document.addEventListener("DOMContentLoaded", function(event) {
            load_iframes();
          });
        </script>
        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php include 'includes/footer.php'; ?>