<?php

class PagesController{
	public function home(){
		


		
		return view('index');
	}
	public function about(){
		$company='HD';
		return view('about',['company'=>$company]);
	}
	public function contact(){
		return view('contact');
	}
	public function aboutCulture(){
		$name='HDcat';
	return view('about-culture');
	}
}