@extends('layout/principal')
@section('conteudo')

    @if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else

            <h1 class="text-center">Listagem de Produtos</h1>
            <table class="table table-bordered table-hover">
                @foreach($produtos as $p)
            <tr class=" text-center {{$p->quantidade <= 1 ? 'table-danger' : '' }}        " >
                <td>  {{$p->nome}}  </td>
                <td>  {{$p->valor}} </td>
                <td>  {{$p->descricao}} </td>
                <td>  {{$p->quantidade}} </td>
                <td>
                <a href="/produtos/mostra/{{$p->id}}"><i class="material-icons">search</i></a>
                </td>
                <td>
                <a href="{{action('ProdutoController@remove',$p->id)}}"><i class="material-icons">delete</i></a>
                </td>
                <td>
                <a href="{{action('ProdutoController@busca',$p->id)}}"><i class="material-icons">edit</i></a>
                </td>  
            </tr>
                @endforeach
                
            </table>
    @endif

    @if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
    </div>
    @endif


@stop