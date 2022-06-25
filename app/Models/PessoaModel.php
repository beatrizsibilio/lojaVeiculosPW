<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class PessoaModel extends Model{
        protected $table = 'tb_pessoas';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;

        protected $allowedFields = ['nome', 'profissao', 'idade', 'senha'];
        protected $validationRules = [
            'nome'          => 'required|min_length[3]',
            'email'         => 'required|min_length[5]',
            'senha'         => 'required|min_length[1]'
        ];

        public function getPessoas(){
            return $this->findAll();
        }

        public function getPessoa($id){
            return $this->asArray()->where(['id'=>$id])->first();
        }

        public function userLogin($nome, $senha){
            return $this->where(['nome'=>$nome,'senha'=>$senha])->first();
        }
    } 
?>