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
          <p>Ci-dessous le formulaire d'ajout de photo</p>
      
      <h4>Formulaire d'ajout : </h4>

      <form role="form">
  <div class="form-group">
	<label for="exampleInputEmail1">Label</label>
	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">Series</label>
	<select class="form-control">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	</select>
  </div>
  <div class="form-group">
	<label for="exampleInputEmail1">Tag</label>
	<select class="form-control">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	</select>
  </div>

  <div class="form-group">
	<label for="exampleInputFile">File input</label>
	<input type="file" id="exampleInputFile">
	<p class="help-block">Example block-level help text here.</p>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
      
     