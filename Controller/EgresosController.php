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
		$this->set('egresos', $this->Paginator->paginate());
		$search = [];
        if(isset($this->request->query['filtro']) && isset($this->request->query['year-fil'])){

        	$mes = $this->request->query['filtro'];
        	$year = $this->request->query['year-fil'];
        	$mes_next = $mes+1;
        	$mes_next = '0'.$mes_next;
        	$day = '01';

        	if($mes == '12'){ 
        		$mes_next= $mes;
        		$day = '31';

        	}
        	$search = $this->Egreso->find('all', array('conditions'=> array('egr_date >=' => $year.'-'.$mes.'-01', 'egr_date <=' => $year.'-'.$mes_next.'-'.$day )));
        	$total = 0;
        	foreach ($search as $key => $value) {
        		$total += $value['Egreso']['monto'];
        	}
			$this->set('total', $total);
			$this->set('search', $search);

        }else{
        	$mes = date("m");
        	$year = '20'.date("y");
        	$mes_next = $mes+1;
        	$mes_next = '0'.$mes_next;
        	$day = '01';

        	if($mes == '12'){ 
        		$mes_next= $mes;
        		$day = '31';

        	}
        	$search = $this->Egreso->find('all', array('conditions'=> array('egr_date >=' => $year.'-'.$mes.'-01', 'egr_date <=' => $year.'-'.$mes_next.'-'.$day )));
        	$total = 0;
        	foreach ($search as $key => $value) {
        		$total += $value['Egreso']['monto'];
        	}
			$this->set('total', $total);
			$this->set('search', $search);
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
