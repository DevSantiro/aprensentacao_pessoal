<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/c1e0209272.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>
    <div class="principal">
        <div class="apresentacao">
            @yield('conteudo')
        </div> 
        @include('mensagem', ['mensagem' => $mensagem] )

        <div class="conteudo-informacoes">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs col-md-11" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                <a class="nav-link active" id="info-tab" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Informações</a>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link" id="formacao-tab" data-bs-toggle="tab" href="#formacao" role="tab" aria-controls="formacao" aria-selected="false">Formação</a>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link" id="certificados-tab" data-bs-toggle="tab" href="#certificados" role="tab" aria-controls="certificados" aria-selected="false">Certificações</a>
                </li>
                {{-- <li class="nav-item" role="presentation">
                <a class="nav-link" id="settings-tab" data-bs-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                </li> --}}
            </ul>
        
            <!-- Tab panes -->
            <div class="tab-content">
                {{-- Informções Básicas --}}
                <div class="tab-pane active" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <div class="row ms-2">
                        <div class="col-md-6">
                          <label for="nome" class="form-label mb-2">Nome</label>
                          <input type="text" class="form-control mb-2" id="nome" value="Rodrigo Santiago Claro Filho" disabled>
                        </div>
                        <div class="col-md-5">
                          <label for="profissao" class="form-label mb-2">Profissão</label>
                          <input type="text" class="form-control mb-2" id="profissao" value="Desenvolvedor" disabled>
                        </div>

                        <div class="col-3">
                          <label for="data_nasc" class="form-label mb-2">Data Nascimento</label>
                          <input type="text" class="form-control mb-2" id="data_nasc" value="28/01/1999" disabled>
                        </div>
                        
                        <div class="col-3">
                            <label for="sexo" class="form-label mb-2">Sexo</label>
                            <input type="text" class="form-control mb-2" id="sexo" value="Masculino" disabled>
                        </div>

                        <div class="col-4">
                            <label for="est_civil" class="form-label mb-2">Estado Civil</label>
                            <select class="form-select mb-2" name="est_civil" id="est_civil" disabled>
                                <option value="solteiro" selected>Solteiro</option>
                                <option value="solteiro">Casado</option>
                                <option value="solteiro">Namorando</option>
                            </select>
                        </div>

                        <div class="col-6">
                          <label for="cidade" class="form-label">Cidade</label>
                          <input type="text" class="form-control" id="cidade" value="Rio Claro" disabled>
                        </div>
                        <div class="col-md-5">
                          <label for="estado" class="form-label">Estado</label>
                          <input type="text" class="form-control" id="estado" value="São Paulo" disabled>
                        </div>

                    </div>
                </div>

                {{-- Formação Academica --}}
                <div class="tab-pane" id="formacao" role="tabpanel" aria-labelledby="formacao-tab">
                    <div class="row ms-2">

                        <div class="col-md-6">
                            <label for="ens_medio" class="form-label mb-2">Ensino Médio</label>
                            <input type="text" class="form-control mb-2" id="ens_medio" value="ETEC Prof. Armando Bayeux da Silva" disabled>
                        </div>
    
                        <div class="col-md-5">
                            <label for="ens_superior" class="form-label mb-2">Ensino Superior</label>
                            <input type="text" class="form-control mb-2" id="ens_superior" value="FHO | Uniararas" disabled>
                        </div>

                        <div class="col-md-6">
                            <label for="curso_formacao" class="form-label mb-2">Curso Formação</label>
                            <input type="text" class="form-control mb-2" id="curso_formacao" value="Sistemas de Informação" disabled>
                        </div>
                        
                        <div class="col-md-2">
                            <label for="ano_formacao" class="form-label mb-2">Ano Formação</label>
                            <input type="number" class="form-control mb-2" id="ano_formacao" value="2020" disabled>
                        </div>

                        <div class="col-md-2">
                            <label for="status_formacao" class="form-label mb-2">Status Formação</label>
                            <select class="form-select mb-2" id="status_formacao" value="Formado" disabled>
                                <option value="formado" selected>Formado</option>
                                <option value="cursando">Cursando</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <h3 id="info_tcc_header" class="mt-3">Trabalho de Conclusão de Curso</h3>
                        </div>

                        <div class="col-md-7">
                            <label for="nome_tcc" class="form-label mb-2">Nome Projeto</label>
                            <input type="text" class="form-control mb-2" id="nome_tcc" value="Análise de ferramentas da Bioinformática aplicadas em estudos genéticos" disabled>
                        </div>

                        <div class="col-md-2">
                            <label for="area_tcc" class="form-label mb-2">Área de atuação</label>
                            <input type="text" class="form-control mb-2" id="area_tcc" value="Desenvolvimento" disabled>
                        </div>

                        <div class="botoes_projeto col-md-2 d-flex justify-content-between">
                            <div class="col-md-1">
                                <label for="download_tcc" class="form-label mb-2">Documento</label>
                                <button type="button" id="download_tcc" class="btn btn-primary" onclick="Redirecionar(1);">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>

                            <div class="col-md-1">
                                <label for="git_tcc" class="form-label mb-2">Projeto</label>
                                <button type="button" id="git_tcc" class="btn btn-secondary" onclick="Redirecionar(2);">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label for="descricao_tcc" class="form-label mb-2">Descrição TCC</label>
                            <p class="form-control" id="descricao_tcc">
                                Trabalho realizado no periodo de 2019 a 2020, tendo por objetivo analisar conceitos da bioinformática.<br>
                                No projeto foram realizadas diversas revisões de literatura sobre trabalhos e pesquisas do ramo da <strong>Bioinformática</strong>.<br>
                                O projeto constitui da utilização de <strong>ferramentas da Bioinformática</strong> implementadas em um <strong>sistema WEB Local</strong>. O mesmo possui
                                3 modulos, merecendo destaque o modulo de modelagem 3D de proteinas por processo de Homologia (Proteina Template - Referência),<br>
                                onde é entrado como 'Input' uma sequência de Proteina sem modelo 3D e um modelo referência. O Resultado é o modelo 3D da Proteina em questão.<br>
                                <br>
                                <strong>O Projeto foi desenvolvido em Python como backend e Django como FrameWork</strong>. <br>
                                <span class="d-flex justify-content-between mt-1">
                                    <img class="image_logo" src="storage/images/python.png"  alt="">
                                    <img class="image_logo" src="storage/images/django.png"  alt="">
                                </span>

                            </p>
                        </div>

                        <div class="col-md-1 mt-4">
                            <div class="embed-responsive embed-responsive-16by9 videos_yt">
                                <iframe src="https://www.youtube.com/embed/3LjPSjzHvoE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9 videos_yt">
                                <iframe src="https://www.youtube.com/embed/XdKmmlIiw_Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9 videos_yt">
                                <iframe src="https://www.youtube.com/embed/qdtITiQ1igo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                        </div>

                        {{-- <div class="col-md-4 mr-2">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/3LjPSjzHvoE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-md-4 mr-2">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/XdKmmlIiw_Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-md-4 mr-2">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/qdtITiQ1igo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div> --}}

                    </div>
                </div>

                {{-- Cursos Realizados - Certificados --}}
                <div class="tab-pane" id="certificados" role="tabpanel" aria-labelledby="certificados-tab">

                    <div class="row mt-2 mb-2">
                        <h4>Cursos e Certificados</h4>
                    </div>
                    <center>
                    <div class="mt-1">
                        @foreach ($cursos as $curso)
                            <div class="card col-md-5 mb-2 card_certificado" style="display: inline-block">
                                <a href="{{$curso->certificado_url}}" target="_blank">
                                    <img src="{{$curso->certificado_url}}" class="img_certificado" alt="certificado">
                                </a>
                                <div class="card-body">
                                <h5 class="card-title">{{$curso->nome_curso}}</h5>
                                <p class="card-text form-control" id="card_descricao" style="width: 100%">{{$curso->descricao}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">Área Curso: {{$curso->area_curso}}</li>
                                </ul>
                                <div class="card-body">
                                    <p class="card-text">Plataforma: {{$curso->plataforma}}</p>  
                                    <p class="card-text">Data Conclusão: {{date('d/m/Y',strtotime($curso->dt_conclusao))}}</p>  
                                    <center><a href="{{$curso->pdf_url}}" target="_blank" download="Certificado_{{$curso->id}}" class="card-link">Download Certificado</a></center>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    </center>
                </div>

                {{-- <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    
                </div> --}}
            </div>
        </div>
    </div>

</body>

<script>

    function Redirecionar(caminho){
        if(caminho === 1){
            window.open("https://schoolnet.uniararas.br/aluno/tcc/arquivo/5475/1062113");
        }
        else{
            window.open("https://github.com/DevSantiro/TCC");
        }
    }

</script>
</html>