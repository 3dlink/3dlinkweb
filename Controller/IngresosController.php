<?php
App::uses('AppController', 'Controller');
/**
 * Ingresos Controller
 *
 * @property Ingreso $Ingreso
 * @property PaginatorComponent $Paginator
 */
class IngresosController extends AppController {

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
		$this->Ingreso->recursive = 0;
		$this->set('ingresos', $this->Paginator->paginate());
		$total = $this->Ingreso->find('first', array('fields' => array('sum(Ingreso.monto) AS ctotal')));
		$total = $total[0]['ctotal'];
		//debug($total);
		$this->set('total', $total);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ingreso->exists($id)) {
			throw new NotFoundException(__('Invalid ingreso'));
		}
		$options = array('conditions' => array('Ingreso.' . $this->Ingreso->primaryKey => $id));
		$this->set('ingreso', $this->Ingreso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Ingreso->create();
			if ($this->Ingreso->save($this->request->data)) {
				$this->Session->setFlash(__('The ingreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingreso could not be saved. Please, try again.'));
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
		if (!$this->Ingreso->exists($id)) {
			throw new NotFoundException(__('Invalid ingreso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ingreso->save($this->request->data)) {
				$this->Session->setFlash(__('The ingreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingreso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ingreso.' . $this->Ingreso->primaryKey => $id));
			$this->request->data = $this->Ingreso->find('first', $options);
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
		$this->Ingreso->id = $id;
		if (!$this->Ingreso->exists()) {
			throw new NotFoundException(__('Invalid ingreso'));
		}
		if ($this->Ingreso->delete()) {
			$this->Session->setFlash(__('The ingreso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ingreso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
