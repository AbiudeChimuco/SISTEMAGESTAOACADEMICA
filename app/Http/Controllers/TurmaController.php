<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\School;

class TurmaController extends Controller
{
    // Mostrar todas as turmas
    public function index()
    {
        // Busca todas as turmas juntamente com a escola associada
        $encontrados = Turma::with('school')->get();

        return view('sistema.turmas.turma', compact('encontrados'));
    }

    // Mostrar formulário para cadastrar uma turma
    public function create()
    {
        // Buscar todas as escolas para o campo de seleção
        $schools = School::all();

        return view('sistema.turmas.create', compact('schools'));
    }

    // Salvar turma
    public function salvar(Request $request)
    {
        $request->validate([
            'idschool' => 'required|exists:schools,idschool',
            'nome' => 'required|string|max:255',
            'classe' => 'required|string|max:100',
            'periodo' => 'required|string|max:50',
            'ano_letivo' => 'required|string|max:20',
        ]);

        $turma = new Turma();

        // Escola à qual a turma pertence
        $turma->idschool = $request->input('idschool');

        $turma->nome = $request->input('nome');
        $turma->classe = $request->input('classe');
        $turma->periodo = $request->input('periodo');
        $turma->ano_letivo = $request->input('ano_letivo');

        $turma->save();

        return redirect()
            ->back()
            ->with('success', 'Turma cadastrada com sucesso!');
    }

    // Apagar turma
    public function apagar($id)
    {
        $turma = Turma::findOrFail($id);

        $turma->delete();

        return redirect()
            ->back()
            ->with('success', 'Turma apagada com sucesso!');
    }

    // Mostrar formulário para editar turma
    public function editar($id)
    {
        $turma = Turma::findOrFail($id);

        // Escolas disponíveis para alterar a escola da turma
        $schools = School::all();

        return view(
            'sistema.turmas.editar',
            compact('turma', 'schools')
        );
    }

    // Actualizar turma
    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'idschool' => 'required|exists:schools,idschool',
            'nome' => 'required|string|max:255',
            'classe' => 'required|string|max:100',
            'periodo' => 'required|string|max:50',
            'ano_letivo' => 'required|string|max:20',
        ]);

        $turma = Turma::findOrFail($id);

        $turma->idschool = $request->input('idschool');
        $turma->nome = $request->input('nome');
        $turma->classe = $request->input('classe');
        $turma->periodo = $request->input('periodo');
        $turma->ano_letivo = $request->input('ano_letivo');

        $turma->save();

        return redirect('/turmas')
            ->with('success', 'Turma actualizada com sucesso!');
    }
}
