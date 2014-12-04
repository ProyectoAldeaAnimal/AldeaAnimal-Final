<?php
App::uses('AppController', 'Controller');
/**
 * Pars Controller
 *
 * @property Par $Par
 * @property PaginatorComponent $Paginator
 */
class ParsController extends AppController {

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
		$this->set('title_for_layout', 'Parámetros del Sistema');
		$this->Par->recursive = 0;
		$this->set('pars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Par->exists($id)) {
			throw new NotFoundException(__('Invalid par'));
		}
		$options = array('conditions' => array('Par.' . $this->Par->primaryKey => $id));
		$this->set('par', $this->Par->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$temp= $this->request->data;
		debug($temp);
		if ($this->request->is('posta')) {
			$this->Par->create();
			if ($this->Par->save($this->request->data)) {
				$this->Session->setFlash(__('The par has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The par could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Par->exists($id)) {
			throw new NotFoundException(__('Invalid par'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Par->save($this->request->data)) {
				$this->Session->setFlash(__('The par has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The par could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Par.' . $this->Par->primaryKey => $id));
			$this->request->data = $this->Par->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Par->id = $id;
		if (!$this->Par->exists()) {
			throw new NotFoundException(__('Invalid par'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Par->delete()) {
			$this->Session->setFlash(__('The par has been deleted.'));
		} else {
			$this->Session->setFlash(__('The par could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
