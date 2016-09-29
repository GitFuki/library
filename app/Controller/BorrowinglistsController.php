<?php
print_r('getReturnTime');
?>

<?php
App::uses('AppController', 'Controller');
/**
 * Borrowinglists Controller
 *
 * @property Borrowinglist $Borrowinglist
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class BorrowinglistsController extends AppController {

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
		$this->Borrowinglist->recursive = 0;
		$this->set('borrowinglists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Borrowinglist->exists($id)) {
			throw new NotFoundException(__('Invalid borrowinglist'));
		}
		$options = array('conditions' => array('Borrowinglist.' . $this->Borrowinglist->primaryKey => $id));
		$this->set('borrowinglist', $this->Borrowinglist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Borrowinglist->create();
			if ($this->Borrowinglist->save($this->request->data)) {
				$this->Flash->success(__('The borrowinglist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The borrowinglist could not be saved. Please, try again.'));
			}
		}
		$books = $this->Borrowinglist->Book->find('list');
		$users = $this->Borrowinglist->User->find('list');
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
		if (!$this->Borrowinglist->exists($id)) {
			throw new NotFoundException(__('Invalid borrowinglist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Borrowinglist->save($this->request->data)) {
				$this->Flash->success(__('The borrowinglist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The borrowinglist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Borrowinglist.' . $this->Borrowinglist->primaryKey => $id));
			$this->request->data = $this->Borrowinglist->find('first', $options);
		}
		$books = $this->Borrowinglist->Book->find('list');
		$users = $this->Borrowinglist->User->find('list');
		$this->set(compact('books', 'users'));
        $this->set('borrowings', $this->request->data);
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
		$this->Borrowinglist->id = $id;
		if (!$this->Borrowinglist->exists()) {
			throw new NotFoundException(__('Invalid borrowinglist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Borrowinglist->delete()) {
			$this->Flash->success(__('The borrowinglist has been deleted.'));
		} else {
			$this->Flash->error(__('The borrowinglist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
