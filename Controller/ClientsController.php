<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 * @property PaginatorComponent $Paginator
 */

require_once("library/FPDF/fpdf.php");

class PDF_Client extends FPDF{
// Cabecera de página
	function Header(){
	    // Logo
	    $this->Image('img/HeaderReporte.PNG',-12,0,230);
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
	    $this->Image('img/footerReporte.PNG',-8,265,235);
	}

}

class ClientsController extends AppController {

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
		$this->Client->recursive = 0;
		$this->set('clients', $this->Paginator->paginate());
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
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
		$this->set('client', $this->Client->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
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
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
			$this->request->data = $this->Client->find('first', $options);
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
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->Client->delete()) {
			$this->Session->setFlash(__('The client has been deleted.'));
		} else {
			$this->Session->setFlash(__('The client could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function imprimir($id=0){
		
		$client = $this->Client->findById($id);

		$devs = array();

		$pdf = new PDF_Client();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Cell(0,10,'Fecha: '.date("d") . "/" . date("m") . "/" . date("Y"),0,1);
		$pdf->Ln();

		$pdf->Cell(90,5,utf8_decode('Nombre: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($client['Client']['company_name']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('País: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($client['Client']['country']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Teléfono: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($client['Client']['phone']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Email: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($client['Client']['email']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Tipo de cliente: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($client['Client']['type']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Persona de contacto: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($client['Client']['manager']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Observaciones: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->MultiCell(0,5,utf8_decode($client['Client']['observation']),0,1);
		$pdf->Ln();

		$pdf->Output();

		exit;
	}
}
