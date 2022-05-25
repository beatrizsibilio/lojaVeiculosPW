<?php

namespace App\Controllers;
use App\Models\VeiculoModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('home');
        echo view('template/footer');
    }

    public function page($page='home'){
        echo view('template/header');
        echo view($page);
        echo view('template/footer');
    }

    public function veiculo(){
        $model = new VeiculoModel();

        $data = [
            'title'     =>  'Veículos',
            'veiculo'   =>  $model->getVeiculos(),
        ];

        echo view('template/header');
        echo view('veiculo', $data);
        echo view('template/footer');
    }

    public function cadastro(){
        echo view('template/header');
        echo view('cadastroCarro');
        echo view('template/footer');
    }

    public function create(){
        $model = new VeiculoModel();

        $model->save([
            'id'        =>  $this->request->getVar('id'),
            'marca'     =>  $this->request->getVar('marca'),
            'modelo'    =>  $this->request->getVar('modelo'),
            'placa'     =>  $this->request->getVar('placa'),
            'cor'       =>  $this->request->getVar('cor')
        ]);

        return redirect("veiculo");
    }

    public function excluir($id = null){
        $model = new VeiculoModel();
        $model->delete($id);
        return redirect("veiculo");
    }

    public function editar($id = null){
        $model = new VeiculoModel();

        $data = [
            'veiculo'    =>  $model->getVeiculo($id),
        ];

        echo view('template/header');
        echo view('cadastroCarro', $data);
        echo view('template/footer');
    }
}