<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; // App\ + name of model

class PostController extends Controller
{
    public function list(){
        $data['posts'] = Post::get();//get all posts in posts table
		// additional constraints can be implemented using query builder
        return view('listPosts',$data);
    }
    // model insert
    public function postCreationForm()
    {
    	return view('postCreationForm');
    }

     public function create(Request $request)
    {
        $title = $request->input('title');
    	$content = $request->input('content');

    	$credentials = [
    		'title' => $title,
            'content' => $content,
            
    	];

        if(Post::create($credentials)){
	        $data['message'] = 'Insert Succesfull';
        }else{
	        $data['message'] = 'Insert Failed';
        }
     
        return view('postCreationForm', $data);
    }
    // update model
    public function edit($postId)
    {
    	$data['post'] = Post::find($postId); //get post details
    	return view('postEditForm', $data);
    }
    public function update(Request $request,$postId)
    {
        $title = $request->input('title');
    	$content = $request->input('content');

    	$post = Post::find($postId);

    	// update post details
    	$post->title = $title;
    	$post->content = $content;

        if($post->save()){
	        $data['message'] = 'update Succesfull';
        }else{
	        $data['message'] = 'update Failed';
        }
        $data['post'] = $post;
     
        return view('postEditForm', $data);
    }
    // delete model
    	public function delete($postId)
    {
    	if (Post::find($postId)->delete()) {
    		$data['message'] = 'delete Succesfull';
        }else{
	        $data['message'] = 'delete Failed';
        }
        return view('deleteStatusPage', $data);
    }
}
