<?php
App::uses('AppController', 'Controller');
/**
 * Hosps Controller
 *
 * @property Hosp $Hosp
 * @property PaginatorComponent $Paginator
 */
class HospsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hosp->recursive = 0;
		$this->set('hosps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hosp->exists($id)) {
			throw new NotFoundException(__('Invalid hosp'));
		}
		$options = array('conditions' => array('Hosp.' . $this->Hosp->primaryKey => $id));
		$this->set('hosp', $this->Hosp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Generar Hospitalización');
		if ($this->request->is('post')) {
			$this->Hosp->create();
			if ($this->Hosp->save($this->request->data)) {
				return $this->redirect(array('controller'=>'vets','action' => 'atencion_medica'));
			} else {
				$this->Session->setFlash(__('The hosp could not be saved. Please, try again.'));
			}
		}
		$vets = $this->Hosp->Vet->find('list');
		$ordenHosps = $this->Hosp->OrdenHosp->find('list');
		$this->set(compact('vets', 'ordenHosps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hosp->exists($id)) {
			throw new NotFoundException(__('Invalid hosp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hosp->save($this->request->data)) {
				$this->Session->setFlash(__('The hosp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hosp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hosp.' . $this->Hosp->primaryKey => $id));
			$this->request->data = $this->Hosp->find('first', $options);
		}
		$vets = $this->Hosp->Vet->find('list');
		$ordenHosps = $this->Hosp->OrdenHosp->find('list');
		$this->set(compact('vets', 'ordenHosps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Hosp->id = $id;
		if (!$this->Hosp->exists()) {
			throw new NotFoundException(__('Invalid hosp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Hosp->delete()) {
			$this->Session->setFlash(__('The hosp has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hosp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
