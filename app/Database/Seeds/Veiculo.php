<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Veiculo extends Seeder
{
    public function run()
    {
        $marca = ['Ford', 'Chevrolet', 'Volkswagen', 'Hyundai', 'Renault'];
        $modelo = ['Ka', 'Camaro', 'Fusca', 'HB20', 'Kwid'];
        $placa = ['ABC1234', 'DEF5678', 'GHI9123', 'JKL4567', 'MNO8901'];
        $cor = ['Prata', 'Amarelo', 'Azul', 'Branco', 'Laranja'];

        for($x = 0; $x < 5; $x++){
            $data = [
                'marca'         => $marca[$x],
                'modelo'        => $modelo[$x],
                'placa'         => $placa[$x],
                'cor'           => $cor[$x],
            ];
            $this->db->table('tb_veiculo')->insert($data);
        }
    }
}