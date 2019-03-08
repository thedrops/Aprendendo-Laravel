@extends('layout/principal')
@section('conteudo')

<h1>Novo produto</h1>
<form action="/produtos/adiciona" method="post">
<input type="hidden" name="_token" value="{{{csrf_token()}}}">
  <div class="form-group">
    <label for="NomeProduto">Nome</label>
    <input name="nome" type="text" class="form-control" id="NomeProduto" placeholder="Ex:Sofá">
  </div>
  <div class="form-group">
    <label for="DescricaoProduto">Descrição</label>
    <input name="descricao" class="form-control" id="DescricaoProduto" placeholder="Ex: novo" >
  </div>
  <div class="form-group">
    <label for="ValorProduto">Preço</label>
    <input name="valor" type="text" class="form-control" id="ValorProduto" placeholder="Ex:55.55">
  </div>
  <div class="form-group">
    <label for="QuantidadeProduto">Quantidade</label>
    <input name="quantidade" type="number" class="form-control" id="QuantidadeProduto" placeholder="Ex:22">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
</form>
@stop