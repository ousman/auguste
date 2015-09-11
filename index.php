<?php

setlocale(LC_ALL, 'fr_FR.UTF-8');
define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require(ROOT . 'conf/config.php');
require(ROOT . 'core/controller.php');

require(ROOT . 'lib/addendum/annotations.php');
require(ROOT . 'annotations/MyAnnotations.php');
require(ROOT . 'core/AnnotationManager.php');
require(ROOT . 'core/SecurityManager.php');
require(ROOT . 'controllers/UserSecurity.php');
require(ROOT . 'controllers/AdminSecurity.php');

//Facebook Connect
// require(ROOT.'lib/facebookConnect/autoload.php');
// define('appId','');
// define('appSecret','');
// //define('SITE','http://dgknowledge.com/PreBama/facebookconnect.php');
// define('SITE','');
// use Facebook\FacebookSession;
// FacebookSession::setDefaultApplication(appId,appSecret);
//End Facebook

require(ROOT . 'lib/vendor/doctrine/Doctrine.php');
require(ROOT . 'core/Model.php');
require(ROOT . 'lib/html2pdf/html2pdf.class.php');
require(ROOT . 'lib/crop/CropAvatar.php');
if (isset($_GET['p'])) {
    $params = explode('/', $_GET['p']);
    $controller = $params[0];
    $action = isset($params[1]) ? $params[1] : 'index';
}
//urldecode(var_dump($params));
//echo "<br>".urldecode(str)$_GET['p'];
//die;
if (empty($controller)) {
    $controller = 'home';
    $action = 'index';
    $params = array();
}

//$test = Doctrine_Core::getTable('Annonce');
//$test->batchUpdateIndex();
//require('controllers/soon.php');
//$contr = new Soon();
//$contr->index(); 
//die;

session_start(); // Session initialisation
if (file_exists('controllers/' . strtolower($controller) . '.php')) {
    require('controllers/' . strtolower($controller) . '.php');
    $controller = new $controller();

    if (!method_exists($controller, $action)) {
        if (get_class($controller) == "manage") {
            $action = "index";
           
        }
    }

    if (method_exists($controller, $action)) {
        if (UserSecurity::Check($controller, $action) && AdminSecurity::Check($controller, $action)) {
             if(get_class($controller)=="manage" && $action=='index'){
             	unset($params[0]);	
             }
             else{
             	unset($params[0]); unset($params[1]);	
             } 
            //echo get_class($controller)."=>".$action;
            //var_dump($params);
            //die;
            call_user_func_array(array($controller, $action), $params);
        } else {
             $_SESSION['erreuraccess'] = "Vous avez essayé d'acceder à des fonctionnalités / informations accessible qu'à l'administrateur.";
             require('controllers/erreurs.php');
             $erreurs = new erreurs();
             $erreurs->redirect('manage/login',0);

        }
    } else {
        require('controllers/erreurs.php');
        $erreurs = new erreurs();
        if (file_exists('controllers/' . strtolower($params[0]) . '.php'))
            $erreurs->redirect($params[0], 0);
        else {
            $erreurs->redirect('home', 0);
        }
    }
} else {
    require('controllers/erreurs.php');
    $erreurs = new erreurs();

    if (file_exists('controllers/' . strtolower($params[0]) . '.php'))
        $erreurs->redirect($params[0], 0);
    else {
        $erreurs->redirect('home', 0);
    }
}
?>