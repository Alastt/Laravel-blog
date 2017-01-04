<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Laracasts\Flash\Flash;
class ArticlesController extends Controller
{
    public function index(){

        return view('admin.articles.index');

    }

    public function create(){

        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags=Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        return view ('admin.articles.create')
            ->with('categories', $categories)
            ->with('tags', $tags);

    }

    public function store(Request $request){

        //Manipulación de imágenes.
        if ($request->file('image')){
        $file = $request->file('image');
        $name = 'blog_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/articles/';
        $file -> move($path, $name);
        }

        $article = new Article($request->all());
        $article -> user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync( (array) $request->tags);

        $image = new Image();
        $image -> name = $name;
        $image->article()->associate($article);
        $image -> save();

        Flash::success('Se ha creado el articulo ' . $article->title . ' de forma satisfactoria.');

        return redirect()->route('articles.index');

    }

    public function show($id){

    }

    public function edit($id){
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
