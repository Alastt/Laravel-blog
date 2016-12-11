<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'ASC')->paginate(5);
        return view ('admin.categories.index')->with('categories', $categories);
    }

    public function create(){

        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request){
        $category = new Category($request->all());
        $category->save();

        Flash::success("Se ha registrado la categoría " . $category->name . " de forma exitosa!");

        return redirect()->route('categories.index');
    }

    public function show($id){

    }

    public function edit($id){
        $category = Category::Find($id);
        return view('admin.categories.edit')->with('category', $category);
    }

    public function update(CategoryRequest $request, $id){
        $category = Category::Find($id);
        $category -> name = $request -> name;
        $category -> save();
        Flash::warning("La categoría ". $category->name . " ha sido editada correctamente.");
        return redirect()->route('categories.index');
    }

    public function destroy($id){
        $category = Category::Find($id);
        $category->delete();

        Flash::error("La categoría " . $category->name . " ha sido borrada de forma exitosa!");

        return redirect()->route('categories.index');
    }
}
