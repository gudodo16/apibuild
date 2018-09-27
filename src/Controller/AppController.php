<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
            'controller' => 'Dashboards',
            'action' => 'index'
            ],
            'logoutRedirect' => [
            'controller' => 'Users',
            'action' => 'login',
            'home'
            ]
            ]);
    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['display','main']);


    }


    public function customformfillter($formname,$data){
        $customdata=array();

        foreach ($data['data_edit'] as $key => $value) {
            $customdata[$value['name']]=$value['value'];
        }
        return $customdata;
    }

}
