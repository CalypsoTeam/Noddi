<?php
namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('RequestHandler');
        $this->loadModel('Users');
        $this->loadModel('Modeuses');
        $this->loadModel('Brands');
    }

    function checkSession() {
        $session = $this->request->session();

        //if($session->read('user') == null) {
        return $this->redirect(
            ['controller' => 'Users', 'action' => 'login']
        );
       // }
    }

    function Jsonification() {
        $this->autoRender = false;
        $this->layout = null;
        $this->RequestHandler->renderAs($this, 'json');
        return 'KO';
    }

    function getResponse($check = 'KO') {
        $response = array();
        $response['check'] = $check;
        return json_encode($response);
    }

    public function getCurrentOffer() {
        $this->loadModel('Offers');
        $session = $this->request->session();

        $brand = $this->Brands->get($session->read('brand_id'));
        
        $offers = $this->Offers->find('all')->where(['brand_id' => $brand->id, 'modeuse_id IS' => null])->contain(['Types'])->toArray();
        return $offers;
    }

    function writeSession($get_user, $other = null) {
        $session = $this->request->session();

        $session->write('user', true);
        $session->write('username', $get_user['username']);
        $session->write('picture', $get_user['picture']);
        $session->write('password', $get_user['password']);
        $session->write('user_id', $get_user['id']);
        $session->write('type', $get_user['type']);

        if($get_user['type'] == 'modeuse') {
            $session->write('firstname', $other['firstname']);
            $session->write('lastname', $other['lastname']);
        } else {
            $session->write('name', $other['name']);
        }
    }

    /*
    *   Fonction qui va servir à renvoyer un JSON depuis une URL donnée
    */

    function getJsonUrl($url) {
        $get = file_get_contents($url);
        $json = json_decode($get);
        return $json;
    }

    /*
    *   IDEM qu'au-dessus, avec cependant plus de spécifications
    */

    function getEndpoint($endpoint) {
        $curl = curl_init($endpoint);

        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $json = curl_exec($curl);

        $insta_datas = json_decode($json, true);
        return $insta_datas;
    }
}
