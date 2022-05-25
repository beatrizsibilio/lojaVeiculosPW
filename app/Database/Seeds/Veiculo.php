<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Veiculo extends Seeder
{
    public function run()
    {
        $marca = ['Chevrolet', 'Renault', 'Volkswagen', 'Hyundai', 'Fiat'];
        $modelo = ['Onix', 'Kwid', 'Fusca', 'HB20', 'Uno'];
        $placa = ['ABC1D23', 'EFG4H56', 'GHI9123', 'JIK5F36', 'BRA2E19'];
        $cor = ['Vermelho', 'Preto', 'Verde', 'Branco', 'Prata'];

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