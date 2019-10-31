<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\shared\CategoriesMasterController;
use App\Http\Resources\CategoriesResource;

class CategoriesAPIController{

    public $masterController;

    public function __construct()
    {
        $this->masterController = new CategoriesMasterController();
    }

    public function index(){
        return new CategoriesResource( $this->masterController->index());
    }
}