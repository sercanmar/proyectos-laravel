@section('content')
<h1>{{ $post->titulo }}</h1>
<p>{{ $post->contenido }}</p>
<a href="{{ route('posts.index') }}">Volver</a>
@endsection