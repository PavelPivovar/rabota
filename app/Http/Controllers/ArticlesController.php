<?php

namespace App\Http\Controllers;
use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Form;

class ArticlesController extends Controller
{

    public function index(){
        $articles = Article::latest('created_at')->created()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id){
        $article = Article::find($id);

        if (is_null($article)){
            abort(404);
        }

        return view('articles.show', ['article'=>  $article]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){

        $this->validate($request, ['title' => 'required', 'body' => 'required']);
        Article::create($request->all());

        return redirect('article');
    }

    public function edit($id){

        $article = Article::findOrFail($id);

        return view('articles.edit', ['article'=>  $article]);
    }

    public function update($id, Request $request){
        $this->validate($request, ['title' => 'required', 'body' => 'required']);
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('article');
    }
}
