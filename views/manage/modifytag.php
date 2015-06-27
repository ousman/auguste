<script type="text/javascript">
    $(document).ready(function () {

        $("#save-tag").click(function (event) {
            event.preventDefault();
            else if (!$("#tag-label").val() == "" || !$("#tag-label").val() == undefined || !$("#serie-label").val() == "" || !$("#serie-label").val() == undefined || !$("#tag-description").val() == "" || !$("#tag-description").val() == undefined) {
                $('#save-tag-form').submit();
            }
            else {
                $('#form-error').remove();
                $('#save-tag-form').prepend('<div id="form-error" class="alert alert-danger">Veuillez remplir le champs<div>');
                $('#save-tag-form').prepend('<div id="form-error" class="alert alert-danger">La s&eacute;rie doit être renseign&eacute;e<div>');
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
                    <li class="filter-iterm"><a class="filter change" href="<?= WEBROOT ?>manage/logout" >D&eacute;connexion</a>
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
            <p>Ci-dessous le formulaire de modification de tag</p>

            <h4>Formulaire de modification : </h4>

            <form id="save-tag-form" role="form" method="POST" action="<?= WEBROOT ?>manage/updateTag">
                <div class="form-group">
                    <label for="exampleInputEmail1">Label</label>
                    <input id="tag-label" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tag ID" name="label" value="<?= $view['tag']->Label ?>">
                    <input type="hidden" name="id" value="<?= $view['tag']->id ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea id="tag-description" type="text" class="form-control" placeholder="Description" name="description"><?= $view['tag']->Description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Series</label>
                    <select id="serie-label" class="form-control" name="serie">
                        <option value="">Choisissez une S&eacute;rie</option>
                        <?php foreach ($view['series'] as $serie): ?>
                            <option value="<?= $serie->id ?>" <?php if ($serie->id == $view['tag']->Serie->id) echo 'selected' ?>><?= $serie->Label ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button id="save-tag" type="submit" class="btn btn-default">Modifier</button>
            </form>
        </div>

