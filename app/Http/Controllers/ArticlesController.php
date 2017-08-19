<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


       $articles = Article::where('title', 'like', '%'.$request->title.'%')
       ->orderBy('id','DESC')->paginate(5);
       $articles->each(function($articles){
        $articles->Category;
        $articles->user;
       });
        return view('admin.articles.index')
        ->with('articles',$articles);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::orderBy('name','ASC')
        ->pluck('name','id')
        ->prepend('Introduce el nombre de la Categoria','');
      //  dd($categories);
        $tags = Tag::orderBy('name','ASC')
         ->pluck('name','id');
        //->prepend('Introduce el nombre del Tag','');

        return view('admin.articles.create')
        ->with('categories',$categories)
        ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
             $this->validate($request, [
            'title' => 'required|unique:articles', 
            'category_id' => 'required',
            'content' => 'required|min:60',
            'image' => 'image|required',   
            'idVideo' => 'required|unique:articles', 
      
        ]);

        //manipulación de imagenes
        if($request->file('image')){
            $file = $request->file('image');
            $name ='imageName_' . time() . '.' .$file
            ->getClientOriginalExtension();
            $path = public_path() . '/images/articles/';
          //  dd($path);
            $file->move($path,$name);
        }
  
       $article = new Article($request->all());
       $article->user_id = \Auth::user()->id;
       $article->save();
       
       //rellena la tabla pivote article_tag
       $article->tags()->sync($request->tags);



       $image = new Image();
       $image->name = $name;
       $image->article()->associate($article);
       $image->save();
    

   return redirect()->route('admin.articles.index')
   ->with('success', 'Artículo añadido!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->Category;
        $categories = Category::orderBy('name','DESC')
         ->pluck('name','id');
        $tags = Tag::orderBy('name','DESC')
         ->pluck('name','id');

         // Trae los tags para editarlos
         $my_tags = $article->tags->pluck('id')->ToArray();
        // dd($my_tags);




        return view('admin.articles.edit')
        ->with('categories',$categories)
            ->with('article',$article)
                ->with('tags',$tags)
                   ->with('my_tags',$my_tags);


   
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
      $article = Article::find($id);
      $article->fill($request->all());
      $article->save();

      $article->tags()->sync($request->tags);

     
        return redirect()->route('admin.articles.index')
        ->with('success','El Artículo ' . $request->title . ' se ha actualizado de forma exitosa');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $article = Article::find($id);
        $article->delete();
     
        return redirect()->route('admin.articles.index')
        ->with('success','El Artículo '.$article->title.' a sido borrado de forma exitosa');
  
    }
}
