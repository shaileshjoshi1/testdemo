<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
	
	
	public function dashboard()
    {
		
    	$users = User::all();
		
		$users = User::latest()->paginate(5);
    
        return view('admin.dashboard',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
		
     // return view('admin.dashboard',compact('users'));
    }
	
	
	
	
	
	
	public function edit(Request $request,User $user)
    {
		

$user = $user->find($request->id);
        return view('admin.edit', compact('user'));
    }
	
	
	
	public function update(Request $request)
	{
		$request->validate([
            'name' => 'required',
            
        ]);
        
		$user = User::find($request['id']);
		 $user->name = $request['name'];
        
        $user->save();
        return redirect()->to('admin/home')
            ->with('success', 'User updated successfully');
		
		
	}
	
	
	
}
