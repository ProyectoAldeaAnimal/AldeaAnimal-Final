<?php
App::uses('AppController', 'Controller');
/**
 * Procs Controller
 *
 * @property Proc $Proc
 * @property PaginatorComponent $Paginator
 */
class ProcsController extends AppController {

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
		$this->Proc->recursive = 0;
		$this->set('procs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proc->exists($id)) {
			throw new NotFoundException(__('Invalid proc'));
		}
		$options = array('conditions' => array('Proc.' . $this->Proc->primaryKey => $id));
		$this->set('proc', $this->Proc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Crear Procedimiento');
		if ($this->request->is('post')) {
			$this->Proc->create();
			if ($this->Proc->save($this->request->data)) {
				$this->Session->setFlash(__('The proc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proc could not be saved. Please, try again.'));
			}
		}
		$atencions = $this->Proc->Atencion->find('list');
		$this->set(compact('atencions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proc->exists($id)) {
			throw new NotFoundException(__('Invalid proc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proc->save($this->request->data)) {
				$this->Session->setFlash(__('The proc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proc.' . $this->Proc->primaryKey => $id));
			$this->request->data = $this->Proc->find('first', $options);
		}
		$atencions = $this->Proc->Atencion->find('list');
		$this->set(compact('atencions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proc->id = $id;
		if (!$this->Proc->exists()) {
			throw new NotFoundException(__('Invalid proc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proc->delete()) {
			$this->Session->setFlash(__('The proc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
