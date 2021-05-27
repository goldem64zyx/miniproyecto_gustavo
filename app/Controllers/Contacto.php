<?php 
namespace App\Controllers;

class Contacto extends BaseController{

    public function index(){
        echo view('contacto/header');
        echo view('contacto/inicio');
        echo view('contacto/footer');
    }

    public function catalogo(){
        echo view('contacto/header');
        echo view('contacto/menu');
        echo view('contacto/cards');
        echo view('contacto/footer');
    }

}