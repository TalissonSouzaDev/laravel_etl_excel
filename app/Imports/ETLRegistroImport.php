<?php

namespace App\Imports;

use App\Models\ETLRegistros;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class ETLRegistroImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd(Carbon::createFromFormat('d/m/Y', strval($row[4]))->format('Y-m-d'));
        
        return new ETLRegistros([
            "nome" => strtoupper($row[0]),
            "cpf" => strval($row[1]),
            "email" => strval($row[2]),
            "telefone" => strval($row[3]),
            "dt_nascimento" => date("Y-m-d"),
            "genero" => strval($row[5])
        ]);
    }
}
