<?php

class Format extends Controller {

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

        $d['view'] = array("title" => "New Website", "photos" => $photos, $photos, "tags" => $tags, "series" => $series);
        $this->set($d);
        $this->render('view-4');
    }

    function four($serie) {
        
        $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->andWhere('p.idSerie = ?', $serie);
        $q = $q->orderBy('RAND()');
        $q->limit(20);
        $photos = $q->execute();

        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findByIdSerie($serie);

        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();

        $d['view'] = array("title" => "New Website", "photos" => $photos, $photos, "tags" => $tags, "series"=>$series);
        $this->set($d);
        $this->render('view-4');
    }

    function five($serie) {
        $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->orderBy('RAND()');
        $q->limit(20);
        $photos = $q->execute();

        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();

        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();

        $d['view'] = array("title" => "New Website", "photos" => $photos, $photos, "tags" => $tags, "series" => $series);
        $this->set($d);
        $this->render('view-5');
    }

}

?>