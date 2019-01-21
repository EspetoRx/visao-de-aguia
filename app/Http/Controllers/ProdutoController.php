<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $armazenamento = Storage::disk('gcs');
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descrição' => 'required',
        ]);

        if($request->hasFile('imagem')&&$request->file('imagem')->isValid()){
            $imagem = $request->imagem;
            $name = 'produto'.time().'.'.$imagem->getClientOriginalExtension();
            $upload = $armazenamento->putFileAs('produto/', $imagem, $name, ['visibility' => 'public']);
            $fullURL = 'produto/'.$name;
        }

        $produto = new Produto;
        $produto->titulo = $request->titulo;
        $produto->descricao = $request->descrição;
        $produto->foto = $fullURL;
        $produto->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $armazenamento = Storage::disk('gcs');
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descrição' => 'required',
        ]);

        if($request->hasFile('imagem')&&$request->file('imagem')->isValid()){
            $imagem = $request->imagem;
            $name = 'produto'.time().'.'.$imagem->getClientOriginalExtension();
            $upload = $armazenamento->putFileAs('produto/', $imagem, $name, ['visibility' => 'public']);
            $fullURL = 'produto/'.$name;
        }

        $produto = Produto::find($id);
        $produto->titulo = $request->titulo;
        $produto->descricao = $request->descrição;
        $produto->foto = $fullURL;
        $produto->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($produto)
    {
        //
        $produto = Produto::find($produto);
        $produto->delete();
        return redirect('/home');
    }
}
