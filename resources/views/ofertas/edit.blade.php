@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Oferta</div>

                <div class="card-body">
                   <form action="{{route('ofertas.update', $oferta->id)}}" method="post">
                       @csrf
                       @method('PUT')
                        <div class="form-group">
                            <label for="titutlo">Título</label>
                            <input type="text" class="form-control" name="titulo" value="{{isset($oferta->titulo) ? $oferta->titulo : ''}}">
                       </div>
                       <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" name="descricao" value="{{isset($oferta->descricao) ? $oferta->descricao : ''}}">
                       </div>
                       <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="file" class="form-control" name="imagem">
                       </div>
                       @if(isset($oferta->imagem))
                        <img height="50px" width="50px" src="{{asset($oferta->imagem)}}" alt="">
                       @endif
                       <div class="form-group">
                            <label for="valor_f">Valor (ex: 5.90)</label>
                            <input type="text" step="any" class="form-control" name="valor_f" value="{{isset($oferta->valor_f) ? $oferta->valor_f : ''}}">
                       </div>
                       <div class="form-group">
                            <label for="validade">Validade</label>
                            <input type="date" class="form-control" name="validade" value="{{isset($oferta->validade) ? $oferta->validade : ''}}">
                       </div>
                       
                           <button type="submit" class="form-control" class="btn btrn-default">Atualizar</button>
                      
                   </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
