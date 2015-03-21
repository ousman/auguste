<?php
class Photo extends Controller{

    function index() {
        $d['view'] = array("title" => "Etendu");
        $this->set($d);
        $this->render('extended');
    }
}
?>