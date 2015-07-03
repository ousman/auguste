<script type="text/javascript">

    $(document).ready(function () {
            $("#sign-up").click(function (event) {
                event.preventDefault();
                if (!$("#login").val() == "" || !$("#login").val() == undefined || !$("#password").val() == "" || !$("#password").val() == undefined) {
                    $('#sign-up-form').submit();
                }
                else {
                    $('#form-error').remove();
                    $('#sign-up-form').prepend('<div id="form-error" class="alert alert-danger">Veuillez remplir les champs<div>');
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
            <li class="li-nav"><a class="nav-link active" href="<?= WEBROOT ?>">August BUI</a>
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

        <div class="w-container">
            <div class="mrg-top-bis">
                <h3>Authentification<span class="ex-sp"></span></h3>
                <div class="line-con-bis"></div>
            </div>
            <p>Ci-dessous le formulaire d'authentification</p>

            <h4>Formulaire d'authentification : </h4>
            <?php if(isset($view['erreur'])):?>
            <div id="msg" class="alert alert-danger">
                <?= $view['erreur']?>
            </div>
            <?php endif; ?>
            <form id="sign-up-form" role="form" method="POST" action="<?= WEBROOT ?>manage/signup">
                <div class="form-group">
                    <label for="exampleInputEmail1">Identifiant</label>
                    <input id="login" type="text" class="form-control" placeholder="login" name="login">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mot de passe</label>
                    <input id="password" type="password" class="form-control" placeholder="Mot de passe" name="password">
                </div>
                <button id="sign-up" type="submit" class="btn btn-default">Connexion</button>
            </form>
        </div>

