<?php

namespace App\Http\Controllers;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'role:admin'])->only(['post', 'edit/update']);
    }
    public function post(Request $request){
        Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->back();
    }
}
