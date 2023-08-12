<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
	<body class="antialiased">
		<h1>Blog Name</h1>
		<!-- POST型のリクエストで/possのURIに混ぜてデータを送信 -->
		<form action="/posts" method="POST">
			<!-- 他のサイトからのリクエストを許容しない -->
			@csrf
			<div class="title">
				<h2>title</h2>
				<!-- 改行ができない -->
				<!-- post配列にタイトルを格納 -->
				<input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}"/>
				<p class="title_error" style="color:red">{{ $errors->first('post.title') }}</title>
			</div>
			<div class="body">
				<h2>Body</h2>
				<!-- 改行可能 -->
				<!-- post配列にbodyを格納 -->
				<textarea name="post[body]" placeholder="今日も１日お疲れ様でした。">{{ old('post.body') }}</textarea><br>
				<p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
			</div>
			<input type="submit" value="store"/>
		</form>
		<div class='footer'>
			<a href="/">[back]</a>
		</div>
	</body>
</html>
