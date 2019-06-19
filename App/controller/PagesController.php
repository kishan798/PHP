<?php 
namespace App\Controller;

class PagesController
{
	public function home()
	{
		
	
	return view('strike');




	}
	public function about()
	{
		$company = 'Laracasts';


		return view('about', ['company'=> $company]);


	}
	public function contact()
	{

		return view('contact');


	}






}