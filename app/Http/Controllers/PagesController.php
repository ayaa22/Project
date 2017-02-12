<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Collection;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}

 	public function getDashboard() {

        return view('pages.dashboard');
     }

    public function getHomepage() {

        return view('pages.welcome');
     }

    public function getHome() {

     	return view('pages.home');
     }

     public function getAbout() {

     	return view('pages.about');
     }

	
}