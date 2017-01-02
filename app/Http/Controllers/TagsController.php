<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Laracasts\Flash\Flash;
use App\Http\Requests\TagRequest;


class TagsController extends Controller
{
    public function index(Request $request){

        $tags = Tag::search($request->name)->orderBy('id', 'ASC')->paginate(5);
        return view ('admin.tags.index')->with('tags', $tags);

    }

    public function create(){

        return view('admin.tags.create');

    }

    public function store(TagRequest $request){
        $tag = new Tag($request->all());
        $tag->save();

        Flash::success("Se ha registrado el tag " . $tag->name . " de forma exitosa!");

        return redirect()->route('tags.index');
    }

    public function show($id){

    }

    public function edit($id){
        $tag = tag::Find($id);
        return view('admin.tags.edit')->with('tag', $tag);

    }

    public function update(TagRequest $request, $id){
        $tag = Tag::Find($id);
        $tag -> name = $request -> name;
        $tag -> save();
        Flash::warning("El tag ". $tag->name . " ha sido editado correctamente.");
        return redirect()->route('tags.index');
    }

    public function destroy($id){
        $tag = Tag::Find($id);
        $tag->delete();

        Flash::error("El usuario " . $tag->name . " ha sido borrado de forma exitosa!");

        return redirect()->route('tags.index');
    }
}
