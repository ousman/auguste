<script type="text/javascript">
        $(document).ready(function () {
        
        $("#save-serie").click(function (event) {
            event.preventDefault();
            
            if(!$("#serie-label").val() == "" || !$("#serie-label").val() == undefined){
                 $('#save-serie-form').submit();
            }
            else{
                $('#form-error').remove();
                $('#save-serie-form').prepend('<div id="form-error" class="alert alert-danger">Veuillez remplir le champs<div>');
            }
        });
        
    });
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
    
      <!-- Admin Menu -->
      <div class="w-hidden-tiny w-clearfix div-social admin-menu">
            <div class="w-clearfix filters">
                <ul class="w-list-unstyled filter-list">
                    <li class="filter-iterm"><a class="filter change" href="<?= WEBROOT ?>manage/logout" >D&eacute;connexion</a>
                    </li>
                    <li class="filter-iterm"><a class="filter change" href="<?= WEBROOT ?>manage/introduction" >Introduction</a>
                    </li>
                    <li class="filter-iterm"><a class="filter change" href="<?= WEBROOT ?>manage/" >Gestion G&eacute;n&eacute;rale</a>
                    </li>
                    <li class="filter-iterm"><a class="filter change" href="<?= WEBROOT ?>manage/newPhoto" >Ajout Photo</a>
                    </li>
                    <li class="filter-iterm"><a class="filter change" href="<?= WEBROOT ?>manage/series" >S&eacute;ries</a>
                    </li>
                    <li class="filter-iterm"><a class="filter change" href="<?= WEBROOT ?>manage/tags" >Tags</a>
                    </li>
                </ul>
            </div>
      </div><!-- end of Admin Menu -->

    <div class="w-container">
      <div class="mrg-top-bis">
            <h3>Bienvenu Philippe<span class="ex-sp"></span></h3>
            <div class="line-con-bis"></div>
          </div>
          <p>Ci-dessous le formulaire d'ajout de serie</p>
      
      <h4>Formulaire d'ajout : </h4>

      <form id="save-serie-form" role="form" method="POST" action="<?= WEBROOT ?>manage/addSerie">
  <div class="form-group">
	<label for="exampleInputEmail1">Label</label>
        <input id="serie-label" type="text" class="form-control" id="exampleInputEmail1" placeholder="Serie ID" name="label">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea id="tag-description" type="text" class="form-control" placeholder="Description" name="description"></textarea>
  </div>
<button id="save-serie" type="submit" class="btn btn-default">Ajouter</button>
</form>
</div>

