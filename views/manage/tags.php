<script type="text/javascript">
    var msg = "";
    
    function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}
function urldecode(str) {
   return decodeURIComponent((str+'').replace(/\+/g, '%20'));
}
        
        $(document).ready(function () {
        $('#msg').hide();
        
            msg = unescape((getUrlParameter('msg')));
            console.log(msg);
        if (msg != "" && msg !== undefined && msg != "undefined") {
            $('#msg').append(msg);
            $('#msg').show();
           
        }
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
            <br/>
            <div id="msg" class="alert alert-success">
            </div>
            <div class="mrg-top-bis">
                <h3>Bienvenu Philippe<span class="ex-sp"></span></h3>
                <div class="line-con-bis"></div>
            </div>
            <p>Ci-dessous la liste complète des tags. Il suffit de cliquer sur la ligne correspondante dans le tableau pour pouvoir modifier ou ajouter un tag</p>

            <div class="btn-spc"><a class="button add btn-full" href="<?= WEBROOT ?>manage/newTag">Ajouter Un Tag</a>
            </div>

            <h4>Vos photos : </h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Libell&eacute;</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($view['tags'] as $tag){?>
                    <tr>
                        <td><?= $tag->id ?></td>
                        <td><?= $tag->Label ?></td>
                        <td><a href="<?= WEBROOT ?>manage/modifyTag/<?= $tag->id ?>"><button type="button" class="btn btn-default">Modifier</button></a>&nbsp;<a href="<?= WEBROOT ?>manage/deleteTag/<?= $tag->id ?>"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>