<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $approved = Blog::where('status', 1)->get();

        $pending = Blog::where('status', 0)->get();
        $usersList = User::all();

        return view('admin.index', ['pending' => $pending, 'approved' => $approved, 'usersList' => $usersList]);
    }

    public function update(Request $request, $id)
    {
        Blog::find($id)->update(['status' => true]);
        // dd($blog->update(['status' => true]));
        return redirect('/blog/' . $id);
    }
}
