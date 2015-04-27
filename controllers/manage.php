<?php

class Manage extends Controller {

    /**
     * @UserS('REQUIRED')
     */
    function index($msg = null) {
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findAll();
        $d['view'] = array("title" => "Administration", "photos" => $tof, "msg" => $msg);
        $this->set($d);
        $this->render('index');
    }
    
    function login(){
        $d['view'] = array("title" => "Connexion");
        $this->set($d);
        $this->render('login');
    }

    function signup() {
        $user = 'phillipe';
        $password = '$2y$10$BQLdUl8TBfQwq4CL4OPAZOnW02naGDrekvVrXZKwhpUyZ/znWy4pW';
        if (password_verify($_POST['password'], $password) && $_POST['login'] == $user) {
            $_SESSION['user'] = 'phillipe';
            $this->redirect('manage', 0);
        } else {
            $d['view'] = array("title" => "Connexion", "erreur" => "Identifiant et/ou mot de passe incorrect");
            $this->set($d);
            $this->render('login');
        }
    }
    
    /**
     * @UserS('REQUIRED')
     */
    function logout(){
        session_unset();
        session_destroy();
        $this->redirect('home', 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function tags() {
        $tag = new Tag();
        $tag = Doctrine_Core::getTable("tag")->findAll();
        $d['view'] = array("title" => "Administration", "tags" => $tag);
        $this->set($d);
        $this->render('tags');
    }

    /**
     * @UserS('REQUIRED')
     */
    function series() {
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Administration", "series" => $serie);
        $this->set($d);
        $this->render('series');
    }

    /**
     * @UserS('REQUIRED')
     */
    function newTag() {
        $d['view'] = array("title" => "Administration");
        $this->set($d);
        $this->render('NewTag');
    }

    /**
     * @UserS('REQUIRED')
     */
    function newSerie() {
        $d['view'] = array("title" => "Administration");
        $this->set($d);
        $this->render('NewSerie');
    }

    /**
     * @UserS('REQUIRED')
     */
    function newPhoto() {
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();
        $d['view'] = array("title" => "Administration", "series" => $series, "tags" => $tags);
        $this->set($d);
        $this->render('NewPhoto');
    }

    /**
     * @UserS('REQUIRED')
     */
    function modifyPhoto($id) {
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findOneById($id);
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();
        $d['view'] = array("title" => "Administration", "series" => $series, "tags" => $tags, "photo" => $tof);
        $this->set($d);
        $this->render('ModifyPhoto');
    }

    /**
     * @UserS('REQUIRED')
     */
    function modifyTag($id) {
        $tag = new Tag();
        $tag = Doctrine_Core::getTable('tag')->find($id);
        $d['view'] = array("title" => "Administration", "tag" => $tag);
        $this->set($d);
        $this->render('ModifyTag');
    }

    /**
     * @UserS('REQUIRED')
     */
    function modifySerie($id) {
        $serie = new Serie();
        $serie = Doctrine_Core::getTable('serie')->find($id);
        $d['view'] = array("title" => "Administration", "serie" => $serie);
        $this->set($d);
        $this->render('ModifySerie');
    }

    /**
     * @UserS('REQUIRED')
     */
    function addSerie() {
        $serieLabel = $_POST['label'];
        $serie = new Serie();
        $serie->init($serieLabel);
        $serie->save();
        $msg = "La S&eacute;rie a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage/series?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function addTag() {
        $tagLabel = $_POST['label'];
        $tag = new Tag();
        $tag->init($tagLabel);
        $tag->save();
        $msg = "Le Tag a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage/tags?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function addPhoto() {
        $tag = $_POST['tag'];
        $serie = $_POST['serie'];
        $titre = $_POST['label'];
        $sousTitre = $_POST['extension'];
        $description = $_POST['description'];
        $uploadedImage = $_POST['img'];

        $photo = new Photo();
        $photo->init($titre, $sousTitre, $description, $serie, $tag, $uploadedImage);
        $photo->save();

        $msg = "La Photo a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage/tags?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function updateTag() {
        $titre = $_POST['label'];

        $tag = new Tag();
        $tag = Doctrine_Core::getTable("tag")->findOneById($_POST['id']);
        $tag->init($titre);
        $tag->save();

        $msg = "Le Tag a &eacute;t&eacute; modifi&eacute;e";
        $this->redirect('manage/tags?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function updateSerie() {
        $titre = $_POST['label'];

        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findOneById($_POST['id']);
        $serie->init($titre);
        $serie->save();

        $msg = "La S&eacute;rie a &eacute;t&eacute; modifi&eacute;e";
        $this->redirect('manage/series?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function updatePhoto() {
        $tag = $_POST['tag'];
        $serie = $_POST['serie'];
        $titre = $_POST['label'];
        $sousTitre = $_POST['extension'];
        $description = $_POST['description'];
        $uploadedImage = $_POST['img'];

        $photo = new Photo();
        $photo = Doctrine_Core::getTable("photo")->findOneById($_POST['id']);
        $photo->init($titre, $sousTitre, $description, $serie, $tag, $uploadedImage);
        $photo->save();

        $msg = "La Photo a &eacute;t&eacute; modifi&eacute;e";
        $this->redirect('manage?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function deletePhoto($id) {
        $photo = new Photo();
        $photo = Doctrine_Core::getTable("photo")->findOneById($id);
        $photo->delete();

        $msg = "La photo a &eacute;t&eacute; suprim&eacute;e";
        $this->redirect('manage?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function deleteTag($id) {
        $tag = new Tag();
        $tag = Doctrine_Core::getTable("tag")->findOneById($id);
        $tag->delete();

        $msg = "Le tag a &eacute;t&eacute; suprim&eacute;e";
        $this->redirect('manage/tags?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function deleteSerie($id) {
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findOneById($id);
        $serie->delete();

        $msg = "La s&eacute;rie a &eacute;t&eacute; suprim&eacute;e";
        $this->redirect('manage/series?msg=' . $msg, 0);
    }

    function cropPhoto() {
        $crop = new CropAvatar($_POST['avatar_src'], $_POST['avatar_data'], $_FILES['avatar_file'], $_POST['root']);

        $response = array(
            'state' => 200,
            'message' => $crop->getMsg(),
            'result' => $crop->getResult()
        );
        $array = explode('/', $response['result']);
        $imageName = end($array);
        $imagePath = WEBROOT . 'public/uploaded/' . $imageName;

        $imgArray = array("img_src" => $imagePath, "img_name" => $imageName);
        echo json_encode($imgArray);
    }

}

?>