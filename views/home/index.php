<!-- preloader -->
  <div class="loading">
    <div class="loader"><img src="<?= WEBROOT ?>public/images/puff.svg" alt="<?= WEBROOT ?>public/images/puff.svg">
    </div>
  </div>

  <div class="section-wrapper">
    <div class="w-nav w-hidden-main responsive-nav" data-collapse="medium" data-animation="over-left" data-duration="400" data-contain="1">
      <div class="w-container">
        <a class="w-nav-brand brand-res" href="<?= WEBROOT ?>"><img src="<?= WEBROOT ?>public/images/logo4-1.png" width="70" alt="<?= WEBROOT ?>public/logo4-1.png">
        </a>
        
        <!-- start responsive navigation -->
        <nav class="w-nav-menu res-menu" role="navigation">
          <ul class="w-list-unstyled">
            <li class="li-nav"><a class="nav-link active" href="<?= WEBROOT ?>">Portfolio</a>
              <div class="sub-nav">work we are proud of</div>
            </li>
            <li>
              <ul class="w-list-unstyled">
                <li class="sub-li"><a class="subnav-link" href="portfolio-3-columns.html">Portfolio 3 Columns</a>
                  <div class="line"></div>
                </li>
                <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>">Portfolio 4 Columns</a>
                  <div class="line"></div>
                </li>
                <li class="sub-li"><a class="subnav-link" href="portfolio-5-columns.html">Portfolio 5 Columns</a>
                  <div class="line"></div>
                </li>
              </ul>
            </li>
            <li class="li-nav"><a class="nav-link" href="pages.html">Pages</a>
              <div class="sub-nav">Different pages</div>
            </li>
            <li class="li-nav"><a class="nav-link" href="blog.html">Blog</a>
              <div class="sub-nav">what we think</div>
            </li>
            <li class="li-nav"><a class="nav-link" href="elements.html">Elements</a>
              <div class="sub-nav">something you need</div>
            </li>
            <li class="li-nav"><a class="nav-link" href="contact.html">Contact</a>
              <div class="sub-nav">get in touch</div>
            </li>
          </ul>
        </nav><!-- end responsive navigation -->
        <div class="w-nav-button menu-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
    <div class="move-wrapper">
    
      <!-- portfolio filter -->
      <div class="w-hidden-tiny w-clearfix div-social">
        <div class="filters">
          <ul class="w-list-unstyled filter-list">
            <li class="filter-iterm"><a class="filter" href="#" data-filter="all">All</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".illustration">Illustration</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".logotype">Logotype</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".print">Print</a>
            </li>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".motion">Motion</a>
            </li>
            <li class="filter-iterm">
              <a class="w-inline-block filter filter-star" href="#" data-filter=".star">
               <i class="fa fa-star fa-2x"></i>
              </a>
            </li>
          </ul>
        </div>
      </div><!-- end portfolio filter -->
      
      <!-- start portfolio -->
      <div class="w-clearfix grid" id="Grid">
        <!-- To be replaced by database data -->
  <?php for($i=0;$i<20; $i++){?>
        <div class="mix print star" id="mix-2" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="portfolio-project-1.html"><h4 class="text-port" data-ix="move-up">bla bla bla some name</h4><div class="sub-text" data-ix="move-up-2">Cliquer pour plus d'info</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/gallery/test.jpg" alt="port1.jpg">
            <div class="triangle">
              <div class="left-star">
              <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
    <?php }?>
  </div><!-- end portfolio -->
  
  