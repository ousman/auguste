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
        return decodeURIComponent((str + '').replace(/\+/g, '%20'));
    }

    $(document).ready(function () {

        $('#msg').hide();

        msg = unescape((getUrlParameter('msg')));
        console.log(msg);
        if (msg != "" && msg !== undefined && msg != "undefined") {
            $('#msg').append(msg);
            $('#msg').show();

        }

        $("#save-intro").click(function (event) {
            event.preventDefault();

            if (!$("#intro-text").val() == "" || !$("#intro-text").val() == undefined) {
                $('#save-intro-form').submit();
            }
            else {
                $('#form-error').remove();
                $('#save-intro-form').prepend('<div id="form-error" class="alert alert-danger">Veuillez remplir le champs<div>');
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
            <div id="msg" class="alert alert-success">
            </div>
            <div class="mrg-top-bis">

                <h3>Bienvenu Philippe<span class="ex-sp"></span></h3>
                <div class="line-con-bis"></div>
            </div>
            <p>Ci-dessous le formulaire de modification de l'introduction</p>

            <h4>Formulaire de modification : </h4>

            <form id="save-intro-form" role="form" method="POST" action="<?= WEBROOT ?>manage/updateIntroduction">
                <div class="form-group">
                    <label for="exampleInputEmail1">introduction</label>
                    <textarea id="intro-text" rows="10" class="form-control" placeholder="Introduction" name="text"><?= $view['intro']->Text ?></textarea>
                </div>
                <button id="save-intro" type="submit" class="btn btn-default">Modifier</button>
            </form>
        </div>

