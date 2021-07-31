<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use App\Models\Secao;
use Illuminate\Http\Request;

class ObraController extends Controller
{
/**
 * @OA\Get(
 *     path="/index",
 *     description="Return a Course´s name",
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Missing Data"
 *     )
 * )
 */

    public function index()
    {
        $obra = Obra::all();
        return response()->json($obra);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $secao = Secao::where('id', $request->secao_id)->first();
        if($secao == null ){
            return response()->json('Secao nao existe',400);
        }
        $obra = new Obra();
        $obra->fill($request->all());
        $obra->save();
        //retorna o json de 201, foi criado.
        return response()->json($obra,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function show(Obra $obra)
    {
        return response()->json($obra,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $obra)
    {
        $secao = Secao::where('id', $request->secao_id)->first();
        if($secao == null ){
            return response()->json('Secao nao existe',400);
        }
        // request é o body da requisição que tá chegando
        $dadosDaObra = $request->all();

        //atribui o nome/status a secao
        $obra->fill($dadosDaObra);

        //o save faz update/insert, mas e já existe, ele atualiza.
        $obra->save();

        //retorna o json de 200, foi atualizado.
        return response()->json($obra,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obra  $obra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        $obra->delete();
        return response()->noContent(204);
    }
}
