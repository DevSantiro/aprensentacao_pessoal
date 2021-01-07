<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Curso extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome_curso', 
        'descricao', 
        'certificado', 
        'plataforma', 
        'area_curso', 
        'pdf',
        'dt_conclusao'
    ];

    public function getCertificadoUrlAttribute()
    {
        if($this->certificado){
            return Storage::url($this->certificado);
        }

        return Storage::url('curso/sem-image.jpg');
    }

    public function getPdfUrlAttribute()
    {
        if($this->pdf){
            return Storage::url($this->pdf);
        }

    }

}
