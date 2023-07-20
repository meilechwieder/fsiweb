  <!-- ======= Portfolio Section ======= -->
  <section id="gallery" class="portfolio2" data-aos="fade-up">

    <div class="container">


    <div class="section-title" style="padding-bottom: 21px;">
    <h3><span>Gallery</span></h3>
  </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <ul id="portfolio-flters">


          <li data-filter="*" class="filter-active">All</li>

          <li data-filter=".filter-StudFraming">Stud Framing </li>
          <li data-filter=".filter-WoodFraming">Wood Framing</li>
          <li data-filter=".filter-Drywall">Drywall</li>
          <li data-filter=".filter-Spackle">Spackle</li>
          <li data-filter=".filter-Sheetrock">Sheetrock</li>
          <li data-filter=".filter-Soundproofing">Soundproofing</li>
          <li data-filter=".filter-Insulation">Insulation</li>
          <li data-filter=".filter-HardwareInstallation">Hardware Installation</li>

        </ul><!-- End Portfolio Filters -->
        <div class="pc">
        <?php if ($path == '/' || $path == '/index.php') {
          ?>
        <div class="blanket"></div>
            <a href="gallery.php" class="btn-get-started seeAll">See all</a>
            <?php }?>
        <div class="row g-0 portfolio-container2">
          <?php
           $arr = array_filter($data['items'], function ($item) {
            return ($item['sys']['contentType']['sys']['id'] == 'gallery');
          });
          $arr = $path == '/' || $path == '/index.php' ? array_slice($arr, 0, 20) : $data['items'];
          foreach ($arr as $item) { ?>
            <?php
            if ($item['sys']['contentType']['sys']['id'] !== 'gallery') continue;
            foreach($item['fields']['images'] as $img){
            ?>

            <div 
            onclick="event.target.querySelector('a').click()"
            style="cursor:pointer"
            class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-<?php echo str_replace(' ', '', $item['fields']['tags']); ?>">
              <a href="<?php echo findAsset($img['sys']['id']); ?>" data-type="image" title="<?php echo $item['fields']['imageThumnail']; ?>" data-gallery="portfolio-gallery" class="glightbox preview-link">
                <img src="<?php echo findAsset($img['sys']['id']); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $item['fields']['imageThumnail']; ?></h4>

                </div>
              </a>
            </div><!-- End Portfolio Item -->


          <?php }} ?>


        </div><!-- End Portfolio Container -->

        </div>
      </div>

    </div>
  </section><!-- End Portfolio Section -->