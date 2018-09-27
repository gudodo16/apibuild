<?php
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow('add');
	}
	public function index()
	{
		$this->layout = 'metronic';
	}

	public function autoload()
	{
		$this->autoRender = false;
		$users = $this->Users->find()->all();
		$datas  = !empty($users) ? $users->toArray() : [];
		foreach ($datas as $key => $value) {
			if ($value['status'] == 'W') {
				$datas[$key]['status'] = "ไม่สามารถใช้งาน";
			}else if($value['status'] == 'Y'){
				$datas[$key]['status'] = "ใช้งานได้";
			}
		}
		$resultJ = json_encode($datas);
		$this->response->type('json');
		$this->response->body($resultJ);
		return $this->response;
	}


	// 	public function autoload()
	// {
	// 	$users = $this->Users->find()->all();
	// 	$datas  = !($users->isEmpty()) ? $users->toArray() : [];

	// 	$this->set(compact('datas'));
	// 	$this->set('_serialize', ['datas']);
	// }


	public function view()
	{
		$user = $this->Users->get($this->request->data['id']);

		$resultJ = json_encode($user);
		$this->response->type('json');
		$this->response->body($resultJ);
		return $this->response;
	}
	public function edit()
	{
		$this->autoRender = false;
		$formdata=$this->customformfillter('data_edit',$this->request->data);
		$user = $this->Users->get($formdata['id']);
		$this->Users->patchEntity($user, $formdata);
		$user['modified']=date("Y-m-d H:i:s");
		$user['status']="W";
		if ($this->Users->save($user)) {
			echo '1';
		}else{
			echo '0';
		}

	}
	public function approve(){
		$this->autoRender = false;
		$user = $this->Users->get($this->request->data['id']);
		$user->status = 'Y';
		if ($this->Users->save($user)) {
			echo '1';
		}else{
			echo '0';
		}
	}
	public function notapprove(){
		$this->autoRender = false;
		$user = $this->Users->get($this->request->data['id']);
		$user->status = 'W';
		if ($this->Users->save($user)) {
			echo '1';
		}else{
			echo '0';
		}
	}
	public function add()
	{
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->getData());
			$user['created']=date("Y-m-d H:i:s");
			$user['modified']=date("Y-m-d H:i:s");
			$user['status']="W";

			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(['action' => 'login']);
			}
			$this->Flash->error(__('Unable to add the user.'));
		}
		$this->set('user', $user);
	}
	public function login()
	{
		$this->layout = 'ajax';
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				if($user['status']=="Y"){
					$this->Auth->setUser($user);
					$this->Flash->success(__('Login success'));
					return $this->redirect($this->Auth->redirectUrl());
				}else if($user['status']=="W") {
					$this->Flash->error(__('User is not approve'));
				}else{
					$this->Flash->error(__('Invalid username or password, try again'));
				}
			}

		}
	}
	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

}
