<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(1)]); 
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
       //getByLimit()で()内にある数だけデータを読み込むようにする
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    public function create(Post $post)
    {
        return view('posts.create')-> with(['post'=> $post]);
    }//create関数からcreate.blade.phpを呼び出し
    public function store(Post $post){
        return view('posts.store')-> with(['post'=> $post]);
    }
}
?>