<x-layouts.main>
    <x-slot:title>{{ $bag->name }}</x-slot:title>

    <section class="container">
        <div class="row justify-content-center">
            <h1 class="text-center my-5">Detalle de <span class="titulo-detalle">{{ $bag->name }}</span></h1>
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

                                    <div class="detalle-acciones mt-3">
                                        <div class="detalle-botones-mochilas mt-4 d-flex gap-2">
                                            <a href="<?= route('bags.index');?>" class="btn btn-primary">Volver a la tienda</a>
                                        @if(session()->has('user_id'))
                                            <a href="{{ route('bags.edit', ['id' => $bag->bag_id]) }}" class="btn btn-secondary">Editar</a>
                                            <a href="{{ route('bags.delete', ['id' => $bag->bag_id]) }}" class="btn btn-danger">Eliminar</a>
                                        @endif
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                </div>            
        </div>
    </section>
</x-layouts.main>