<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School; 
class EscolaController extends Controller
{
    //esse metodo é responsável por retornar a view da escola
    public function index()
    {
        $encontrados= School::all();
        return view('sistema.escolas.escola', compact('encontrados'));
    }

    public function salvar(Request $request)
    {

 $shool = new School();
    $shool->nome = $request->input('nome');
    $shool->email = $request->input('email');
    $shool->nif = $request->input('nif');
    $shool->provincia = $request->input('provincia');
    $shool->morada = $request->input('morada');
    $shool->telefone = $request->input('telefone');
    $shool->status = $request->input('status');
    $shool->nivel = $request->input('nivel');
    $shool->save();  
       
        return redirect()->back()->with('success', 'Dados salvos com sucesso!');
    }

public function apagar($idschool)
{
    $school = School::findOrFail($idschool);
    $school->delete();
    return redirect()->back()->with('success', 'Escola apagada com sucesso!');
   
   
}

public function create (Request $request)
{
   
        return view('sistema.escolas.create');
}

public function editar($idschool)
    {
        $school = School::findOrFail($idschool);

        return view('sistema.escolas.editar', compact('school'));
    }

    // Actualizar escola
    public function actualizar(Request $request, $idschool)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nif' => 'required|string|max:50',
            'provincia' => 'required|string|max:255',
            'morada' => 'required|string|max:255',
            'telefone' => 'required|string|max:50',
            'status' => 'required',
            'nivel' => 'required',
        ]);

        $school = School::findOrFail($idschool);

        $school->nome = $request->nome;
        $school->email = $request->email;
        $school->nif = $request->nif;
        $school->provincia = $request->provincia;
        $school->morada = $request->morada;
        $school->telefone = $request->telefone;
        $school->status = $request->status;
        $school->nivel = $request->nivel;

        $school->save();

        return redirect('/escola')
            ->with('success', 'Escola actualizada com sucesso!');
    }

}
