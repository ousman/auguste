<?php
class Format extends Controller {

    function index() {
        $d['view'] = array("title" => "New Website");
        $this->set($d);
        $this->render('view-3');
    }
    function five() {
        $d['view'] = array("title" => "New Website");
        $this->set($d);
        $this->render('view-5');
    }
}

?>