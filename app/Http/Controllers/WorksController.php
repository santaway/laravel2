<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WorksController extends Controller

public function getIndex(){
	return 'works index';
	}
public function getOne($id=null,$id2=null){
	return 'work' .$id.'/',$id2;
	}

{
    //
}
