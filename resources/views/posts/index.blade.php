@section('content')
<h1>Lista de Posts</h1>

@foreach ($posts as $post)
    <p>{{ $post->titulo }} ({{ $post->usuario->login }})</p>
    <a href="{{ route('posts.show', $post->id) }}">Ver</a>
@endforeach

{{ $posts->links() }}
@endsection