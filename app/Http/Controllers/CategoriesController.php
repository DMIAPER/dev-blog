<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = Category::orderBy('id','DESC')->paginate(5);

        return view('admin.categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.categories.create');
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
            'name' => 'required',
            'image'=> 'image|required',
            'descripcion'=>'required'
                        
           
        ]);

             //dd($request)//

              //manipulac//nes
        if($request->file('image')){
            $file = $request->file('image');
            $name ='imageName_' . time() . '.' .$file
            ->getClientOriginalExtension();
            $path = public_path() . '/images/articles/';
            $file->move($path,$name);


        } 


       $categories = new Category($request->all());
       $categories->image = $name;
       $categories->save();

       return redirect()->route('admin.categories.index')
                        ->with('success','La Categoria '.$request->name.' ha sido creada con éxito');
                        
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
          $category = Category::find($id);
        return view('admin.categories.edit')->with('category',$category);
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
        
        Category::find($id)->update($request->all());

        return redirect()->route('admin.categories.index')
        ->with('success','La Categoria ' . $request->name . ' se ha actualizado de forma exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $category = Category::find($id);
        $category->delete();
     
        return redirect()->route('admin.categories.index')->with('success','La Categoria '.$category->name.' a sido borrada de forma exitosa');
    }
}
