<?php
App::uses('AppController', 'Controller');
/**
 * OfertaHors Controller
 *
 * @property OfertaHor $OfertaHor
 * @property PaginatorComponent $Paginator
 */
class OfertaHorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $helpers = array('Js' => array('Jquery'),'Time');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OfertaHor->recursive = 0;
		$this->set('ofertaHors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OfertaHor->exists($id)) {
			throw new NotFoundException(__('Invalid oferta hor'));
		}
		$options = array('conditions' => array('OfertaHor.' . $this->OfertaHor->primaryKey => $id));
		$this->set('ofertaHor', $this->OfertaHor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OfertaHor->create();
			if ($this->OfertaHor->save($this->request->data)) {
				$this->Session->setFlash(__('The oferta hor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oferta hor could not be saved. Please, try again.'));
			}
		}


		$vets = $this->OfertaHor->Vet->find('list');
		$cals = $this->OfertaHor->Cal->find('list');
		$this->set(compact('cals', 'vets'));
	}

	public function agregarOfertaHoraria() {

		debug($this->request->data);	

		if ($this->request->is('post')) {
			// Se obtiene los datos del formulario
			$requesData = $this->request->data;
			$next = 1;
			// Se carga el tamaño de bloque
		 	$this->loadModel('Par');
			$tamañoBloque= $this->Par->query("SELECT TAM_BLOQUE FROM par WHERE FIN_VIGENCIA IS NULL");
			$tempHora = $requesData;
		

			// Arreglo para guardar los datos que entraran a la base de datos
			$datos = array();
			// Se busca el id de la fecha seleccionada
			$fecha= $this->OfertaHor->Cal->find('all',array(
								'conditions' => array(
										'Cal.FECHA_CAL' => $requesData['OfertaHor']['varDate'])
									)
							);

			// INGRESO DEL DÍA LUNES DE LA SEMANA
			//Se cargan los datos de la oferta horaria en el arreglo
			while($tempHora['OfertaHor']['LUN']!=$tempHora['OfertaHor']['LUN2']){
				if($tempHora['OfertaHor']['LUN']==$tempHora['OfertaHor']['LUN2']){

				}
				else{
					$datos['OfertaHor']['ID_CAL'] =	$fecha[0]['Cal']['ID_CAL'];
					$datos['OfertaHor']['ID_VET'] = $requesData['OfertaHor']['ID_VET'];
					$datos['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'P';
					$datos['OfertaHor']['HORA_INICIO'] = $tempHora['OfertaHor']['LUN'];
					
					$tempHora['OfertaHor']['LUN']['min'] = (string) ($tempHora['OfertaHor']['LUN']['min'] + $tamañoBloque[0]['par']['TAM_BLOQUE']);
					if ($tempHora['OfertaHor']['LUN']['min']=='60'){

						$tempHora['OfertaHor']['LUN']['min']='00';
						$tempHora['OfertaHor']['LUN']['hour'] = (string)($tempHora['OfertaHor']['LUN']['hour']+1);
						$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['LUN'];
					}
					else{
						$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['LUN'];
					}
					//debug($datos);
					$this->OfertaHor->create();

					if ($this->OfertaHor->save($datos)) {
						$next=1;
						
					} else {
						$next=0;
						$this->Session->setFlash(__('Hay un problema con una de las ofertas horarias'));
					}	
				}
				
			}
			

			if($next==1){
				$nextfecha=$fecha[0]['Cal']['FECHA_CAL'];
				$nextfecha=  date("d", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$tempfecha=(string)($nextfecha +1);
				$nextfecha=  date("Y-m", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$nextfecha=  date("Y-m-d", strtotime($nextfecha."-".$tempfecha));
				$fecha= $this->OfertaHor->Cal->find('all',array(
									'conditions' => array(
											'Cal.FECHA_CAL' => $nextfecha)
										)
								);
				// INGRESO DEL DIA MARTES DE LA SEMANA
				while($tempHora['OfertaHor']['MAR']!=$tempHora['OfertaHor']['MAR2']){
					if($tempHora['OfertaHor']['MAR']==$tempHora['OfertaHor']['MAR2']){

					}
					else{
						$datos['OfertaHor']['ID_CAL'] =	$fecha[0]['Cal']['ID_CAL'];
						$datos['OfertaHor']['ID_VET'] = $requesData['OfertaHor']['ID_VET'];
						$datos['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'P';
						$datos['OfertaHor']['HORA_INICIO'] = $tempHora['OfertaHor']['MAR'];
						
						$tempHora['OfertaHor']['MAR']['min'] = (string) ($tempHora['OfertaHor']['MAR']['min'] + $tamañoBloque[0]['par']['TAM_BLOQUE']);
						if ($tempHora['OfertaHor']['MAR']['min']=='60'){

							$tempHora['OfertaHor']['MAR']['min']='00';
							$tempHora['OfertaHor']['MAR']['hour'] = (string)($tempHora['OfertaHor']['MAR']['hour']+1);
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['MAR'];
						}
						else{
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['MAR'];
						}
						//debug($datos);
						$this->OfertaHor->create();

						if ($this->OfertaHor->save($datos)) {
							$next=1;
							
						} else {
							$next=0;
							$this->Session->setFlash(__('Hay un problema con una de las ofertas horarias'));
						}
					}
					
				}
				
			}

			if($next==1){
				$nextfecha=  date("d", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$tempfecha=(string)($nextfecha +1);
				$nextfecha=  date("Y-m", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$nextfecha=  date("Y-m-d", strtotime($nextfecha."-".$tempfecha));
				$fecha= $this->OfertaHor->Cal->find('all',array(
									'conditions' => array(
											'Cal.FECHA_CAL' => $nextfecha)
										)
								);
				// Ingreso del dia miercoles de la semana
				while($tempHora['OfertaHor']['MIER']!=$tempHora['OfertaHor']['MIER2']){
					if($tempHora['OfertaHor']['MIER']==$tempHora['OfertaHor']['MIER2']){

					}
					else{
						$datos['OfertaHor']['ID_CAL'] =	$fecha[0]['Cal']['ID_CAL'];
						$datos['OfertaHor']['ID_VET'] = $requesData['OfertaHor']['ID_VET'];
						$datos['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'P';
						$datos['OfertaHor']['HORA_INICIO'] = $tempHora['OfertaHor']['MIER'];
						
						$tempHora['OfertaHor']['MIER']['min'] = (string) ($tempHora['OfertaHor']['MIER']['min'] + $tamañoBloque[0]['par']['TAM_BLOQUE']);
						if ($tempHora['OfertaHor']['MIER']['min']=='60'){

							$tempHora['OfertaHor']['MIER']['min']='00';
							$tempHora['OfertaHor']['MIER']['hour'] = (string)($tempHora['OfertaHor']['MIER']['hour']+1);
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['MIER'];
						}
						else{
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['MIER'];
						}
						//debug($datos);
						$this->OfertaHor->create();

						if ($this->OfertaHor->save($datos)) {
							$next=1;
							
						} else {
							$next=0;
							$this->Session->setFlash(__('Hay un problema con una de las ofertas horarias'));
						}
					}
					
				}
				
			}
			
			if($next==1){
				$nextfecha=  date("d", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$tempfecha=(string)($nextfecha +1);
				$nextfecha=  date("Y-m", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$nextfecha=  date("Y-m-d", strtotime($nextfecha."-".$tempfecha));
				$fecha= $this->OfertaHor->Cal->find('all',array(
									'conditions' => array(
											'Cal.FECHA_CAL' => $nextfecha)
										)
								);

				//Ingreso del dia jueves de la semana
				while($tempHora['OfertaHor']['JUE']!=$tempHora['OfertaHor']['JUE2']){
					if($tempHora['OfertaHor']['JUE']==$tempHora['OfertaHor']['JUE2']){

					}
					else{
						$datos['OfertaHor']['ID_CAL'] =	$fecha[0]['Cal']['ID_CAL'];
						$datos['OfertaHor']['ID_VET'] = $requesData['OfertaHor']['ID_VET'];
						$datos['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'P';
						$datos['OfertaHor']['HORA_INICIO'] = $tempHora['OfertaHor']['JUE'];
						
						$tempHora['OfertaHor']['JUE']['min'] = (string) ($tempHora['OfertaHor']['JUE']['min'] + $tamañoBloque[0]['par']['TAM_BLOQUE']);
						if ($tempHora['OfertaHor']['JUE']['min']=='60'){

							$tempHora['OfertaHor']['JUE']['min']='00';
							$tempHora['OfertaHor']['JUE']['hour'] = (string)($tempHora['OfertaHor']['JUE']['hour']+1);
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['JUE'];
						}
						else{
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['JUE'];
						}
						//debug($datos);
						$this->OfertaHor->create();

						if ($this->OfertaHor->save($datos)) {
							$next=1;
							
						} else {
							$next=0;
							$this->Session->setFlash(__('Hay un problema con una de las ofertas horarias'));
						}
					}
					
				}
				
			}
			if($next==1){
				$nextfecha=  date("d", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$tempfecha=(string)($nextfecha +1);
				$nextfecha=  date("Y-m", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$nextfecha=  date("Y-m-d", strtotime($nextfecha."-".$tempfecha));
				$fecha= $this->OfertaHor->Cal->find('all',array(
									'conditions' => array(
											'Cal.FECHA_CAL' => $nextfecha)
										)
								);

				// Ingreso del dia viernes de la semana
				while($tempHora['OfertaHor']['VI']!=$tempHora['OfertaHor']['VI2']){
					if($tempHora['OfertaHor']['VI']==$tempHora['OfertaHor']['VI2']){

					}
					else{
						$datos['OfertaHor']['ID_CAL'] =	$fecha[0]['Cal']['ID_CAL'];
						$datos['OfertaHor']['ID_VET'] = $requesData['OfertaHor']['ID_VET'];
						$datos['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'P';
						$datos['OfertaHor']['HORA_INICIO'] = $tempHora['OfertaHor']['VI'];
						
						$tempHora['OfertaHor']['VI']['min'] = (string) ($tempHora['OfertaHor']['VI']['min'] + $tamañoBloque[0]['par']['TAM_BLOQUE']);
						if ($tempHora['OfertaHor']['VI']['min']=='60'){

							$tempHora['OfertaHor']['VI']['min']='00';
							$tempHora['OfertaHor']['VI']['hour'] = (string)($tempHora['OfertaHor']['VI']['hour']+1);
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['VI'];
						}
						else{
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['VI'];
						}
						//debug($datos);
						$this->OfertaHor->create();

						if ($this->OfertaHor->save($datos)) {
							$next=1;
							
						} else {
							$next=0;
							$this->Session->setFlash(__('Hay un problema con una de las ofertas horarias'));
						}
					}
					
				}
				
			}

			
			if($next==1){
				$nextfecha=  date("d", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$tempfecha=(string)($nextfecha +1);
				$nextfecha=  date("Y-m", strtotime($fecha[0]['Cal']['FECHA_CAL']));
				$nextfecha=  date("Y-m-d", strtotime($nextfecha."-".$tempfecha));
				$fecha= $this->OfertaHor->Cal->find('all',array(
									'conditions' => array(
											'Cal.FECHA_CAL' => $nextfecha)
										)
								);
				// Ingreso del día sabado de la semana
				while($tempHora['OfertaHor']['SAB']!=$tempHora['OfertaHor']['SAB2']){
					if($tempHora['OfertaHor']['SAB']==$tempHora['OfertaHor']['SAB2']){

					}
					else{
						$datos['OfertaHor']['ID_CAL'] =	$fecha[0]['Cal']['ID_CAL'];
						$datos['OfertaHor']['ID_VET'] = $requesData['OfertaHor']['ID_VET'];
						$datos['OfertaHor']['ESTADO_AGENDAMIENTO'] = 'P';
						$datos['OfertaHor']['HORA_INICIO'] = $tempHora['OfertaHor']['SAB'];
						
						$tempHora['OfertaHor']['SAB']['min'] = (string) ($tempHora['OfertaHor']['SAB']['min'] + $tamañoBloque[0]['par']['TAM_BLOQUE']);
						if ($tempHora['OfertaHor']['SAB']['min']=='60'){

							$tempHora['OfertaHor']['SAB']['min']='00';
							$tempHora['OfertaHor']['SAB']['hour'] = (string)($tempHora['OfertaHor']['SAB']['hour']+1);
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['SAB'];
						}
						else{
							$datos['OfertaHor']['HORA_TERMINO'] = $tempHora['OfertaHor']['SAB'];
						}
						//debug($datos);
						$this->OfertaHor->create();

						if ($this->OfertaHor->save($datos)) {
							$next=1;
							
						} else {
							$next=0;
							$this->Session->setFlash(__('Hay un problema con una de las ofertas horarias'));
						}
					}
					
				}
				
			}
			if($next==1){
				$this->Session->setFlash(__('Se ha creado la oferta horaria con exito'));
				return $this->redirect(array('action' => 'index'));
			}	
		
		}

		
		$vets = $this->OfertaHor->Vet->find('list');
		$result = $this->OfertaHor->Cal->query("SELECT FECHA_CAL FROM cal WHERE NOMBRE_DIA = 'LU'");
		$varDate;
		$calsTemp= array();
		//
		for($i=0;$i<count($result);$i++){
			array_push($calsTemp, $result[$i]['cal']['FECHA_CAL']);
		}
		$cals= array();
		for($i=0;$i<count($calsTemp);$i++){
			$cals[$calsTemp[$i]]=$calsTemp[$i];
		}
		$this->set(compact('cals', 'vets','varDate','tamañoBloque'));

	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OfertaHor->exists($id)) {
			throw new NotFoundException(__('Invalid oferta hor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OfertaHor->save($this->request->data)) {
				$this->Session->setFlash(__('The oferta hor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oferta hor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OfertaHor.' . $this->OfertaHor->primaryKey => $id));
			$this->request->data = $this->OfertaHor->find('first', $options);
		}
		$vets = $this->OfertaHor->Vet->find('list');
		$cals = $this->OfertaHor->Cal->find('list');
		$this->set(compact('vets', 'cals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OfertaHor->id = $id;
		if (!$this->OfertaHor->exists()) {
			throw new NotFoundException(__('Invalid oferta hor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OfertaHor->delete()) {
			$this->Session->setFlash(__('The oferta hor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The oferta hor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
