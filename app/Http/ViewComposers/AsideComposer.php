<?php

namespace App\Http\ViewComposers;

//use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
//use Illuminate\View\View;
use App\Category;

class AsideComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::orderBy('name','desc')->get();
        $view->with('categories', $categories);
    }
 
}