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
              <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/">3 oeuvre par ligne</a>
                <div class="line"></div>
              </li>
              <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>">4 oeuvre par ligne</a>
                <div class="line"></div>
              </li>
              <li class="sub-li"><a class="subnav-link" href="<?= WEBROOT ?>format/five/">5 oeuvre par ligne</a>
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
        <div class="w-clearfix filters">
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

    <div class="w-container">
      <div class="mrg-top-bis">
            <h3>Bienvenu Philippe<span class="ex-sp"></span></h3>
            <div class="line-con-bis"></div>
          </div>
          <p>Ci-dessous la liste complète des photos. Il suffit de cliquer sur la ligne correspondante dans le tableau pour pouvoir modifier ou ajouter une photo</p>
      
      <h4>Vos photos : </h4>
      <table class="table">
         <thead>
          <tr>
             <th>ID</th>
             <th>Libell&eacute;</th>
             <th>Serie</th>
             <th>Tag</th>
             <th>Action</th>
          </tr>
         </thead>
         <tbody>
          <tr>
             <td>1</td>
             <td>Mark</td>
             <td>Otto</td>
             <td>bla</td>
             <td><a class="add" href="<?= WEBROOT ?>manage/newPhoto">Modifier</a></td>
          </tr>
          <tr>
             <td>2</td>
             <td>Jacob</td>
             <td>Thornton</td>
             <td>bla</td>
             <td>@fat</td>
          </tr>
          <tr>
             <td>3</td>
             <td>Larry</td>
             <td>the Bird</td>
             <td>bla</td>
             <td>@twitter</td>
          </tr>
         </tbody>
        </table>
    </div>
      
     