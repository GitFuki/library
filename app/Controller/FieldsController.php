<?php
App::uses('AppController', 'Controller');
/**
 * Fields Controller
 *
 * @property Field $Field
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class FieldsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Field->recursive = 0;
		$this->set('fields', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Field->exists($id)) {
			throw new NotFoundException(__('Invalid field'));
		}
		$options = array('conditions' => array('Field.' . $this->Field->primaryKey => $id));
		$this->set('field', $this->Field->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Field->create();
			if ($this->Field->save($this->request->data)) {
				$this->Flash->success(__('The field has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The field could not be saved. Please, try again.'));
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
		if (!$this->Field->exists($id)) {
			throw new NotFoundException(__('Invalid field'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Field->save($this->request->data)) {
				$this->Flash->success(__('The field has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The field could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Field.' . $this->Field->primaryKey => $id));
			$this->request->data = $this->Field->find('first', $options);
            $this->set('fields', $this->request->data);
            //print_r($this->request->data);
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
		$this->Field->id = $id;
		if (!$this->Field->exists()) {
			throw new NotFoundException(__('Invalid field'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Field->delete()) {
			$this->Flash->success(__('The field has been deleted.'));
		} else {
			$this->Flash->error(__('The field could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
