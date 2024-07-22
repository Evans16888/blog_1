@extends('template')

@section('content')

<h1>Listado</h1>

@foreach( $posts as $post )
<p>
	<strong>{{ $post->id }}</strong>
	<a href="{{ route('post', $post['slug']) }}">
		{{ $post->title }}
	</a>
    <br>
    <small>{{ $post->created_at->diffForHumans() }}</small>
    <br>
    <span>{{ $post->user->name }}</span>

    <hr>
</p>
@endforeach
{{ $posts->links() }}
@endsection
