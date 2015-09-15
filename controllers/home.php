<?php

class Home extends Controller {

    function index() {
        $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->orderBy('RAND()');
        $q->limit(20);
        $photos = $q->execute();
        
        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();
        
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        
        $d['view'] = array("title" => "New Website", "photos" => $photos, "tags" => $tags, "series" => $series);
        $this->set($d);
        $this->render('index');
    }

    function introduction(){
        $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->orderBy('RAND()');
        $q->limit(20);
        $photos = $q->execute();
        
        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();
        
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        
        $intro = new Introduction();
        $intro = Doctrine_Core::getTable("introduction")->find(1);
        
        $d['view'] = array("title" => "Intro Auguste", "photos" => $photos, "tags" => $tags, "series" => $series, "intro" => $intro);
        $this->set($d);
        $this->render('introduction');
    }

}

?>