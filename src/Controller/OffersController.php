<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Security;

class OffersController extends AppController
{

    public function initialize() {
        parent::initialize();

        // On récupère les composants pour la Pagination, le renvoi de JSON....
        $this->loadComponent('RequestHandler');
        $this->loadModel('Types');
        $this->loadModel('Brands');

        $session = $this->request->session();
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

    public function index() {

        $session = $this->request->session();

        $offer = $this->Offers->get(1);

        $this->set('offer', $offer);
        $this->set('_serialize', ['offer']);
    }

    public function add()
    {
        $session = $this->request->session();
        $offer = $this->Offers->newEntity();
        if ($this->request->is('post')) {

            $brand = $this->Brands->find('all')->where(['user_id' => $session->read('user_id')])->toArray()[0];

            $this->request->data['brand_id'] = $brand['id'];

            $offer = $this->Offers->patchEntity($offer, $this->request->data);

            if ($this->Offers->save($offer)) {
                return $this->redirect(['controller' => 'Home', 'action' => 'index']);
            } else {
                $this->Flash->error(__('The offer could not be saved. Please, try again.'));
            }
        }

        $brands = $this->Offers->Brands->find('list', ['limit' => 200]);
        $types = $this->Offers->Types->find('list', ['limit' => 200]);
        $this->set(compact('offer', 'brands', 'types'));
        $this->set('_serialize', ['offer']);
    }

    public function create() {

        $check = $this->Jsonification();

        if(isset($this->request->data)) {
            $data = $this->request->data;

            $data['date_begin'] = date_create($data['date_begin']);
            $data['date_end'] = date_create($data['date_end']);

            $data['updated'] = date_create();

            $offer = $this->Offers->newEntity();
            $offer = $this->Offers->patchEntity($offer, $data);

            if($this->Offers->save($offer)) {
                $check = 'OK';
            }
        }

        echo $this->getResponse($check);
    }

    public function update() {

        $check = $this->Jsonification();

        if(isset($this->request->data)) {
            $data = $this->request->data;

            $offer = $this->Offers->get($data['id']);

            if($offer && !$offer->$match) {

                $offer = $this->Offers->patchEntity($offer, $this->request->data);

                if($this->Offers->save($offer)) {
                    $check = 'OK';
                }
            }
        }

        echo $this->getResponse($check);
    }

    // public function delete() {
        
    //     $check = $this->Jsonification();

    //     if(isset($this->request->data)) {
    //         $offer = $this->Offers->get(12);

    //         if(!$offer->$match) {
    //             $this->Offers->delete($offer);
    //             $check = 'OK';
    //         }
    //     }

    //     echo $this->getResponse($check);
    // }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offer = $this->Offers->get($id);
        if ($this->Offers->delete($offer)) {
            $this->Flash->success(__('The offer has been deleted.'));
        } else {
            $this->Flash->error(__('The offer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller' => 'profil', 'action' => 'index']);
    }

    public function view($id = null)
    {
        $offer = $this->Offers->get($id, [
            'contain' => ['Brands', 'Activities']
        ]);
        $this->set('offer', $offer);
        $this->set('_serialize', ['offer']);
    }

}
?>