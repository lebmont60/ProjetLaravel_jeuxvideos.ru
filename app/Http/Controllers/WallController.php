<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Searchable;

class WallController extends Controller
{
    public function show($search = false){
        $posts = Post::all();
        $value_search = DB::table('posts')->where('content', 'like', '%'.$search.'%')->get();
        dump($value_search);
        return view("show", ["search"=> $search, "posts"=>$posts, "results"=>$value_search]);
    }

    public function write(Request $request){
        $post = new Post;
        $post->content = $request->post_content;
        $post->author = Auth::id();

        $post->save();

        return redirect('wall');
    }
}
