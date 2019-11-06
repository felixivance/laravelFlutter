<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoriesResource;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

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
    public function show($id){
        return view( 'categories.category')->with(
            [
                'category' => Category::findOrFail($id)
            ]
        );
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'color' => 'required'
        ]);

        $category = new Category();

        $category->title = $request->get('title');
        $category-> color = $request-> get('color');

       try{
           $category->save();
       }catch (\Exception $ex){
           return $ex->getMessage();
       }

        return redirect()->back()->with('message','Category Created');

    }
}
