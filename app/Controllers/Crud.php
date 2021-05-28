<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		
		$crud = new CrudModel();
		$datos = $crud->listarNombres();
		$mensaje = session('mensaje');
	
		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];

		return view('listado',$data);
	}

	public function crear(){
		$datos = [
			"nombre" =>  $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno']
			
		];

		$CrudModel = new CrudModel();
		$respuesta = $CrudModel->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/index.php')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/index.php')->with('mensaje','0');
		}
	}

	public function actualizar(){

		$datos = [
			"nombre" =>  $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno']
			
		];
		

		$id_Nombre = $_POST['claveNombre'];
		$CrudModelo = new CrudModel();
		$respuesta = $CrudModelo->actualizar($datos,$id_Nombre);


		if ($respuesta){
			return redirect()->to(base_url().'/index.php')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/index.php')->with('mensaje','3');
		}
	}

	public function eliminar($idNombre){

		$CrudModel = new CrudModel();
		$data = ["id_nombre" => $idNombre];
		$respuesta = $CrudModel->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/index.php')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/index.php')->with('mensaje','5');
		}


		
	}

	public function obtenerNombre($idNombre){
		$data = [
			"id_nombre" => $idNombre
		];
		$CrudM = new CrudModel();
		$respuesta = $CrudM->obtenerNombre($data);
		$datos = [
			"datos" => $respuesta

		];
		return view('actualizar',$datos);
	

	}
}
