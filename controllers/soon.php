<?php
class soon extends Controller{

    function index(){
            $d['view'] = array("title" => "New Website");
			$this->set($d);
			$this->render('soon');
    }
}
?>