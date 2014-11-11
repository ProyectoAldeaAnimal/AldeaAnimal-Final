<?php 

class UsersController extends AppController{



			var $name='Users';
			var $helpers = array('Form', 'Html', 'Js', 'Time');
			var $uses=array('User');

			public $components = array('Email',
		        'Session',
		        /* add Auth component and set  the urls that will be loaded after the login and logout actions is performed */
		        'Auth' => array(
		            'loginRedirect' => array('controller' => 'users', 'action' => 'homeCliente'),
		            'logoutRedirect' => array('controller' => 'users', 'action' => 'home'),
		            'authorize' => array('Controller'), // Added this line
		            
			        'authenticate' => array(
			            'Form' => array(
			                'fields' => array(
			                    'username' => 'rut'
			                )
			            )
			        ),


		        )
		    );

				public function isAuthorized($user) {
				// Here is where we should verify the role and give access based on role
				
				return true;
			}

		    public function beforeFilter() {
		    	parent::beforeFilter();
		        /* set actions that will not require login */
		         $this->Auth->loginError = 'El nombre de usuario y/o la contraseña no son correctos. Por favor, inténtalo otra vez';
                 $this->Auth->authError = 'Para entrar en la zona privada tienes que autenticarte';

		        $this->Auth->allow('index','display', 'view', 'home','add', 'logout','login');
		    }
		        public function index() {
						$this->paginate = array(
							'limit' => 6,
							'order' => array('User.username' => 'asc' )
						);
						$users = $this->paginate('User');
						$this->set(compact('users'));
				    }


			public function login() {


				if($this->Session->check('Auth.User')){
							$this->redirect(array('action' => 'homeCliente'));		
						}
					//debug($this->Auth->request->data['User']);

				    if ($this->request->is('post')) {
					        if ($this->Auth->login()) {
					            return $this->redirect($this->Auth->redirect());
					        } else {

					            $this->Session->setFlash(
					                __('Rut o contraseña incorrecta'),
					                'default',
					                array(),
					                'auth'
					            );
					        }
					    }
			}

			public function logout() {
			    return $this->redirect($this->Auth->logout());
			}


		
			public function home(){
				$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));

			}
			public function homeCliente(){
				$this->Auth->user('rut');
				

			}

			    public function add() {
        if ($this->request->is('post')) {
				
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been created'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be created. Please, try again.'));
			}	
        }
    }


}
?>