<?php

class Manage extends Controller {

    function index($msg = null) {
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findAll();
        $d['view'] = array("title" => "Administration", "photos"=> $tof, "msg" =>$msg);
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
    
    function modifyPhoto($id){
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findOneById($id);
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();
        $d['view'] = array("title" => "Administration", "series" => $series, "tags" =>$tags, "photo" =>$tof);
        $this->set($d);
        $this->render('ModifyPhoto');
    }

    function addSerie() {
        $serieLabel = $_POST['label'];
        $serie = new Serie();
        $serie->init($serieLabel);
        $serie->save();
        $msg = "La S&eacute;rie a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage?msg='.$msg, 0);
    }
    
    function addTag() {
        $tagLabel = $_POST['label'];
        $tag = new Tag();
        $tag->init($tagLabel);
        $tag->save();
        $msg = "Le Tag a &eacute;t&eacute; enregistr&eacute;";
        $this->redirect('manage?msg='.$msg, 0);
    }
    
    function addPhoto(){
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
        $this->redirect('manage?msg='.$msg, 0);
    }
    
    function updatePhoto(){
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
        $this->redirect('manage?msg='.$msg, 0);
    }
    
    function deletePhoto($id){
        $photo = new Photo();
        $photo = Doctrine_Core::getTable("photo")->findOneById($id);
        $photo->delete();
        
        $msg = "La photo a &eacute;t&eacute; suprim&eacute;e";
        $this->redirect('manage?msg='.$msg, 0);
        
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