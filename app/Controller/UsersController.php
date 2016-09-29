<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('register','login', 'logout');
//        $this->Auth->allow();
//        $this->Auth->allow('initDB');
    }

    public function initDB() {
        $group = $this->User->Group;
        //管理者グループには全てを許可する
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');

        //マネージャグループには 下記 に対するアクセスを許可する
        $group->id = 2;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Books');
        $this->Acl->allow($group, 'controllers/Publishers');
        $this->Acl->allow($group, 'controllers/Borrowinglists');
        $this->Acl->allow($group, 'controllers/Bookinglists');

        //ユーザグループには何も追加と編集を許可しない
        $group->id = 3;
        $this->Acl->deny($group, 'controllers');
        //馬鹿げた「ビューが見つからない」というエラーメッセージを表示させないために exit を追加します
        echo "all done";
        exit;
    }

    public function login(){
        if ($this->request->is('post')){
            if($this->Auth->login()){
                $this->redirect($this->Auth->redirectURL('../books/index'));
            } else {
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function register(){
        //$this->requestにPOSTされたデータが入っている
        //POSTメソッドかつユーザ追加が成功したら
        if($this->request->is('post') && $this->User->save($this->request->data)){
            //ログイン
            //$this->request->dataの値を使用してログインする規約になっている
            $this->Auth->login();
            $this->redirect('../books/index');
        }
    }

    public function logout() {
//        $this->Auth->logout();
//        $this->redirect('login');
        $this->Flash->set('ログアウトしました。');
//        $this->redirect($this->Auth->logout('../books/index'));
        $this->Auth->logout();
        $this->redirect('../books/index');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
        $this->set('user', $this->User->findById($id));
		/*$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));*/
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
			/*$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);*/
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


}
