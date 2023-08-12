<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- 文字コードの指定 -->
		<meta charset="UTF-8">
		<!-- IE=edge の指定によりIEでは最新の環境で表される -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- width=device-width : 表示領域の幅をPCやスマホ等の端末画面の幅に合わせられる -->
		<!-- initial-scale=1.0 : 初期のズーム倍率が1.0倍になる -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Blog</title>
	</head>
	<body>
		<h1>Blog Name</h1>
		<a href="/posts/create">[create]</a>
		<div class='posts'>
			@foreach ($posts as $post)
				<div class='post'>
					<a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
					<p class='body'>{{ $post->body }}</p>
				</div>
			@endforeach
		</div>
		<div class='paginate'>
			{{ $posts->links() }}
		</div>
	<body>
</html>
