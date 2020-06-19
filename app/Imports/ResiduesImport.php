<?php

namespace App\Imports;

use App\Residue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ResiduesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Residue([
            'name' => $row['nome_comum_do_residuo'], 
            'type' => $row['tipo_de_residuo'], 
            'category' => $row['categoria'], 
            'treatment' => $row['tecnologia_de_tratamento'], 
            'class' => $row['classe'], 
            'unit_measurement' => $row['unidade_de_medida'], 
            'weight' => $row['peso'],
        ]);
    }

    public function headingRow(): int
    {
        return 5;
    }
}
