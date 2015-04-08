<?php

class Home extends Controller {

    function index() {
         $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->orderBy('RAND()');
        $q->limit(20);
        $photos = $q->execute();
        $d['view'] = array("title" => "New Website", "photos" => $photos);
        $this->set($d);
        $this->render('index');
    }

}

?>