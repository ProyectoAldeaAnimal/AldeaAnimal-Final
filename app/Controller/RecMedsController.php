<?php
App::uses('AppController', 'Controller');
/**
 * Recmeds Controller
 *
 * @property Recmed $Recmed
 * @property PaginatorComponent $Paginator
 */
class RecmedsController extends AppController {

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
		$this->Recmed->recursive = 0;
		$this->set('recmeds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recmed->exists($id)) {
			throw new NotFoundException(__('Invalid recmed'));
		}
		$options = array('conditions' => array('Recmed.' . $this->Recmed->primaryKey => $id));
		$this->set('recmed', $this->Recmed->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Receta o Medicación');
		if ($this->request->is('post')) {
			$this->Recmed->create();
			if ($this->Recmed->save($this->request->data)) {
				$this->Session->setFlash(__('The recmed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recmed could not be saved. Please, try again.'));
			}
		}
		$atencions = $this->Recmed->Atencion->find('list');
		$farmacos = $this->Recmed->Farmaco->find('list');
		$this->set(compact('atencions', 'farmacos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Recmed->exists($id)) {
			throw new NotFoundException(__('Invalid recmed'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Recmed->save($this->request->data)) {
				$this->Session->setFlash(__('The recmed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recmed could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recmed.' . $this->Recmed->primaryKey => $id));
			$this->request->data = $this->Recmed->find('first', $options);
		}
		$atencions = $this->Recmed->Atencion->find('list');
		$farmacos = $this->Recmed->Farmaco->find('list');
		$this->set(compact('atencions', 'farmacos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recmed->id = $id;
		if (!$this->Recmed->exists()) {
			throw new NotFoundException(__('Invalid recmed'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Recmed->delete()) {
			$this->Session->setFlash(__('The recmed has been deleted.'));
		} else {
			$this->Session->setFlash(__('The recmed could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
