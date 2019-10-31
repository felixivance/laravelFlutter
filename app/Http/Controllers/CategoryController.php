<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoriesResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
//    'categories'=> new CategoriesResource( Category::paginate())
    public function index(){
        return view('categories.categories')->with(
            [
                'categories' => Category::all()
            ]
        );
    }
}
