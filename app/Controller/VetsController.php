<?php 

class VetsController extends AppController{

	
	
	var $name='Vets';
	var $helpers = array('Form', 'Html', 'Js', 'Time');
	var $uses=array('Vet');
	var $admin = false;
	public $components = array('Email',
	        'Session',
	        /* add Auth component and set  the urls that will be loaded after the login and logout actions is performed */
	        'Auth' => array(
	            'loginRedirect' => array('controller' => 'vets', 'action' => 'homeVet'),
	            'logoutRedirect' => array('controller' => 'vets', 'action' => 'login'),
	            'authorize' => array('Controller'), // Added this line
	            
		        'authenticate' => array(
		            'Form' => array(
		                'fields' => array(
		                    'username' => 'rut_vet',
		                    'password' => 'password_vet'
		                ),
		                'userModel' => 'Vet'
		            ),
		            'Basic' =>array('userModel' => 'Vet')
		        ),


	        )
	    );

	public function index(){
		$this->redirect(array('action' => 'login'));
	}
    public function inicializarAuth(){

                        $this->Auth->loginError = 'El nombre de usuario y/o la contraseña no son correctos. Por favor, inténtalo otra vez';
                        $this->Auth->authError = 'Para entrar en la zona privada tienes que autenticarte';

                        $this->Session->write('Auth.redirect', null);
                } // fin de function inicializarAuth

	public function isAuthorized($user) {
				// Here is where we should verify the role and give access based on role
				
				return true;
			}

	public function beforeFilter() {
		    	parent::beforeFilter();
		        /* set actions that will not require login */
		        $this->Auth->allow('index','display', 'view','add', 'logout','login');
		        	
	}
	public function login() {
				$this->set('title_for_layout', 'Login Veterinarios');
				

				
				
				if($this->Session->check('Auth.User')){
							if ($admin){
								$this->Auth->loginRedirect = array('controller' => 'vets', 'action' => 'homeAdministrador');
								$this->redirect($this->Auth->redirect());

							}
							else $this->redirect($this->Auth->redirect());		
						}
					

				    if ($this->request->is('post')) {
				    		
					        if ($this->Auth->login()) {
					        	if($this->request->data['Vet']['rol']=='Administrador'){
					        		$admin = true;
					        		$this->Auth->loginRedirect = array('controller' => 'vets', 'action' => 'homeAdministrador');
									$this->redirect($this->Auth->redirect());
								}
				    	

					           else return $this->redirect($this->Auth->redirect());
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
	public function homeVet(){
					$this->Auth->user('rut_vet');
					$this->set('title_for_layout', 'Home Veterinarios');

	}
	public function homeAdministrador(){
					$this->Auth->user('rut_vet');
					$this->set('title_for_layout', 'Home Administrador');

	}
	public function logout() {
			    return $this->redirect($this->Auth->logout());
			}

	public function add() {
	        if ($this->request->is('post')) {
					
				$this->Vet->create();
				debug($this->request->data);
				if ($this->Vet->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been created'));
					$this->redirect(array('action' => 'add'));
				} else {
					$this->Session->setFlash(__('The user could not be created. Please, try again.'));
				}	
	        }
	    }


	}
?>