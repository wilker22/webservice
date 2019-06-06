@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Ofertas</div>

                <div class="card-body">
                    <a href="{{route('ofertas.create')}}" class="btn btn-info my-2">Criar Oferta</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Validade</th>
                                <th>Valor</th>
                                <th>Imagem</th>
                                <th>Ações</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($ofertas as $oferta)
                                <tr>
                                        <td>{{$oferta->id}}</td>
                                        <td>{{$oferta->titulo}}</td> 
                                        <td>{{$oferta->descricao}}</td>
                                        <td>{{$oferta->validade}}</td>
                                        <td>{{$oferta->valor_f}}</td>
                                        <td><img src="{{asset($oferta->imagem)}}" height="50px" width="50px" alt=""></td>
                                        <td>
                                           
                                            <form action="{{route('ofertas.destroy', $oferta->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('ofertas.edit', $oferta->id)}}" class="btn btn-success">Editar</a>
                                                <button class="btn btn-danger">Deletar</button>    
                                       
                                            </form>
                                            
                                        </td>
                                    
                                </tr> 
                                
                            @endforeach
                           
                           
                            
                        </tbody>
                    </table>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
