<div class="w-hidden-medium w-hidden-small w-hidden-tiny left-navigation" data-ix="hover-out">
    <div class="hamburger" data-ix="hover">
        <div class="ham2">
            <div class="line-1"></div>
            <div class="line-3" data-ix="90-grade"></div><!-- plus to x interaction -->
        </div>
    </div>
    <nav class="menu-wrapper">
        <a class="w-inline-block brand" href="<?= WEBROOT ?>" data-ix="move"><img src="<?= WEBROOT ?>public/images/logo-resp.png"  ><!-- logo goes here -->
        </a>

        <div class="navigation" data-ix="move-2">
            <ul class="w-list-unstyled">
                <li class="li-nav"><a class="nav-link active" href="<?= WEBROOT ?>">August BUI</a>
                    <div class="sub-nav">Parce qu'au fond il y a la couleur, la forme ne reste qu'un langage</div>
                </li>
                <li>
                    <ul class="w-list-unstyled">
                        <!--<li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/">3 oeuvres par ligne</a>
                            <div class="line"></div>
                        </li>
                        <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>">4 oeuvres par ligne</a>
                            <div class="line"></div>
                        </li>
                        <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/five/">5 oeuvres par ligne</a>
                            <div class="line"></div>
                        </li>-->
                        <?php foreach ($view['series'] as $s): ?>
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
        </div>
        <div class="social-ico" data-ix="move">
            <a class="w-inline-block social" href="http://fr-fr.facebook.com/people/Auguste-Bui/100000277766236" target="blank">
                <i class="fa fa-facebook-square fa-2x"></i>
            </a>

            <div class="copyright">
                <div class="copyright-text">© 2015 <a href="<?= WEBROOT ?>manage/">AUGUSTE BUI</a></div>
            </div>
        </div>
    </nav><!-- end navigation -->
</div>