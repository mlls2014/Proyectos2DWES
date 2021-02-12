<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{
   const url = 'https://jsonplaceholder.typicode.com/posts';

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $response = Http::get(self::url);

      if ($response->ok()) {
         $posts = $response->json();
         return view('post.index', compact('posts'));
      }
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $post = [
         'title' => "",
         'body' =>  ""
      ];
      return view('post.create',compact('post'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      // Validación sencilla
      $validatedData = $request->validate([
         'title' => 'required|between:5,255',
         'body' => 'required|regex:/^[a-zñA-ZÑ][\w\n\r\s]*$/',
      ]);

      $post = [
         'title' => $request->title,
         'body' =>  $request->body,
         'userId' => 1   // Por poner uno de prueba
      ];

      $response = Http::post(self::url, $post);

      return $response->body() .
         '</br>' .
         $response->status() .
         '</br>' .
         '<a href=' . route('post.index') . '>Volver al listado</a>';
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $response = Http::get(self::url . "/$id");
      $post = $response->json();
      return view('post.show', compact('post'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      $response = Http::get(self::url . "/$id");
      $post = $response->json();

      return view('post.edit', compact('post'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      // Validación sencilla
      $validatedData = $request->validate([
         'title' => 'required|between:5,255',
         'body' => 'required|regex:/^[a-zñA-ZÑ][\w\n\r\s]*$/',
      ]);

      $post = [
         'id' => $id,
         'title' => $request->title,
         'body' =>  $request->body,
         'userId' => 1   // Por poner uno de prueba
      ];

      $response = Http::put(self::url . "/$id", $post);
     
      return $response->body() .
         '</br>' .
         $response->status() .
         '</br>' .
         '<a href=' . route('post.index') . '>Volver al listado</a>';
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $response = Http::delete(self::url . "/$id");
      return $response->body() .
         '</br>' .
         $response->status() .
         '</br>' .
         '<a href=' . route('post.index') . '>Volver al listado</a>';
   }
}
