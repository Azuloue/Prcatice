<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。

//Post一覧を表示する
 
 //@param Post Poseモデル
 //@return array Postモデルリスト

public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
{
    return view('posts.index')->with(['posts' => $post->get()]);
    //blade内で使う変数'posts'と設定。'posts'の中身にgetを使いインスタンス化した$postを代入。
    //$postの中身を戻り値にする。
}
}