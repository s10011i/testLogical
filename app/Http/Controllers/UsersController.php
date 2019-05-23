<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller{
    public function show(){
    	$content = 'http://jsonplaceholder.typicode.com/users';

		$users = json_decode(file_get_contents($content), true);

    	return view('pages/show', compact('users'));

    }
    public function getdetails($id){
    	$content = 'http://jsonplaceholder.typicode.com/users';

		$users = json_decode(file_get_contents($content), true);

    	return view('pages/details', compact('users', 'id'));

    }

}
