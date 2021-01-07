<?php 

namespace App\Services;

use App\Curso;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CriadorDeCurso
{
    public function criarCurso(string $nome, string $descricao, ?string $certificado, string $plataforma, string $area_curso, string $data, string $pdf)
    {
        $curso = null;

        DB::beginTransaction();
            $curso = Curso::create([
                'nome_curso' => $nome,
                'descricao' => $descricao,
                'certificado' => $certificado,
                'plataforma' => $plataforma,
                'area_curso' => $area_curso,
                'dt_conclusao' => $data,
                'pdf' => $pdf
            ]);
        DB::commit();
        
        return $curso;
    }

}