<?php
class Erreurs extends Controller{

    function index(){
        $url = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : null; 
        $d['view'] = array("url" => $url,"title"=>"Erreur 404");
        $this->set($d);
        $this->render('404');
    }
}
?>