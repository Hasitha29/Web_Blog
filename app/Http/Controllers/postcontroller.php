<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postcontroller extends Controller
{
    public function store(Request $request){

        $validator = validator::make($request->all(),[
            'title'=> 'required',
            'description' => 'required',
            'thumbnail' => 'required|image'
        ]);

        if($validator->fails()){
            return back()->with('status','Something Wrong!');
        } else {
            $imageName = time() . "." . $request->thumbnail->extension();

            $request->thumbnail->move(public_path('thumbnails'), $imageName);

            post::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'thumbnail' => $imageName
        ]);

         }

        return redirect(route('post.all'))->with('status','Post Created Successfully!');
    }

    public function show($postId){
        $post = post::findOrFail($postId);
        return view('posts.show', compact('post'));

    }
    public function edit($postId){
        $post = post::findOrFail($postId);
        return view('posts.edit', compact('post'));

    }
    public function update($postId, Request $request){
        post::findorFail($postId)->update($request->all());
        return redirect(route('post.all'))->with('status','Post Updated');
    }

    public function delete($postId){
        post::findOrFail($postId)->delete();
        return redirect(route('post.all'));


    }
}
