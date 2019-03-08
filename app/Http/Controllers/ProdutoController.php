<?php

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;

class ProdutoController extends Controller
{
    
    public function lista(){
        $produtos = Produto::all();
        return view('produto/listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)){
            return "Este Produto não existe";
        }
        return view('produto/detalhes')->with('p',$produto);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
  
        Produto::create(Request::all());
        return redirect()->action('ProdtudoController@lista')->withInput(Request::except('nome'));

    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);

    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');

    }

    public function busca($id){
        $produto = Produto::find($id);
        
        return view('produto.formularioAltera')->with('p',$produto);

    }

    public function altera(){
        $params = Request::all();
        $produto = Produto::find(Request::input('id'));
        
        $produto -> update($params);

        return redirect()->action('ProdutoController@lista');
    }


}

