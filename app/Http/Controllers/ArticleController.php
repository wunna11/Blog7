<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //middleware
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index() {
        $data = Article::latest()->paginate(5);
        return view('articles.index', ['articles' => $data]);
    }

    function detail($id) {
        $data = Article::find($id);
        return view('articles.detail', ['article' => $data]);
        // $comment_data = Comment::find($id);
        // return view('articles.detail', ['article' => $data, 'comments' => $comment_data]);
    }

    function add() {
        $cat_data = Category::all();
        return view('articles.add', ['categories' => $cat_data]);
    }

    function create() {
        //validation
        $validator = validator(request()->all(), [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
        ]);
        
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        //save data to database
        $article = new Article();
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();
        
        return redirect()->route('articleList');
    }

    //edit article
    function edit($id) {
        $data = Article::find($id);
        $cat_data = Category::find($id);
        return view('articles.edit', ['article' => $data, 'categories' => $cat_data]);
    }

    //update article
    function update($id) {
        $data = Article::find($id);
        $data->title = request()->title;
        $data->body = request()->body;
        $data->category_id = request()->category_id;
        $data->update();

        return redirect()->route('articleList');
    }

    //delete article
    function delete($id) {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('articleList')->with('info', 'Article Deleted');
    }
}
