<?php

namespace App\Models;

use CodeIgniter\Model;

class VeiculoModel extends Model
{
    protected $table = 'tb_veiculo';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;

        protected $allowedFields = ['marca', 'modelo', 'placa', 'cor'];

        public function getVeiculos(){
            return $this->findAll();
        }

        public function getVeiculo($id){
            return $this->asArray()->where(['id'=>$id])->first();
        }
}