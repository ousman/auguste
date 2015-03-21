<?php 
class Manage extends Controller{

        function index() {
        $d['view'] = array("title" => "Administration");
        $this->set($d);
        $this->render('index');
    }

    function newPhoto() {
        $d['view'] = array("title" => "Administration");
        $this->set($d);
        $this->render('NewPhoto');
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