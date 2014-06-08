<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
//	return View::make('hello');
        return View::make('index');
});

Route::post('/login', function()
{
    // User details will come now, handle with care
    $userData   =   Input::get('userdata');
    
    // Check if the user exists in db
    $userCount  =   User::whereFbid($userData['id'])->count();
    if($userCount === 0){
        // New user insert
        $user = new User;
        $user->fbid   =   $userData['id'];
        $user->name   =   $userData['name'];
        $user->save();
    }
    
    return $userCount;
});

Route::get('/checkconn', function()
{
    if(DB::connection()->getDatabaseName())
    {
       return "conncted sucessfully to database ".DB::connection()->getDatabaseName();
    }
    else{
            return "Not connected";
    }
});

