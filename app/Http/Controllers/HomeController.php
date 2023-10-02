<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;

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

    public function index()
    {
        $collection = User::all();
        return view('home', compact('collection'));
    }
    public function edit($id){
        $allPermissions = Permission::all();
        $user = User::find($id);
        $userPermissions = $user->getAllPermissions()->pluck('name')->toArray(); // Get the names of user's permissions
    
        return view('edit', compact('allPermissions', 'userPermissions', 'user', 'id'));
    }
    
    public function update(Request $request, $id){
        
    }
    
}
