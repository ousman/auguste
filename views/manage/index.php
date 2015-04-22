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
        if (msg != "" && msg !== undefined) {
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

        <!-- Admin Menu -->
        <div class="w-hidden-tiny w-clearfix div-social admin-menu">
            <div class="w-clearfix filters">
                <ul class="w-list-unstyled filter-list">
                    <li class="filter-iterm"><a class="filter" href="<?= WEBROOT ?>manage/" >Gestion G&eacute;n&eacute;rale</a>
                    </li>
                    <li class="filter-iterm"><a class="filter" href="<?= WEBROOT ?>manage/newPhoto" >Ajout Photo</a>
                    </li>
                    <li class="filter-iterm"><a class="filter" href="<?= WEBROOT ?>manage/newSerie" >Ajout Serie</a>
                    </li>
                    <li class="filter-iterm"><a class="filter" href="<?= WEBROOT ?>manage/newTag" >Ajout Tag</a>
                    </li>
                </ul>
            </div>
        </div><!-- end of Admin Menu -->

        <div class="w-container">
            <div id="msg" class="message">
            </div>
            <div class="mrg-top-bis">
                <h3>Bienvenu Philippe<span class="ex-sp"></span></h3>
                <div class="line-con-bis"></div>
            </div>
            <p>Ci-dessous la liste complète des photos. Il suffit de cliquer sur la ligne correspondante dans le tableau pour pouvoir modifier ou ajouter une photo</p>

            <div class="btn-spc"><a class="button add btn-full" href="<?= WEBROOT ?>manage/newPhoto">Ajouter Une Photo</a>
            </div>

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
                    <?php foreach($view['photos'] as $photo){?>
                    <tr>
                        <td><?= $photo->id ?></td>
                        <td><?= $photo->Label ?></td>
                        <td><?= $photo->Serie->Label ?></td>
                        <td><?= $photo->Tag->Label ?></td>
                        <td><a href="<?= WEBROOT ?>manage/modifyPhoto/<?= $photo->id ?>" class="modify" >Modifier</a>&nbsp;<a href="<?= WEBROOT ?>manage/deletePhoto/<?= $photo->id ?>" class="modify" >Supprimer</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

