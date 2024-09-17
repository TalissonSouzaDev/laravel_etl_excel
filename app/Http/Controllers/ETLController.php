<?php

namespace App\Http\Controllers;

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

    public function UploadFile(Request $request) {
        try {
            Excel::import(new ETLRegistroImport,$request->file("upload"));
            return redirect()->route("registros")->with("success","Importação Realizada com sucesso");
        }
        catch (Exception $e) {
            return redirect()->with(["error" => "Ocorreu algum error"])->route("registros");
        }
    }

    public function DashBoard() {
        return view("Dashboard");
    }
}
