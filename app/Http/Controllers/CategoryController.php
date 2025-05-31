<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    // getIndex
    public function getIndex(){
        return view('category/index');
    }

    // getShow
    public function getShow($id){
        return view('category/show', compact('id'));
    }

    // getCreate
    public function getCreate(){
        return view('category/create');
    }

    // getEdit
    public function getEdit($id){
        return view('category/edit', compact('id'));
    }
}
?>