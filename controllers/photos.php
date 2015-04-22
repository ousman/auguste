<?php

class Photos extends Controller {

    function index() {
        $d['view'] = array("title" => "Etendu");
        $this->set($d);
        $this->render('extended');
    }

    function display($id) {
        $tof = new Photo();
        $tof = Doctrine_Core::getTable("photo")->findOneById($id);
                 
        $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->orderBy('RAND()');
        $q->limit(5);
        $photos = $q->execute();
        
        $d['view'] = array("title" => "display", "photo" => $tof, "photos" => $photos);
        
        $this->set($d);
        $this->render('extended');
    }
    
    function search($photo = null, $serie = null, $tag = null){
        $photos = new Photo();
        $photo = $_POST['searchString'];
        $q = Doctrine_Query::create()->from('Photo p');
        if($serie != null)
        $q = $q->leftJoin("a.Serie s");
        
        if($tag != null)
        $q = $q->leftJoin("a.Tag t");
        
        
        $q = $q->where("1 = 1");
        
        if($photo != null)
        $q = $q->andWhere('p.Label like ?', '%'.$photo.'%');
        
        if($serie != null)
        $q = $q->andWhere('s.Label like ?', '%'.$serie.'%');
        
        if($tag != null)
        $q = $q->andWhere('t.Label like ?', '%'.$tag.'%');
        
        $photos = $q->execute();
        
        $tags = new Tag();
        $tags = Doctrine_Core::getTable('tag')->findAll();
        
        $series = new Serie();
        $series = Doctrine_Core::getTable('serie')->findAll();
        
        $d['view'] = array("title" => "Etendu", "photos" => $photos, "tags" => $tags, "series" => $series);
        $this->set($d);
        $this->render('searchResult');
        
    }

    function Tag($tag) {
        $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->where('p.IdTag = ?', $tag);
        //$q = $q->orderBy('RAND()');
        $q->limit(10);
        $photos = $q->execute();
        $d['view'] = array("title" => "Etendu", "photos" => $photos);
        $this->set($d);
        //$this->render('extended');
    }

    function Serie($serie) {
        $photos = new Photo();
        $q = Doctrine_Query::create()->from('Photo p');
        $q = $q->where('p.IdSerie = ?', $serie);
        //$q = $q->orderBy('RAND()');
        $q->limit(10);
        $photos = $q->execute();
        $d['view'] = array("title" => "Etendu", "photos" => $photos);
        $this->set($d);
        //$this->render('extended');
    }

}

?>