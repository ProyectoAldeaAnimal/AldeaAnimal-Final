<?php
App::uses('AppController', 'Controller');
/**
 * TipePets Controller
 *
 * @property TipePet $TipePet
 * @property PaginatorComponent $Paginator
 */
class TipePetsController extends AppController {

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
		$this->TipePet->recursive = 0;
		$this->set('tipePets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipePet->exists($id)) {
			throw new NotFoundException(__('Invalid tipe pet'));
		}
		$options = array('conditions' => array('TipePet.' . $this->TipePet->primaryKey => $id));
		$this->set('tipePet', $this->TipePet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipePet->create();
			if ($this->TipePet->save($this->request->data)) {
				$this->Session->setFlash(__('The tipe pet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipe pet could not be saved. Please, try again.'));
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
		if (!$this->TipePet->exists($id)) {
			throw new NotFoundException(__('Invalid tipe pet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipePet->save($this->request->data)) {
				$this->Session->setFlash(__('The tipe pet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipe pet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipePet.' . $this->TipePet->primaryKey => $id));
			$this->request->data = $this->TipePet->find('first', $options);
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
		$this->TipePet->id = $id;
		if (!$this->TipePet->exists()) {
			throw new NotFoundException(__('Invalid tipe pet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipePet->delete()) {
			$this->Session->setFlash(__('The tipe pet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipe pet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
