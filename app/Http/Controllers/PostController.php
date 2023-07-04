<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
}
?>
=======
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(Post $post)//インポートしたPostをインスタンス化して$Postとして使用
    {
	    return $post->get(); //$postの中身を戻り値にする
    }
}

>>>>>>> master
