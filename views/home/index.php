<script>
    document.body.style.backgroundColor = "#000000";
</script>
<!-- preloader -->
<div class="loading">
    <div class="loader"><img src="<?= WEBROOT ?>public/images/puff.svg" alt="<?= WEBROOT ?>public/images/puff.svg">
    </div>
</div>

<div class="section-wrapper">
    <div class="w-nav w-hidden-main responsive-nav" data-collapse="medium" data-animation="over-left" data-duration="400" data-contain="1">
        <div class="w-container">
            <a class="w-nav-brand brand-res" href="<?= WEBROOT ?>"><img src="<?= WEBROOT ?>public/images/logo-resp.png" width="150" alt="<?= WEBROOT ?>public/logo.png">
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
                            <?php foreach ($view['series'] as $s): ?>
                            <?php var_dump($s); ?>
                                <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/four/<?= $s->id ?>"><?= $s->Label ?></a>
                                    <div class="line"></div>
                                </li>
                            <?php endforeach; ?>
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
            <div class="filters" id="default">
                <h3 style="display: block; float: left; margin: 0;">Cliquez sur une S&eacute;rie</h3>
                <ul class="w-list-unstyled filter-list" id="menu-filter">
                    <li class="filter-iterm">
                        <form method="POST" action="<?= WEBROOT ?>photos/search">
                            <input type="hidden" id="webroot" value="<?= WEBROOT ?>">
                            <input class="filter" type="text" id="search" name="searchString" placeholder="Recherche"> <button class="filter" type="submit" id="searchPhoto">Go</button>
                        </form>
                    </li>
                </ul>
            </div>
            <?php foreach ($view['series'] as $s): ?>
                <div class="filters" id="<?= $s->Label ?>" style="display: none;">
                    <ul class="w-list-unstyled filter-list" id="menu-filter">
                        <?php foreach ($s->Tags as $t): ?>
                            <li class="filter-iterm"><a class="filter" href="#" data-filter=".<?= strtolower($t->Label) ?>"><?= $t->Label ?></a>
                            </li>
                        <?php endforeach; ?>
                        <li class="filter-iterm"><a class="filter" href="#" data-filter="all">Retour</a>
                        </li>
                        <li class="filter-iterm">
                            <form method="POST" action="<?= WEBROOT ?>photos/search">
                                <input type="hidden" id="webroot" value="<?= WEBROOT ?>">
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
            <?php endforeach; ?>
        </div><!-- end portfolio filter -->

        <!-- start portfolio -->
        <div class="w-clearfix grid" id="Grid">
            <!-- To be replaced by database data -->
            <div class="inner-banner" style="background-color:black;">
                <?php foreach ($view['series'] as $s) { ?>
                    <div class="w-container fixed-container">
                        <div class="algin-center" style="max-height: 150px !important;">
                            <h4 class="inner-sub" data-ix="move-3"><a href="<?= WEBROOT ?>format/four/<?= $s->id ?>"><span class="domote"><?= $s->Label ?></span></a></h4>
                            <div class="tst-txt tst-ban" data-ix="move-3" style="color:white;"><?= $s->Description ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div><!-- end portfolio -->

