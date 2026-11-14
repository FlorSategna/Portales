<x-layouts.main>
    <x-slot:title>Eliminar post</x-slot:title>
    <div class="container">
        <div class="row justify-content-center">

            <h1 class="text-center my-5">¿Estás seguro que deseás eliminar este post?</h1>

            <div class="card-detalle col-12 col-md-10 p-4 rounded-4 shadow-sm">
                <div class="row g-4">

                    <div class="col-md-12">
                        <h2 class="card-title fw-semibold mb-3">{{ $post->title }}</h2>
                        <p class="text-muted mb-2"><span class="badge rounded-pill tag-chip">{{ $post->tag }}</span> · {{ $post->category }} · {{ $post->format_date }}</p>

                        <p class="mb-3">{{ $post->content }}</p>

                        <div class="card-footer mt-auto">
                            <form action="{{ route('posts.destroy', ['id' => $post->post_id]) }}" method="post">
                                <button type="submit" class="btn btn-danger">Eliminar post</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.main>