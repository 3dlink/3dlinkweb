<?php
App::uses('AppController', 'Controller');
/**
 * Egresos Controller
 *
 * @property Egreso $Egreso
 * @property PaginatorComponent $Paginator
 */
class EgresosController extends AppController {

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
		$this->Egreso->recursive = 0;

        if(isset($this->request->query['filtro'])){

        	$mes = $this->request->query['filtro'];

			$total = $this->Egreso->find('first', array('fields' => array('sum(Egreso.monto) AS ctotal')));
			$total = $total[0]['ctotal'];
			//debug($total);
			$this->set('total', $total);
        }else{
        	$this->set('egresos', array());
			$this->set('total', 0);
        }
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout="admin";
		if (!$this->Egreso->exists($id)) {
			throw new NotFoundException(__('Invalid egreso'));
		}
		$options = array('conditions' => array('Egreso.' . $this->Egreso->primaryKey => $id));
		$this->set('egreso', $this->Egreso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Egreso->create();
			if ($this->Egreso->save($this->request->data)) {
				$this->Session->setFlash(__('The egreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The egreso could not be saved. Please, try again.'));
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
		if (!$this->Egreso->exists($id)) {
			throw new NotFoundException(__('Invalid egreso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Egreso->save($this->request->data)) {
				$this->Session->setFlash(__('The egreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The egreso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Egreso.' . $this->Egreso->primaryKey => $id));
			$this->request->data = $this->Egreso->find('first', $options);
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
		$this->Egreso->id = $id;
		if (!$this->Egreso->exists()) {
			throw new NotFoundException(__('Invalid egreso'));
		}
		if ($this->Egreso->delete()) {
			$this->Session->setFlash(__('The egreso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The egreso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
