<?php
App::uses('AppController', 'Controller');
/**
 * Pets Controller
 *
 * @property Pet $Pet
 * @property PaginatorComponent $Paginator
 */
class PetsController extends AppController {

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
		$this->Pet->recursive = 0;
		$this->set('pets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pet->exists($id)) {
			throw new NotFoundException(__('Invalid pet'));
		}
		$options = array('conditions' => array('Pet.' . $this->Pet->primaryKey => $id));
		$this->set('pet', $this->Pet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pet->create();
			if ($this->Pet->save($this->request->data)) {
				$this->Session->setFlash(__('The pet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pet could not be saved. Please, try again.'));
			}
		}
		$users = $this->Pet->User->find('list');
		$tipePets = $this->Pet->TipePet->find('list');
		$this->set(compact('users', 'tipePets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pet->exists($id)) {
			throw new NotFoundException(__('Invalid pet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pet->save($this->request->data)) {
				$this->Session->setFlash(__('The pet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pet.' . $this->Pet->primaryKey => $id));
			$this->request->data = $this->Pet->find('first', $options);
		}
		$users = $this->Pet->User->find('list');
		$tipePets = $this->Pet->TipePet->find('list');
		$this->set(compact('users', 'tipePets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pet->id = $id;
		if (!$this->Pet->exists()) {
			throw new NotFoundException(__('Invalid pet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pet->delete()) {
			$this->Session->setFlash(__('The pet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
