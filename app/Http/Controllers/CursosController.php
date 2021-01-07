<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Http\Requests\CursosFormRequest;
use App\Services\CriadorDeCurso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    
    public function index(Request $request){

        $cursos = Curso::query()
        ->orderBy('nome_curso')
        ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('index', compact('cursos', 'mensagem'));
    }

    public function create(Request $request)
    {
        return view('curso.formCurso');
    }

    public function store(Request $request, CriadorDeCurso $criadorDeCurso){

        $imagem = null; 

        $pdf = null;

        if($request->file('imagem')){
            $imagem = $request->file('imagem')->store('cursos');
        }
        
        if($request->file('pdf')){
            $pdf = $request->file('pdf')->store('cursos_pdf');
        }


        $curso = $criadorDeCurso->criarCurso(
            $request->nome_curso,
            $request->descricao,
            $imagem,
            $request->plataforma,
            $request->area_curso,
            $request->dt_conclusao,
            $pdf
        );

        $request->session()
        ->flash(
            'mensagem', 
            "Curso {$curso->id} - {$curso->nome_curso} Cadastrado com sucesso"
        );

        return redirect()->route('cadastro_curso');


    }




}
