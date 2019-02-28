<?php

namespace App\Http\Controllers;

use Couchbase\RegexpSearchQuery;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;

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

        $posts=Post::with('user')
           ->join('users','users.id','posts.author')
            ->orderBy('posts.created_at','desc')
            ->select('posts.*','users.id as userid','users.name','users.picture')->get();


        return view('posts/index',['posts'=>$posts]);
    }
    public function getPostDetails($id){
       $post=Post::with('user')->where('posts.id',$id)
           ->join('users','users.id','posts.author')
           ->first();



       return view('posts/post_details',['post'=>$post]);
    }
    public function getForm()
    {
        return view('posts/post_form');
    }
    public function insert(Request $request){
        $userid=Auth::id();

        //validation
$this->validate($request,[
    'title'=>'required',
    'description'=>'required'
]);
$request['author']=$userid;
        $post_data=$request->all();
        Post::create($post_data);

        return redirect()->route('home');
    }
    public function edit($id){
       $post= Post::find($id);
       return view('posts\edit_form',['post'=>$post]);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required' ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('home')->with('success', 'Post has been updated successfully!');
    }
    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Post has been deleted successfully!');
    }

}
