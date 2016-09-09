<?php
App::uses('AppController', 'Controller');
/**
 * Personals Controller
 *
 * @property Personal $Personal
 * @property PaginatorComponent $Paginator
 */

require_once("library/FPDF/fpdf.php");

class PDF_Personal extends FPDF{
// Cabecera de página
	function Header(){
	    // Logo
	    $this->Image('img/HeaderReporte.PNG',0,8,200);
	    $this->SetFillColor(0,0,0);

	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    // Movernos a la derecha
	    $this->Cell(60);
	    // Título
	    $this->Cell(80,10,'',0,0,'C');
	    // Salto de línea
	    $this->Ln(20);
	}
	function Footer(){
	    $this->Image('img/footerReporte.PNG',0,265,200);
	}

}

class PersonalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Personal','Cargo','Project');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="admin";
		$this->Personal->recursive = 0;
		$this->set('personals', $this->Paginator->paginate());
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
		if (!$this->Personal->exists($id)) {
			throw new NotFoundException(__('Invalid personal'));
		}
		$options = array('conditions' => array('Personal.' . $this->Personal->primaryKey => $id));
		$this->set('personal', $this->Personal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Personal->create();
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal could not be saved. Please, try again.'));
			}
		}
		$listac = $this->Cargo->find('list');
		$this->set(compact('listac'));
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
		if (!$this->Personal->exists($id)) {
			throw new NotFoundException(__('Invalid personal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Personal.' . $this->Personal->primaryKey => $id));
			$this->request->data = $this->Personal->find('first', $options);
		}
		$listac = $this->Cargo->find('list');
		$this->set(compact('listac'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Personal->id = $id;
		if (!$this->Personal->exists()) {
			throw new NotFoundException(__('Invalid personal'));
		}
		if ($this->Personal->delete()) {
			$this->Session->setFlash(__('The personal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The personal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function makeactive($id = null){
		$this->autoRender = false;
		$this->Personal->id = $id;
		$this->Personal->saveField('active',1);
		return $this->redirect(array('action' => 'index'));
	}

	public function makeinactive($id = null){
		$this->autoRender = false;
		$this->Personal->id = $id;
		$this->Personal->saveField('active',0);
		return $this->redirect(array('action' => 'index'));
	}

	public function imprimir($id=0){
		
		$personal = $this->Personal->findById($id);

		$devs = array();

		// foreach ($personal['Project'] as $project) {
		// 	if(is_array($project)){
		// 		$salario = $this->Cargo->findById($project['cargo_id']);

		// 		array_push($devs,array('Nombre'=>$project['name'], 'Salario' =>$salario['Cargo']['salary']));
		// 	}
		// }

		$pdf = new PDF_Personal();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Cell(0,10,'Fecha: '.date("d") . "/" . date("m") . "/" . date("Y"),0,1);
		$pdf->Ln();

		// $pdf->Image('img/'.$personal['Personal']['photo'],null,null,30);

		$pdf->Cell(90,5,utf8_decode('Nombre: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['name']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('CI: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['ci']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('RIF: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['rif']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Teléfono: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['phone']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Email corporativo: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['email_company']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Email personal: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['email_personal']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Cargo: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Cargo']['name']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Trabajo en 3Dlinkweb: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->MultiCell(0,5,utf8_decode($personal['Personal']['job']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Número de cuenta: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['account_number']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Tipo de cuenta: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['account_type']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Banco: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($personal['Personal']['bank']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Biografia: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->MultiCell(0,5,utf8_decode($personal['Personal']['bio']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Observaciones: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->MultiCell(0,5,utf8_decode($personal['Personal']['observations']),0,1);
		$pdf->Ln();

		$pdf->AddPage();

		$pdf->Ln();$pdf->Ln();$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(0,10,utf8_decode('Proyectos: '),0,0);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(90,5,utf8_decode('Nombre '),0,0);

		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(0,5,utf8_decode('Status '),0,1);

		$pdf->SetFont('Arial','',14);

		$pdf->Ln();

		foreach ($personal['Project'] as $project) {
			$pdf->Cell(90,5,utf8_decode($project['name']),0,0);

			$pdf->MultiCell(0,5,utf8_decode($project['status']),0,1);
			$pdf->Ln();
		}

		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Programadores Asignados: '),0,0);
		// $pdf->Ln();$pdf->Ln();
		// $pdf->SetFont('Arial','',16);
		// foreach ($devs as $item) {

		// 	$pdf->Cell(20,8,utf8_decode($item['Nombre'].' - Salario: '.$item['Salario']),0,1);

		// }
		// $pdf->Ln();
		
		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Precio: '),0,0);
		// $pdf->SetFont('Arial','',16);
		// $pdf->Cell(0,5,utf8_decode($project['Project']['price']),0,1);
		// $pdf->Ln();

		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Moneda: '),0,0);
		// $pdf->SetFont('Arial','',16);
		// $pdf->Cell(0,5,utf8_decode($project['Project']['currency']),0,1);
		// $pdf->Ln();

		// $date_ini = date_create($project['Project']['init_date']);
  //   	$date_end = date_create($project['Project']['end_date']);
  //   	$interval = date_diff($date_ini, $date_end);
  //   	$interval = $interval->m;
  //   	if($interval == '0'){
  //   		$interval = '1';
  //   	}
  //   	$sumatotaldelsalariodemierdade3dlink = '0';

		// foreach ($project['Personal'] as $persona) {
		// 	if(is_array($persona)){
		// 		$salario = $this->Cargo->findById($persona['cargo_id']);
		// 		array_push($devs,array('Nombre'=>$persona['name'], 'Salario' =>$salario['Cargo']['salary'] * $interval));
		// 		$sumatotaldelsalariodemierdade3dlink = $sumatotaldelsalariodemierdade3dlink + $salario['Cargo']['salary'] * $interval;
		// 	}
		// }

		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Costo de Recursos: '),0,0);
		// $pdf->SetFont('Arial','',16);
		// $pdf->Cell(0,5,utf8_decode($sumatotaldelsalariodemierdade3dlink),0,1);
		// $pdf->Ln();

		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Asana URL: '),0,0);
		// $pdf->SetFont('Arial','',16);
		// $pdf->Cell(0,5,utf8_decode($project['Project']['asana_url']),0,1);
		// $pdf->Ln();
		
		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Status: '),0,0);
		// $pdf->SetFont('Arial','',16);
		// $pdf->Cell(0,5,utf8_decode($project['Project']['status']),0,1);
		// $pdf->Ln();

		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Tipo: '),0,0);
		// $pdf->SetFont('Arial','',16);
		// $pdf->Cell(0,5,utf8_decode($project['Project']['type']),0,1);
		// $pdf->Ln();

		// $pdf->SetFont('Arial','B',16);
		// $pdf->Cell(90,5,utf8_decode('Descripcion: '),0,0);
		// $pdf->SetFont('Arial','',16);
		// $pdf->Cell(0,5,utf8_decode($project['Project']['description']),0,1);
		// $pdf->Ln();

		$pdf->Output();

		exit;
	}
}
