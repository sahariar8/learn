<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('post')->get();
        return view('post',compact('posts'));
    }

    public function edit()
    {
        return view('addPost');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Title'=> 'required|string',
            'Description'=> 'required|string',
        ]);

        DB::table('post')->insert([
            'Title'=>$request->Title,
            'Description'=>$request->Description,
        ]);
        return back()->with('success','Post Inserted SuccessFully');
    }
    public function destroy($id)
    {
        $data = DB::table('post')->where('Id',$id)->first();
        $data->delete();

    }
}
