<?php
namespace App\Controller;
use App\Controller\AppController;

class DashboardsController extends AppController {
    /**
     * @license Herricaneker
     */

    public function index() {
    	 $this->layout = 'metronic';
    }
    public function login() {
     	 $this->layout = 'ajax';
    }
    public function generalapi()
    {
      	 $this->layout = 'metronic';
    }
    public function main()
    {
    	 $this->layout = 'ajax';
    }

}
