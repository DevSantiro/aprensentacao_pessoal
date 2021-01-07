@extends('layout_index')

@section('conteudo')
    @include('mensagem', ['mensagem' => $mensagem] )

    <div class="menu">
       <div class="card">
           <div id="card-apresentacao">
                <img src="storage/images/person.jpg" class="card-image mt-2" alt="Card image cap">
                <div class="card-body" id="card-nome">
                <h4 class="card-title"><strong>Rodrigo Santiago</strong></h4>
                <p class="card-text">Sistemas de Informação<br>FHO Uniararas - 2020</p>
                </div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" id="profissao"> Desenvolvimento Web </li>
              <li class="list-group-item"><i class="fab fa-php"></i> PHP</li>
              <li class="list-group-item"><i class="fab fa-html5"></i> HTML - CSS <i class="fab fa-css3-alt"></i></li>
              <li class="list-group-item"><i class="fas fa-database"></i> MYSQL</li>
            </ul>
            <div class="card-body">
                <span>
                    <a class="redes_sociais" href="https://www.linkedin.com/in/rodrigo-santiago-04222a190/" class="card-link"><i class="fab fa-linkedin"></i> Linkedin</a>
                    <a class="redes_sociais" href="https://github.com/DevSantiro" class="card-link"><i class="fab fa-github"></i> Github</a>
                </span>
            </div>
        </div> 
    </div>
@endsection