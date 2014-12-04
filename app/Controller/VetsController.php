<?php
App::uses('AppController', 'Controller');
/**
 * Vets Controller
 *
 * @property Vet $Vet
 * @property PaginatorComponent $Paginator
 */
class VetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	var $name='Vets';
	
			var $uses=array('Vets');
			
			var $helpers = array('Form', 'Html', 'Js', 'Time');
			

			public $components = array('Email',
		        'Session','Paginator',
		        
		        'Auth' => array(
		            'loginRedirect' => array('controller' => 'vets', 'action' => 'homeVet'),
	            	'logoutRedirect' => array('controller' => 'vets', 'action' => 'login'),
		            'authorize' => array('Controller'), // Added this line
		            
			        'authenticate' => array(
			        	
			            'Form' => array(
			                'fields' => array(
			                    'username' => 'RUT_VET',
			                   	'password' => 'PASSWORD_VET'
			                ),
			            'userModel' => 'Vet'

			            ),
		            	'Basic' =>array('userModel' => 'Vet')
			        ),


		        )
		    );


/**
 * index method
 *
 * @return void
 */
	public function index(){
		$this->redirect(array('controller' => 'vets','action' => 'login'));
	}

	public function registro_vet() {
		$this->loadModel('Vet');
		$this->Vet->recursive = 0;
		$vets = $this->Paginator->paginate('Vet');
		$this->set(compact('vets'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */public function beforeFilter() {
			    parent::beforeFilter();
                 $this->Auth->userModel = 'User';
     			 $this->Auth->allow('index', 'view');
			    // For CakePHP 2.1 and up
			  
			}

	public function login() {
				$this->set('title_for_layout', 'Login Veterinarios');
				if($this->Session->check('Auth.User')){
							$vet = AuthComponent::user();

							if ($vet[0]['Vet']['ID_GROUP']== 3){
				
								$this->redirect( array('controller' => 'vets', 'action' => 'homeAdministrador'));

							}
							else 
								{
									$this->redirect( array('controller' => 'vets', 'action' => 'homeVet'));

								}
					}
					
				    if ($this->request->is('post')) {

    						$this->loadModel('Vet');
							$vet= $this->Vet->find('all',array(
									'conditions' => array(
											'VET.RUT_VET' => $this->request->data['Vet']['RUT_VET'])
										)
								);

							if($this->request->data['Vet']['rol']== 'Administrador' && $vet[0]['Vet']['ID_GROUP'] ==3){



							    if(($vet[0]['Vet']['RUT_VET'] == $this->request->data['Vet']['RUT_VET']) &&
										($vet[0]['Vet']['PASSWORD_VET'] == Security::hash($this->request->data['Vet']['PASSWORD_VET']))

									){
							    		$this->Auth->loginRedirect = array('controller' => 'vets', 'action' => 'homeAdministrador');
										$this->Auth->login($vet);
										return $this->redirect($this->Auth->redirect());

									}

								else {

						            $this->Session->setFlash(
						                __('Rut o contraseña incorrecta'),
						                'default',
						                array(),
						                'auth'
						            );
						        }
									

							}
							else if($this->request->data['Vet']['rol']== 'Veterinario' && $vet[0]['Vet']['ID_GROUP'] ==2){
								if(($vet[0]['Vet']['RUT_VET'] == $this->request->data['Vet']['RUT_VET']) &&
										($vet[0]['Vet']['PASSWORD_VET'] == Security::hash($this->request->data['Vet']['PASSWORD_VET']))

									){
							    		$this->Auth->loginRedirect = array('controller' => 'vets', 'action' => 'homeVet');
										$this->Auth->login($vet);
										return $this->redirect($this->Auth->redirect());

									}

								else {

						            $this->Session->setFlash(
						                __('Rut o contraseña incorrecta'),
						                'default',
						                array(),
						                'auth'
						            );
						        }
								

								
							}
							else {
								if($this->request->data['Vet']['rol']== 'Administrador'){
									$mensaje= '<script name="accion">window.onload = function(){            
											        swal("Usted NO es un Administrador", "Ingrese a su sección correspondiente", "error")
											        }
											   </script>';	
									echo($mensaje);

								}
								else{
									$mensaje= '<script name="accion">window.onload = function(){            
											        swal("Usted NO es un Veterinario", "Ingrese a su sección correspondiente", "error")
											        }
										        </script>';	
									echo($mensaje);				
								}
							}

					    }
			}
	public function homeVet(){
					
					$this->set('title_for_layout', 'Home Veterinarios');

	}
	public function homeAdministrador(){
					
					$this->set('title_for_layout', 'Home Administrador');

	}
	public function logout() {
			    return $this->redirect($this->Auth->logout());
			}



	public function miAgenda(){

		$this->set('title_for_layout', 'Mi Agenda');
		$this->loadModel('Agenda');
		$usuario = AuthComponent::user();
		$numSol =$this->Agenda->query('CALL `SP_NUM_AGENDA`('.$usuario[0]['Vet']['ID_VET'].')');
		$this->set(compact('numSol'));
	}

	public function solicitudesHora(){
		$usuario = AuthComponent::user();
		$tienePeteciones= true;
		$this->set('title_for_layout', 'Solicitudes de Hora');
		$this->loadModel('Agenda');
		$options = array('conditions' => array('Agenda.ID_VET' => $usuario[0]['Vet']['ID_VET'], 'Agenda.ESTADO_AGENDA' => 'P'));
		$agendas =$this->Agenda->find('all',$options);
		if(count($agendas)<1) $tienePeteciones= false;

		$this->loadModel('User');
		$usuarios;
		if ($tienePeteciones)
		foreach ($agendas as $key => $agenda) {
			$options = array('conditions' => array('User.ID' => $agenda['Ma']['ID']));
			$user =$this->User->find('all',$options);
			$usuarios[$agenda['Ma']['ID_MAS']]= $user[0]['User']['name'];
		}

		$this->loadModel('BloqAgen');
		$this->loadModel('OfertaHor');
		$bloques =$this->BloqAgen->find('all');
		$horarios;
		if ($tienePeteciones)
		foreach ($bloques as $key => $bloque) {
			
				$options = array('conditions' => array('OfertaHor.ID_VET' => $usuario[0]['Vet']['ID_VET'],
				'OfertaHor.ID_OFERTA_HOR' => $bloque['BloqAgen']['ID_OFERTA_HOR']
				));
				$OfertaHors =$this->OfertaHor->find('all',$options);
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='LU') $dia = 'Lunes';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MA') $dia = 'Martes';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MI') $dia = 'Miercoles';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='JU') $dia = 'Jueves';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='VI') $dia = 'Viernes';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='SA') $dia = 'Sábado';
			
				$OfertaHors[0]['OfertaHor']['name'] = $dia.' '.$OfertaHors[0]['Cal']['FECHA_CAL'].': '. $OfertaHors[0]['OfertaHor']['name'];
				if(!isset($horarios[$bloque['BloqAgen']['ID_AGENDA']]))
					$horarios[$bloque['BloqAgen']['ID_AGENDA']] = $OfertaHors[0]['OfertaHor']['name'];
		}

		
		
		$this->set(compact('agendas','usuarios','horarios'));	
	  		
	}
	public function aceptar_solicitud($agenda){
			$this->loadModel('Agenda');
			$aceptada= $this->Agenda->find('all',array('conditions' => array('Agenda.ID_AGENDA' =>$agenda )));
			$aceptada[0]['Agenda']['ESTADO_AGENDA'] = 'A';
			if($this->Agenda->save($aceptada[0]['Agenda']))$this->Session->setFlash(__('La Hora ha sido aceptada.'));
			$this->loadModel('BloqAgen');
			$bloques= $this->BloqAgen->find('all',array('conditions' => array('BloqAgen.ID_AGENDA' =>$agenda )));
			foreach ($bloques as $key => $bloque) {
				$this->loadModel('OfertaHor');
				$oferta = $this->OfertaHor->find('all',array('conditions' => array('OfertaHor.ID_OFERTA_HOR'=>$bloque['BloqAgen']['ID_OFERTA_HOR'])));
				$oferta[0]['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'A';
				if($this->OfertaHor->save($oferta[0]['OfertaHor']))$this->Session->setFlash(__('La Oferta Horaria ha sido actualizada.'));
			}

			$this->set(compact('aceptada'));
			
	}

	public function ver_solicitudes(){
		$usuario = AuthComponent::user();
		$tienePeteciones= true;
		$this->set('title_for_layout', 'Solicitudes de Hora');
		$this->loadModel('Agenda');
		$options = array('conditions' => array('Agenda.ID_VET' => $usuario[0]['Vet']['ID_VET'], 'Agenda.ESTADO_AGENDA' => 'A'));
		$agendas =$this->Agenda->find('all',$options);
		if(count($agendas)<1) $tienePeteciones= false;

		$this->loadModel('User');
		$usuarios;
		if ($tienePeteciones)
		foreach ($agendas as $key => $agenda) {
			$options = array('conditions' => array('User.ID' => $agenda['Ma']['ID']));
			$user =$this->User->find('all',$options);
			$usuarios[$agenda['Ma']['ID_MAS']]= $user[0]['User']['name'];
		}

		$this->loadModel('BloqAgen');
		$this->loadModel('OfertaHor');
		$bloques =$this->BloqAgen->find('all');
		$horarios;
		if ($tienePeteciones)
		foreach ($bloques as $key => $bloque) {
			
				$options = array('conditions' => array('OfertaHor.ID_VET' => $usuario[0]['Vet']['ID_VET'],
				'OfertaHor.ID_OFERTA_HOR' => $bloque['BloqAgen']['ID_OFERTA_HOR']
				));
				$OfertaHors =$this->OfertaHor->find('all',$options);
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='LU') $dia = 'Lunes';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MA') $dia = 'Martes';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='MI') $dia = 'Miercoles';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='JU') $dia = 'Jueves';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='VI') $dia = 'Viernes';
				if($OfertaHors[0]['Cal']['NOMBRE_DIA']=='SA') $dia = 'Sábado';
			
				$OfertaHors[0]['OfertaHor']['name'] = $dia.' '.$OfertaHors[0]['Cal']['FECHA_CAL'].': '. $OfertaHors[0]['OfertaHor']['name'];
				if(!isset($horarios[$bloque['BloqAgen']['ID_AGENDA']]))
					$horarios[$bloque['BloqAgen']['ID_AGENDA']] = $OfertaHors[0]['OfertaHor']['name'];
		}

		
		
		$this->set(compact('agendas','usuarios','horarios'));

	}



	public function atencion_medica(){
		$this->set('title_for_layout', 'Atención Médica');
		$params = $this->params['url'];
		$options = array('conditions' => array('Atencion.ID_ATENCION' => $params));
		$this->loadModel('Atencion');
		$atencion = $this->Atencion->find('all',$options);
		$this->set(compact('params','atencion'));
		

	}



	public function administracion_vet(){
		$this->set('title_for_layout', 'Administración Veterinario');

	}
	public function gestion(){
		$this->set('title_for_layout', 'Gestion Admin');

	}
	public function gestion_cliente(){
		$this->set('title_for_layout', 'Gestion Cliente');

		if ($this->request->is(array('post', 'put'))) {
			$this->loadModel('User');
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El Cliente a sido guardado.'));
				return $this->redirect(array('action' => 'gestion'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}



		$this->loadModel('User');
		$users= $this->User->find('list');
		$this->set(compact('users'));

	}
	
	public function gestion_vet(){
		$this->set('title_for_layout', 'Gestion Vet');

		if ($this->request->is(array('post', 'put'))) {
			$this->loadModel('Vet');
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('El Cliente a sido guardado.'));
				return $this->redirect(array('action' => 'gestion'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}



		$this->loadModel('Vet');
		$vets= $this->Vet->find('list');
		$this->set(compact('vets'));
	}
	
	





	public function view($id = null) {
		$this->set('title_for_layout', 'Mis Datos');
		$usuario = AuthComponent::user();
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $usuario[0]['Vet']['ID_VET']));
		$this->set('vet', $this->Vet->find('first', $options));
	}
	public function view2($id = null) {
		$this->view = 'view';
		$this->set('title_for_layout', 'Vet Datos');
		$usuario = AuthComponent::user();
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
		$this->set('vet', $this->Vet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Ingresar Veterinario');
		if ($this->request->is('post')) {
			$this->loadModel('Vet');
			$this->Vet->create();
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('El veterinario a sido guardado.'));
				return $this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		}
		$this->loadModel('Group');
		$groups = $this->Group->find('list');
		unset($groups[1]);
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Editar Mis Datos');
		$usuario = AuthComponent::user();
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('Tus datos han sido actualizados.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $usuario[0]['Vet']['ID_VET']));
			$this->request->data = $this->Vet->find('first', $options);
		}
		$groups = $this->Vet->Group->find('list');
		$this->set(compact('groups'));
	}
	public function edit2($id = null) {
		$this->view = 'edit';
		$this->set('title_for_layout', 'Editar Datos');
		$usuario = AuthComponent::user();
		$this->loadModel('Vet');
		if (!$this->Vet->exists($usuario[0]['Vet']['ID_VET'])) {
			throw new NotFoundException(__('Invalid vet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vet->save($this->request->data)) {
				$this->Session->setFlash(__('Tus datos han sido actualizados.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The vet could not be saved. Please, try again.'));
			}
		} else {
		
			$options = array('conditions' => array('Vet.' . $this->Vet->primaryKey => $id));
			$this->request->data = $this->Vet->find('first', $options);
		}
		$groups = $this->Vet->Group->find('list');
		$this->set(compact('groups'));
	}




	public function seleccion_cliente(){
		$this->set('title_for_layout', 'Selección Cliente');


		

		if($this->request->is('post')){

			$id = $this->request->data['cliente']['NOMBRE_CLI'];
			return $this->redirect(array(
				'controller' => 'atencions',
				'action' => 'add',
				$this->request->data['cliente']['NOMBRE_CLI']
				));
		}
		$this->loadModel('User');
		$users=$this->User->find('list');
		$this->set(compact('users'));

	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
}
