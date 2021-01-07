@extends('layout_base')

@section('corpo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="container">
        <h1>Novo Curso</h1>
        <form action="" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-md-12 mb-2">
                <label for="nome_curso" class="form-label">Nome Curso</label>
                <input type="text" class="form-control" id="nome_curso"  name="nome_curso" placeholder="Nome do Curso...">
            </div>
            <div class="form-group col-md-6 mb-2">
                <label for="descricao">Descrição do Curso</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Descrição do Aprendizado..."></textarea>
              </div>
            <div class="col-md-3 inline-block mb-2">
                <label for="area_curso" class="form-label">Area Curso</label>
                <input type="text" class="form-control" id="area_curso" name="area_curso" placeholder="PHP,MYSQL...">
            </div>
            <div class="col-md-3 inline-block mb-2">
                <label for="plataforma" class="form-label">Plataforma Formação</label>
                <input type="text" class="form-control" id="plataforma" name="plataforma" placeholder="Alura, Udemy..">
            </div>

            <div class="col-6 mb-2">
                <label for="imagem" class="form-label">Imagem do Certificado</label>
                <input type="file" name="imagem" id="imagem" name="imagem" class="form-control">
            </div>

            <div class="col-6 mb-2">
                <label for="pdf" class="form-label">Certificado (PDF)</label>
                <input type="file" name="pdf" id="pdf" name="pdf" class="form-control">
            </div>

            <div class="col-md-3 inline-block mb-2">
                <label for="dt_conclusao" class="form-label">Data Conclusão</label>
                <input type="date" class="form-control" id="dt_conclusao" name="dt_conclusao" value="{{date('Y-m-d')}}">
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
@endsection

