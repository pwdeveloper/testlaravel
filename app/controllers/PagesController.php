<?php

class PagesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home() {
		
		$peter = "peter";
		return View::make('controllertest')->with('peter',$peter);
	}
	public function about() {
		
		$peter = "melk";
		return View::make('controllertest')->with('peter',$peter);
	}
    public function bladetest() {
        
        $peter = "bladetest";
        return View::make('bladetest')->with('peter',$peter);   
    }
    
    public function eloquenttest() {
        
        $users = User::all();
        $peter = "eloquenttest";
        
        return View::make('eloquenttest')->with('users',$users)->with('peter',$peter);
        
    }

}
