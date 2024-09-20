<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateExcelRequest;
use App\Imports\ETLRegistroImport;
use App\Models\ETLRegistros;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ETLController extends Controller
{
    public function UploadPage() {
        return view("Upload");
    }

    public function Registros() {
        $etlregistros = ETLRegistros::latest()->paginate(10);
        return view('registros',compact("etlregistros"));
    }

    public function UploadFile(ValidateExcelRequest $request) {
        try {
            Excel::import(new ETLRegistroImport,$request->file("upload"));
            return redirect()->route("registros")->with("success","Importação Realizada com sucesso");
        }
        catch (Exception $e) {
            return redirect()->with(["error" => "Ocorreu algum error"])->route("Upload");
        }
    }

    public function search(Request $request) {
        $etlregistros = ETLRegistros::where("nome","LIKE","%{$request->search}%")
                                ->orwhere("cpf","LIKE","%{$request->search}%")
                                ->orwhere("email","LIKE","%{$request->search}%")
                                ->orwhere("telefone","LIKE","%{$request->search}%")
                                ->paginate(10);
        return view("registros",compact("etlregistros"));
    }

    public function DashBoard() {
        $countregisterall = ETLRegistros::all()->count();
        $countMasculino = ETLRegistros::where("genero","Masculino")->count();
        $countFeminino = ETLRegistros::where("genero","Feminino")->count();
        $countoutros= ETLRegistros::where("genero","Outros")->count();
        $porcentomasculino = $countMasculino > 0 ? ($countMasculino / $countregisterall) * 100 : 0;
        $porcentofeminino = $countFeminino> 0 ? ($countFeminino /$countregisterall) * 100 : 0;
        return view("Dashboard",compact("countregisterall","countMasculino","countFeminino","countoutros","porcentomasculino","porcentofeminino"));
    }
}
