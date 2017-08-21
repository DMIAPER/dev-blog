<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;

class FrontController extends Controller{
    public function __construct(){

		Carbon::setLocale('es');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $categories = Category::orderBy('id','DESC')->get();
        $articles = Article::orderBy('id','DESC')->paginate(4);
        $tags = Tag::orderBy('id','DESC')->get();
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->images;
    	});

        return view('front.home')
        ->with('articles',$articles)
        ->with('categories',$categories)
        ->with('tags',$tags);

    }

    public function all(Request $request){
         $categories = Category::orderBy('id','DESC')->get();
         $tags = Tag::orderBy('id','DESC')->get();

         $articles = Article::where('title', 'like', '%'.$request->title.'%')
             ->orderBy('id','DESC')->paginate(5);

         $articles->each(function($articles){
             $articles->Category;
             $articles->user;
       });

        //dd($categories->image);
        return view('front.template.partials.cursos')
            ->with('articles',$articles)
            ->with('categories',$categories)
            ->with('tags',$tags);
    }

    //visualizar pagina videos
    public function videos(Request $request){

        $categories = Category::orderBy('id','DESC')->get();
        $tags = Tag::orderBy('id','DESC')->get();
        $articles = Article::where('title', 'like', '%'.$request->title.'%')
            ->orderBy('id','DESC')->paginate(5);
        $articles->each(function($articles){
            $articles->Category;
            $articles->user;
       });

        //dd($categories->image);
        return view('front.template.partials.videos')
            ->with('articles',$articles)
            ->with('categories',$categories)
            ->with('tags',$tags);
    }

    //visualizar pagina sobre nosotros
    public function sobreNosotros(Request $request){

        $tags = Tag::orderBy('id','DESC')->get();

        return view('front.template.partials.quien')
            ->with('tags',$tags);
    }

    //visualiza pagina desarrolloweb
    public function desarrollo(Request $request){

        $tags = Tag::orderBy('id','DESC')->get();

        return view('front.template.partials.desarrollo')
            ->with('tags',$tags);
    }

    //visualizar pagina sobre contacto
    public function contacto(Request $request){

        $tags = Tag::orderBy('id','DESC')->get();

        return view('front.template.partials.contacto')
            ->with('tags',$tags);
    }

    //visualizar pagina politicas
    public function politicas(Request $request){

        $tags = Tag::orderBy('id','DESC')->get();

        return view('front.template.partials.politicas')
            ->with('tags',$tags);
    }

    public function searchCategory($name){

        $categories = Category::orderBy('id','DESC')->get();
        $tags = Tag::orderBy('id','DESC')->get();
        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
        $articles->each(function($articles){
                $articles->category;
                $articles->images;
        });

        return view('front.home')
            ->with('articles',$articles)
            ->with('categories',$categories)
            ->with('tags',$tags);
    }

    public function searchTag($name){

         $categories = Category::orderBy('id','DESC')->get();
         $articles = Article::orderBy('id','DESC')->get();
         $tags = Tag::orderBy('id','DESC')->get();
         $tag = Tag::SearchTag($name)->first();
         $articles = $tag->articles()->paginate(4);
         $articles->each(function($articles){
             $articles->category;
             $articles->images;
         });

         return view('front.home')
            ->with('articles',$articles)
            ->with('categories',$categories)
            ->with('tags',$tags);
    }

    public function viewArticle($slug){

        $article = Article::where('slug', $slug)->firstOrFail();
        $categories = Category::orderBy('id','DESC')->get();
        $tags = Tag::orderBy('id','DESC')->get();

        $article->category;
        $article->user;
        $article->tags;
        $article->images;

        return view('front.template.partials.article')
            ->with('article',$article)
            ->with('categories',$categories)
            ->with('tags',$tags);

    }


}