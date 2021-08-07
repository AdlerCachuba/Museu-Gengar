<?php

namespace App\Http\Controllers;

use App\Models\Secao;
use Illuminate\Http\Request;

class SecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //mostrar todos
    {
        $secao = Secao::all();
        return response()->json($secao);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cria nova secao
        $secao = new Secao();
        $secao->fill($request->all());
        $secao->save();
        //retorna o json de 201, foi criado.
        return response()->json($secao,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secao  $secao
     * @return \Illuminate\Http\Response
     */
    public function show(Secao $secao)
    {
        return response()->json($secao,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secao  $secao
     * @return \Illuminate\Http\Response
     */


    // o laravel usa a secao, e pega o id, por injeção de dependência
    public function update(Request $request, Secao $secao){
        // request é o body da requisição que tá chegando
        $dadosDaSecao = $request->all();

        //atribui o nome/status a secao
        $secao->fill($dadosDaSecao);

        //o save faz update/insert, mas e já existe, ele atualiza.
        $secao->save();

        //retorna o json de 200, foi atualizado.
        return response()->json($secao,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secao  $secao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secao $secao)
    {
        
        $secao->delete();
        return response()->noContent(204);
        //retorna 204, porque não tem nada para voltar.
    }
}
