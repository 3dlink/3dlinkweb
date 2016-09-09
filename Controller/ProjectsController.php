<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 * @property PaginatorComponent $Paginator
 */

require_once("library/FPDF/fpdf.php");


class PDF_Project extends FPDF{
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
		$this->SetY(-15);
	    $this->Image('img/footerReporte.PNG',0,265,200);
	}

}

class ProjectsController extends AppController {




	public $uses = array('Project','Cargo','Personal');


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
		$this->Project->recursive = 0;
		$this->set('projects', $this->Paginator->paginate());
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
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$project = $this->Project->find('first', $options);
		$this->set('project', $project);
		$devs = array();

		$date_ini = date_create($project['Project']['init_date']);
    	$date_end = date_create($project['Project']['end_date']);


    	$interval = date_diff($date_ini, $date_end);
    	$interval = $interval->m;

    	if($interval == '0'){
    		$interval = '1';
    	}

    	$sumatotaldelsalariodemierdade3dlink = '0';
    	$el_lider = '0';
    	$salario_lider = '0';
    	$cont = '0';


		foreach ($project['Personal'] as $persona) {
			if(is_array($persona)){

				if($persona['id']!=$project['Project']['personal_id']){
					$salario = $this->Cargo->findById($persona['cargo_id']);
					$sumatotaldelsalariodemierdade3dlink = $sumatotaldelsalariodemierdade3dlink + $salario['Cargo']['salary'] * $interval;
				}else{
					$cont = $cont + '1';
					$salario = $this->Cargo->findById($persona['cargo_id']);
					$salario_lider = $salario['Cargo']['salary'] * $interval;
					$sumatotaldelsalariodemierdade3dlink = $sumatotaldelsalariodemierdade3dlink;
				}
			}
		}

		if($cont == '0'){
			$el_lider = $this->Personal->findById($project['Personal']['id']);
			$salario_lider = $el_lider['Cargo']['salary'] * $interval;
		}

		$sumatotaldelsalariodemierdade3dlink = $sumatotaldelsalariodemierdade3dlink + $salario_lider;
		$this->set('sumatotaldelsalariodemierdade3dlink', $sumatotaldelsalariodemierdade3dlink);

		///////////////////////////Seccion del PDF///////////////////////////////////////




	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			// debug($this->request->data);die;
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		}
		$programadores = $this->Personal->find('list');
		foreach ($programadores as $key => $value) {
			$personal = $this->Personal->findById($key);
			$programadores[$key] = $value.' - '.$personal['Cargo']['name'];
		}
		$cargo_id = $this->Cargo->findByName('Lider de Proyecto');
		$lideres = $this->Personal->find('list',array('conditions'=>array('cargo_id'=>$cargo_id['Cargo']['id'])));
		$personals = $this->Project->Personal->find('list');
		$clients = $this->Project->Client->find('list');
		$this->set(compact('personals', 'clients','lideres','programadores'));

	}



	public function imprimir($id=0){

		$project = $this->Project->findById($id);

		$devs = array();

		foreach ($project['Personal'] as $persona) {
			if(is_array($persona)){
				$salario = $this->Cargo->findById($persona['cargo_id']);

				array_push($devs,array('Nombre'=>$persona['name'], 'Salario' =>$salario['Cargo']['salary']));
			}
		}

		$pdf = new PDF_Project();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Cell(0,10,'Fecha: '.date("d") . "/" . date("m") . "/" . date("Y"),0,1);
		$pdf->Ln();


		$pdf->Cell(90,5,utf8_decode('Nombre del Proyecto: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['name']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Cliente: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Client']['company_name']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Fecha de Inicio: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['init_date']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Fecha de Entrega: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['end_date']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Lider del Proyecto: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Personal']['name']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Programadores Asignados: '),0,0);
		$pdf->Ln();$pdf->Ln();
		$pdf->SetFont('Arial','',16);
		foreach ($devs as $item) {

			$pdf->Cell(20,8,utf8_decode($item['Nombre'].' - Salario: '.$item['Salario']),0,1);

		}
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Precio: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['price']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Moneda: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['currency']),0,1);
		$pdf->Ln();

		$date_ini = date_create($project['Project']['init_date']);
    	$date_end = date_create($project['Project']['end_date']);
    	$interval = date_diff($date_ini, $date_end);
    	$interval = $interval->m;
    	if($interval == '0'){
    		$interval = '1';
    	}
    	$sumatotaldelsalariodemierdade3dlink = '0';

		foreach ($project['Personal'] as $persona) {
			if(is_array($persona)){
				$salario = $this->Cargo->findById($persona['cargo_id']);
				array_push($devs,array('Nombre'=>$persona['name'], 'Salario' =>$salario['Cargo']['salary'] * $interval));
				$sumatotaldelsalariodemierdade3dlink = $sumatotaldelsalariodemierdade3dlink + $salario['Cargo']['salary'] * $interval;
			}
		}

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Costo de Recursos: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($sumatotaldelsalariodemierdade3dlink),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Asana URL: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->MultiCell(0,5,utf8_decode($project['Project']['asana_url']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Status: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['status']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Tipo: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['type']),0,1);
		$pdf->Ln();

		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5,utf8_decode('Descripcion: '),0,0);
		$pdf->SetFont('Arial','',16);
		$pdf->Cell(0,5,utf8_decode($project['Project']['description']),0,1);
		$pdf->Ln();

		$pdf->Output();

		exit;
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
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
			$this->request->data = $this->Project->find('first', $options);
		}
		// $cargo_id = $this->Cargo->findByName('Lider de Proyecto');
		// $lideres = $this->Personal->find('list',array('conditions'=>array('cargo_id'=>$cargo_id['Cargo']['id'])));
		// $personals = $this->Project->Personal->find('list');
		// $clients = $this->Project->Client->find('list');
		// $this->set(compact('personals', 'clients','lideres'));

		$programadores = $this->Personal->find('list');
		foreach ($programadores as $key => $value) {
			$personal = $this->Personal->findById($key);
			$programadores[$key] = $value.' - '.$personal['Cargo']['name'];
		}
		$cargo_id = $this->Cargo->findByName('Lider de Proyecto');
		$lideres = $this->Personal->find('list',array('conditions'=>array('cargo_id'=>4)));
		$personals = $this->Project->Personal->find('list');
		$clients = $this->Project->Client->find('list');
		$this->set(compact('personals', 'clients','lideres','programadores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('The project has been deleted.'));
		} else {
			$this->Session->setFlash(__('The project could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
