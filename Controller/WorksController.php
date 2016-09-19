<?php
App::uses('AppController', 'Controller');
/**
 * Works Controller
 *
 * @property Work $Work
 * @property PaginatorComponent $Paginator
 */
class WorksController extends AppController {

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
		$this->layout="admin";
		$this->Work->recursive = 0;
		$this->set('works', $this->Paginator->paginate());
	}

	public function type($cond = null){
		$this->layout="admin";
		$this->Work->recursive = 0;

		if ($cond == 'design') {
			$this->Paginator->settings = array
			(	'conditions' => array('Work.type =' => 'Design'),
				'order' => array('Work.orden' => 'asc')
				);
		} elseif ($cond == 'development') {
			$this->Paginator->settings = array
			(	'conditions' => array('Work.type =' => 'Development'),
				'order' => array('Work.orden' => 'asc')
				);
		}

		$works =  $this->Paginator->paginate();
		$qty = count($works);
		$this->set('works', $works);
		$this->set('qty', $qty);
		$this->set('type', $cond);
	}

	public function order($type){

		$qty = count($this->request->data)/2;

		for ($i=1; $i <= $qty; $i++) { 
			$this->Work->read(null, $this->request->data['id'.$i]);
			$this->Work->set('orden', $this->request->data['order'.$i]);
			$this->Work->save();
		}

		$this->redirect('/works/type/'.$type);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		}
		$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
		$this->set('work', $this->Work->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {

			$type = $this->request->data['Work']['type'];
			$orden = $this->Work->query("SELECT MAX(orden) as orden FROM work WHERE type = '".$type."';")[0][0]['orden'];

			$orden++;

			$this->Work->create();
			$this->Work->set('orden', $orden);

			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved.'));
				$this->_compress($this->request->data['Work']['img1']);
				$this->_compress($this->request->data['Work']['img2']);
				$this->_compress($this->request->data['Work']['img3']);
				$this->_compress($this->request->data['Work']['img4']);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'));
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
		$this->layout="admin";
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
			$this->request->data = $this->Work->find('first', $options);
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
		$this->Work->id = $id;
		if (!$this->Work->exists()) {
			throw new NotFoundException(__('Invalid work'));
		}
		if ($this->Work->delete()) {
			$this->Session->setFlash(__('The work has been deleted.'));
		} else {
			$this->Session->setFlash(__('The work could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
