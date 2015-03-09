<?php
define('WEBROOT',str_replace('facebookconnect.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('facebookconnect.php','',$_SERVER['SCRIPT_FILENAME']));


require(ROOT.'conf/config.php');
require(ROOT.'core/controller.php');
require_once(ROOT.'lib/vendor/doctrine/Doctrine.php');

spl_autoload_register(array('Doctrine_Core', 'autoload'));
spl_autoload_register(array('Doctrine_Core', 'modelsAutoload'));

$manager = Doctrine_Manager::getInstance();
$conn = Doctrine_Manager::connection(CFG_DB_DSN);

$manager->setAttribute(Doctrine_Core::ATTR_VALIDATE,               Doctrine_Core::VALIDATE_ALL);
$manager->setAttribute(Doctrine_Core::ATTR_AUTO_ACCESSOR_OVERRIDE, true);
$manager->setAttribute(Doctrine_Core::ATTR_AUTOLOAD_TABLE_CLASSES, true);
$manager->setAttribute(Doctrine_Core::ATTR_MODEL_LOADING,          Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
Doctrine_Core::loadModels(ROOT.'models/');

require(ROOT.'lib/facebookConnect/autoload.php');

define('appId','1606847842881518');
define('appSecret','8270fb953308c42d9057d9c532712bc0');
session_start();
use Facebook\FacebookSession;

use Facebook\FacebookRedirectLoginHelper;

use Facebook\FacebookRequest;

use Facebook\FacebookResponse;

use Facebook\FacebookSDKException;

use Facebook\FacebookRequestException;

use Facebook\FacebookAuthorizationException;

use Facebook\GraphObject;

use Facebook\GraphUser;

use Facebook\GraphSessionInfo;


FacebookSession::setDefaultApplication(appId,appSecret);

//define('SITE','http://dgknowledge.com/PreBama/facebookconnect.php');
define('SITE','http://bama3.net/facebookconnect.php');
$helper = new FacebookRedirectLoginHelper(SITE);
require('controllers/'.strtolower("account").'.php');                           
$account = new Account();

if(isset($_SESSION['token'])){
	$session = new FacebookSession($_SESSION['token']);
} else{
    //var_dump($helper); 
    $session = $helper->getSessionFromRedirect();
}

try{
    $session = $helper->getSessionFromRedirect();
}catch(Exception $e){}


if(isset($session)){

            
            
            $_SESSION['token'] = $session->getAccessToken();

            $request = new FacebookRequest($session, 'GET', '/me');

            $response = $request->execute();

            $graph = $response->getGraphObject(GraphUser::className());

            /*
            echo "<br>ID " . $graph->getId()."<br>";
            echo "email " . $graph->getEmail()."<br>";
            echo "entreprise " . $graph->getName()."<br>";
            echo "prenom " . $graph->getFirstName()."<br>";
            echo "nom " . $graph->getLastName()."<br>";
            echo "genre ".$graph->getGender()."<br>";
            */
            $currentUser = new User();
            $currentUser = Doctrine_Core::getTable('user')->findOneByMail($graph->getEmail());
            if($currentUser){
                $_SESSION['user'] = $currentUser;
                $account->redirect('account',0);
                //exit;
            }else{
                $user = new Particulier();
                $civ = ($graph->getGender() == "male")? "Mr":"Mme";
                $user->initFacebook($graph->getEmail(),$graph->getEmail(),$graph->getLastName(),
                            $graph->getFirstName(),null,$civ);
                $user->save();
                $user->load();
                $facebookUser = New FacebookUser();
                $facebookUser->init($user->Mail,$user->id,$graph->getId());
                $facebookUser->save();
                $_SESSION['idUserFacebook'] = $user->id;
                $account->redirect('account/facebookValidation',0);
            }
        }

else{
    $account->redirect('account/login',0);
}
?>