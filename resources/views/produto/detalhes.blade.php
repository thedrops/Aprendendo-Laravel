@extends('layout/principal')
@section('conteudo')
    <h1>Detalhes do Produto</h1>
    <ul>
        <li><p>Nome: {{$p->nome}}</p></li>
        <li><p>Valor: {{$p->valor}}</p></li>
        <li><p>Descrição: {{$p->descricao or 'nenhuma descricao informada'}}</p></li>
        <li><p>Quantidade em estoque: {{$p->quantidade}}</p></li>
    </ul>
@stop