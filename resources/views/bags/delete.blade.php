<x-layouts.main>
    <x-slot:title>Eliminar mochila</x-slot:title>
        <div class="container">
        <div class="row justify-content-center">

            <h1 class="text-center my-5">¿Estás seguro que deseás eliminar esta mochila?</h1>

            <div class="card-detalle col-12 col-md-10 p-4 rounded-4 shadow-sm">
                <div class="row align-items-center g-4">
                    
                    <div class="col-md-6 text-center">
                        <img src="{{ url('img/' . $bag->photo) }}" 
                                alt="Foto de {{ $bag->name }}" 
                                class="img-fluid rounded-4 detalle-img">
                    </div>

                    <div class="col-md-6">

                        <h2 class="card-title fw-semibold mb-3">{{ $bag->name }}</h2>
                        <p class="mb-3">{{ $bag->description }}</p>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Categoría:</strong> {{ $bag->category }}</li>
                            <li><strong>Litraje:</strong> {{ $bag->liters }} lts.</li>
                            <li><strong>Género:</strong> {{ $bag->gender }}</li>
                        </ul>

                        <div class="card-footer mt-auto">
                            <p class="price text-bold fs-4 mb-2">${{ $bag->price }}</p>

                            <form action="{{ route('bags.destroy', ['id' => $bag->bag_id]) }}" method="post">
                                <button type="submit" class="btn btn-danger">Eliminar mochila</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>