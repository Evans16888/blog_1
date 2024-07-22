@extends('template')

@section('content')

<h1>Detalle</h1>
{{ $post->title }}
<p >
    {{$post->body}}
</p>
@endsection

