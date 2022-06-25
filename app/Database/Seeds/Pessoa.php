<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pessoa extends Seeder
{
    public function run()
    {
        $nome = ['Maria', 'Luiz', 'Pedro', 'João', 'Marcos'];
        $email = ['maria@gmail.com', 'luiz@gmail.com', 'pedro@gmail.com', 'joao@gmail.com', 'marcos@gmail.com'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'nome'          => $nome[$x],
                'email'         => $email[$x],
                'senha'         => MD5("123")
            ];
            $this->db->table('tb_pessoas')->insert($data);
        }

        
    }
}