<?php
App::uses('AppController', 'Controller');
/**
 * Prestacions Controller
 *
 * @property Prestacion $Prestacion
 * @property PaginatorComponent $Paginator
 */
class PrestacionsController extends AppController {

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
		$this->Prestacion->recursive = 0;
		$this->set('prestacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prestacion->exists($id)) {
			throw new NotFoundException(__('Invalid prestacion'));
		}
		$options = array('conditions' => array('Prestacion.' . $this->Prestacion->primaryKey => $id));
		$this->set('prestacion', $this->Prestacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prestacion->create();
			if ($this->Prestacion->save($this->request->data)) {
				$this->Session->setFlash(__('The prestacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prestacion could not be saved. Please, try again.'));
			}
		}
		$tipoPrestacions = $this->Prestacion->TipoPrestacion->find('list');
		$this->set(compact('tipoPrestacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Prestacion->exists($id)) {
			throw new NotFoundException(__('Invalid prestacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prestacion->save($this->request->data)) {
				$this->Session->setFlash(__('The prestacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prestacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prestacion.' . $this->Prestacion->primaryKey => $id));
			$this->request->data = $this->Prestacion->find('first', $options);
		}
		$tipoPrestacions = $this->Prestacion->TipoPrestacion->find('list');
		$this->set(compact('tipoPrestacions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Prestacion->id = $id;
		if (!$this->Prestacion->exists()) {
			throw new NotFoundException(__('Invalid prestacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Prestacion->delete()) {
			$this->Session->setFlash(__('The prestacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prestacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
