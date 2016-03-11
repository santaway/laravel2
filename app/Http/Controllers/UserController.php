<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller

public function index($id=null){
	return 'user' .$id;
};
public function getIndex(){
	return 'works index'
};
public function getOne(){
	return 'works index'
}
{
    //
}
