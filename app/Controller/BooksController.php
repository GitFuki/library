<?php
App::uses('AppController', 'Controller');
/**
 * Books Controller
 *
 * @property Book $Book
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class BooksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');
    //
    public $helpers = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Book->recursive = 0;
        //ページネータをセット
        $this->Paginator->settings = array(
            'Book' => array(
                'paramType' => 'querystring',
                'limit' => 5,
                'maxLimit' => 5,
                'order' => array(
                    'Book.id' => 'asc')));
		$this->set('books', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
		$this->set('book', $this->Book->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Book->create();
			if ($this->Book->save($this->request->data)) {
				$this->Flash->success(__('The book has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The book could not be saved. Please, try again.'));
			}
		}
		$authors = $this->Book->Author->find('list');
		$publishers = $this->Book->Publisher->find('list');
		$fields = $this->Book->Field->find('list');
		$this->set(compact('authors', 'publishers', 'fields'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Book->save($this->request->data)) {
				$this->Flash->success(__('The book has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The book could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
			$this->request->data = $this->Book->find('first', $options);
		}
		$authors = $this->Book->Author->find('list');
		$publishers = $this->Book->Publisher->find('list');
		$fields = $this->Book->Field->find('list');
		$this->set(compact('authors', 'publishers', 'fields'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Book->delete()) {
			$this->Flash->success(__('The book has been deleted.'));
		} else {
			$this->Flash->error(__('The book could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



	//Adding search() action first detects a POST request and then does a super-quick implementation of the Post/Redirect/Get design pattern.
    public function search(){

        //searching text, for example, "html", will post to the search() action first and then issue a redirect to /books/index?q=html.
        if($this->request->is('put') || $this->request->is('post')){
            return $this->redirect(array(
                '?' => array(
                    'q' =>$this->request->data('Book.searchQuery')
                )
                ));
        }
            $this->Book->recursive =0;
            $searchQuery = $this->request->query('q');

        //Configure the Book component using the following setting.
            $this->Paginator->settings = array(
                'Book' => array(
                    'findType' => 'search',
                    'searchQuery' => $searchQuery
                )
            );
            $this->set('books', $this->Paginator->paginate());
            $this->set('searchQuery', $searchQuery);
            $this->render('index');




    }













}
