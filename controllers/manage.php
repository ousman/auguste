<?php

class Manage extends Controller {

    /**
     * @UserS('REQUIRED')
     */
    function index($msg = null) {
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findAll();
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Administration", "photos" => $tof, "msg" => $msg, "series" => $serie);
        $this->set($d);
        $this->render('index');
    }

    function login() {
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findAll();
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Connexion", "photos" => $tof, "series" => $serie);
        $this->set($d);
        $this->render('login');
    }

    function signup() {
        $user = 'Philippe';
        $password = '$2y$10$.B6JwvtOKKz5TR.fWVKNjunHXCFRKxyyilGQQNyBjyKhepwV7sLXq';
        //$password = 'tidy';
        if (password_verify($_POST['password'], $password) && strcasecmp($_POST['login'], $user) == 0){ 
        //if ($password == $_POST['password'] && strcasecmp($_POST['login'], $user) == 0) {
            $_SESSION['user'] = 'philippe';
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
    function logout() {
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
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Administration", "tags" => $tag, "series" => $serie);
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
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Administration", "series" => $serie);
        $this->set($d);
        $this->render('NewTag');
    }

    /**
     * @UserS('REQUIRED')
     */
    function newSerie() {
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Administration", "series" => $serie);
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
        $d['view'] = array("title" => "Administration", "series" => $series, "photo" => $tof);
        $this->set($d);
        $this->render('ModifyPhoto');
    }

    /**
     * @UserS('REQUIRED')
     */
    function modifyTag($id) {
        $tag = new Tag();
        $tag = Doctrine_Core::getTable('tag')->find($id);
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        $d['view'] = array("title" => "Administration", "tag" => $tag, "series" => $series);
        $this->set($d);
        $this->render('ModifyTag');
    }

    /**
     * @UserS('REQUIRED')
     */
    function modifySerie($id) {
        $serie = new Serie();
        $serie = Doctrine_Core::getTable('serie')->find($id);
        $series = new Serie();
        $series = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Administration", "serie" => $serie, "series" => $series);
        $this->set($d);
        $this->render('ModifySerie');
    }

    /**
     * @UserS('REQUIRED')
     */
    function addSerie() {
        $serieLabel = $_POST['label'];
        $description = $_POST['description'];
        $serie = new Serie();
        $serie->init($serieLabel, $description);
        $serie->save();
        $msg = "La S&eacute;rie a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage/series?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function addTag() {
        $tagLabel = $_POST['label'];
        $serieId = $_POST['serie'];
        $description = $_POST['description'];
        $serie = new Serie();
        $serie = Doctrine_Core::getTable('serie')->find($serieId);
        $tag = new Tag();
        $tag->init($tagLabel, $description, $serie);
        $tag->save();
        $msg = "Le Tag a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage/tags?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function addPhoto() {
        $serie = $_POST['serie'];
        $titre = $_POST['label'];
        $tag = $_POST['tag'];
        $sousTitre = $_POST['extension'];
        $description = $_POST['description'];
        $uploadedImage = $_POST['img'];
        $photo = new Photo();
        $photo->init($titre, $sousTitre, $description, $serie, $tag, $uploadedImage);
        $photo->save();

        $msg = "La Photo a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function updateTag() {
        $titre = $_POST['label'];
        $serieId = $_POST['serie'];
        $description = $_POST['description'];
        $serie = new Serie();
        $serie = Doctrine_Core::getTable('serie')->find($serieId);
        $tag = new Tag();
        $tag = Doctrine_Core::getTable("tag")->findOneById($_POST['id']);
        $tag->init($titre, $description, $serie);
        $tag->save();

        $msg = "Le Tag a &eacute;t&eacute; modifi&eacute;e";
        $this->redirect('manage/tags?msg=' . $msg, 0);
    }

    /**
     * @UserS('REQUIRED')
     */
    function updateSerie() {
        $titre = $_POST['label'];
        $description = $_POST['description'];
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findOneById($_POST['id']);
        $serie->init($titre, $description);
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

    /**
     * @UserS('REQUIRED')
     */
    function introduction() {
        $intro = new Introduction();
        $intro = Doctrine_Core::getTable("introduction")->find(1);
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findAll();
        $d['view'] = array("title" => "Administration", "intro" => $intro, "series" => $serie);
        $this->set($d);
        $this->render('introduction');
    }

    /**
     * @UserS('REQUIRED')
     */
    function updateIntroduction() {
        $text = htmlspecialchars($_POST['text']);
        $intro = new Introduction();
        $intro = Doctrine_Core::getTable("introduction")->findOneById(1);
        $intro->init($text);
        $intro->save();

        $msg = "L&#39;introduction a &eacute;t&eacute; modifi&eacute;e";
        $this->redirect('manage/introduction?msg=' . $msg, 0);
    }

    function getTags() {
        $tags = new Tag();
        $tags = Doctrine_Core::getTable("tag")->findByIdSerie($_POST['serie']);
        echo json_encode($tags->toArray());
//        $data = array('data' =>$tags);
//        $text = json_encode($data);
//        echo $text;
    }

    function getTagsByName() {
        $serie = new Serie();
        $serie = Doctrine_Core::getTable("serie")->findOneByLabel($_POST['serie']);
//        $tags = new Tag();
//        $tags = Doctrine_Core::getTable("tag")->findByIdSerie($serie->id);
        echo json_encode($serie->Tags->toArray());
    }

}

?>