<?php

class UsersController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $users = User::all();

//    $user = new User;    
//    $user->username = 'Mehedi';
//    $user->password = Hash::make('123456');
//    $user->save();

        return View::make('users.index', ['users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return View::make('users.show', ['user' => $user]);
       
    }

}
