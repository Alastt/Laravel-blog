<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){

    }

    public function create(){

        return view('admin.users.create');

    }

    public function store(Request $request){
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
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
