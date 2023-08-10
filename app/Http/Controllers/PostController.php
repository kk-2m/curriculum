<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
	public function index(Post $post)
	{
		// viewインスタンスのwithメソッドを使い、viewに値を渡す
		// blade内で使う変数を'posts'と設定
		// 'posts'の中身にgetを使い、インスタンス化した$postを代入
		return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
		
	}
	
	public function show($post)
	{
		return view('posts.show')->with(['post' => $post]);
	}
}
?>