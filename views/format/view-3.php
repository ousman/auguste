<script>
document.body.style.backgroundColor = "#000000";
</script>
  <!-- preloader -->
  <div class="loading">
    <div class="loader"><img src="<?=WEBROOT?>public/images/puff.svg" alt="puff.svg">
    </div>
  </div>
  
  <!-- start navigation -->
  <?php //include 'nav.php';?>
  
  </div>
  <div class="section-wrapper">
    <div class="w-nav w-hidden-main responsive-nav" data-collapse="medium" data-animation="over-left" data-duration="400" data-contain="1">
      <div class="w-container">
         <a class="w-nav-brand brand-res" href="<?= WEBROOT ?>"><img src="<?= WEBROOT ?>public/images/logo.png" width="70" alt="<?= WEBROOT ?>public/logo.png">
        </a>
        
                <!-- start responsive navigation -->
        <nav class="w-nav-menu res-menu" role="navigation">
          <ul class="w-list-unstyled">
            <li class="li-nav"><a class="nav-link active" href="<?= WEBROOT ?>">August BUI</a>
              <div class="sub-nav">Parce qu'au fond il y a la couleur, la forme ne reste qu'un langage</div>
            </li>
            <li>
              <ul class="w-list-unstyled">
              <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/">3 oeuvres par ligne</a>
                <div class="line"></div>
              </li>
              <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>">4 oeuvres par ligne</a>
                <div class="line"></div>
              </li>
              <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/five/">5 oeuvres par ligne</a>
                <div class="line"></div>
              </li>
            </ul>
            </li>
            <li class="li-nav"><a class="nav-link" href="contact.html">Contact</a>
            <div class="sub-nav">En savoir plus</div>
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
            <?php foreach ($view['tags'] as $tag):?>
            <li class="filter-iterm"><a class="filter" href="#" data-filter=".<?= strtolower($tag->Label) ?>"><?= $tag->Label ?></a>
            </li>
            <?php endforeach; ?>
            <li class="filter-iterm">
                <form method="POST" action="<?=WEBROOT?>photos/search">
                    <input class="filter" type="text" id="search" name="searchString" placeholder="Recherche"> <button class="filter" type="submit" id="searchPhoto">Go</button>
                </form>
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
          <?php foreach($view['photos'] as $photo){?>
          <div class="mix mix-3 star <?= strtolower($photo->Serie->Label)?> <?= strtolower($photo->Tag->Label)?>" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="<?= WEBROOT ?>photos/display/<?=$photo->id?>"><h4 class="text-port" data-ix="move-up"><?= $photo->Label ?></h4><div class="sub-text" data-ix="move-up-2">Cliquer ici pour plus d'infos</div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/uploaded/<?=$photo->Fichier?>" alt="port1.jpg">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
        
  </div><!-- end portfolio -->