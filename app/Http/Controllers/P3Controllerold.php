<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;
use P3\Http\Requests\UserFormRequest;
use P3\Http\Requests\LoremFormRequest;

class P3Controller extends Controller
{
public function index()
{
	return view('index');
}

 public function userstore(UserFormRequest $request)
{

 //return \Redirect::route('contact');
  $users = $request->input('users');
    return view('store.userstore')->with('users', $users);
 
 }

 public function loremstore(LoremFormRequest $request)
{

 //return \Redirect::route('contact');
  $paragraph = $request->input('paragraph');
    return view('store.loremstore')->with('paragraph', $paragraph);
 
 }
}
