<x-layouts.main>
    <x-slot:title>Blog</x-slot:title>
    <section class="container">
        <div class="titulo-posts">
            <h1 class="text-center mb-0">Blog</h1>
            @if(session()->has('user_id'))
            <div class="mb-3">
                <a href="{{ route('posts.create') }}" class="btn btn-primary"> Crear un nuevo post </a>
            </div>
            @endif
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                @foreach($posts as $post)
                    <article class="mb-5 pb-5 border-bottom">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <p class="text-muted mb-2"><span class="badge rounded-pill tag-chip">{{ $post->tag }}</span> · {{ $post->category }} · {{ $post->format_date }}</p>
                        <p>{{ \Illuminate\Support\Str::limit($post->content, 200) }}</p>
                        <div class="mt-2 d-flex gap-2">
                        <a href="{{ route('posts.show', ['id' => $post->post_id]) }}" class="btn btn-primary">Leer más</a>
                            @if(session()->has('user_id'))
                                    <a href="{{ route('posts.edit', ['id' => $post->post_id]) }}" class="btn btn-secondary">Editar</a>
                                    <a href="{{ route('posts.delete', ['id' => $post->post_id]) }}" class="btn btn-danger">Eliminar</a>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.main>
