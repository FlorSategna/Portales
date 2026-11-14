<x-layouts.main>
    <x-slot:title>Nuestras mochilas</x-slot:title>
    <section class="container">
        <div class="titulo-mochilas">
            <h1 class="text-center mb-0">Nuestras mochilas</h1>
            @if(session()->has('user_id'))
            <div class="mb-3">
                <a href="{{ route('bags.create') }}" class="btn btn-primary"> Crear una nueva mochila </a>
            </div>
            @endif
        </div>

        <div class="d-flex justify-content-end mb-4">
            <form method="GET" action="{{ route('bags.index') }}" class="d-flex">
                <select name="gender" id="gender" class="form-select me-2" >
                    <option value="Todas" {{ $selectedGender == 'Todas' ? 'selected' : '' }}>Todas</option>
                    <option value="Unisex" {{ $selectedGender == 'Unisex' ? 'selected' : '' }}>Unisex</option>
                    <option value="Mujer" {{ $selectedGender == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                    <option value="Hombre" {{ $selectedGender == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                </select>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>

                <div class="row"> 
                        @foreach($bags as $bag)
                            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                                <div class="card mx-auto h-100 d-flex flex-column">
                                    <img src="{{ url('img/' . $bag->photo) }}" class="card-img-top" alt="Foto de {{ $bag->name }}">
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h2 class="card-title">{{ $bag->name }}</h2>
                                            <p class="card-text"><strong>Categoría:</strong> {{ $bag->category }}</p>
                                            <p class="card-text">{{ $bag->description }}</p>
                                            <p class="card-text"><strong>Litraje:</strong> {{ $bag->liters }} lts.</p>
                                            <p class="card-text"><strong>Género:</strong> {{ $bag->gender }}</p>
                                        </div>
                                        <div class="card-footer mt-auto text-center">
                                            <p class="price text-bold fs-4 mb-3">${{ $bag->price }}</p>
                                            <div class="d-flex flex-column align-items-center">
                                                <a href="{{ route('bags.show', ['id' => $bag->bag_id]) }}" class="btn btn-primary mb-2 w-100">Ver mochila</a>
                                                @if(session()->has('user_id'))
                                                    <a href="{{ route('bags.edit', ['id' => $bag->bag_id]) }}" class="btn btn-secondary mb-2 w-100">Editar</a>
                                                    <a href="{{ route('bags.delete', ['id' => $bag->bag_id]) }}" class="btn btn-danger w-100">Eliminar</a>
                                                @endif
                                            </div>
                                        </div>
                                </div>
                            </div>
                    @endforeach
                </div>
    </section>
</x-layouts.main>