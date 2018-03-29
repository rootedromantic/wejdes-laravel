<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(){
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('create_at', 'desc')->paginate(10);
        return view('posts.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required',
            'body'  =>  'required',
            'cover_image'   =>  'image|nullable|max:1999',
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')){
            //Get file name with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$ext;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        //create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();
        
        return redirect('admin')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        if(!$post) {
            return redirect('/posts')->with('error','Post Not Found');
        }
        return view('posts.show')->with('post', $post);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        //Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Sorry, you can\'t do this.');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>  'required',
            'body'  =>  'required'
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')){
            //Get file name with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$ext;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        //create Post
        $post = Post::find($id);
        //Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Sorry, you can\'t do this.');
        }
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            Storage::delete('public/cover_images/' . $post->cover_image);
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/admin')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        //Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Sorry, you can\'t do this.');
        }

        if($post->cover_image != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
