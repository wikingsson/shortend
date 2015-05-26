<?php

class HomeController extends BaseController {

    //Index action that takes us to our home view
	public function index()
	{
		return View::make('home');
	}

}
