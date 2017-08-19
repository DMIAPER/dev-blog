<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;

class ImagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $images = Image::all();
         $images = Image::paginate(6);

         //recorre las imagenes para ostrar el nombre del articulo al que pretenece cada imagen
         $images->each(function($images){
         	$images->article;
         });

     
        return view('admin.images.index')->with('images',$images);
    }
}
