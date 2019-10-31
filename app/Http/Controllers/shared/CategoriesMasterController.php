<?php

namespace App\Http\Controllers\shared;


use App\Category;
use App\Http\Resources\CategoriesResource;

class CategoriesMasterController {
    public function index(){
        return new CategoriesResource( Category::paginate());
    }
}
