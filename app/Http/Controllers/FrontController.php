<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Image;
use Cohensive\Embed\Facades\Embed;
class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
	  
        return view('home');
    }

    
}
