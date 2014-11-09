<?php 

class UsersController extends AppController{



	var $name='Users';
	var $components = array('Email','Session');
	var $helpers = array('Form', 'Html', 'Js', 'Time');
	var $uses=array('User');

	public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('add', 'logout');
	}

			public function login() {

			
			    if ($this->request->is('POST')) {
			    	echo "adsdasdasdasdas";
			        if ($this->Auth->login()) {
			            return $this->redirect($this->Auth->redirect('homeCliente'));
			        }
			        else $this->Session->setFlash(__('Invalid username or password, try again'));
			    }	

			}

			public function logout() {
			    return $this->redirect($this->Auth->logout());
			}


		
			public function home(){
				$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));

			}
			public function homeCliente(){
				$this->redirect(array('controller' => 'pages', 'action' => 'display', 'PaginaPrincipalClientes'));

			}


}
?>