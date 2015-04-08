<?php

class Manage extends Controller {

    function index() {
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findAll();
        $d['view'] = array("title" => "Administration", "photos", $photos);
        $this->set($d);
        $this->render('index');
    }

    function newTag() {
        $d['view'] = array("title" => "Administration");
        $this->set($d);
        $this->render('NewTag');
    }

    function newSerie() {
        $d['view'] = array("title" => "Administration");
        $this->set($d);
        $this->render('NewSerie');
    }

    function newPhoto() {
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();
        $d['view'] = array("title" => "Administration", "series" => $series, "tags" =>$tags);
        $this->set($d);
        $this->render('NewPhoto');
    }

    function addSerie() {
        $serieLabel = $_POST['label'];
        $serie = new Serie();
        $serie->init($serieLabel);
        $serie->save();
        $this->redirect("manage/index", 0);
    }

    function addTag() {
        $tagLabel = $_POST['label'];
        $serie = new Tag();
        $serie->init($tagLabel);
        $serie->save();
        $this->redirect("manage/index", 0);
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

        $imgArray = array("img_src" => $imagePath);
        echo json_encode($imgArray);
    }

}

?>