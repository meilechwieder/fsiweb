<?php if(isset($_GET['p'])&&$_GET['p']) {
    $proj=array_values(array_filter($data['items'],function($each){
      return $each['sys']['contentType']['sys']['id']=='project'&& $_GET['p'] ==trim($each['fields']['projectName']);
    }))[0];
    ?>   
  
  
  
    <main id="main" data-aos="fade-up">
  
      <!-- ======= Breadcrumbs Section ======= -->
      <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Project Details</h2>
            <ol>
              <li><a href="index.php">Home</a></li>
              <li><a href="projects.php">Projects</a></li>
              <li>Project Details</li>
            </ol>
          </div>
  
        </div>
      </section><!-- Breadcrumbs Section -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
  
                  <div class="swiper-slide">
                    <img class="abs" src="<?php echo findAsset($proj['fields']['finishImageMainImage']['sys']['id']) ;?>" alt="">
                  </div>
                  <?php foreach($proj['fields']['images'] as $img){?>
                    
                  <div class="swiper-slide">
                    <img class="abs" src="<?php echo findAsset($img['sys']['id']) ;?>" alt="">
                  </div>
                    <?php } ?>
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-4">
              <div class="portfolio-description">
                <h2><?php echo isset($proj['fields']['projectName'])?$proj['fields']['projectName']:'';?></h2>
                <p>
                <?php echo isset($proj['fields']['projectDescription'])?$proj['fields']['projectDescription']:'';?>
                </p>
              </div>
              <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
  
                  <?php if(isset($proj['fields']['client'])){?>
                    <li><strong>Client</strong>: <?php echo $proj['fields']['client'];?></li>
                    <?php }?>
                  <?php if(isset($proj['fields']['type'])){?>
                    <li><strong>Category</strong>: <?php echo $proj['fields']['type'];?></li>
                    <?php }?>
                  <?php if(isset($proj['fields']['projectLocation'])){?>
                    <li><strong>Location</strong>: <?php echo $proj['fields']['projectLocation'];?></li>
                    <?php }?>
                  <?php if(isset($proj['fields']['projectDate'])){?>
                    <li><strong>Date</strong>: <?php echo $proj['fields']['projectDate'];?></li>
                    <?php }?>
                </ul>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->
  
    </main><!-- End #main -->
  
  
  
  
  
    <?php }else{?>
      
      
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <!-- <h2>Projects</h2> -->
            <h3 style="margin-bottom: 21px;color: #979495">Check out our <span style="color: #ac1d37">Projects</span></h3>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
  
                <?php if ($path !== '/' &&$path !== '/index.php') { ?>
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-res">Residential</li>
                  <li data-filter=".filter-comm">Commercial</li>
                  <li data-filter=".filter-ind">Industrial</li>
                <? } ?>
              </ul>
            </div>
          </div>
          <div class="pc">
  
            <?php if ($path == '/' || $path == '/index.php') {
            ?>
              <div class="blanket"></div>
              <a href="projects.php" class="btn-get-started sellAll">See all</a>
            <?php        }          ?>
            <div class="row portfolio-container">
  
              <?php
              $arr = array_filter($data['items'], function ($item) {
                return ($item['sys']['contentType']['sys']['id'] == 'project');
              });
              $arr = $path == '/' || $path == '/index.php' ? array_slice($arr, 0, 9) : $data['items'];
              foreach ($arr as $item) { ?>
                <?php
                if ($item['sys']['contentType']['sys']['id'] !== 'project') continue;
                ?>
                <div 
                  class="
                    col-lg-4 col-md-6 portfolio-item 
                    <?php echo isset($item['fields']['commercial'])&& $item['fields']['commercial'] ? 'filter-comm' : ''; ?>
                    <?php echo isset($item['fields']['residential'])&& $item['fields']['residential'] ? 'filter-res' : ''; ?>
                    <?php echo isset($item['fields']['industrial'])&& $item['fields']['industrial'] ? 'filter-ind' : ''; ?>
                  "
                >
                  <a href="<?php echo '/projects.php?p=' . urlencode(trim($item['fields']['projectName'])); ?>" class="details-link" title="More Details">
                    <img src="<?php echo findAsset($item['fields']['finishImageMainImage']['sys']['id']); ?>" 
                    style="width: 100%;height: 100%;object-fit: cover;"
                    alt="">
                    <div class="portfolio-info">
                      <h4><?php echo $item['fields']['projectName']; ?></h4>
                      <p><?php echo isset($item['fields']['projectLocation']) ? $item['fields']['projectLocation'] : ''; ?></p>
                      <!-- <a href="assets/img/portfolio/Dunkin Donuts - 921 ROUTE 9W.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a> -->
  
                    </div>
                  </a>
                </div>
  
              <?php } ?>
            </div>
          </div>
  
        </div>
      </section><?php }?>