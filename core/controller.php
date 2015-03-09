<?php
class Controller{

    var $vars = array();
    var $erreur = array();
    var $layout = 'default';

    function __construct(){
        if(isset($_POST)){
            $this->data = $_POST;
        }
    }

    function getBreadcumbs($liste){
        if(count($liste) == 0) return $chaine="";
        $chaine = '<div class="breadcrumb-box">
                        <div class="container">
                        <ul class="breadcrumb">
                            <li><a href="'.WEBROOT.'">Acceuil</a> </li>';
        foreach ($liste as $key => $value) {
                $chaine .= '<li><a href="'.WEBROOT.$value.'">'.$key.'</a></li>';    
        }
        $chaine .= '</ul>
                        </div>
                        </div>';
        return $chaine;
    }

    function getDateSansHeure($datetime){
            $date = new DateTime($datetime);
            $formatted_time = strftime(" %a %d  %b  %Y", $date->getTimestamp());
            return "Le ".$formatted_time;
    }

    function getRelativeTime($date)
    {
            $date_a_comparer = new DateTime($date);
            $date_actuelle = new DateTime("now");

            $intervalle = $date_a_comparer->diff($date_actuelle);

            if ($date_a_comparer > $date_actuelle)
            {
                $prefixe = 'dans ';
            }
            else
            {
                $prefixe = 'il y a ';
            }

            $ans = $intervalle->format('%y');
            $mois = $intervalle->format('%m');
            $jours = $intervalle->format('%d');
            $heures = $intervalle->format('%h');
            $minutes = $intervalle->format('%i');
            $secondes = $intervalle->format('%s');

            if ($ans != 0)
            {
                $relative_date = $prefixe . $ans . ' an' . (($ans > 1) ? 's' : '');
                if ($mois >= 6) $relative_date .= ' et demi';
            }
            elseif ($mois != 0)
            {
                $relative_date = $prefixe . $mois . ' mois';
                if ($jours >= 15) $relative_date .= ' et demi';
            }
            elseif ($jours != 0)
            {
                $relative_date = $prefixe . $jours . ' jour' . (($jours > 1) ? 's' : '');
            }
            elseif ($heures != 0)
            {
                $relative_date = $prefixe . $heures . ' heure' . (($heures > 1) ? 's' : '');
            }
            elseif ($minutes != 0)
            {
                $relative_date = $prefixe . $minutes . ' minute' . (($minutes > 1) ? 's' : '');
            }
            else
            {
                $relative_date = $prefixe . ' quelques secondes';
            }

            return $relative_date;
    }

    function getDatePromotion($datetime){
            $date = new DateTime($datetime);
            $formatted_time = strftime("%Y/%m/%d", $date->getTimestamp());
            return $formatted_time;
    }

    function set($d){
        $this->vars = array_merge($this->vars,$d);
    }

    function setErreur($name,$value){
        $this->erreur["$name"] = $value;
    }

    function redirect($url,$time){
        echo '<meta http-equiv=\'refresh\' content=\''.$time.';url='.WEBROOT.$url.'\'/>';
    }

    function fullRedirect($url,$time){
        echo '<meta http-equiv=\'refresh\' content=\''.$time.';url='.$url.'\'/>';
    }

    function render($filename){
       extract($this->vars);
        ob_start(); 
        require(ROOT.'views/'.strtolower(get_class($this)).'/'.strtolower($filename).'.php');
        $content_for_layout = ob_get_clean();
        if($this->layout==false){
            echo $content_for_layout;
        }else{
            require(ROOT.'views/layout/'.strtolower($this->layout).'.php');
        }
    }

    function BamaMail($sender,$destinataire,$objet,$contenu){
        
        //$destinataire = "contact@dgknowledge.com";
        //$objet        = "[Dgknowledge.com] " . "Prise de contact";
        //$contenu      = "Expéditeur : " . $prenom . " " . $nom . "\n";
        //$contenu     .= "Tel : " . $tel . " Email " . $email . "\r\n";
        //$contenu     .= $message."\r\n\n";

        $headers  = 'From: '. $sender ."\n"; // ici l'expediteur du mail
        $headers .= 'Reply-To: '.$sender."\n";
        $headers .= 'Content-Type: text/plain; charset="iso-8859-1"'."\n";
        $headers .= 'Content-Transfer-Encoding: 8bit';
        
        mail($destinataire,$objet,utf8_decode($contenu),$headers);
        //mail("badihaidara@gmail.com",$objet,utf8_decode($contenu),$headers);
    }
}
?>