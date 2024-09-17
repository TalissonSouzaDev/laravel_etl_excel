<?php

namespace App\Imports;

use DateTime;
use Carbon\Carbon;
use App\Models\ETLRegistros;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ETLRegistroImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Extração e Transformando os dados
        $nome = strtoupper($row['nome']);
        $cpf  = preg_replace("/[.,-]/", "", $row['cpf']);
        $email = filter_var($row['email'], FILTER_VALIDATE_EMAIL) ? $row['email'] : "Invalido";
        $padraoTelefone = "/^\+?\d{0,2}\s?\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/";
        $telefone = preg_match($padraoTelefone, $row['telefone']) ? $row['telefone'] : "Invalido";
        $genero = strval($row['genero']);

        //limpando a data
        $data = trim($row['data_nascimento']);
        $dataobject = DateTime::createFromFormat('d/m/Y', $data);
        $data_nasicmento = $dataobject;

        // Validaçã de Registros para não duplicar
        $verificar = ETLRegistros::where(function ($query) use ($nome, $cpf) {
            $query->where('nome', $nome);
            $query->where('cpf', $cpf);
        })->first();

        if (!$verificar) {
            // Load => Carregando os dados
            return new ETLRegistros([
                "nome" => $nome,
                "cpf" => $cpf,
                "email" => $email,
                "telefone" => $telefone,
                "dt_nascimento" => $data_nasicmento,
                "genero" => $genero
            ]);
        }
    }
}
