<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index() {
        $data = Article::latest()->paginate(5);
        return view('articles.index', ['articles' => $data]);
    }

    function detail($id) {
        $data = Article::find($id);
        return view('articles.detail', ['article' => $data]);
    }

    function add() {
        $data = [
            [ "id" => 1, "name" => "News" ],
             [ "id" => 2, "name" => "Tech" ],

        ];
        return view('articles.add', ['article' => $data]);
    }
}
