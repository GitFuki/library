<?php
App::uses('AppController', 'Controller');
/**
 * Bookinglists Controller
 *
 * @property Bookinglist $Bookinglist
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class BookinglistsController extends AppController {

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
		$this->Bookinglist->recursive = 0;
		$this->set('bookinglists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bookinglist->exists($id)) {
			throw new NotFoundException(__('Invalid bookinglist'));
		}
		$options = array('conditions' => array('Bookinglist.' . $this->Bookinglist->primaryKey => $id));
		$this->set('bookinglist', $this->Bookinglist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bookinglist->create();
			if ($this->Bookinglist->save($this->request->data)) {
				$this->Flash->success(__('The bookinglist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bookinglist could not be saved. Please, try again.'));
			}
		}
		$books = $this->Bookinglist->Book->find('list');
		$users = $this->Bookinglist->User->find('list');
		$this->set(compact('books', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bookinglist->exists($id)) {
			throw new NotFoundException(__('Invalid bookinglist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bookinglist->save($this->request->data)) {
				$this->Flash->success(__('The bookinglist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bookinglist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bookinglist.' . $this->Bookinglist->primaryKey => $id));
			$this->request->data = $this->Bookinglist->find('first', $options);
		}
		$books = $this->Bookinglist->Book->find('list');
		$users = $this->Bookinglist->User->find('list');
		$this->set(compact('books', 'users'));
        $this->set('bookinglists', $this->request->data);
        //print_r($this->request->data);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bookinglist->id = $id;
		if (!$this->Bookinglist->exists()) {
			throw new NotFoundException(__('Invalid bookinglist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bookinglist->delete()) {
			$this->Flash->success(__('The bookinglist has been deleted.'));
		} else {
			$this->Flash->error(__('The bookinglist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
