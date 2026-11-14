<x-layouts.main>
    <x-slot:title>{{ $post->title }}</x-slot:title>
    <section class="container">
        <div class="titulo-post">
            <h1 class="text-center mb-4">{{ $post->title }}</h1>
            <p class="text-muted mb-2"><span class="badge rounded-pill tag-chip">{{ $post->tag }}</span> · {{ $post->category }} · {{ $post->format_date }}</p>
        </div>

        <div class="contenido-post mt-4">
            <p>{{ $post->content }}</p>
        </div>

        <div class="acciones mt-4 d-flex justify-content-end gap-2">
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Volver al blog</a>
            @if(session()->has('user_id'))
                <a href="{{ route('posts.edit', ['id' => $post->post_id]) }}" class="btn btn-secondary">Editar</a>
                <a href="{{ route('posts.delete', ['id' => $post->post_id]) }}" class="btn btn-danger">Eliminar</a>
            @endif
        </div>
    </section>
</x-layouts.main>