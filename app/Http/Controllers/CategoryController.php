<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function add() {
        return view('categories.add');
    }

    //create
    function create() {
        $validator = validator(request()->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        //save data to database
        $category = new Category();
        $category->name = request()->name;
        $category->save();

        return redirect()->route('articleList');
    }
}
