<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class Testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        //
        //dd($id);
        $article=Article::find($id);//encuentra el id que el usuario quiera
       /*$article->each(function($article){
        esta funcion cuando tienes muchos registros
       })*/
        $article->category;//haces relaciones con category para que muestre la categoria 
        $article->user;//muestra los usuarios que crearon esa usuarios
        $article->tags;
        //dd($article);
        return view('text.index',['article'=>$article]);
    }

   
}
