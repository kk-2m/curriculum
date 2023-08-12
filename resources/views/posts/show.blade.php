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
		<title>blog</title>
	</head>
	<body class="antialiased">
		<h1 class='title'>
			{{ $post->title }}
		</h1>
		<div class='content'>
			<div class='content_post'>
				<h3>本文</h3>
				<p class='body'>{{ $post->body }}</p>
			</div>
		</div>
		<div calss='edit'>
			<a href="/posts/{{ $post->id }}/edit">edit</a>
		</div>
		<div class='footer'>
			<a href="/">back</a>
		</div>
	<body>
</html>
