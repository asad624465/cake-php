<?php
namespace App\Controller;
use App\Controller\AppController;

class UsersController extends AppController
{
	public function index()
    {
    	$users = $this->paginate($this->Users);
    	$this->set(compact('users'));
    }
    public function add()
    {
    	$users = $this->Users->newEntity();
    	if($this->request->is('post')){
    		$users = $this->Users->patchEntity($users,$this->request->getData());
    		if($this->Users->save($users)){
    			$this->Flash->success(__('User name has been created'));
    			$this->redirect(['action'=>'index']);
    		}else{
    			$this->Flash->error(__('User could not be saved! please try agin'));
    			$this->redirect(['action'=>'index']);
    		}
    	}
    	$this->set(compact('users'));
    }
    public function edit($id=null){
    	$user = $this->Users->get($id);
    	if($this->request->is(['patch','post','put'])){
    		$users = $this->Users->patchEntity($user,$this->request->getData());
    		if($this->Users->save($user)){
    			$this->Flash->success(__('User name has been created'));
    			$this->redirect(['action'=>'index']);
    		}else{
    			$this->Flash->error(__('User could not be saved! please try agin'));
    			$this->redirect(['action'=>'index']);
    		}
    	}
    	$this->set(compact('user'));
    }
    public function delete($id=null){
    	$this->request->allowMethod(['post','delete']);
    	$user = $this->Users->get($id);
    	if($this->Users->delete($user)){
    		$this->Flash->success(__('The user has been deleted'));
    	}else{
    		$this->Flash->error(__('The user could not be deleted! Please try again'));
    	}
    	return $this->redirect(['action'=>'index']);
    }
}