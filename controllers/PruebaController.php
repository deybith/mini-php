<?php
class PruebaController extends BaseController
{
	public function crear() {
		if (count($_POST) > 0) {
			$prueba = new Prueba();
			$prueba->create($_POST);

			$this->redirect('prueba','index');
		}

		$this->view('pruebaf/form');
	}	
	public function index() {
		$model = new Prueba();
		$data = $model->getAll();

		$this->view('pruebaf/listar', ['data' => $data ]);
	}
	

	public function mostrarUno() {
		$model = new Producto();
		$data = $model->getById($_GET['id']);

		$titulo = "Hola mundo en mvc";
		$this->view('mostrarUno', ['titulo' => $titulo, 'data' => $data ]);
	}

	public function delete() {
		$id = $_GET['id'];
		$prueba = new Prueba();
		$prueba->deleteById($id);
		$this->redirect('prueba','index');
	}
	public function update(){
		$model = new Prueba();
		
		if (count($_POST) > 0) {
			$model->updateById($_POST, $_GET['id']);
			$this->redirect('prueba','index');
		}

		$row = $model->getById($_GET['id']);
		$this->view('pruebaf/form', ['row' => $row]);
	}
}
