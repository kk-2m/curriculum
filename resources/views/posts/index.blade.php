<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Index') }}
		</h2>
	</x-slot>
	
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<h1>My Blog</h1>
					<a href="/posts/create">[create]</a>
					<div class='posts'>
						@foreach ($posts as $post)
							<div class='post'>
								<a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
								<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
								<p class='body'>{{ $post->body }}</p>
								<form action='/posts/{{ $post->id }}' id="form_{{ $post->id }}" method="post">
									@csrf
									@method('DELETE')
									<button type='button' onclick='deletePost({{ $post->id }})'>delete</button>
								</form>
							</div>
						@endforeach
					</div>
					<div class='paginate'>
						{{ $posts->links() }}
					</div>
					<script>
						function deletePost(id)
						{
							// 厳格モード
							'use strict'
							
							if (confirm('削除すると復元できません。\n本当に削除しますか？')){
								document.getElementById(`form_${id}`).submit();
							}
						}
					</script><br>
					<!-- ログインユーザーの表示 -->
					ログインユーザー：{{ Auth::user()->name }}
				</div>
			</div>
		</div>
	</div>
</x-app-layout>