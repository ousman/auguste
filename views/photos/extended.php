 <style>
 body{
  background-color:black;
 }
 </style>
 <!-- preloader -->
  <div class="loading">
    <div class="loader"><img src="<?=WEBROOT?>public/images/puff.svg" alt="puff.svg">
    </div>
  </div>
 
  <div class="section-wrapper">
    <div class="w-nav w-hidden-main responsive-nav" data-collapse="medium" data-animation="over-left" data-duration="400" data-contain="1">
      <div class="w-container">
         <a class="w-nav-brand brand-res" href="<?= WEBROOT ?>"><img src="<?= WEBROOT ?>public/images/logo.png" width="70" alt="<?= WEBROOT ?>public/logo.png">
        </a>
                <!-- start responsive navigation -->
        <nav class="w-nav-menu res-menu" role="navigation">
          <ul class="w-list-unstyled">
            <li class="li-nav"><a class="nav-link active" href="<?= WEBROOT ?>home/introduction">Introduction</a>
            </li>
            <li>
              <ul class="w-list-unstyled">
              <?php foreach ($view['series'] as $s): ?>
                            <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/four/<?= $s->id ?>"><?= $s->Label ?></a>
                                <div class="line"></div>
                            </li>
                        <?php endforeach; ?>
            </ul>
            </li>
             <li class="li-nav"><a class="nav-link" href="http://fr-fr.facebook.com/people/Auguste-Bui/100000277766236" target="blank">Contact</a>
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
      <section class="inner-banner" id="top" style="height:75px;">
        <div class="w-container fixed-container">
          <div class="algin-center" style="max-height: 50px !important; padding-top:15px !important;  padding-bottom:0px !important;">
            <span class="inner-sub" data-ix="move-3" style="font-size:20px; margin-bottom:0px !important; "><span class="domote"><?= $view['photo']->Serie->Label ?> <?= $view['photo']->Tag->Label ?> : </span><?= $view['photo']->Label ?></span>
            <div class="tst-txt tst-ban" style="font-size:15px;" data-ix="move-3"><?= $view['photo']->Extension ?></div>
          </div>
        </div>
      </section>
      <section class="section" style="background-color:black;">
        <div class="w-container">
          <div class="w-row">
            <div class="w-col w-col-4 w-hidden-small w-hidden-tiny col-left"></div>
            <div class="w-col w-col-4 col-center">
              <div class="btn-spc"><a class="button btn-small" href="<?= WEBROOT ?>">View All Photos</a>
              </div>
            </div>
            <div class="w-col w-col-4 col-right">
<!--              <div class="btn-spc"><a class="button btn-small" href="">Photo Suivante<span class="arrow a-nxt">›</span></a>
              </div>-->
            </div>
          </div>
          <div class="i-stack">
              <div class="spc-bott"><img style="width: 750px; height: 750px; display: block; margin-left: auto; margin-right: auto;" src="<?= WEBROOT ?>public/uploaded/<?= $view['photo']->Fichier ?>" alt="photo-tab1.jpg">
            </div>

            <div class="spc-bott" style="color:white;">
                <p style="color:white !important;"><?= $view['photo']->Description ?></p>
            </div>
          </div>
        </div>
      </section>
      <section>
          <?php foreach($view['photos'] as $tof):?>
        <div class="mix mix-5 print star" data-ix="hover-port"><a class="w-inline-block tittle-wrapper" href="<?= WEBROOT ?>photos/display/<?=$tof->id?>"><h4 class="text-port" data-ix="move-up"><?= $tof->Label ?></h4><div class="sub-text" data-ix="move-up-2"><?= $tof->Extension ?></div></a>
          <div class="img-wrapper"><img src="<?= WEBROOT ?>public/uploaded/<?= $tof->Fichier ?>" alt="port1.jpg">
            <div class="triangle">
              <div class="left-star">
                <i class="fa fa-star fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
          <?php endforeach; ?>
      </section>
    </div>
  </div>